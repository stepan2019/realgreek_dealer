<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:19
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1695377915d77bfe7dfe392_54211039%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822ca49d597185046bc70814aa5c6a3707012a78' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/header.html',
      1 => 1554249170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695377915d77bfe7dfe392_54211039',
  'variables' => 
  array (
    'crt_lang_code' => 0,
    'page_info' => 0,
    'appearance' => 0,
    'noindex' => 0,
    'self_noext' => 0,
    'modules_array' => 0,
    'head_includes' => 0,
    'template_path' => 0,
    'text_direction' => 0,
    'live_site' => 0,
    'htmlarea' => 0,
    'seo_settings' => 0,
    'banners_positions' => 0,
    'section' => 0,
    'cat' => 0,
    'bloc' => 0,
    'bg_banners' => 0,
    'top_content' => 0,
    'array_banners' => 0,
    'sn_settings' => 0,
    'store_banner' => 0,
    'store_banner_ext' => 0,
    'store_banner_width' => 0,
    'store_banner_height' => 0,
    'settings' => 0,
    'lng' => 0,
    'logged_in' => 0,
    'sef_links' => 0,
    'languages' => 0,
    'crt_lang_flag' => 0,
    'crt_lang_name' => 0,
    'v' => 0,
    'crt_lang' => 0,
    'main_domain' => 0,
    'crt_usr_sett' => 0,
    'is_aff' => 0,
    'subscription_exists' => 0,
    'bulk_uploads' => 0,
    'ads_settings' => 0,
    'crt_usr' => 0,
    'is_mod' => 0,
    'is_admin' => 0,
    'db_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe7e54249_99509714',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe7e54249_99509714')) {
function content_5d77bfe7e54249_99509714 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1695377915d77bfe7dfe392_54211039';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['crt_lang_code']->value;?>
">

<head>
<title><?php echo $_smarty_tpl->tpl_vars['page_info']->value['title'];?>
</title>

<meta charset="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['charset'];?>
">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['meta_description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['meta_keywords'];?>
" />
<?php if ((isset($_smarty_tpl->tpl_vars['noindex']->value) && $_smarty_tpl->tpl_vars['noindex']->value) || $_smarty_tpl->tpl_vars['page_info']->value['noindex'] == 1) {?>
<meta NAME="robots" content="noindex, nofollow" />
<?php } else { ?>
<meta name="robots" content="index, follow" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_info']->value['canonical']) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['canonical'];?>
"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "details" && in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/sn_meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['head_includes']->value)) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['head_includes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['l']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
<?php }?>

<link href="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
css/style<?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.css" rel="stylesheet" type="text/css"/>
<?php if ($_smarty_tpl->tpl_vars['appearance']->value['template_colorscheme']) {?><link href="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['appearance']->value['template_colorscheme'];
if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.css" rel="stylesheet" type="text/css"/><?php }?>

<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "listings") {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/js/search.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['self_noext']->value == "details") {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/js/details.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['self_noext']->value == "index") {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/js/index.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['self_noext']->value == "user_listings" || $_smarty_tpl->tpl_vars['self_noext']->value == "store") {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/js/ul.js"><?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/js/base.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['htmlarea']->value) && $_smarty_tpl->tpl_vars['htmlarea']->value) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("js/header_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['analytics_code']) {?>
<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['analytics_code'];?>

<?php }?>


<style>

<?php if ($_smarty_tpl->tpl_vars['appearance']->value['header_pic']) {?>.logo { background: url('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance']->value['small_header_pic'];?>
') no-repeat; width:<?php echo $_smarty_tpl->tpl_vars['appearance']->value['small_header_pic_width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['appearance']->value['small_header_pic_height'];?>
px; }<?php }?>

@media all and (min-width: <?php echo $_smarty_tpl->tpl_vars['appearance']->value['outer_table'];?>
px)
{

	.bottom-notice { min-width: <?php echo $_smarty_tpl->tpl_vars['appearance']->value['outer_table'];?>
px; }
	.page_bounds { min-width: <?php echo $_smarty_tpl->tpl_vars['appearance']->value['outer_table'];?>
px; width: <?php echo $_smarty_tpl->tpl_vars['appearance']->value['outer_table'];?>
px;  margin: 0 auto !important;}
	<?php if ($_smarty_tpl->tpl_vars['appearance']->value['header_pic']) {?>.logo { background: url('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance']->value['header_pic'];?>
') no-repeat; width:<?php echo $_smarty_tpl->tpl_vars['appearance']->value['header_pic_width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['appearance']->value['header_pic_height'];?>
px; }<?php }?>
	.box-container { width: <?php if ($_smarty_tpl->tpl_vars['appearance']->value['outer_table'] >= 1300) {?>16.66<?php } elseif ($_smarty_tpl->tpl_vars['appearance']->value['outer_table'] >= 1100) {?>20%<?php } else { ?>25%<?php }?>; }
	
}


</style>

<?php if (in_array('background',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

<?php $_smarty_tpl->assign('bg_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('background',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>


<?php if ($_smarty_tpl->tpl_vars['bg_banners']->value[0]) {?>
<style>



#skin {
	position: absolute;
	width: 100%;
	height: <?php echo $_smarty_tpl->tpl_vars['bg_banners']->value[0]['size'][1];?>
px;
	margin-left: auto;
	margin-right: auto;
	top: 0px;
	left: 0px;
	z-index: 1;
}

#background
{
	background: url(<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/baners/<?php echo $_smarty_tpl->tpl_vars['bg_banners']->value[0]['filename'];?>
) no-repeat 50% 0;
	background-color: #dee0e2;
	width: 100%;
	height: <?php echo $_smarty_tpl->tpl_vars['bg_banners']->value[0]['size'][1];?>
px;
	position: absolute;
	top:0px;
	z-index: 1;
}

</style>
<?php }?>
<?php }?>

</head>
<body>

<?php if (in_array("adisclaimer",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/adisclaimer/disclaimer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['top_content']->value)) {
echo $_smarty_tpl->tpl_vars['top_content']->value;
}?>

<?php if (!isset($_smarty_tpl->tpl_vars['bloc']->value)) {
$_smarty_tpl->tpl_vars['bloc'] = new Smarty_Variable('', null, 0);
}?>

<?php if (in_array('left',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

<div class="left_banners" style="display: none;">
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('left',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

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
	<div class="vert_banners raligned"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype_side"), 0);
?>
</div>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<?php }?>

<?php if (in_array('right',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>

<div class="right_banners" style="display: none;">
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('right',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

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
	<div class="vert_banners"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype_side"), 0);
?>
</div>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<?php }?>

<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value) && (($_smarty_tpl->tpl_vars['self_noext']->value == "index" && ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_page_plugin'])) || ($_smarty_tpl->tpl_vars['self_noext']->value == "details" && ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_like_button'] || $_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_comments'])))) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/init_fb_sdk.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array('background',$_smarty_tpl->tpl_vars['banners_positions']->value) && $_smarty_tpl->tpl_vars['bg_banners']->value[0]) {?>
<div id="background"><a href="<?php echo $_smarty_tpl->tpl_vars['bg_banners']->value[0]['link'];?>
" id="skin" target="_blank"></a></div>
<?php }?>



<header>
	<div class="page_bounds" id="top">


<div class="top-logo">
		
	<?php if (isset($_smarty_tpl->tpl_vars['store_banner']->value) && $_smarty_tpl->tpl_vars['store_banner']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['store_banner_ext']->value == 'swf') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/flash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_name'=>$_smarty_tpl->tpl_vars['store_banner']->value,'img_width'=>$_smarty_tpl->tpl_vars['store_banner_width']->value,'img_height'=>$_smarty_tpl->tpl_vars['store_banner_height']->value), 0);
?>

	<?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/store/<?php echo $_smarty_tpl->tpl_vars['store_banner']->value;?>
" alt="" /><?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['appearance']->value['show_header'] == 1 && $_smarty_tpl->tpl_vars['appearance']->value['header_pic'] != '') {?>
	
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
">
	
	

	<?php if ($_smarty_tpl->tpl_vars['appearance']->value['header_is_flash']) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/flash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_name'=>$_smarty_tpl->tpl_vars['appearance']->value['header_pic'],'img_width'=>$_smarty_tpl->tpl_vars['appearance']->value['header_pic_width'],'img_height'=>$_smarty_tpl->tpl_vars['appearance']->value['header_pic_height']), 0);
?>

	<?php } else { ?>

	
	<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "index") {?><h1 class="logo"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
</h1><?php } else { ?><div class="logo">&nbsp;</div><?php }
}?>
	</a>

	

	<?php } elseif ($_smarty_tpl->tpl_vars['appearance']->value['show_header'] == 1 && !$_smarty_tpl->tpl_vars['appearance']->value['header_pic'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
"><div class="default_logo">&nbsp;</div></a><?php }?>
</div>




<?php if (in_array('top',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('top',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

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
<div class="fb_center"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype_top"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>
<?php }?>



<div id="menu" onclick="toggleMenu(this)">
	<div class="bar1"></div>
	<div class="bar2"></div>
	<div class="bar3"></div>
</div>

<div class="ssclear"></div>

<ul id="nav">

	<li class="show_search"><a href="javascript:;" id="show_search"><div class="search_icon"><div class="search_circle"></div><div class="search_rectangle"></div></div><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
</span></a></li>

	<li class="post-listing"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>new_listing.php<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?>new_listing.php<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['login'];
} else { ?>login.php<?php }?>?loc=new_listing.php<?php }?>"><div class="post-listing-btn"><div class="plus"></div><span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['post_your_ad']," ","&nbsp;");?>
</span></div></a></li>
	
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<li class="languages">
		<a class="arrow-button current_language" href="#"><span class="down-arrow"><?php if ($_smarty_tpl->tpl_vars['crt_lang_flag']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['crt_lang_flag']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['crt_lang_name']->value;?>
" /><?php } else {
echo $_smarty_tpl->tpl_vars['crt_lang_name']->value;
}?></span></a>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<li><a <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['crt_lang']->value) {?>class="nolink"<?php }?> href="javascript:;" onclick="document.cookie='default_lang=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
; path=/; expires = '+exdate.toUTCString()+'; <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && $_smarty_tpl->tpl_vars['settings']->value['enable_subdomains']) {?>domain=<?php echo $_smarty_tpl->tpl_vars['main_domain']->value;?>
;<?php }?>'; window.location.reload( false );"><?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt="" />&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			
		</ul>
	</li> 
	<?php }?>

	<li>
	
	<a class="arrow-button" href="#"><span class="down-arrow"><?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {
echo $_smarty_tpl->tpl_vars['logged_in']->value;
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['my_account'];
}?></span></a>
	
 	<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
	
		<ul>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/useraccount.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['statistics'];?>
</a></li>

			<?php if (isset($_smarty_tpl->tpl_vars['crt_usr_sett']->value) && $_smarty_tpl->tpl_vars['crt_usr_sett']->value['post_ads']) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/my_listings.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['browse_your_listings'];?>
</a></li>
			<?php }?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/account_info.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['modify_account_info'];?>
</a></li>

			<?php if ($_smarty_tpl->tpl_vars['is_aff']->value) {?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/affiliate_revenue.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['revenue_history'];?>
</a></li>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/affiliate_payments_history.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['payments_history'];?>
</a></li>

			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['crt_usr_sett']->value) && $_smarty_tpl->tpl_vars['crt_usr_sett']->value['post_ads']) {?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/order_history.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['order_history'];?>
</a></li>

			<?php if ($_smarty_tpl->tpl_vars['subscription_exists']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/subscriptions.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['subscriptions'];?>
</a></li><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['bulk_uploads']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/bulk_uploads.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['bulk_uploads'];?>
</a></li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_messaging']) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/messages.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['messages'];?>
</a></li>
			<?php }?>

			<?php }?> 

			<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/alerts.php?action=user&id=<?php echo $_smarty_tpl->tpl_vars['crt_usr']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['email_alerts'];?>
</a></li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['saved_searches_enabled']) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/saved_searches.php?id=<?php echo $_smarty_tpl->tpl_vars['crt_usr']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['saved_searches'];?>
</a></li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['is_mod']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['administrator_panel'];?>
</a></li>
			<?php }?>

			<li><a class="starfav" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['favorites'];
} else { ?>favorites.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['favourites'];?>
</a></li>
			
			<li class="em"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/logout.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['logout'];?>
</a></li>

		</ul>
	
	<?php } elseif ($_smarty_tpl->tpl_vars['is_admin']->value) {?>

		
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['administrator_panel'];?>
</a></li>
			<li class="em"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/logout.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['logout'];?>
</a></li>
		</ul>

	<?php } else { ?>
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['login'];
} else { ?>login.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['login'];?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['register'];
} else { ?>register.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['register'];?>
</a></li>
			<li><a class="starfav" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['favorites'];
} else { ?>favorites.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['favourites'];?>
</a></li>
		</ul>
	
	<?php }?>
	
	</li> 
	
</ul> 

<div class="clearfix"></div>
	</div>
</header>


<?php echo $_smarty_tpl->getSubTemplate ("quick-search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "index") {?>
<?php echo $_smarty_tpl->getSubTemplate ("categories.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<main>
	<div class="page_bounds page">


<?php if (isset($_smarty_tpl->tpl_vars['db_error']->value) && $_smarty_tpl->tpl_vars['db_error']->value != '') {?><div class="db_error error mt20"><?php echo $_smarty_tpl->tpl_vars['db_error']->value;?>
</div><?php }?>


<?php if (in_array('header',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('header',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

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
<div class="center hb"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>
<?php }?>


	</div> <?php }
}
?>