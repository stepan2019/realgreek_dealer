<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";

require_once "classes/info.php";

global $db, $lng, $settings;
$post = get_numeric("post", 0);
if (isset($_GET['loc'])) $loc = escape($_GET['loc']); else $loc = '';

if (!$post) {

    global $config_live_site;
    $live = $config_live_site;

    $smarty = new Smarty;
    $smarty = common($smarty);
    $smarty->assign("lng", $lng);
    $smarty->assign("section", "login-register");

    $general_info = info::getVal("login");
    $smarty->assign("general_info", $general_info);

    // if logged in, redirect towards user account
    global $logged_in, $is_admin, $is_aff;
    if ($logged_in) {
        header("Location: " . $config_live_site . "/useraccount.php");
        exit(0);
    }

    if ($is_admin) {
        header("Location: " . $config_live_site . "/admin/index.php");
        exit(0);
    }

    // ...fix for logging out admin when the site is accesses with a different domain than $config_live_site
    /*global $mobile_settings;
    if( (!$settings['enable_locations'] || !$settings['enable_subdomains']) && (!$is_mobile || !$mobile_settings['enable_mobile_subdomain']) && $live!=$config_live_site) {
        if($loc) $loc_str = "?loc=".$loc;
        header("Location: ".$live."/login.php".$loc_str);
        exit(0);
    }*/

    $smarty->assign("loc", $loc);

} // end not post

else {
    my_session_start();
}

if ($post) {

    $ret = array("response" => 0, "error" => array(), "redirect" => "");

    $auth = new auth();
    $auth->clearlogin();

    // check captcha if enabled
    if ($settings['login_captcha']) {

        global $config_abs_path;
        require_once $config_abs_path . "/include/captcha.php";
        $error = checkCaptcha();
        if ($error) $ret['error'] = $error;

    }
    if (!$ret['error']) {

        $ip = getRemoteIp();

        require_once "classes/users.php";
        if ($auth->haslogin()) {

            $auth->savelogin($ip);
            if (!empty($loc)) $ret['redirect'] = $loc;
            $ret['response'] = 1;

        } else

            if ($auth->admin_haslogin()) {

                $auth->admin_savelogin($ip);
                if (isset($loc) && $loc != '') $ret['redirect'] = $loc; else $ret['redirect'] = "admin/index.php";
                $ret['response'] = 1;

            } else {
                $ret['error'] = $auth->getLoginError();

                $ret['response'] = $auth->saveFailedLogin($ip);
                //$ret['response'] = 0;

            }

    }

    global $config_abs_path;
    require_once $config_abs_path . "/libs/JSON.php";

    global $appearance_settings;
    if (strtolower($appearance_settings['charset']) != "utf-8") $ret = utf8_encode_all($ret);

//header('Content-type: text/html; charset='.$appearance_settings['charset']);

    echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
    session_write_close();
    exit();

}

if ($db->error != '') {
    $db_error = $db->getError();
    $smarty->assign('db_error', $db_error);
}

if (!$post) {
    $smarty->display('login.html');
    close();
}

$db->close();
?>
