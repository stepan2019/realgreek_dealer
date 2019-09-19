<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:21
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:4523920325d77bfe93f4d64_83032454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202b45d33895d3460233e397e6c91d02e0231a29' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/footer.html',
      1 => 1531178052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4523920325d77bfe93f4d64_83032454',
  'variables' => 
  array (
    'banners_positions' => 0,
    'section' => 0,
    'cat' => 0,
    'bloc' => 0,
    'array_banners' => 0,
    'main_navbar' => 0,
    'cp' => 0,
    'seo_settings' => 0,
    'live_site' => 0,
    'sec_navbar' => 0,
    'modules_array' => 0,
    'dealers_page_settings' => 0,
    'crt_lang' => 0,
    'field_name' => 0,
    'logged_in' => 0,
    'is_admin' => 0,
    'sef_links' => 0,
    'lng' => 0,
    'settings' => 0,
    'no_rss' => 0,
    'rss_array' => 0,
    'v' => 0,
    'template_path' => 0,
    'appearance' => 0,
    'cmp' => 0,
    'lng_compare' => 0,
    'bottom_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe9424333_19019812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe9424333_19019812')) {
function content_5d77bfe9424333_19019812 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4523920325d77bfe93f4d64_83032454';
?>

<div class="page_bounds">


<?php if (in_array('footer',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('footer',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

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
<div class="center fbn"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>


</div>
</main>

<footer>
<div class="page_bounds fbc_inv">
	<nav id="secnav" class="fb_inv">
	
		
		<?php if (count($_smarty_tpl->tpl_vars['main_navbar']->value)) {?>
		<ul>
		<?php
$_from = $_smarty_tpl->tpl_vars['main_navbar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->value) {
$_smarty_tpl->tpl_vars['cp']->_loop = true;
$foreach_cp_Sav = $_smarty_tpl->tpl_vars['cp'];
?>
		
			<li <?php if (isset($_smarty_tpl->tpl_vars['cp']->value['parent']) && $_smarty_tpl->tpl_vars['cp']->value['parent']) {?>class="parent"<?php }?>>
			<?php if (!isset($_smarty_tpl->tpl_vars['cp']->value['parent']) || !$_smarty_tpl->tpl_vars['cp']->value['parent']) {?>
				<?php if ($_smarty_tpl->tpl_vars['cp']->value['type'] == 1) {?>
				<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeCustomPageLink($_smarty_tpl->tpl_vars['cp']->value['id'],$_smarty_tpl->tpl_vars['cp']->value['title'],$_smarty_tpl->tpl_vars['cp']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/content.php?id=<?php echo $_smarty_tpl->tpl_vars['cp']->value['id'];
}?>" <?php if ($_smarty_tpl->tpl_vars['cp']->value['blank'] == 1) {?>target="_blank"<?php }?>>
				<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['cp']->value['hreflink'];?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['blank'] == 1) {?>target="_blank"<?php }?>>
				<?php }?>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['cp']->value['title'];?>

			<?php if (!$_smarty_tpl->tpl_vars['cp']->value['parent']) {?>
				</a>
			<?php }?>
			</li>
		
		<?php
$_smarty_tpl->tpl_vars['cp'] = $foreach_cp_Sav;
}
?>
		</ul>
		<?php }?>
		
		
		<?php if (count($_smarty_tpl->tpl_vars['sec_navbar']->value)) {?>
		<ul>
		<?php
$_from = $_smarty_tpl->tpl_vars['sec_navbar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->value) {
$_smarty_tpl->tpl_vars['cp']->_loop = true;
$foreach_cp_Sav = $_smarty_tpl->tpl_vars['cp'];
?>
			<li <?php if ($_smarty_tpl->tpl_vars['cp']->value['parent']) {?>class="parent"<?php }?>>
			<?php if (!$_smarty_tpl->tpl_vars['cp']->value['parent']) {?>
				<?php if ($_smarty_tpl->tpl_vars['cp']->value['type'] == 1) {?>
				<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeCustomPageLink($_smarty_tpl->tpl_vars['cp']->value['id'],$_smarty_tpl->tpl_vars['cp']->value['title'],$_smarty_tpl->tpl_vars['cp']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/content.php?id=<?php echo $_smarty_tpl->tpl_vars['cp']->value['id'];
}?>" <?php if ($_smarty_tpl->tpl_vars['cp']->value['blank'] == 1) {?>target="_blank"<?php }?>>
				<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['cp']->value['hreflink'];?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['blank'] == 1) {?>target="_blank"<?php }?>>
				<?php }?>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['cp']->value['title'];?>

			<?php if (!$_smarty_tpl->tpl_vars['cp']->value['parent']) {?>
				</a>
			<?php }?>
			</li>
		<?php
$_smarty_tpl->tpl_vars['cp'] = $foreach_cp_Sav;
}
?>
		</ul>
		<?php }?>
		
		<ul>
			
			<?php if (in_array("dealers_page",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['dealers_page_settings']->value['link_to_navbar']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>link_name_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/modules/dealers_page/dealers.php"><?php echo $_smarty_tpl->tpl_vars['dealers_page_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
</a></li>
			<?php }?>
			
			<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && !$_smarty_tpl->tpl_vars['is_admin']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['login'];
} else { ?>login.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['login'];?>
</a></li>
			<?php } else { ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/useraccount.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['my_account'];?>
</a></li>
			<?php }?> 
			
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>new_listing.php<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?>new_listing.php<?php } else { ?>login.php?loc=new_listing.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['post_your_ad'];?>
</a></li>
	
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['contact'];
} else { ?>contact.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['contact'];?>
</a></li>

			<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['no_rss']->value) && $_smarty_tpl->tpl_vars['no_rss']->value > 1)) {?>
			<li class="parent mt10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['rss'];?>
</li>
			
			<?php
$_from = $_smarty_tpl->tpl_vars['rss_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<li><a href="<?php if ($_smarty_tpl->tpl_vars['v']->value['feedburner']) {
echo $_smarty_tpl->tpl_vars['v']->value['feedburner'];
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/feed.php<?php if ($_smarty_tpl->tpl_vars['no_rss']->value > 1) {?>?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}
}?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/rss-icon.png" class="rspace5" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['short_title'];?>
"/><?php echo $_smarty_tpl->tpl_vars['v']->value['short_title'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

			
			<?php }?>
			
		</ul>
	</nav>
	
	<div class="frs">
		
		<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/sn_buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>
		
		<div id="copyright"><?php echo $_smarty_tpl->tpl_vars['appearance']->value['footer_text'];?>
</div>
		
		<?php if ($_smarty_tpl->tpl_vars['appearance']->value['show_footer'] == 1 && $_smarty_tpl->tpl_vars['appearance']->value['footer_pic'] != '') {?>
		<div class="mt10 ml10">
		<?php if ($_smarty_tpl->tpl_vars['appearance']->value['footer_pic_link'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['footer_pic_link'];?>
" target="_blank"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['appearance']->value['footer_is_flash']) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/flash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_name'=>$_smarty_tpl->tpl_vars['appearance']->value['footer_pic'],'img_width'=>$_smarty_tpl->tpl_vars['appearance']->value['footer_pic_width'],'img_height'=>$_smarty_tpl->tpl_vars['appearance']->value['footer_pic_height']), 0);
?>

		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance']->value['footer_pic'];?>
" alt="" />
		<?php }?>	
		<?php if ($_smarty_tpl->tpl_vars['appearance']->value['footer_pic_link'] != '') {?></a><?php }?>
</div>
<?php }?>	

		
	</div>

</div>
</footer>

<?php if (in_array("listings_compare",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>compare<?php } else { ?>modules/listings_compare/compare.php<?php }?>" class="tooltip <?php if (!isset($_smarty_tpl->tpl_vars['cmp']->value) || !$_smarty_tpl->tpl_vars['cmp']->value) {?>hidden<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['lng_compare']->value['compare'];?>
"><div id="compare_button" class="side_button"><div class="line line1">&nbsp;</div><div class="line line2">&nbsp;</div></div></a>
<?php }?>

<a href="#top" class="cd-top side_button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to_top'];?>
</a>

<?php if (in_array("change_color",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/change_color/side_picker.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['bottom_content']->value)) {
echo $_smarty_tpl->tpl_vars['bottom_content']->value;
}?>

 </body>
</html><?php }
}
?>