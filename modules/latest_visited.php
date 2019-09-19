<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("latest_visited", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/latest_visited/classes/latest_visited.php";

function addVisitedListing($smarty, $id) {

	$lv = new latest_visited();
	$lv_settings = $lv->getSettings();

	if(isset($_COOKIE['ox_latest_visited'])) $lv_val = $_COOKIE['ox_latest_visited'];
	else $lv_val='';
	
	$dont_add=0;
	$lv_arr = array();
	if($lv_val) { 
		$lv_arr = explode(",", $lv_val);
		if(in_array($id, $lv_arr)) $dont_add=1;
	}

	if($dont_add==0) {
		array_unshift($lv_arr, $id);
		$lv_arr = array_slice($lv_arr, 0, $lv_settings['no_ads']);
		$lv_val = implode($lv_arr, ",");
		global $main_domain;
		setcookie("ox_latest_visited", $lv_val, 0, "/", ".".$main_domain);
	}
	
}

function getLatestVisited($smarty) {

	$lv = new latest_visited();
	$lv_settings = $lv->getSettings();

	global $self_noext;
	if( $self_noext!="details" && $self_noext!="listings" && $self_noext!="index") return;
	
	if( $self_noext=="details" && !$lv_settings['show_on_details']) return;
	if( $self_noext=="listings" && !$lv_settings['show_on_search']) return;
	if( $self_noext=="index" && !$lv_settings['show_on_index']) return;

	$smarty->assign("lv_settings", $lv_settings);
	
	$latest_visited = $lv->getLatestVisited($lv_settings, $where_str = '');
	$smarty->assign("latest_visited", $latest_visited);
	$smarty->assign("no_latest_visited", count($latest_visited));

	global $modules_array;
	if(in_array("acategories", $modules_array)) {
	
		global $config_abs_path;
		require_once $config_abs_path."/modules/acategories/classes/acategories.php";
		$ac = new acategories();
		$ac_settings = $ac->getSettings();

		$smarty->assign('ac_settings', $ac_settings);

	}
	
}

function check_languages_latest_visited() {

	$la = new latest_auctions();
	$la->autoCheckLang();
	
}

add_action('details_page', 'addVisitedListing');
add_action('details_page', 'getLatestVisited');
add_action('listings_page', 'getLatestVisited');
add_action('first_page', 'getLatestVisited');
add_action('add_language', 'check_languages_latest_visited');
add_action('delete_language', 'check_languages_latest_visited');

?>