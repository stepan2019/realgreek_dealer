<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:20
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/header_js.html" */ ?>
<?php
/*%%SmartyHeaderCode:18337649845d77bfe8418dc9_03801195%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33589eb0e1a448330820c9002ac466e20c31cbfd' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/header_js.html',
      1 => 1520603402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18337649845d77bfe8418dc9_03801195',
  'variables' => 
  array (
    'live_site' => 0,
    'appearance' => 0,
    'settings' => 0,
    'ads_settings' => 0,
    'languages' => 0,
    'banners_positions' => 0,
    'keyword_name' => 0,
    'multi_depending' => 0,
    'cat' => 0,
    'c' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe842bcf3_28400511',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe842bcf3_28400511')) {
function content_5d77bfe842bcf3_28400511 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '18337649845d77bfe8418dc9_03801195';
?>
<?php echo '<script'; ?>
>
//<![CDATA[


// redirect if media queries are not enabled
function mediaQueriesEnabled () {
    return (typeof window.matchMedia != "undefined" || typeof window.msMatchMedia != "undefined");
}

function isIE () {
  var myNav = navigator.userAgent.toLowerCase();
  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}

if (isIE () && isIE () < 9) window.location.href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/bns.php";
// end redirect if media queries are not enabled

site_width=<?php echo $_smarty_tpl->tpl_vars['appearance']->value['outer_table'];?>
;
<?php if ($_smarty_tpl->tpl_vars['settings']->value['google_maps_api_key']) {?>gmak='<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_api_key'];?>
';<?php }?>

gmalng='<?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['gm_api_lang'])) {
echo $_smarty_tpl->tpl_vars['ads_settings']->value['gm_api_lang'];
}?>';
gmareg='<?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['limit_location_autosuggest'])) {
echo $_smarty_tpl->tpl_vars['ads_settings']->value['limit_location_autosuggest'];
}?>';

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_location_autosuggest']) {?>places=1;<?php } else { ?>places=0;<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search']) {?>dsearch=1;<?php } else { ?>dsearch=0;<?php }?>
exdate=new Date();
exdate.setDate(exdate.getDate() + 365);
var frontend = 1;
var no_languages = <?php echo count($_smarty_tpl->tpl_vars['languages']->value);?>
;

jQuery(document).ready(function() {

if(places || dsearch) { 
	load_gmaps();
}

if(dsearch && !places) {

	$("#qs_location").change(function(event){ 
	
		// fill in qs_lat and qs_long with the location coordinates
		var geocoder =  new google.maps.Geocoder();
		geocoder.geocode( { 'address': $("#qs_location").val()}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				$("#qs_lat").val(results[0].geometry.location.lat());
				$("#qs_long").val(results[0].geometry.location.lng());
				$("#qs_dist").prop('disabled', false);
				
			} else {
				//alert("Something got wrong " + status);
				$("#qs_lat").val('');
				$("#qs_long").val('');
				$("#qs_dist").prop('disabled', true);
			}
		});

	});
	
}

//alert(navigator.userAgent)
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

$("#show_search").click(function(){ 
 
	$("#nav").slideUp();
	$("#quick-search").slideDown();
	$("#menu").toggleClass("change");

});

 	// show left and right banners only if the window is wide enough
 	if( window.innerWidth >= site_width+100) {

	// get position for left and right banners
	var left_page_pos = $(".page").offset().left;
	var right_page_pos = left_page_pos + $(".page").width()+10;
	var top_page_pos = $(".page").offset().top;

<?php if (in_array('left',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>


	$(".left_banners").css({top: top_page_pos, left: left_page_pos-$(".left_banners").width()-10, position:'absolute'});
	$(".left_banners").fadeIn();


<?php }?>
<?php if (in_array('right',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

	$(".right_banners").css({top: top_page_pos, left: right_page_pos, position:'absolute'});
	$(".right_banners").fadeIn();

<?php }?>


	lb_height = $(".left_banners").height();
	rb_height = $(".right_banners").height();
	page_bottom = $("footer").offset().top;

  	$(window).scroll(function () {

 		set2 = $(document).scrollTop()+20;

		if(set2<top_page_pos) set3 = top_page_pos+"px";
		else set3 = set2+"px";


<?php if (in_array('left',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

 		if(set2+lb_height<page_bottom)
 		$('.left_banners').animate({top:set3},{duration:500,queue:false});

<?php }?>
<?php if (in_array('right',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

 		if(set2+rb_height<page_bottom)
 		$('.right_banners').animate({top:set3},{duration:500,queue:false});

<?php }?>


	}); // end on window scroll

	} // end show left and right banners only if the window is wide enough

	// back to top button
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
	//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700,
	//grab the "back to top" link
	$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	// end back to top button
	
	$("#remove_qs_keyword").click(function(){ 
		$("#qs_<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
").val('');
		$("#qsearch").submit();
	
	});
	$("#remove_qs_location").click(function(){ 
		$("#qs_location").val('');
		$("#qs_dist").val('');
		$("#qsearch").submit();
	
	});
	$("#qs_category").change(function(){ 
		//$("#qsearch").submit();
		
		onQuickSearch('qsearch', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
'); <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value) {?>reloadDep('<?php echo $_smarty_tpl->tpl_vars['multi_depending']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');<?php }?>
		

	});
	
	
	<?php if ($_smarty_tpl->tpl_vars['cat']->value) {?>
	onQuickSearch('qsearch', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
'); <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value) {?>reloadDep('<?php echo $_smarty_tpl->tpl_vars['multi_depending']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');<?php }?>
	<?php }?>
	

}); // end document ready


<?php if (in_array('left',$_smarty_tpl->tpl_vars['banners_positions']->value) || in_array('right',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>


// show left and right banners only if the window is wide enough
if( window.innerWidth >= site_width+100) {

$(window).on("resize", function(){

	// get position for left and right banners
	left_page_pos = $(".page").offset().left;
	right_page_pos = left_page_pos + $(".page").width()+10;
	top_page_pos = $(".page").offset().top;


<?php if (in_array('left',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>


	$(".left_banners").css({top: top_page_pos, left: left_page_pos-$(".left_banners").width()-10, position:'absolute'});
	$(".left_banners").fadeIn();


<?php }?>
<?php if (in_array('right',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

	$(".right_banners").css({top: top_page_pos, left: right_page_pos, position:'absolute'});
	$(".right_banners").fadeIn();

<?php }?>


}); // end on resize

} // end show left and right banners only if the window is wide enough


<?php }?>

function toggleMenu(x) {

	x.classList.toggle("change");
	if($("#nav").is(":visible"))
		$("#nav").slideUp();
	else $("#nav").slideDown();
	
}

function toggleLocation() {

	if($("#locations_list").is(":visible"))
		$("#locations_list").slideUp();
	else $("#locations_list").slideDown();
	
}

WebFont.load({
    google: {
      families: ['Open Sans:400,600,700', 'Roboto']
    }
});

function enable_autocomplete() {

	var input = document.getElementById('qs_location');
	var options = {
	geocode: 1<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['limit_location_autosuggest']) {?>,
	strictBounds: true,
	componentRestrictions: {
            country: ['<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ads_settings']->value['limit_location_autosuggest'],",","','");?>
']
          }<?php }?>

	};

	autocomplete = new google.maps.places.Autocomplete(input, options);
	autocomplete.addListener('place_changed', fillInLocationFields);

	
} // end enable_autocomplete

function fillInLocationFields() {

      var componentForm = {
      <?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['address_components'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		<?php if ($_smarty_tpl->tpl_vars['c']->value['field']) {
echo $_smarty_tpl->tpl_vars['k']->value;?>
: '<?php echo $_smarty_tpl->tpl_vars['c']->value['type'];?>
',<?php }?>
      <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
      };

      var componentMapForm = {
      <?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['address_components'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		<?php if ($_smarty_tpl->tpl_vars['c']->value['field']) {
echo $_smarty_tpl->tpl_vars['k']->value;?>
: '<?php echo $_smarty_tpl->tpl_vars['c']->value['field'];?>
',<?php }?>
      <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
      };
	  var place = autocomplete.getPlace();

        for (var component in componentMapForm) {
          document.getElementById("qs_"+componentMapForm[component]).value = '';
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        var found_loc = 0;
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];

          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById("qs_"+componentMapForm[addressType]).value = val;
            found_loc = 1;
          }
        }

        if(dsearch) {
			$("#qs_lat").val();
			$("#qs_long").val();
			$("#qs_dist").prop('disabled', true);

			$("#qs_lat").val(place.geometry.location.lat());
			$("#qs_long").val(place.geometry.location.lng());
			$("#qs_dist").prop('disabled', false);
		}
}


//]]>
<?php echo '</script'; ?>
>


<?php }
}
?>