<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/paginator.php";
require_once "../classes/users.php";
require_once "../classes/groups.php";

global $db, $lng, $settings;
$smarty = new Smarty;
$smarty = common($smarty);

$users=new users();

$arr_search= array("username", $settings['contact_name_field'], "email", "ip");
$arr_order= array("username", $settings['contact_name_field'], "registration_date");
$arr_order_way= array("asc", "desc");

$page = get_numeric("page", 1);
$no_per_page = get_numeric("no_per_page", 20);

if(isset($_GET['search'])) $search=escape($_GET['search']); else $search='';

if(isset($_GET['search_for']) && in_array($_GET['search_for'], $arr_search)) $search_for=$_GET['search_for']; else $search_for='';

if(isset($_GET['order']) && in_array($_GET['order'], $arr_order)) $order=$_GET['order']; else $order='registration_date';

if(isset($_GET['order_way']) && in_array($_GET['order_way'], $arr_order_way)) $order_way=$_GET['order_way']; 
else if($order) $order_way='desc';

if(isset($_GET['login_as']) && is_numeric($_GET['login_as'])) 
{
	$login_as=$_GET['login_as'];
	$usr=new users();
	if($usr->exists($login_as)) {
		$auth=new auth();
		$auth->autologin($login_as);
		$auth->admin_clearlogin();
		header("Location: ".$config_live_site);
		exit(0);
	}
}

$post_array = array();

$array_searches = array("id", $settings['contact_name_field'], "username", "email", "ip", "date_from", "date_to");
foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) { 
			$post_array[$key]=escape($_POST[$key]);
		}
		
	}

	if($post_array['order']) $order = $post_array['order'];
	if($post_array['order_way']) $order_way = $post_array['order_way'];
	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(user)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 4);
		if(!is_numeric($id)) continue;

		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $users->delete($id);
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $users->Enable($id);
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $users->Disable($id);
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) 
	|| ( isset($_POST['activate_selected']) || isset($_POST['activate_selected_x']) ) 
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))) // IE image submit fix

	{
		$location="users_list.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple users
}

$smarty->assign("tab","users");
$smarty->assign("smenu", "affiliates");
$smarty->assign("page",$lng['users']['affiliates']);
$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$array_users=$users->searchAffiliates($post_array, $page,$no_per_page,$order,$order_way);
$no_users=$users->getNoUsers();

$smarty->assign("array_users",$array_users);
$smarty->assign("total",$no_users);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_users);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('affiliates_list.html');

$db->close();
close();
?>
