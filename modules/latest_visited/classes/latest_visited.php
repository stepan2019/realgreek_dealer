<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class latest_visited {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."latest_visited";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$lv_settings = $lc_cache->readCache("mod_lv_settings")) {

			global $db;
			$lv_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_lv_settings", $lv_settings);

		}
		return $lv_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_latest_visited;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->clean['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->clean['title_'.$lang_id]='';
			
			$str_update.=" `title_$lang_id` = '".$this->clean['title_'.$lang_id]."', ";
		}

		if(is_numeric($_POST['no_ads']) && $_POST['no_ads']>=1) $no_ads = $_POST['no_ads']; else $no_ads = 6;
		$show_on_index = checkbox_value("show_on_index");
		$show_on_search = checkbox_value("show_on_search");
		$show_on_details = checkbox_value("show_on_details");

		if(!$this->getError()) {
	
			$db->query("update `".$this->settings_table."` set $str_update `no_ads` = '$no_ads', `show_on_search`=$show_on_search, `show_on_details`=$show_on_details, `show_on_index`=$show_on_index;");
			return 1;
		} 

		$this->tmp['title'] = $title;
		$this->tmp['no_ads'] = $no_ads;
		$this->tmp['show_on_index'] = $show_on_index;
		$this->tmp['show_on_search'] = $show_on_search;
		$this->tmp['show_on_details'] = $show_on_details;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_lv_settings");

		return 0;
	}


	function getLatestVisited($lv_settings, $where_str = '') {

		if(isset($_COOKIE['ox_latest_visited']) && $_COOKIE['ox_latest_visited']) { 
			$lv_val = $_COOKIE['ox_latest_visited'];
		}
		else return array();

		global $settings, $ads_settings;
		
		$locations_str="";
		if($settings['enable_locations'])
			$locations_str = locations::makeQueryStr();

		$listing = new listings();
		$start=0;
		$ads_per_page = $lv_settings['no_ads'];
		$where = " where ".TABLE_ADS.".active = 1 and ".TABLE_ADS.".id in($lv_val)";
                $where .= $where_str.$locations_str;
		$order_by_str = "order by field(".TABLE_ADS.".id, $lv_val)";
		$result=$listing->getShortListings($where,$order_by_str,'',$start,$ads_per_page);

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

	function getTmp() {
	
		return $this->tmp;

	}

	function autoCheckLang() {
		
		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);
		$changed=0;

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) { 
		  $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(100) NULL");
		  $changed=1;
		}
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("title_".$lang['id'], $fields_settings)) { 
			  $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(100) NULL");
			  $changed=1;
			}
		}

		if($changed) {
		  // clear cache
		  $lc_cache = new cache();
		  $lc_cache->clearCache("mod_lv_settings");
		}
	
	}

}
?>
