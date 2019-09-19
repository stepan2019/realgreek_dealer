<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

if(isset($_GET['code']) && $_GET['code']) { echo($_GET['code']); exit(0); }


require_once "../../include/include.php";
require_once '../../../modules/social_networks/classes/social_networks.php';

// check if curl is installed
if(!_isCurl()) exit(0);

$sn = new social_networks;
$sn_settings = $sn->getSettings();

global $config_abs_path;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/admin/modules/social_networks/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/admin/modules/social_networks/lang/eng.php";
require_once $lang_file;

global $lng_sn;

$ret = array("response" =>0, "error" => "", "info" => "", "expires" => 0);

// get facebook page access token
if(isset($_GET['page']) && $_GET['page']==1) {

	if (!$sn_settings['fb_access_token']) {

		$ret['error'] = $lng_sn['error']['user_access_token'];

	}

	if(isset($_POST['pageid']) && $_POST['pageid']) $pageid = $_POST['pageid'];
	else {
		$ret['error']=$lng_sn['error']['pageid'];
		echo json_encode($ret);
		exit(0);
	}
	
	$url="https://graph.facebook.com/me/accounts?access_token=".$sn_settings['fb_access_token'];
	$ch = curl_init();
			
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$data = trim(curl_exec($ch));
	curl_close($ch);

	$data_json = json_decode($data, true);

	foreach($data_json['data'] as $d) {

		if($d['id']==$pageid) {

			$page_access_token = $d['access_token'];
			break;
		}

	}

	if($page_access_token) {

		$sn->setPageAccessToken($page_access_token);
		$sn->setPageID($pageid);
		$ret['info'] = $lng_sn['info']['page_access_token_configured'];
		$ret['response'] = 1;

	}
	else {
		$ret['error']="There was an error while retrieving the access token. The response was: <br/><pre>".$data."</pre>"; 
	
	}

	echo json_encode($ret);
	exit(0);
}

if(isset($_POST['code']) && $_POST['code']) $code = $_POST['code'];
else {
	$ret['error']=$lng_sn['error']['code'];
	echo json_encode($ret);
	exit(0);
}


global $config_live_site;
$redirect_uri=$config_live_site."/admin/modules/social_networks/get_fb_access_token.php";

$url = "https://graph.facebook.com/oauth/access_token?client_id={$sn_settings['fb_appid']}&client_secret={$sn_settings['fb_secret']}&code=".$code."&redirect_uri=".$redirect_uri;

$ch = curl_init();
			
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$data = trim(curl_exec($ch));
curl_close($ch);

$data_json = json_decode($data, true);
if(json_last_error() == JSON_ERROR_NONE) 
{
	$ret['error']=$data_json['error']['type']." Error code: ".$data_json['error']['code']." : ".$data_json['error']['message']; 
	echo json_encode($ret);
	exit(0);
}

// get access_token and expires
$data_array = explode("&", $data);
$at = $data_array[0];
$at_arr = explode("=", $at);
if($at_arr[0]=="access_token") $access_token = $at_arr[1]; else $access_token='';

// check when expires
//https://developers.facebook.com/tools/debug/access_token
$expires = '';
if(isset($data_array[1])) {
	$e = $data_array[1];
	$e_arr = explode("=", $e);
	if($e_arr[0]=="expires") { 
		$expires = $e_arr[1]; 
		$ret['expires'] = 1;
	}
	else $expires='';
}


if($access_token) {

	$sn->setAccessToken($access_token, $expires);
	$ret['info'] = $lng_sn['info']['access_token_configured'];
	$ret['response'] = 1;

}
else {
	$ret['error']="There was an error while retrieving the access token. The response was: <br/><pre>".$data."</pre>"; 
	echo json_encode($ret);
	exit(0);
	
}

echo json_encode($ret);

?>