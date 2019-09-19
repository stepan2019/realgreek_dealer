<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("dealers_page", $modules_array)) return;

function check_languages_dealers_page() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";
	$dp = new dealers_page();
	$dp->autoCheckLang();
	
}

function dealers_page_includes() {

	global $config_abs_path;
	require_once($config_abs_path.'/classes/fields.php');
	require_once($config_abs_path.'/classes/depending_fields.php');
	require_once($config_abs_path.'/modules/dealers_page/include.php');

}

function dealers_page_init_template($smarty) {

	global $config_abs_path;
	require_once($config_abs_path.'/classes/fields.php');
	require_once($config_abs_path.'/classes/depending_fields.php');
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";

//	global $is_mobile;
//	if($is_mobile) return;
	
	global $smarty;
	$mod_class = new dealers_page;
	$mod_class->initTemplatesVals($smarty);
}

function set_meta_info($smarty, $self_noext) {

	if($self_noext != "dealers") return;

	global $config_abs_path;
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";
	$dp = new dealers_page();
	$dp->setMetaInfo($smarty);

}

//add_action('include', 'dealers_page_includes');
add_action('init_template', 'dealers_page_init_template');
add_action('add_language', 'check_languages_dealers_page');
add_action('delete_language', 'check_languages_dealers_page');

// set meta info
add_action('init_template', 'set_meta_info');

?>