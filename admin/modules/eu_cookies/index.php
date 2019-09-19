<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/eu_cookies/classes/eu_cookies.php';

global $db;
global $lng;

global $config_abs_path;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/admin/modules/eu_cookies/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/admin/modules/eu_cookies/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_euc",$lng_euc);

$euc = new eu_cookies();
$edit_cp_link = $euc->getCPLink();

$edit_settings_cp_link = $config_live_site."/admin/edit_custom_page.php?id=$edit_cp_link";
$edit_content_cp_link = $config_live_site."/admin/edit_content.php?id=$edit_cp_link";
$edit_notice_link = $config_live_site."/admin/info_templates.php?template=eu_cookie";

$smarty->assign("edit_settings_cp_link",$edit_settings_cp_link);
$smarty->assign("edit_content_cp_link",$edit_content_cp_link);
$smarty->assign("edit_notice_link",$edit_notice_link);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/eu_cookies/index.html');

$db->close();
close();
?>
