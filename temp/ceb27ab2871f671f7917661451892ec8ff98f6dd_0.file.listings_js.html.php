<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:31
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/listings_js.html" */ ?>
<?php
/*%%SmartyHeaderCode:6181955325d77bff3b61b45_32347855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb27ab2871f671f7917661451892ec8ff98f6dd' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/listings_js.html',
      1 => 1513994036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6181955325d77bff3b61b45_32347855',
  'variables' => 
  array (
    'live_site' => 0,
    'post_json' => 0,
    'ads_settings' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bff3b9f984_14964778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bff3b9f984_14964778')) {
function content_5d77bff3b9f984_14964778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6181955325d77bff3b61b45_32347855';
?>

<?php echo '<script'; ?>
>

$(document).ready(function() {

$("#save-search").click(function (event) {

$.post( "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/save_search.php?post=1", { post_str: '<?php if (isset($_smarty_tpl->tpl_vars['post_json']->value)) {
echo $_smarty_tpl->tpl_vars['post_json']->value;
}?>' })
	.done(function( data ) {

	if(data==0) {

		$(".search_info").show();
		return;

	}

	$(".search_error").html("<p>"+data+"</p>");
	$(".search_error").show();

	});
 })

 
<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?>


	$(".info").hide();

var options = { 

	beforeSerialize: function(jqForm, options){ $("body").addClass("loading") },
        beforeSubmit:  function(formData, jqForm, options) {var queryString = $.param(formData);  return true;  }, 
        success:       successResponse 
 
   }; 

function successResponse(responseText, statusText, xhr, $form)  { 

	var ret = JSON.parse(responseText);

	$("body").removeClass("loading");

	if(ret.response==1) {

		$(".alert_info").html("<p>"+ret.info+"</p>");
		$(".alert_info").show();
		$(".alert_content").slideUp();
		return;

	}

	// response = 0 -> there are errors
	$(".alert_error").html("<p>"+ret.error+"</p>");
	$(".alert_error").show();

} 

 $('#alert').ajaxForm(options);


<?php }?> 
 

$("#show_save_search").click(function (event) {

	if($(".save_search_details").is(":visible"))
		$(".save_search_details").slideUp();
	else { 
		$(".save_search_details").slideDown();
		$('html,body').animate({scrollTop:$(".save_search_details").offset().top}, 'slow');
	}	

});

$(".show_refine").click(function (event) {

	$(".search_left").slideDown();
	$(".show_refine").hide();
	$(".hide_refine").css('display', 'inline-block');

});
$(".hide_refine").click(function (event) {

	$(".search_left").slideUp();
	$(".show_refine").css('display', 'inline-block');
	$(".hide_refine").hide();

});

});// end document ready

$("#with_pic").change(function (event) { 

	if ($('#with_pic').val('on'));
	$("#search").submit();

});

$("#with_auction").change(function (event) { 

	if ($('#with_auction').val('on'));
	$("#search").submit();

});

$(".refine_heading").click(function (event) {

	if(window.innerWidth<=900) {
		if($(".refine").is(":visible") )
			$(".refine").hide();
		else 
			$(".refine").show();
	}

});

$(document).on("click", "a.addtofav", function(){

	var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
	var listing_id = $(this).attr("id").substr(3);
	makeFavorite(listing_id, live_site);

	var id = $(this).attr("id");
    // change class to addtofav
    $("#"+id).attr('class', 'remfav fbavr tooltip');
    // change title to {$lng.listings.remove_favourite
    $("#"+id).attr('title', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['remove_favourite'];?>
');
    // change inner div class to "starfav sl-rem-fav"
    $("#"+id).find("div").attr('class', 'starfav sl-rem-fav');
	
  }
);


$(document).on("click", "a.remfav", function(){

	var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
	var listing_id = $(this).attr("id").substr(3);
	remFavorite(listing_id, live_site);

	var id = $(this).attr("id");
    // change class to addtofav
    $("#"+id).attr('class', 'addtofav fbavr tooltip');
    // change title to {$lng.listings.remove_favourite
    $("#"+id).attr('title', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['add_to_favourites'];?>
');
    // change inner div class to "starfav sl-rem-fav"
    $("#"+id).find("div").attr('class', 'starfav sl-make-fav');

  }
);

<?php echo '</script'; ?>
>
<?php }
}
?>