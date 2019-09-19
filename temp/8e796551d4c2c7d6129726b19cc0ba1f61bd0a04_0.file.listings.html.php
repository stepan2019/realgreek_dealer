<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:29
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/listings.html" */ ?>
<?php
/*%%SmartyHeaderCode:15771861035d77bff140a2e4_76610465%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e796551d4c2c7d6129726b19cc0ba1f61bd0a04' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/listings.html',
      1 => 1530189406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15771861035d77bff140a2e4_76610465',
  'variables' => 
  array (
    'no_listings' => 0,
    'ads_settings' => 0,
    'text_direction' => 0,
    'total_items' => 0,
    'appearance' => 0,
    'lng' => 0,
    'keyword_name' => 0,
    'post_array' => 0,
    'category_name' => 0,
    'show_link' => 0,
    'banners_positions' => 0,
    'section' => 0,
    'cat' => 0,
    'bloc' => 0,
    'array_banners' => 0,
    'listings_array' => 0,
    'modules_array' => 0,
    'no_latest_visited' => 0,
    'listings_bottom_inclusions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bff154d423_65555892',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bff154d423_65555892')) {
function content_5d77bff154d423_65555892 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '15771861035d77bff140a2e4_76610465';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['no_listings']->value > 0) {?>

<style type="text/css">
@media all and (min-width: 800px) {
	.classified .smallimg { width: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_width']+2;?>
px; height: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_height']+2;?>
px; }
	.rclass { <?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>margin-right: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_width']+10;?>
px;<?php } else { ?>margin-left: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_width']+10;?>
px;<?php }?> min-height: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_height']+2;?>
px;}
}
.rclass { min-height: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_height']+2;?>
px;}
.highlited { background: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_color'];?>
; }
</style>

<?php }?>

<div class="page_bounds pb30 relative">

<div class="top_search fbc">

<h1 class="total_results fb"><?php echo number_format($_smarty_tpl->tpl_vars['total_items']->value,0,((string)$_smarty_tpl->tpl_vars['appearance']->value['number_format_point']),((string)$_smarty_tpl->tpl_vars['appearance']->value['number_format_separator']));?>
 <?php if ($_smarty_tpl->tpl_vars['total_items']->value == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['result'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['ads'];
}?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['for'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value];
}?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['category']) && $_smarty_tpl->tpl_vars['post_array']->value['category']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['in'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['category_name']->value;
}?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['location']) && $_smarty_tpl->tpl_vars['post_array']->value['location']) {
if (isset($_smarty_tpl->tpl_vars['post_array']->value['dist']) && $_smarty_tpl->tpl_vars['post_array']->value['dist']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['at'];?>
 <?php echo $_smarty_tpl->tpl_vars['post_array']->value['dist'];
echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['distance_from'];
} else { ?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['in'];
}?>&nbsp;<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['post_array']->value['location']);
}?>
</h1>

<div class="display_mode<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_map_search'] && $_smarty_tpl->tpl_vars['no_listings']->value) {?>_map<?php }?> fb"><?php if ($_smarty_tpl->tpl_vars['no_listings']->value) {
if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_map_search']) {?><a href="javascript:;" id="showMap" class="map_btn" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['map_visible']) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_map'];?>
</a><a href="javascript:;" id="hideMap" class="map_btn" <?php if (!$_smarty_tpl->tpl_vars['ads_settings']->value['map_visible']) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['hide_map'];?>
</a><?php }
}?><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
:</span>&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['post_array']->value['show'] != "list") {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['show_link']->value,'##show##','list');?>
"><?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['list'];
if ($_smarty_tpl->tpl_vars['post_array']->value['show'] != "list") {?></a><?php }?>&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['post_array']->value['show'] == "list") {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['show_link']->value,'##show##','gallery');?>
"><?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['gallery'];
if ($_smarty_tpl->tpl_vars['post_array']->value['show'] == "list") {?></a><?php }?></div> 

</div> 
<div class="clearfix"></div>

<section>
<h2 class="show_refine<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_by_account_type']) {
}?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['refine_your_search'];?>
</h2>
<div class="hide_refine hidden"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['hide_refine'];?>
</div>
<div class="clearfix"></div>
<div class="search_left">


<?php echo $_smarty_tpl->getSubTemplate ("refine.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php if (in_array('listings1',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('listings1',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="vert_banners"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype_refine"), 0);
?>
</div><div class="clearfix"></div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>

</div> 
</section>


<section class="search_right">

	<?php echo $_smarty_tpl->getSubTemplate ("order_listings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="search_res">
	
	<?php if ($_smarty_tpl->tpl_vars['no_listings']->value > 0 && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_map_search']) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("listings_map.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?> 

	
	<?php if (in_array('listings2',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
	<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('listings2',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

	<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<div class="center mt10"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypelp_rc"), 0);
?>
</div><div class="clearfix"></div>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	<div class="clearfix"></div>
	<?php }?>
	

	<?php if ($_smarty_tpl->tpl_vars['no_listings']->value > 0) {?>
	
		<?php if ($_smarty_tpl->tpl_vars['post_array']->value['show'] == "list") {?>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['listings_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_listings'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_listings']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<?php echo $_smarty_tpl->getSubTemplate ("short_listing.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


			<?php if (((isset($_smarty_tpl->tpl_vars['__foreach_listings']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_listings']->value['index'] : null)+1) == floor($_smarty_tpl->tpl_vars['appearance']->value['ads_per_page']/2) && (isset($_smarty_tpl->tpl_vars['__foreach_listings']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_listings']->value['index'] : null) != count($_smarty_tpl->tpl_vars['listings_array']->value)-1) {?>
			
			<?php if (in_array('listings4',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
			<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('listings4',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

			<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?><div class="clearfix mt10 mb10"></div><div class="dcenter"><?php }?>
			<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<div class="center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypelp_rc"), 0);
?>
</div><div class="clearfix"></div>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?></div><?php }
}?>
			
			<?php }?>

		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		
		<?php } else { ?>

		<div id="listings_gallery">
		<?php
$_from = $_smarty_tpl->tpl_vars['listings_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_listings'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_listings']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		
			<?php echo $_smarty_tpl->getSubTemplate ("short_listing_gallery.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</div>
		<div class="clearfix"></div>
		
		<?php echo '<script'; ?>
>
		//<![CDATA[
		jQuery(document).ready(function() {

		$('#listings_gallery').imagesLoaded( function() {
			startMasonryGallery();
		});
	
		});

		function startMasonryGallery() {

			$('#listings_gallery').masonry({
			// options
			itemSelector: '.box-container'
			});

		}

		//]]>
		<?php echo '</script'; ?>
>

		<?php }?> 

		
		<?php if (in_array('listings3',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
		<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('listings3',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

		<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<div class="center mt10"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypelp_rc"), 0);
?>
</div><div class="clearfix"></div>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		<div class="clearfix"></div>
		<?php }?>
		
		
	<?php } else { ?>
	<div class="xsize mt20 mb40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['no_results'];?>
</div>
	<?php }?> 
	
	</div> 
	
	<?php if ($_smarty_tpl->tpl_vars['no_listings']->value > 0) {?>
	<div class="center mt10 mb10">
	<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['saved_searches_enabled'] || $_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?>
	<div class="save_search center <?php if (!$_smarty_tpl->tpl_vars['no_listings']->value) {?>mt20<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['save_your_search2'];?>

	<a href="javascript:;" class="button outline ml10" id="show_save_search"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['save_search'];?>
</a>
	</div>
	<?php }?>

</section> 

<div class="clearfix"></div>


<?php if (in_array("latest_visited",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['no_latest_visited']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/latest_visited/listings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

</div> 

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['saved_searches_enabled'] || $_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("save_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['listings_bottom_inclusions']->value)) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['listings_bottom_inclusions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['v']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("js/listings_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>