<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/payment_actions.php";
require_once "../classes/payment_processors.php";
require_once "../classes/invoices.php";
require_once "../classes/paginator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$invoices=new invoices();

$array_order_way= array("asc", "desc");
$array_order= array("date", "amount", "user_id", "processor");

$page = get_numeric("page", 1);
$delete = get_numeric("delete");
$no_per_page = get_numeric("no_per_page", 20);
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; else $order='date';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

$post_array = array();

$array_searches = array("id", "username", "email", "amount_from", "amount_to", "processor", "date_from", "date_to");
foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) $post_array[$key]=escape($_POST[$key]);
	}
	if($post_array['order']) $order = $post_array['order'];
	if($post_array['order_way']) $order_way = $post_array['order_way'];
	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(inv)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 3);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $actions->delete($id);
	}

	if ( isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) // IE image submit fix

	{
		$location="invoices.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple subscriptions
}

$smarty->assign("tab","orders");
$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

////getInvoices($where, $order_by, $order_way, $general_row, $ads_per_page)
$invoices_array=$invoices->searchInvoices($post_array,$page,$no_per_page,$order,$order_way);
$no_invoices=$invoices->noInvoices();

$smarty->assign("invoices_array",$invoices_array);
$smarty->assign("no_invoices",$no_invoices);


// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_invoices);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));

global $seo_settings;
$paginator->paginate($smarty);

// get processors
$pp = new payment_processors;
$processors = $pp->getAll();
$smarty->assign("processors",$processors);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('invoices.html');

$db->close();
close();
?>
