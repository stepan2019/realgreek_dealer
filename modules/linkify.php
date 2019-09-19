<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("linkify", $modules_array)) return;

//, $listing_id, $listing_array
function Linkify_addToTemplate($smarty) {

    $file = "modules/linkify/details.html";
    $details_bottom_inclusions = $smarty->getTemplateVars('details_bottom_inclusions');
    if(!$details_bottom_inclusions) $details_bottom_inclusions = array();
    array_push( $details_bottom_inclusions, $file);
    $smarty->assign("details_bottom_inclusions", $details_bottom_inclusions);

}


add_action('details_page', 'Linkify_addToTemplate');

?>