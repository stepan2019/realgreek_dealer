<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:19
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:18586166395d77bfe79dc774_77928467%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3086e91291c5f64c07880f90d01eecfbba1c090f' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/index.html',
      1 => 1506472084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18586166395d77bfe79dc774_77928467',
  'variables' => 
  array (
    'settings' => 0,
    'banners_positions' => 0,
    'section' => 0,
    'cat' => 0,
    'bloc' => 0,
    'array_banners' => 0,
    'content' => 0,
    'ads_settings' => 0,
    'lng' => 0,
    'ck' => 0,
    'modules_array' => 0,
    'news' => 0,
    'no_latest_visited' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe7a0e791_34531486',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe7a0e791_34531486')) {
function content_5d77bfe7a0e791_34531486 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18586166395d77bfe79dc774_77928467';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_bounds pb30">




<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations']) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("header_choose_locations.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array('firstpage1',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('firstpage1',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?>
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
<div class="center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>




<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>




<div id="tabs1" class="tabs">

<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("0", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
	<input id="tab_featured" type="radio" name="tabs" checked>
	<label for="tab_featured"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['featured_ads'];?>
</label>
	<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_latest']) {?>
	<input id="tab_latest" type="radio" name="tabs" <?php if (!$_smarty_tpl->tpl_vars['ck']->value) {?>checked<?php }?>>
	<label for="tab_latest"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['latest_ads'];?>
</label>
	<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if (in_array("popular_ads",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/popular_ads/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

    <?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if (in_array("latest_auctions",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/latest_auctions/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

    <?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if (in_array("video_ads",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/video_ads/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

    <?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("featured.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_latest']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("latest.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("popular_ads",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/popular_ads/popular_ads.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("latest_auctions",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/latest_auctions/latest_auctions.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("video_ads",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/video_ads/video_ads.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<div class="clearfix"></div>
</div> 


<?php if (in_array('firstpage2',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('firstpage2',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?>
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
<div class="center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>




<div id="tabs2" class="tabs">
<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("0", null, 0);?>

<?php if (in_array("browse_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/browse_location/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

	<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if (in_array("browse_make",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/browse_make/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

	<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>

<?php if (in_array("tag_cloud",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/tag_cloud/fp_tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ck'=>$_smarty_tpl->tpl_vars['ck']->value), 0);
?>

	<?php $_smarty_tpl->tpl_vars["ck"] = new Smarty_Variable("1", null, 0);?>
<?php }?>


<?php if (in_array("tag_cloud",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/tag_cloud/tag_cloud.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("browse_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/browse_location/browse_location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("browse_make",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/browse_make/browse_make.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

</div> 



<?php if (in_array('firstpage3',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('firstpage3',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?>
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
<div class="center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>




<?php if (in_array("news",$_smarty_tpl->tpl_vars['modules_array']->value) && count($_smarty_tpl->tpl_vars['news']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/news/news_summary.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>





<?php if (in_array("latest_visited",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['no_latest_visited']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/latest_visited/listings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>




<?php if (in_array('firstpage4',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('firstpage4',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php if (count($_smarty_tpl->tpl_vars['array_banners']->value)) {?>
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
<div class="center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>




<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/sn_page_plugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ("js/index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>