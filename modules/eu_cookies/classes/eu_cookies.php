<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class eu_cookies {

	var $tmp;
	var $error;

	public function __construct()
	{

	}

	function getCPLink() {
		
		global $db, $config_live_site;
		// get cp id with "eu_cookie" code
		$id = $db->fetchRow("select `id` from ".TABLE_CUSTOM_PAGES." where `code` like 'eu_cookie'");
		return $id;

	}

}
?>
