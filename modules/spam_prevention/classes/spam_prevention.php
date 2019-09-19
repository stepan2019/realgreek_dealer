<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class spam_prevention {

	var $table;
	var $log_table;
	var $no_logs;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."spam_prevention";
		$this->log_table = $config_table_prefix."spam_prevention_log";
		$this->error = array();
		$this->info = '';
		$this->no_logs = 0;
		$this->error=null; 
		$this->ABIPConfidence='';
		$this->SFSIPConfidence='';
		$this->SFSEmailConfidence='';
		$this->SFSIPSpam=0;
		$this->ABIPSpam=0;
		$this->SFSEmailSpam=0;
	}

	function setInfo($str){

		$this->info = $str;

	}
	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function getInfo() {

		return $this->info;

	}

	function checkSettings() {
	
		global $lng_sp;
		if(checkbox_value("use_abip") && (!isset($_POST["abip_api_key"]) || !$_POST["abip_api_key"])) 
			$this->addError($lng_sp['error']['api_key'].'<br />');
	}
	
	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		$this->checkSettings();
		if($this->getError()!='') return 0;
		
		global $db;
		$this->clean=array();

		$str_update = '';

		$array_checkboxes = array("check_registration", "check_contact_forms", "check_comments", "check_reviews", "sfs_block_tor_ips", "sfs_block_networks", "add_waiting_time", "use_sfs", "use_abip");

		foreach ($array_checkboxes as $field) {

			$this->clean[$field] = checkbox_value($field);
			$str_update.=" `$field` = '".$this->clean[$field]."', ";
		}

		if(isset($_POST["sfs_block_limit"]) && is_numeric($_POST["sfs_block_limit"]) && $_POST["sfs_block_limit"]>0 && $_POST["sfs_block_limit"]<=100) $this->clean["sfs_block_limit"]=$_POST["sfs_block_limit"]; else $this->clean["sfs_block_limit"]=50;
		$str_update.=" `sfs_block_limit` = '".$this->clean["sfs_block_limit"]."', ";

		if(isset($_POST["abip_block_limit"]) && is_numeric($_POST["abip_block_limit"]) && $_POST["abip_block_limit"]>0 && $_POST["abip_block_limit"]<=100) $this->clean["abip_block_limit"]=$_POST["abip_block_limit"]; else $this->clean["abip_block_limit"]=50;
		$str_update.=" `abip_block_limit` = '".$this->clean["abip_block_limit"]."', ";

		if(isset($_POST["abip_api_key"]) && $_POST["abip_api_key"]) $this->clean["abip_api_key"]=$_POST["abip_api_key"];
		$str_update.=" `abip_api_key` = '".$this->clean["abip_api_key"]."', ";

		if(isset($_POST["block_for"]) && is_numeric($_POST["block_for"]) && $_POST["block_for"]>0) $this->clean["block_for"]=$_POST["block_for"]; else $this->clean["block_for"]=60;
		$str_update.=" `block_for` = '".$this->clean["block_for"]."'";

		if(isset($_POST["waiting_time"]) && is_numeric($_POST["waiting_time"]) && $_POST["waiting_time"]>0) $this->clean["waiting_time"]=$_POST["waiting_time"]; else $this->clean["waiting_time"]=10;
		$str_update.=", `waiting_time` = '".$this->clean["waiting_time"]."'";

		if(isset($_POST['choose_group']) && $_POST['choose_group']=="choose")
		{
			$this->clean['waiting_groups']='';
			$i=0;
			while (isset($_POST['waiting_groups'][$i])){
				$group=escape($_POST['waiting_groups'][$i]);
				if($i) $this->clean['waiting_groups'].=',';
				$this->clean['waiting_groups'].=$group;
				$i++;
			}
		} else $this->clean['waiting_groups']='0';
		$str_update.=", `waiting_groups` = '".$this->clean["waiting_groups"]."'";
		
		$db->query("update ".$this->table." set ".$str_update);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_spam_prevention");
		
		return 1;

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		global $crt_lang;
		if($overwrite || !$sp_settings = $lc_cache->readCache("mod_spam_prevention", $crt_lang)) {

			global $db;
			$sp_settings = $db->fetchAssoc("select * from ".$this->table);
			$sp_settings['waiting_groups_array'] = explode(",", $sp_settings['waiting_groups']);
			$lc_cache->writeCache("mod_spam_prevention", $sp_settings, $crt_lang);

		}
		return $sp_settings;

	}

	function initTemplatesVals($smarty) {

	}

	function deleteLogsOlderThan($date) {

		global $db;
		$db->query("delete from ".$this->log_table." where `date` < '$date'");

	}
	
	function spamCheck($ip='', $email='', $type) {
	
		$sp_settings = $this->getSettings();
	
		if($sp_settings['use_sfs'])
			$this->SFSSpamCheck($sp_settings, $ip, $email, $type);
		if($sp_settings['use_abip'])	
			$this->ABIPSpamCheck($sp_settings, $ip, $type);

		$sp_ret = array();

		// block email
		// email will just be added to block list
		// SFS only
		if($this->SFSEmailSpam) {
		
			$this->addToLog('', $email, $this->SFSEmailConfidence, '', $type);
		
			// block email
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
						
			$info = 'Spam Prevention Module';
			$be->add($email, $info);
		}
					
		// block ip 
		// ip will be added to block list but it will also return an answer so it can be redirected to access declined page
		// SFS and ABIP
		$is_spam = 0;
		if($this->SFSIPSpam || $this->ABIPSpam) {
		
			$this->addToLog($ip, '', $this->SFSIPConfidence, $this->ABIPConfidence, $type);
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
					
			$info = 'Spam Prevention Module';
			if($sp_settings['block_for']==0) 
				$is_spam = $bi->add($ip, $info);
			else
				$is_spam = $bi->addTemporary($ip, $sp_settings['block_for'], $info);
		}
		
		global $lng;
		if($is_spam) $sp_ret = array("field"=>"alert_window", "error" => $lng['general']['access_restricted']);

		return $sp_ret;
	}
	
	
	function SFSSpamCheck($sp_settings, $ip='', $email='', $type) {

		$url = $this->createSFSBaseURL($sp_settings);
	    
		if(isset($ip) && $ip) $url.="&ip=$ip";
		if(isset($email) && $email) $url.="&email=$email";
	

		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		} else 
			$data = file_get_contents($url);
	      
		if($data) {
	// test data
	//$data = '{"success":1,"email":{"lastseen":"2016-02-24 08:27:00","frequency":1568,"appears":1,"confidence":99.67},"ip":{"lastseen":"2016-02-24 08:27:00","frequency":203,"appears":1,"confidence":97.54}}';
			$response = (array)json_decode($data, true);

			if($email) {
	 
				if( isset($response['email']) && $response['email']['appears']==1 && $sp_settings['sfs_block_limit']<=$response['email']['confidence']) { 
	    
					$this->setSFSEmailSpam();
					$this->setSFSEmailConfidence($response['email']['confidence']);
		 
				} // end spam==1
			} // end if email

			if($ip) {
	 
				if( isset($response['ip']) && $response['ip']['appears']==1 && $sp_settings['sfs_block_limit']<=$response['ip']['confidence']) { 
				
					$this->setSFSIPSpam();
					$this->setSFSIPConfidence($response['ip']['confidence']);
				
				} // end spam=1
			} // end if ip
	 
		} // end if $data
	 
	}
	
 	function ABIPSpamCheck($sp_settings, $ip='', $type) {

		$url = "https://api.abuseipdb.com/api/v2/check?ipAddress=".urlencode($ip);
	    

		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Key: '.$sp_settings['abip_api_key'],
				'Accept: application/json'
			));
			
			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		}
	      
		if($data) {
			$response = (array)json_decode($data, true);

			if( $sp_settings['abip_block_limit']<=$response['data']['abuseConfidenceScore']) { 
				
				$this->setABIPSpam();
				$this->setABIPConfidence($response['data']['abuseConfidenceScore']);
				
			} // end spam=1
	 
		} // end if $data
	 
	}
	function setSFSIPConfidence($confidence) {
		$this->SFSIPConfidence = $confidence;
	}
	
	function setABIPConfidence($confidence) {
		$this->ABIPConfidence = $confidence;
	}

	function setSFSEmailConfidence($confidence) {
		$this->SFSEmailConfidence = $confidence;
	}
	
	function setSFSIPSpam() {
		$this->SFSIPSpam = 1;
	}

	function setABIPSpam() {
		$this->ABIPSpam = 1;
	}

	function setSFSEmailSpam() {
		$this->SFSEmailSpam = 1;
	}

	function createSFSBaseURL($sp_settings) {

	  $url = "http://api.stopforumspam.org/api?f=json";
	  
	  if(!$sp_settings['sfs_block_tor_ips']) $url.="&notorexit";
	  if(!$sp_settings['sfs_block_networks']) $url.="&nobadip";
	  
	  return $url;
  
	}

	function addToLog($ip='', $email='', $confidence_sfs, $confidence_abip, $type) {
	
	    global $db;
	    $timestamp = date("Y-m-d H:i:s");
	    $db->query("insert into ".$this->log_table." set `date`='$timestamp', `email`='$email', `ip`='$ip', `confidence_sfs`='$confidence_sfs', `confidence_abip`='$confidence_abip', `type`='$type'");
	    return;
	
	}

	function getNo() {
	
		global $db;
		$no=$db->fetchRow('select count(*) from '.$this->log_table);
		return $no;

	}

	function searchLogs($post_array, $page, $no_per_page) {

		global $db;
		$start=($page-1)*$no_per_page;
		$sp_settings = $this->getSettings();

		$found = 0; $where = '';
		$ext_join = ''; $join_users = '';

		foreach($post_array as $key=>$value) {
			if( !$key || $value=='' ) continue;
			
			switch($key) {
				case "ip": 
				case "email": 
				case "type": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`$key` = '$value' ";
					$found = 1;
				break;
				case "date_from": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`date` >= '$value' ";
					$found = 1;
				break;

				case "date_to": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`date` <= '$value' ";
					$found = 1;
				break;
				case "confidence_from": 
					if($found) $where.=" and "; else $where = " where ";
					
					if($sp_settings['use_sfs'] && $sp_settings['use_abip'])
						$where .= " (".$this->log_table.".`confidence_sfs` >= '$value' or ".$this->log_table.".`confidence_abip` >= '$value') ";
					elseif($sp_settings['use_sfs'])	
						$where .= " ".$this->log_table.".`confidence_sfs` >= '$value' ";
					else 	
						$where .= " ".$this->log_table.".`confidence_abip` >= '$value' ";
					$found = 1;
				break;

				case "confidence_to": 
					if($found) $where.=" and "; else $where = " where ";
					if($sp_settings['use_sfs'] && $sp_settings['use_abip'])
						$where .= " (".$this->log_table.".`confidence_sfs` <= '$value' or ".$this->log_table.".`confidence_abip` <= '$value' ) ";
					elseif($sp_settings['use_sfs'])	
						$where .= " ".$this->log_table.".`confidence_sfs` <= '$value' ";
					else
						$where .= " ".$this->log_table.".`confidence_abip` <= '$value' ";
					$found = 1;
				break;

			}
		}

		$no_logs = $this->getNoLogs($where);
		$this->setNoLogs($no_logs);
		
		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$result=$db->fetchAssocList("select *, date_format(".$this->log_table.".`date`,'$date_format') as `date_nice` from ".$this->log_table.$where." order by `date` desc limit $start, $no_per_page");

		return $result;

	}
	
	
	function getNoLogs($where){

		global $db, $settings;
		$sql = "select count(*) 
		from ".$this->log_table.$where;
		$no_logs = $db->fetchRow($sql);

		return $no_logs;
	}

	function setNoLogs($no) {

		$this->no_logs = $no;

	}

	function noLogs() {

		return $this->no_logs;

	}

	function getLogId($id) {
	
		global $db;
		$result = $db->fetchAssoc("select * from ".$this->log_table." where id='$id'" );
		return $result;
		
	}
	
	function unblock($id) {
	
		$logId = $this->getLogId($id);
		
		// unblock email
		if($logId['email']) {

			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
			$be->deleteEmail($logId['email']);
		
		}
	
		// unblock ip
		if($logId['ip']) {
		
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
			$bi->deleteIP($logId['ip']);

		}

	}

	function whitelist($id) {
	
		$logId = $this->getLogId($id);
		
		// unblock email
		if($logId['email']) {

			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
			$be->addToWhitelist($logId['email']);
		
		}
	
		// unblock ip
		if($logId['ip']) {
		
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
			$bi->addToWhitelist($logId['ip']);

		}

	}

	function getDelayInSeconds($crt_usr, $sp_settings) {
	
		global $db;
		$delay = $sp_settings['waiting_time'];
		$current_date = date("Y-m-d H:i:s");
		$seconds = $db->fetchRow("SELECT timestampdiff(SECOND, `date_added`, '$current_date') as seconds from ".TABLE_ADS." where user_id=$crt_usr order by `date_added` desc limit 1 ");

		if(!isset($seconds) || !$seconds) return 0;
		if($seconds/60>$delay) return 0;
		
		return ($delay*60)-$seconds;
	
	}
	
	function getDelayInSecondsNologin($ip, $sp_settings) {
	
		global $db;
		$delay = $sp_settings['waiting_time'];
		$current_date = date("Y-m-d H:i:s");
		$seconds = $db->fetchRow("SELECT timestampdiff(SECOND, `date_added`, '$current_date') as seconds from ".TABLE_ADS." left join ".TABLE_ADS_EXTENSION." on ".TABLE_ADS.".id=".TABLE_ADS_EXTENSION.".id where ip='$ip' order by `date_added` desc limit 1 ");
		
		if(!isset($seconds) || !$seconds) return 0;
		if($seconds/60>$delay) return 0;
		
		return ($delay*60)-$seconds;
	
	}
	
}
?>
