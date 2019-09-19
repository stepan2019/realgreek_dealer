<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("ratings", $modules_array)) return;

function rating_listing($smarty, $listing_id, $listing_array) {

	global $smarty;
	global $config_abs_path;
	global $lng_ratings;
	require_once $config_abs_path."/modules/ratings/include.php";

	$rc = new ratings();
	$rs = $rc->getSettings();

	$smarty->assign("ratings_settings",$rs);

	if($rs['rate_listings']) {

		$ip = getRemoteIp();
		$voted = $rc->getVoted($listing_id);

		global $crt_usr;
		$same_user = 0;
		if($rs['cannot_rate_oneself'] && ( $listing_array['user_id'] >0  && ($listing_array['user_id'] == $crt_usr || $listing_array['user']['ip'] == $ip) )) $same_user = 1;

		$rating_nologin = 0;
		if(!$crt_usr && $rs['require_login']) $rating_nologin = 1;

		$smarty->assign("lng_ratings",$lng_ratings);
		$smarty->assign("voted",$voted);
		$smarty->assign("ip",$ip);
		$smarty->assign("same_user",$same_user);
		$smarty->assign("rating_nologin",$rating_nologin);

		if($rs['ar_enable_reviews']) {

			require_once $config_abs_path."/classes/paginator.php";

			if($rs['require_login']==1) {
				global $seo_settings, $self_noext;
				/*if($seo_settings['enable_mod_rewrite']) {

					$seo = new seo();
					$loc = $seo->makeDetailsLink($listing_id);

				}
				else */
				$loc=$self_noext.'.php?id='.$listing_id;

				global $config_live_site;
				$login_link = $config_live_site."/login.php?loc=".$loc;
				$smarty->assign("login_link", $login_link);
			}

			$reviews_array = $rc->getReviews($listing_id, 1,  'ad');
			$smarty->assign("reviews_array", $reviews_array);


			$no_reviews = $rc->getNoActiveReviews($listing_id, 'ad');
			$smarty->assign("no_reviews", $no_reviews);

			$paginator = new paginator($rs['ar_no_on_page']);
			$paginator->setItemsNo($no_reviews);
			$paginator->setPrefix("lr_");
			$paginator->paginate($smarty);

			$smarty->assign("no_reviews", $no_reviews);

			$smarty->assign("aid", $listing_id);
			$smarty->assign("user_id", $listing_array['user_id']);

		} // end enable reviews


	}

}

function rating_user($smarty, $user_id, $user_array) {

	global $smarty;
	global $config_abs_path;
	global $lng_ratings;
	require_once $config_abs_path."/modules/ratings/include.php";

	$rc = new ratings();
	$rs = $rc->getSettings();
	$smarty->assign("ratings_settings",$rs);
	if($rs['rate_users']) {

		$ip = getRemoteIp();
		$voted = $rc->getVoted($user_id, "user");

		global $crt_usr;
		$same_user = 0;
		if($rs['cannot_rate_oneself'] && $user_id==$crt_usr) $same_user = 1;

		$rating_nologin = 0;
		if(!$crt_usr && $rs['require_login']) $rating_nologin = 1;

		$smarty->assign("lng_ratings",$lng_ratings);
		$smarty->assign("voted",$voted);
		$smarty->assign("ip",$ip);
		$smarty->assign("same_user",$same_user);
		$smarty->assign("rating_nologin",$rating_nologin);

		if($rs['enable_reviews']) {

			if($rs['require_login']==1) {

			global $seo_settings, $self_noext;
			if($seo_settings['enable_mod_rewrite']) {

				$seo = new seo();
				if($self_noext=="store")
					$loc = $seo->makeDealerLink($user_id);
				else 
					$loc = $seo->makeUserListingsLink($user_id);

			}
			else $loc=$self_noext.'.php?id='.$user_id;

			global $config_live_site;
			$login_link = $config_live_site."/login.php?loc=".$loc;
			$smarty->assign("login_link", $login_link);

			}

			$reviews_array = $rc->getReviews($user_id, 1, 'user');
			$smarty->assign("reviews_array", $reviews_array);
			$no_reviews = $rc->getNoActiveReviews($user_id, 'user');

			require_once $config_abs_path."/classes/paginator.php";
			$paginator = new paginator($rs['no_on_page']);
			$paginator->setItemsNo($no_reviews);
			$paginator->setPrefix("ur_");
			$paginator->paginate($smarty);

			$smarty->assign("no_reviews", count($reviews_array));

		} // end enable reviews

	}

}

function delete_listing_ratings($id) {
	
	global $config_abs_path;
	require_once $config_abs_path."/modules/ratings/classes/ratings.php";

	$rc = new ratings();
	$rc->deleteListingRatings($id);

}

function delete_user_ratings($id) {

	global $config_abs_path;
	require_once $config_abs_path."/modules/ratings/classes/ratings.php";

	$rc = new ratings();
	$rc->deleteUserRatings($id);

}

function short_rating_listing($smarty) {

	global $smarty;
	global $config_abs_path;

	global $config_abs_path;
	require_once $config_abs_path."/modules/ratings/classes/ratings.php";

	$rc = new ratings();
	$rs = $rc->getSettings();

	$smarty->assign("ratings_settings",$rs);

}

add_action('listings_page', 'short_rating_listing');
add_action('details_page', 'rating_listing');
add_action('user_page', 'rating_user');
add_action('delete_listing', 'delete_listing_ratings');
add_action('delete_user', 'delete_user_ratings');

?>