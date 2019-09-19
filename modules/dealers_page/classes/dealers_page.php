<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class dealers_page
{

	public function __construct()
	{
	
		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."dealers_page_settings";

	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$dp = new dealers_page();
		$settings = $dp->getSettings();
		$smarty->assign("dealers_page_settings", $settings);

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
	
			$this->tmp['array_search_location_fields'] = array();
		if(!empty( $this->tmp['search_location_fields'])) $this->tmp['array_search_location_fields'] = explode(",", $this->tmp['search_location_fields']);

		return $this->tmp;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		$this->clean=array();

		$str_update = '';

		global $languages;

		$array_lang_depending = array("link_name", "title", "meta_keywords", "meta_description");
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
	
			foreach ($array_lang_depending as $field) {

				if(isset($_POST[$field.'_'.$lang_id]) && $_POST[$field.'_'.$lang_id]) $this->clean[$field.'_'.$lang_id]=escape($_POST[$field.'_'.$lang_id]); else $this->clean[$field.'_'.$lang_id]='';
			
				$str_update.=" `".$field."_$lang_id` = '".$this->clean[$field.'_'.$lang_id]."', ";

			}
		}

		$arr_checkboxes = array ('all_with_store', 'link_to_navbar', 'group_on_categories', 'enable_map_search', 'map_visible');
		$arr_f = array('logo_field', 'name_field', 'category_field');
		$arr_numeric = array('categories_on_row');
		$arr_multiple = array('groups', 'details_fields', 'search_fields');

		foreach($arr_checkboxes as $field) {
			$this->clean[$field] = checkbox_value($field);
			$str_update .= " `$field` = '{$this->clean[$field]}', ";
		}

		foreach($arr_numeric as $field) {
			if(isset($_POST[$field]) && is_numeric($_POST[$field])) {
				$this->clean[$field] = $_POST[$field];
				$str_update .= " `$field` = '{$this->clean[$field]}', ";
			}
		}

		foreach($arr_f as $field) {
			$this->clean[$field] = escape($_POST[$field]);
			$str_update .= " `$field` = '{$this->clean[$field]}', ";
		}

		$i = 0;
		$this->clean['groups']="";
		while (isset($_POST['groups'][$i]) && $f=escape($_POST['groups'][$i])){
			if($i) $this->clean['groups'].=',';
			$this->clean['groups'].=$f;
			$i++;
		}
		$str_update .= " `groups` = '{$this->clean['groups']}', ";

		$i = 0;
		$this->clean['details_fields']='';
		while (isset($_POST['details_fields'][$i]) && $f=escape($_POST['details_fields'][$i])){
			if($i) $this->clean['details_fields'].=',';
			$this->clean['details_fields'].=$f;
			$i++;
		}
		$str_update .= " `details_fields` = '{$this->clean['details_fields']}', ";

		$i = 0;
		$this->clean['search_fields']='';
		while (isset($_POST['search_fields'][$i]) && $f=escape($_POST['search_fields'][$i])){
			if($i) $this->clean['search_fields'].=',';
			$this->clean['search_fields'].=$f;
			$i++;
		}
		$str_update .= " `search_fields` = '{$this->clean['search_fields']}'";

		//search_location_fields
		if(isset($_POST['search_location_fields'])) {
			$this->clean['search_location_fields'] = cleanStr($_POST['search_location_fields']);
		}
		$str_update .= ", `search_location_fields` = '{$this->clean['search_location_fields']}'";

		$db->query("update ".$this->settings_table." set ".$str_update);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_dp_settings");

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();

		if($overwrite || !$dp_settings = $lc_cache->readCache("mod_dp_settings", $crt_lang)) {

			global $db;
			$dp_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$dp_settings['groups_array'] = explode(",", $dp_settings['groups']);
			$dp_settings['details_fields_array'] = explode(",", $dp_settings['details_fields']);

			if($dp_settings['search_fields']) { 
				$dp_settings['search_fields_array'] = explode(",", $dp_settings['search_fields']);
				$i = 0;
				$f = new fields("uf");
				foreach($dp_settings['search_fields_array'] as $field) {
					$dp_settings['search_fields_details_array'][$i] = $f->getField($field, 'uf');
					$i++;
				}

			}
			else { 
				$dp_settings['search_fields_array'] = array();
				$dp_settings['search_fields_details_array'] = array();
			}
			$dp_settings['array_search_location_fields'] = explode(",", $dp_settings['search_location_fields']);

			$lc_cache->writeCache("mod_dp_settings", $dp_settings, $crt_lang);

		}
		return $dp_settings;

	}

	function autoCheckLang() {
		
		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("link_name", $fields_settings)) {
			if(in_array("link_name", $fields_settings)) $db->query("alter table ".$this->settings_table." change `link_name` `link_name_$default_lang` varchar(80) NULL");

			if(in_array("title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(200) NULL");

			if(in_array("meta_keywords", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_keywords` `meta_keywords_$default_lang` text");

			if(in_array("meta_description", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_description` `meta_description_$default_lang` text");

			$fields_settings = $db->getTableFields($this->settings_table);
		}

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("link_name_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `link_name_$lang_id` varchar(80) NULL");
			if(!in_array("title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(200) NULL");
			if(!in_array("meta_keywords_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_keywords_$lang_id` text");
			if(!in_array("meta_description_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_description_$lang_id` text");
		}
	}

	function getDealers($order_by, $order_way, $general_row, $ads_per_page, $settings, $where_str='', $dcat='') {

		global $db;
		global $lng;

		$where = " where ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ( ";
		if($settings['all_with_store']) $where .= " `store` =1 ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" or ";
		if($settings['groups']) $where .= " `group` in ({$settings['groups']}) ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ) ";

		if(!$settings['all_with_store'] && !$settings['groups']) 
			$where.=" `active` = 1 ";
		else $where.=" and `active` = 1 ";

		if($dcat) { 

			global $languages;
			if(empty($languages)) $languages = common::getCachedObject("base_languages");
			$no_lang = count($languages);

			$q_translated = '';
			if($no_lang>1) $q_translated = $this->getCategoryTranslated(escape($dcat), $settings['category_field']);

			$where.=" and (`{$settings['category_field']}` REGEXP '\[\[:<:\]\]".escape($dcat)."\[\[:>:\]\]' ".$q_translated.") ";
		}

		$sql = "select ".TABLE_USERS.".*, ".TABLE_USER_GROUPS."_lang.`name` as `group_name` from ".TABLE_USERS."
		left join ".TABLE_USER_GROUPS."_lang on ".TABLE_USERS.".`group` = ".TABLE_USER_GROUPS."_lang.id
		 ".$where.$where_str." group by ".TABLE_USERS.".id ".$order_by." ".$order_way." ";
		if($ads_per_page>0) $sql .= " limit ".$general_row.", ".$ads_per_page;

		$result = $db->fetchAssocList($sql);

		if($settings['enable_map_search']) {
			$i = 0;
			$uf = new fields("uf");
			$search_location_fields = explode(",", $settings['search_location_fields']);
			$details_fields = explode(",", $settings['details_fields']);
			foreach ($result as $row) {
				// make search_location_fields string
				$result[$i]['search_map_location'] = '';
				$result[$i]['search_map_coordinates'] = '';
				foreach($search_location_fields as $s) {
					// check if a google maps field
					$type = $uf->getTypeByCaption($s);
					if($type=="google_maps" && $result[$i][$s]) $result[$i]['search_map_coordinates'] = $result[$i][$s];
					else 
						if($result[$i][$s]) $result[$i]['search_map_location'] .=" ".str_replace(array("\n", "\r", "<br>", "<br/>"), " ", $result[$i][$s]);

				} 
				$result[$i]['info'] = '';
				foreach($details_fields as $s) {
					if($result[$i][$s]) $result[$i]['info'] .=str_replace(array("\n", "\r", "<br>", "<br/>"), " ", $result[$i][$s])." ";
				}
				$result[$i]['info'] = trim($result[$i]['info']);
				$i++;
			}
		}

		return $result;
	}

	function getNoDealers($settings, $where_str='', $dcat='') {

		global $db;

		$where = " where ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ( ";
		if($settings['all_with_store']) $where .= " `store` =1 ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" or ";
		if($settings['groups']) $where .= " `group` in ({$settings['groups']}) ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ) ";
		if($dcat) $where.=" and (`{$settings['category_field']}` REGEXP '\[\[:<:\]\]".escape($dcat)."\[\[:>:\]\]' ";

		global $languages;
		if(empty($languages)) $languages = common::getCachedObject("base_languages");
		$no_lang = count($languages);

		if($dcat) {
		if($no_lang>1) $where.=$this->getCategoryTranslated(escape($dcat), $settings['category_field']);
		$where.=")";
		}

		if(!$settings['all_with_store'] && !$settings['groups']) 
			$where.=" `active` = 1 ";
		else $where.=" and `active` = 1 ";

		$no = $db->fetchRow("select count(*) from ".TABLE_USERS.$where.$where_str);
		return $no;

	}

	function getDealerCategories($settings) {

		global $crt_lang;
		global $db;
		$elements=$db->fetchRow("select `elements` from ".TABLE_USER_FIELDS."_lang left join ".TABLE_USER_FIELDS." on ".TABLE_USER_FIELDS.".id = ".TABLE_USER_FIELDS."_lang.id where `caption` like '{$settings['category_field']}' and `lang_id`='$crt_lang'");
		$arr = explode("|", $elements);
		$elements_array = array();
		$i = 0;
		foreach($arr as $el) {
			$elements_array[$i]['category'] = $el;
			$elements_array[$i]['no_dealers'] = $this->getNoDealers($settings, '', $el);
			$i++;
		}
		return $elements_array;

	}


	function getCategoryTranslated($cat, $category_field) {

		// get elements for each language for that field
		global $db;
		global $crt_lang;
		$cat = cleanStr($cat);
		$q_translated = '';

		$id = $db->fetchRow("select id from ".TABLE_USER_FIELDS." where `caption` like '$category_field'");
		$el_array = $db->fetchAssocList("select `lang_id`, `elements` from ".TABLE_USER_FIELDS."_lang where id = $id");
		$el_fields = array();
		foreach($el_array as $e) {
			$el_fields[$e['lang_id']] = $e['elements'];
			if($e['lang_id']==$crt_lang) $crt_lang_elem = $e['elements'];
		}

			$crt_lang_arr = explode("|", $crt_lang_elem);
			$index = -1;
			$i=0;

			foreach($crt_lang_arr as $el) {
				if($el == $cat) { $index = $i; break; }
				$i++;
			}

			if($index!=-1) {

				// translate in all languages except current lang
				$arr_translations = array();
				global $languages;
				foreach($languages as $l) {
					if($l['id'] == $crt_lang) continue;
					$alt_lang_elem = $el_fields[$l['id']];

					$alt_lang_arr = explode("|", $alt_lang_elem);
					$alt_val = $alt_lang_arr[$index];

					if(!in_array(strtolower($alt_val), $arr_translations) && strtolower($alt_val)!=strtolower($cat)) array_push($arr_translations, strtolower($alt_val));
				}

				// add to query
				foreach($arr_translations as $tr) {

						$q_translated.=" or `".$category_field."` REGEXP '\[\[:<:\]\]".escape($tr)."\[\[:>:\]\]' ";
				}
			}//if($index!=-1)

		return $q_translated;
		
	}

	function setMetaInfo($smarty) {

		global $smarty, $crt_lang;
		$dp = new dealers_page();
		$settings = $dp->getSettings();

		$page_info['title']=$settings['title_'.$crt_lang];
		$page_info['meta_keywords']=$settings['meta_keywords_'.$crt_lang];
		$page_info['meta_description']=$settings['meta_description_'.$crt_lang];
		$page_info['noindex'] = '';
		$page_info['canonical'] = ''; 

		$smarty->assign("page_info", $page_info);

	}

}
?>