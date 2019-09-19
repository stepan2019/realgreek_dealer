<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/categories.php";
require_once "../classes/config/categories_config.php";
require_once "../classes/fieldsets.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['page']) && is_int($_GET['page'])) $page=$_GET['page']; else $page=1;
if(isset($_GET['delete']) && is_int($_GET['delete'])) $delete=$_GET['delete'];

$smarty->assign("tab","settings");
$smarty->assign("page",$lng['panel']['manage_categories']);
$smarty->assign("lng",$lng);

$cat_config=new categories_config();

if(isset($_GET['fix']) && $_GET['fix']==1) { 
	$cat_config->reArrange();
	header("Location: manage_categories.php");
	exit(0);
}

if(isset($_GET['recount']) && $_GET['recount']==1) { 
	$cat_config->Recount();
	header("Location: manage_categories.php");
	exit(0);
}

if(isset($_GET['slugs']) && $_GET['slugs']==1) { 
	require_once "../classes/slugs.php";
	$s = new slugs();
	$s->generateCategorySlugs();
	header("Location: manage_categories.php");
	exit(0);
}

$array_categories=$cat_config->getAll();
$smarty->assign("array_categories",$array_categories);
//_print_r($array_categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('manage_categories.html');

$db->close();
close();
?>
