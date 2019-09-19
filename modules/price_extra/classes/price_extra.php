<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class price_extra {

	var $table;
	var $info='';
	var $error='';

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."price_extra_settings";

	}

	function getId() {

		return $this->id;

	}

	function Delete($id) {

		global $db;
		$res_del=$db->query('delete from '.$this->table.' where `id`="'.$id.'"');
		$res_del=$db->query('delete from '.$this->table.'_lang where `id`="'.$id.'"');

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;
	}

	function allFieldsetsConfiguration() {
	
		global $db;
		$first_fs = $db->fetchRow('select `fieldset` from '.$this->table.' limit 1');
		
		// if the first and only fieldset is set to 0, then we have a unique configuration
		if($first_fs === 0) return 1;
		return 0;

	}

	function getAll() {

		global $db, $crt_lang;

		$result=$db->fetchAssocList("select * from ".$this->table);
		
		// fieldsets names
		$i = 0;
		foreach ($result as $row) {
		
		  if( $row['fieldset'] == 0 ) { 
		      global $lng;
		      $result[$i]['fieldset_names'] = $lng['custom_fields']['all_fieldsets'];
		  }
		  else {
		      $fs_list = explode(",", $row['fieldset']);
		      $result[$i]['fieldset_names'] = "";
		      $j = 0;
		      global $config_abs_path;
		      require_once $config_abs_path."/classes/fieldsets.php";
		      
		      foreach($fs_list as $f) {
			if($j) $result[$i]['fieldset_names'] .= ",";
			$result[$i]['fieldset_names'] .= fieldsets::getName($f);
			$j++;
		      }
		  }
		  
		  // get tags
		  $tags = $db->fetchRow("select `tags` from ".$this->table."_lang where `lang_id`='$crt_lang' and id='{$row['id']}'");
		  
		  $result[$i]['tags'] = str_replace("|", ",", $tags);
		  
		  $i++;
		  
		}
		
		return $result;

	}

	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function setError($str) {

		$this->error=$str;

	}

	function setInfo($str){

		$this->info = $str;

	}

	function getInfo() {

		return $this->info;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function check_form () {

		global $lng;
		global $lng_pe;
		global $languages;

		$this->error='';
		$this->tmp=array();
		
		//negotiable
		if(checkbox_value("use_negotiable")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['negotiable_'.$lang['id']]) || !$_POST['negotiable_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_negotiable']."<br/>"); 
				break;
			}
		}
		}

		//free
		if(checkbox_value("use_free")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['free_'.$lang['id']]) || !$_POST['free_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_free']."<br/>"); 
				break;
			}
		}
		}

		//tags
		if(checkbox_value("use_tags")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['tags_'.$lang['id']]) || !$_POST['tags_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_tags']."<br/>"); 
				break;
			}
		}
		}

		if($this->error!='') {
			$this->tmp = array();

			if(isset($_POST['all_fieldsets'])) $this->tmp['all_fieldsets']=$_POST['all_fieldsets'];
			if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
			{
				$this->tmp['fieldset']='';
				$i=0;
				while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
					if($i) $this->tmp['fieldset'].=',';
					$this->tmp['fieldset'].=$f;
					$i++;
				}
			} else $this->tmp['fieldset']='0';
			
			$array_checkboxes = array("use_negotiable", "use_free", "use_tags");
			foreach($array_checkboxes as $c) {
			    $this->tmp[$c] = checkbox_value($c);
			}
			
			foreach($languages as $lang) {
				$this->tmp['negotiable'][$lang['id']] = cleanStr($_POST['negotiable_'.$lang['id']]);
				$this->tmp['free'][$lang['id']] = cleanStr($_POST['free_'.$lang['id']]);
				$this->tmp['tags'][$lang['id']] = cleanStr($_POST['tags_'.$lang['id']]);
			}

		}

		return 1;
	}

	function add() {
	
		global $db;
		global $lng_news;
		global $languages;

		$this->clean=array();

		$this->check_form();
		if($this->getError()!='') return 0;

		if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
		{
			$this->clean['fieldset']='';
			$i=0;
			while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
				if($i) $this->clean['fieldset'].=',';
				$this->clean['fieldset'].=$f;
				$i++;
			}
		} else $this->clean['fieldset']='0';

		$array_checkboxes = array("use_negotiable", "use_free", "use_tags");
		foreach($array_checkboxes as $c) {
		    $this->clean[$c] = checkbox_value($c);
		}

		$db->query("insert into ".$this->table." set `fieldset` = '{$this->clean['fieldset']}', `use_negotiable` = '{$this->clean['use_negotiable']}', `use_free` = '{$this->clean['use_free']}', `use_tags` = '{$this->clean['use_tags']}'");
		
		$id=$db->insertId();
		
		foreach($languages as $lang) {

		    $lang_id = $lang['id'];
		    $this->clean['negotiable'] = escape($_POST['negotiable_'.$lang_id]);
		    $this->clean['free'] = escape($_POST['free_'.$lang_id]);
		    $this->clean['tags'] = str_replace("\n", "|", $_POST['tags_'.$lang_id]);
		    $this->clean['tags'] = escape(str_replace("\r", "", $this->clean['tags']));
		    
		    $db->query("insert into ".$this->table."_lang set `id`='$id', `lang_id` = '$lang_id', `negotiable` = '{$this->clean['negotiable']}', `free` = '{$this->clean['free']}', `tags` = '{$this->clean['tags']}'");
		
		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;

	}


	function edit($id) {
	
		global $db;
		global $lng_news;

		$this->clean=array();
		$this->check_form();

		if($this->getError()!='') return 0;

		if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
		{
			$this->clean['fieldset']='';
			$i=0;
			while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
				if($i) $this->clean['fieldset'].=',';
				$this->clean['fieldset'].=$f;
				$i++;
			}
		} else $this->clean['fieldset']='0';

		$array_checkboxes = array("use_negotiable", "use_free", "use_tags");
		foreach($array_checkboxes as $c) {
		    $this->clean[$c] = checkbox_value($c);
		}

		$db->query("update ".$this->table." set `fieldset` = '{$this->clean['fieldset']}', `use_negotiable` = '{$this->clean['use_negotiable']}', `use_free` = '{$this->clean['use_free']}', `use_tags` = '{$this->clean['use_tags']}' where id='$id'");

		global $languages;
		foreach($languages as $lang) {

		    $lang_id = $lang['id'];
		    $this->clean['negotiable'] = escape($_POST['negotiable_'.$lang_id]);
		    $this->clean['free'] = escape($_POST['free_'.$lang_id]);
		    
		    $this->clean['tags'] = str_replace("\n", "|", $_POST['tags_'.$lang_id]);
		    $this->clean['tags'] = escape(str_replace("\r", "", $this->clean['tags']));

		    $db->query("update ".$this->table."_lang set `negotiable` = '{$this->clean['negotiable']}', `free` = '{$this->clean['free']}', `tags` = '{$this->clean['tags']}' where id='$id' and `lang_id`='$lang_id'");

		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;

	}

	function getPriceConfig($id) {
	
	    global $db, $languages;
	    
	    $pe = $db->fetchAssoc("select * from ".$this->table." where id='$id'");
	    
	    foreach ($languages as $lang) {
	    
		$lang_id = $lang['id'];
		$pel = $db->fetchAssoc("select * from ".$this->table."_lang where id='$id' and `lang_id`='$lang_id'");
		$pe['negotiable'][$lang_id] = $pel['negotiable'];
		$pe['free'][$lang_id] = $pel['free'];
		$pe['tags'][$lang_id] = str_replace("|", "\n", $pel['tags']);
		
	    }
	    
	    return $pe;
	    
	}
	
	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {
	
		global $db, $languages;
		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$pe_settings = $lc_cache->readCache("mod_pe_settings")) {

			global $db;
			$array = $db->fetchAssocList("select * from ".$this->table);
			
			$j = 0;
			$pe_settings = array();
			foreach ($array as $row) {
			
			$id = $row['id'];
			$lang_array = array();
			foreach($languages as $lang) {
			
			      $lang_id = $lang['id'];
			      $lang_array[$lang_id] = $db->fetchAssoc("select * from ".$this->table."_lang where `lang_id`='$lang_id' and `id`='$id'");
			      $tags = str_replace("\n", "|", $lang_array[$lang_id]['tags']);
			      $lang_array[$lang_id]['tags_array'] = explode("|", $tags);
			
			}
			
			$fieldsets_array = explode(",", $row['fieldset']);
			
			// add one registration for each different fieldset
			foreach($fieldsets_array as $f) {
			
			    $pe_settings[$f] = $array[$j];
			    $pe_settings[$f]['fieldset'] = $f;
			    foreach($languages as $lang) {
			      $lang_id = $lang['id'];
			      $pe_settings[$f]['lang'][$lang_id] = $lang_array[$lang_id];
			    }
			    
			}
			$j++;
			} // end foreach array

			$lc_cache->writeCache("mod_pe_settings", $pe_settings);

		}
//_print_r($pe_settings);
		return $pe_settings;

	
	}

	function postAd($ad_id, $pending_edited=0) {
	
	      if(!$ad_id) return;
	      global $db;
	      $pe_settings = $this->getSettings();
	      $fieldset = listings::getFieldset($ad_id);
	      
	      $price_type = '';
	      if(isset($_POST['price_type'])) $price_type = escape($_POST['price_type']);

	      if($pending_edited) { 
			$l = new listings; 
			$pe_array = $l->getPendingEdited($ad_id);
		}
	      
	      // price_type==1 => price value
	      // price set to value => no change, already done in listings_process

	      // price_type==2 => FREE
	      // price set to 0
	      if(isset($price_type) && $price_type==2 && ( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_free']) || (isset($pe_settings[0]) && $pe_settings[0]['use_free']) )) {

			if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `price`=0 where `id`='$ad_id'");
			else {
				$pe_array['price'] = 0;
				$pe_array['price_tag'] = $price_type;
			}
	      }
	      
	      // price_type = non numeric => price extra tag
	      if(isset($price_type) && !is_numeric($price_type) && ( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_tags']) || (isset($pe_settings[0]) && $pe_settings[0]['use_tags']))) {
	      
			if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `price`=-1, `price_tag`='$price_type' where `id`='$ad_id'");
			else {
				$pe_array['price'] = -1;
				$pe_array['price_tag'] = $price_type;
			}
	      
	      }
	      
	      if( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_negotiable']) || (isset($pe_settings[0]) && $pe_settings[0]['use_negotiable'])) {
	      
		    $negotiable = checkbox_value("negotiable");
		    if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `negotiable`= '$negotiable' where `id`='$ad_id'");
			else 
				$pe_array['negotiable'] = $negotiable;
		
	      }
	      
	      if($pending_edited) {
			global $config_abs_path;
			require_once $config_abs_path."/libs/JSON.php";
			
			global $appearance_settings;
		        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			$encoded = json_encode($pe_array);
			$lp = new listings_process();
			$lp->addAsPendingEdited($ad_id, $encoded);
	      }
	      
	      return;
	      
	}

	function editAd($ad_id) {
	
		if(!$ad_id) return;
	      
		$pending_edited = 0; 
		global $is_admin, $is_mod, $ads_settings;
		if(!($is_admin || $is_mod) && $ads_settings['pending_edited']  && listings::wasListingPostedAsPending($ad_id)) $pending_edited=1;

		$this->postAd($ad_id, $pending_edited);
		return;

	}
	
	function addLang($lang_id) {
		
		global $languages, $config_table_prefix;
		global $db;

		$default_lang = languages::getDefault();
		$pe_array = $db->fetchAssocList("select * from ".$config_table_prefix."price_extra_settings_lang where `lang_id`='$default_lang'");
		
		foreach($pe_array as $pe_row) {
		
		    $db->query("insert into ".$config_table_prefix."price_extra_settings_lang set `lang_id`='$lang_id', `id`='{$pe_row['id']}', `negotiable`='{$pe_row['negotiable']}', `free`='{$pe_row['free']}', `tags`='{$pe_row['tags']}'");
		    
		}
		
		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");


	}

	function deleteLang($lang_id) {
		
		global $config_table_prefix;
		global $db;

		$db->query("delete from ".$config_table_prefix."price_extra_settings_lang where `lang_id`='$default_lang'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

	}

	function checkPriceValueEntered() {

	      global $db;
//echo $_POST['price_type']."---";	      
	      $price_type = '';
	      if(isset($_POST['price_type'])) $price_type = escape($_POST['price_type']);
	      // no price type selected!
	      else return 0;
//echo $price_type."---";
	      // price_type==1 => price value
	      if(isset($price_type) && $price_type==1) {

			// price value must be set
			if(!isset($_POST['price']) || !$_POST['price']) return 0;
	      
	      }

	      return 1;
	
	}
	
} 

?>
