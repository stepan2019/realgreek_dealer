<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/settings.php';
require_once '../classes/config/settings_config.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","security");
$smarty->assign("lng",$lng);

$errors_str='';
$successful = 0;

if(isset($_POST['Submit'])){
	$edit_settings=new settings_config;

	if(!$edit_settings->editSecuritySettings()) { 
		$errors_str.=$edit_settings->getError();
		$security_settings=$edit_settings->getTmp();
	}
	else {
		$successful = 1;
	}
} 

$security_settings=settings::getSecuritySettings(); 

$smarty->assign("security_settings",$security_settings);
$smarty->assign("error",$errors_str);
$smarty->assign("successful", $successful);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('security_settings.html');

$db->close();
close();

function gcd($n,$m){
if(!$m)return$n;return gcd($m,$n%$m);
}

?>