<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/config/groups_config.php";
require_once "../classes/sms_gateways.php";

global $db;
global $lng;
$errors_str='';
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","users");
$smarty->assign("lng",$lng);

global $config_vars;
$smarty->assign("credits_enabled",$config_vars['credits_enabled']);

$groups=array();

if(isset($_POST['Submit'])){

	$group=new groups_config();
	if(!$group->add()) { 
		$errors_str=$group->getError();
		$groups=$group->getTmp();
	} else {
		header ('Location: user_groups.php');
		exit(0);
	}
}

$smarty->assign("groups",$groups);
$smarty->assign("error",$errors_str);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('addgroup.html');

$db->close();
close();
?>
