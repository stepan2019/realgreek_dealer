<?php 
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "../classes/users_packages.php";
require_once "../classes/payment_actions.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/users.php";
require_once "../classes/listings.php";
require_once "../classes/messages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","home");
$smarty->assign("lng",$lng);

$users=array();
$usr=new users();

$users['total']=$usr->getNo();
$users['active']=$usr->getNoActive();
$users['inactive']=$usr->getNoInactive();
$users['with_ads']=$usr->getUsersWithAds();
$users['with_store']=$usr->getUsersWithStore();
$users['with_bulk_uploads']=$usr->getUsersWithBulkUploads();

$users['moderators']=$usr->getNoModerators();
$users['affiliates']=$usr->getNoAffiliates();


global $settings;
if($settings['contact_messages_pending']) {
	$msg = new messages();
	$users['pending_messages']=$msg->getNoPendingMessages();
}

$listings=array();

$listings['total']=listings::getNoListings();
$listings['active']=listings::getNoActiveListings();
$listings['pending']=listings::getNoPendingListings();
$listings['expired']=listings::getNoExpiredListings();
$listings['featured']=listings::getNoFeaturedListings();
$listings['highlited']=listings::getNoHighlitedListings();
$listings['priorities']=listings::getNoPrioritiesListings();
$listings['urgent']=listings::getNoUrgentListings();
$listings['video']=listings::getNoVideoListings();
$listings['url']=listings::getNoUrlListings();
$listings['viewed']=listings::getViewed();
$listings['pending_edited']=listings::getNoPendingEditedListings();

$latest_users=$usr->getLatestUsers(6);
$latest_listings=listings::getLastListings(6);
$usr_pkg = new users_packages();
$latest_subscriptions=$usr_pkg->getLatestSubscriptions(6);
$pa = new payment_actions();
$latest_orders=$pa->getLatestOrders(6);

//_print_r($latest_orders);
global $config_table_prefix, $appearance;
$info = array();
$ver_info = $db->fetchAssoc("select *, date_format(`last_update`, '".$appearance_settings["date_format"]."') as `last_update` from ".$config_table_prefix."version");

$info['script_version'] = $ver_info['ver'].".".sprintf("%d", $ver_info['subver']);
$info['last_update'] = $ver_info['last_update'];
$info['php_version'] = '';
$info['mysql_version'] = '';
$info['last_checked_version'] = $ver_info['last_checked_version'];

ob_start();
eval("phpinfo();");
$info1 = ob_get_contents();
ob_end_clean();

$info["gd_version"] = '-';

foreach(explode("\n", $info1) as $line) {

if(strpos($line, "PHP Version") !== false)
	$info["php_version"] = trim(str_replace("PHP Version", "", strip_tags($line)));

if(strpos($line, "Client API version") !== false) {
	$str = trim(str_replace("Client API version", "", strip_tags($line)));
	$arr = explode("-", $str);
	$info["mysql_version"] = trim($arr[0]); 
}

if(strpos($line, "GD Version") !== false) {
	$info["gd_version"] = trim(str_replace("GD Version", "", strip_tags($line)));

}

$info["register_globals"] = '0';
if(strpos($line, "register_globals") !== false) {
	$info["register_globals"] = trim(str_replace("register_globals", "", strip_tags($line)));
	if($info["register_globals"]=="OffOff" || $info["register_globals"]=="OffOn") $info["register_globals"] = "Off";
	else $info["register_globals"]="On";
}

}
global $settings;
$admin_user=$settings["admin_username"];
$auth=new auth();
$login_info=$auth->getLoginBefore($admin_user);

$smarty->assign("users",$users);
$smarty->assign("listings",$listings);
$smarty->assign("latest_users",$latest_users);
$smarty->assign("latest_listings",$latest_listings);
$smarty->assign("latest_subscriptions",$latest_subscriptions);
$smarty->assign("latest_orders",$latest_orders);
$smarty->assign("info",$info);
$smarty->assign("login_info",$login_info);
$smarty->assign("admin_user",$admin_user);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('index.html');

$db->close();
close();
?>
