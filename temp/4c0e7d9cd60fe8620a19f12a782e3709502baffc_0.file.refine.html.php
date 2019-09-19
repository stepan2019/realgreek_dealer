<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:29
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/refine.html" */ ?>
<?php
/*%%SmartyHeaderCode:9823470675d77bff1ba07c7_01877438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0e7d9cd60fe8620a19f12a782e3709502baffc' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/refine.html',
      1 => 1547902600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9823470675d77bff1ba07c7_01877438',
  'variables' => 
  array (
    'live_site' => 0,
    'post_array' => 0,
    'seo_settings' => 0,
    'category_name' => 0,
    'page' => 0,
    'x' => 0,
    'k' => 0,
    'settings' => 0,
    'location_fields' => 0,
    'separator' => 0,
    'lng' => 0,
    'cat' => 0,
    'constructed_url' => 0,
    'cfield' => 0,
    'template_path' => 0,
    'categories_array' => 0,
    'v' => 0,
    'fields' => 0,
    't' => 0,
    'sfield' => 0,
    'field_string' => 0,
    'crt_field_string' => 0,
    'surl' => 0,
    'modules_array' => 0,
    'low_field' => 0,
    'high_var' => 0,
    'appearance' => 0,
    'currencies' => 0,
    'i' => 0,
    'mc_default_currency' => 0,
    'high_field' => 0,
    'text_direction' => 0,
    'area_list' => 0,
    'l' => 0,
    'areasearch_settings' => 0,
    'ads_settings' => 0,
    'keyword_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bff1ed9ed7_14036426',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bff1ed9ed7_14036426')) {
function content_5d77bff1ed9ed7_14036426 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '9823470675d77bff1ba07c7_01877438';
?>
<div class="refine">
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php" name="search" id="search">

<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['category']) && $_smarty_tpl->tpl_vars['post_array']->value['category']) {?><input type="hidden" name="category" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['category'];?>
" /><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['order']) && $_smarty_tpl->tpl_vars['post_array']->value['order']) {?><input type="hidden" name="order" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['order'];?>
" /><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['order_way']) && $_smarty_tpl->tpl_vars['post_array']->value['order_way']) {?><input type="hidden" name="order_way" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['order_way'];?>
" /><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['page']) && $_smarty_tpl->tpl_vars['post_array']->value['page']) {?><input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['page'];?>
" /><?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("?", null, 0);
} else {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>

<?php if (!isset($_smarty_tpl->tpl_vars['category_name']->value)) {
$_smarty_tpl->tpl_vars['category_name'] = new Smarty_Variable('', null, 0);
}?>

 



<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,'category|page','cat',$_smarty_tpl->tpl_vars['category_name']->value));?>

<?php } else { ?>
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != "category" && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('cfield', 'cfield', null); ob_start(); ?>##cat##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('cfield', 'cfield', null); ob_start(); ?>/##cat##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
</h3>
<?php if ((isset($_smarty_tpl->tpl_vars['post_array']->value['category']) && $_smarty_tpl->tpl_vars['post_array']->value['category']) || (isset($_smarty_tpl->tpl_vars['cat']->value) && $_smarty_tpl->tpl_vars['cat']->value)) {?>
<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['cfield']->value,'');
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['categories_array']->value) && count($_smarty_tpl->tpl_vars['categories_array']->value)) {?>

<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
} else {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("?", null, 0);
}
}?>

<?php
$_from = $_smarty_tpl->tpl_vars['categories_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_categories_list'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_categories_list']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="property"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchCategoryLink($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['v']->value['name'],$_smarty_tpl->tpl_vars['v']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;?>
category=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];
if ($_smarty_tpl->tpl_vars['v']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
)<?php }?></a></div>
<?php if (count($_smarty_tpl->tpl_vars['categories_array']->value) > 10 && (isset($_smarty_tpl->tpl_vars['__foreach_categories_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_categories_list']->value['index'] : null) == 9) {?>
<div id="more_categories_link"><a id="more_categories" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
<div style="display: none;" id="more_categories_list">
<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php if (count($_smarty_tpl->tpl_vars['categories_array']->value) > 10) {?>
<div><a id="less_categories" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
</div>

	<?php echo '<script'; ?>
>
		
		$("a#more_categories").click(function(){ 
			$("#more_categories_list").fadeIn(1000);
			$("#more_categories_link").hide();
		});

		$("a#less_categories").click(function(){ 
			$("#more_categories_list").slideUp(300);
			$("#more_categories_link").show();
		});

		
	<?php echo '</script'; ?>
>

<?php }?>
<?php }?>

<hr/>

<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>



	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?>

	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>
" /><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];?>
" /><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];?>
" /><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];?>
" /><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];?>
" /><?php }?>


<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>
	<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption1'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption2'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption3'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']),$_smarty_tpl->tpl_vars['v']->value['depending']['caption1'],$_smarty_tpl->tpl_vars['category_name']->value));?>

	
	<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
	
<?php } else { ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>


	<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name1'];?>
</h3>

	<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {?> 
	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
=<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_');?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		<div class="property">
		<a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption1'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value['name'],'/','_');
}
}?>"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];
if ($_smarty_tpl->tpl_vars['t']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['t']->value['count'];?>
)<?php }?></a>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['depending']['elements']) > 5) {?>
		<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
		<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_list">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	<?php if (count($_smarty_tpl->tpl_vars['v']->value['depending']['elements']) > 5) {?>
	<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
	</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

	<?php }?>

	<?php } else { ?> 

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption1'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
|')<?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

	<?php }?>

	<hr/>



	<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {?>
	<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name2'];?>
</h3>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>

		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption2'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption3'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']),$_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['category_name']->value));?>


		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		
	<?php } else { ?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 2 || !isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?>

	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements2'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements2'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements2']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
=<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
-<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		
		<div class="property">
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('surl', 'surl', null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
=<?php if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp1=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']], 'UTF-8'),$_tmp1,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['crt_field_string']->value);
}
} else {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']])) {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
=<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value['name'],'/','_'));
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp2=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']], 'UTF-8'),$_tmp2,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
=<?php echo $_smarty_tpl->tpl_vars['crt_field_string']->value;
}
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<a href="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];
if ($_smarty_tpl->tpl_vars['t']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['t']->value['count'];?>
)<?php }?></a><?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 2 && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || !in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['location_fields']->value))) {?>&nbsp;<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
" <?php if (stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']],$_smarty_tpl->tpl_vars['t']->value['name'])) {?>checked<?php }?> onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
'" /><?php }?>&nbsp; 
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements2']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements2']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['depending']['elements2']) > 5) {?>
		<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
		<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_list">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['v']->value['depending']['elements2']) > 5) {?>
	<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
	</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

	<?php }?> 

	<?php } else { ?> 

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
|')<?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

	<?php }?>

	<hr/>
	<?php }?> 





	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3 && isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?>
		<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name3'];?>
</h3>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
	
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption3'])."|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']),$_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['category_name']->value));?>

		
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 3 || !isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?>

	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements3'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements3'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements3']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
=<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
-<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>	
		<div class="property">
		<?php $_smarty_tpl->_capture_stack[0][] = array('surl', 'surl', null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
=<?php if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp3=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']], 'UTF-8'),$_tmp3,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['crt_field_string']->value);
}
} else {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']])) {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
=<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value['name'],'/','_'));
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp4=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']], 'UTF-8'),$_tmp4,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
=<?php echo $_smarty_tpl->tpl_vars['crt_field_string']->value;
}
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<a href="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];
if ($_smarty_tpl->tpl_vars['t']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['t']->value['count'];?>
)<?php }?></a><?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 3 && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || !in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['location_fields']->value))) {?>&nbsp;<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
" <?php if (stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']],$_smarty_tpl->tpl_vars['t']->value['name'])) {?>checked<?php }?> onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
'" /><?php }?>&nbsp; 
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements3']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements3']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['depending']['elements3']) > 5) {?>
		<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
		<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_list">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['v']->value['depending']['elements3']) > 5) {?>
	<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
	</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

	<?php }?> 

	<?php } else { ?> 

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
|')<?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

	<?php }?>

	<hr/>
	<?php }?>
 




	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4 && isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?>
		<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name4'];?>
</h3>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']),$_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['category_name']->value));?>

		
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 4 || !isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?>

	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements4'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements4'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements4']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
=<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
-<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		<div class="property">
		<?php $_smarty_tpl->_capture_stack[0][] = array('surl', 'surl', null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
=<?php if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp5=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']], 'UTF-8'),$_tmp5,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['crt_field_string']->value);
}
} else {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']])) {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
=<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value['name'],'/','_'));
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp6=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']], 'UTF-8'),$_tmp6,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
=<?php echo $_smarty_tpl->tpl_vars['crt_field_string']->value;
}
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<a href="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];
if ($_smarty_tpl->tpl_vars['t']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['t']->value['count'];?>
)<?php }?></a><?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 4 && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || !in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['location_fields']->value))) {?>&nbsp;<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
" <?php if (stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']],$_smarty_tpl->tpl_vars['t']->value['name'])) {?>checked<?php }?> onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
'" /><?php }?>&nbsp; 
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements4']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements4']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['depending']['elements4']) > 5) {?>
		<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
		<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_list">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['v']->value['depending']['elements4']) > 5) {?>
	<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
	</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

	<?php }?>

	<?php } else { ?> 

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
|')<?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

	<?php }?> 

	<hr/>
	<?php }?>
 



	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5 && isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?>
		<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name5'];?>
</h3>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>	
		
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']),$_smarty_tpl->tpl_vars['v']->value['depending']['caption5'],$_smarty_tpl->tpl_vars['category_name']->value));?>

		
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

	

	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements5'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements5'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements5']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
=<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
-<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>	
		<div class="property">
		<?php $_smarty_tpl->_capture_stack[0][] = array('surl', 'surl', null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption5'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
=<?php if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp7=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']], 'UTF-8'),$_tmp7,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['crt_field_string']->value);
}
} else {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']])) {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
=<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value['name'],'/','_'));
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']],$_smarty_tpl->tpl_vars['t']->value['name']))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8');
$_tmp8=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']], 'UTF-8'),$_tmp8,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value['name'], 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
=<?php echo $_smarty_tpl->tpl_vars['crt_field_string']->value;
}
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<a href="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];
if ($_smarty_tpl->tpl_vars['t']->value['count'] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['t']->value['count'];?>
)<?php }?></a><?php if (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || !in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption5'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>&nbsp;<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value['name']);?>
" <?php if (stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']],$_smarty_tpl->tpl_vars['t']->value['name'])) {?>checked<?php }?> onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
'" /><?php }?>&nbsp; 
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements5']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements5']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['depending']['elements5']) > 5) {?>
		<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
		<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_list">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['v']->value['depending']['elements5']) > 5) {?>
	<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
	</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

	<?php }?>
 

	<hr/>
	<?php }?>
 

	<?php } elseif (isset($_smarty_tpl->tpl_vars['v']->value['type']) && $_smarty_tpl->tpl_vars['v']->value['type']) {?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] != "checkbox" && ($_smarty_tpl->tpl_vars['v']->value['caption'] != "zip" || !in_array("areasearch",$_smarty_tpl->tpl_vars['modules_array']->value))) {?><h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h3>
	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] != "checkbox" && in_array("areasearch",$_smarty_tpl->tpl_vars['modules_array']->value)) {?><h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['areasearch']['areasearch'];?>
</h3><?php }?>



<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox" || $_smarty_tpl->tpl_vars['v']->value['type'] == "date" || $_smarty_tpl->tpl_vars['v']->value['type'] == "url" || $_smarty_tpl->tpl_vars['v']->value['type'] == "price" || $_smarty_tpl->tpl_vars['v']->value['type'] == "phone") {?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('content', 'low_field', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('content', 'high_var', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		
		<?php if ((!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value])) {?>

		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price" && $_smarty_tpl->tpl_vars['appearance']->value['currency_pos'] == 0) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['currencies']->value) && count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>

		<select name="currency">
			<?php if (!in_array("multicurrency",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
			<option value="">-</option>
			<?php }?>
			<?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['currency'];?>
" <?php if (in_array("multicurrency",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['mc_default_currency']->value == $_smarty_tpl->tpl_vars['i']->value['currency']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['currency'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
		</select>

		<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>

		<?php }?>
		<?php }?> 

		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "date") {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/date-interval.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low_vis" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low_vis" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 -"  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high_vis" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high_vis" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 -" />

		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" />
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high"/>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['v']->value['is_numeric'] && $_smarty_tpl->tpl_vars['v']->value['search_elements']) {?>
		<select id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 -</option>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox") {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php } else { ?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php }?>
		</select>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;
		<select id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 -</option>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox") {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php } else { ?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_field']->value] == $_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php }?>
		</select><!--
		--><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] != "date") {?> <!--
		
		--><input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 -" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) {?>value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];?>
"<?php }?> /><!--
		-->&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?><br/><?php }?><!--
		--><input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 -" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {?>value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];?>
"<?php }?> /><!--
		--><?php }?><!--

		--><?php } else { ?><!--

		--><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "date") {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/date.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<!--
		--><input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" type="text" placeholder="- <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -" /><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" /><!--
		--><?php } else { ?><input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="text" placeholder="- <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -"  class="refine_input" /><!--
		--><?php }?><!--
		--><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price" && $_smarty_tpl->tpl_vars['appearance']->value['currency_pos'] == 1) {?><!--
		--><?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?><!--

		--><select name="currency">
			<option value="">-</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['currency']) && $_smarty_tpl->tpl_vars['post_array']->value['currency'] == $_smarty_tpl->tpl_vars['v']->value['currency']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select><!--

		--><?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>
<!--
		--><?php }?><!--
		--><?php }?><!--
		--><?php }?><!--
		--><?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?><!--
		--><input type="image" class="input_img" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/search-arrow<?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" />

		
		<?php } else { ?> 
		

	
	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('exclude_str', 'exclude_str', null); ob_start(); ?>page|category|<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] != 2) {
echo $_smarty_tpl->tpl_vars['v']->value['caption'];
} else {
echo $_smarty_tpl->tpl_vars['low_field']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['high_var']->value;
}
if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price") {?>|currency<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,((string)$_smarty_tpl->tpl_vars['exclude_str']->value),'',$_smarty_tpl->tpl_vars['category_name']->value));?>

		
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>

	<?php } else { ?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['caption'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['low_field']->value && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['high_var']->value && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>
		<div class="property current-filter"><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price") {
echo $_smarty_tpl->tpl_vars['post_array']->value['currency'];?>
&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['prefix']) {
echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
&nbsp;<?php }
if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value] && isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
} elseif (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) {?>&lt;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];
} elseif (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {?>&gt;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
}
if ($_smarty_tpl->tpl_vars['v']->value['postfix']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];
}?><div class="rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['constructed_url']->value;?>
" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

		<input type="hidden"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];
}?>" />
		<input type="hidden"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
}?>" />
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price") {?><input type="hidden" name="currency" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['currency'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['currency'];
}?>" /><?php }?>
		<?php } else { ?> 

		<div class="property current-filter"><?php if ($_smarty_tpl->tpl_vars['v']->value['prefix']) {
echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
if ($_smarty_tpl->tpl_vars['v']->value['postfix']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];
}?><div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
|')<?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

		<input type="hidden"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" />

		<?php }?> 
		<?php }?> 



	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "menu" || $_smarty_tpl->tpl_vars['v']->value['type'] == "radio" || $_smarty_tpl->tpl_vars['v']->value['type'] == "multiselect") {?>
	
		<?php $_smarty_tpl->_capture_stack[0][] = array('content', 'low_field', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('content', 'high_var', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("?", null, 0);
}?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>

		<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value] && !isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {?>
		
		<select id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 -</option>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox") {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php } else { ?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php }?>
		</select>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;
		<select id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 -</option>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox") {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php } else { ?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_field']->value] == $_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			<?php }?>
		</select>
		<?php } else { ?> 

		<div class="property current-filter"><?php if ($_smarty_tpl->tpl_vars['v']->value['prefix']) {
echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
&nbsp;<?php }
if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value] && isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
} elseif (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value]) {?>&lt;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];
} elseif (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value]) {?>&gt;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
}?><div class="rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['constructed_url']->value;?>
" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

		<input type="hidden"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['low_field']->value];
}?>" />
		<input type="hidden"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['high_var']->value];
}?>" />
		
		<?php }?>
		
		<?php } else { ?> 
		
		<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>

		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('mfield', 'mfield', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
=<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>	
				
		<?php $_smarty_tpl->_capture_stack[0][] = array('exclude_str', 'exclude_str', null); ob_start(); ?>page|category|<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] != 2) {
echo $_smarty_tpl->tpl_vars['v']->value['caption'];
} else {
echo $_smarty_tpl->tpl_vars['low_field']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['high_var']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,((string)$_smarty_tpl->tpl_vars['exclude_str']->value),$_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['category_name']->value));?>


		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>

		<?php } else { ?> 

		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['caption'] && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['low_field']->value && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['high_var']->value && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<?php }?>
		
		<!--
		--><?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elements'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elements']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
=<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8'),'/','_'));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php } else { ?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
-<?php echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8'),'/','_'));?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>	
			<div class="property">

			<?php $_smarty_tpl->_capture_stack[0][] = array('surl', 'surl', null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
=<?php if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],$_smarty_tpl->tpl_vars['t']->value))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8');
$_tmp9=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']], 'UTF-8'),$_tmp9,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['crt_field_string']->value);
}
} else {
if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
=<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,'/','_'));
} else {
$_smarty_tpl->_capture_stack[0][] = array('crt_field_string', 'crt_field_string', null); ob_start();
if (rawurlencode(stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],$_smarty_tpl->tpl_vars['t']->value))) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8');
$_tmp10=ob_get_clean();
echo trim(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']], 'UTF-8'),$_tmp10,''),'|');
} else {
echo rawurlencode(smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['t']->value, 'UTF-8'),'/','_'));?>
|<?php echo mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']], 'UTF-8');
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
=<?php echo $_smarty_tpl->tpl_vars['crt_field_string']->value;
}
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;
if ($_smarty_tpl->tpl_vars['v']->value['count_elements_array'][(isset($_smarty_tpl->tpl_vars['__foreach_elements']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements']->value['index'] : null)] > 0) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['v']->value['count_elements_array'][(isset($_smarty_tpl->tpl_vars['__foreach_elements']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements']->value['index'] : null)];?>
)<?php }?></a><?php if (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || !in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>&nbsp;<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_<?php echo rawurlencode($_smarty_tpl->tpl_vars['t']->value);?>
" <?php if (stristr($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],$_smarty_tpl->tpl_vars['t']->value)) {?>checked<?php }?> onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
'" /><?php }?>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_elements']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elements']->value['index'] : null) == 4 && count($_smarty_tpl->tpl_vars['v']->value['elements_array']) > 5) {?>
			<div id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_link"><a id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" class="more_link" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['more'];?>
</a></div>
			<div style="display: none;" id="more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_list">
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		<?php if (count($_smarty_tpl->tpl_vars['v']->value['elements_array']) > 5) {?>
			<div><a id="less_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['less'];?>
</a></div>
		</div>

		<?php echo '<script'; ?>
>
			
			$("a#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_list").fadeIn(1000);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_link").hide();
			});

			$("a#less_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").click(function(){ 
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_list").slideUp(300);
				$("#more_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_link").show();
			});

			
		<?php echo '</script'; ?>
>

		<?php }?>
		
		
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		

	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox") {?>

		<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h3>

		<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {?>

		<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" value="1" class="noborder"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['Yes'];?>
&nbsp;&nbsp;<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" value="0" class="noborder"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['No'];?>

		<input type="image" class="input_img" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/search-arrow<?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" />

		<?php } else { ?>

		<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
			<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['v']->value['caption']),'',$_smarty_tpl->tpl_vars['category_name']->value));?>

			<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != $_smarty_tpl->tpl_vars['v']->value['caption'] && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>

		<div class="property current-filter"><?php if ($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['Yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['No'];
}?><div class="rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['constructed_url']->value;?>
" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" />

		<?php }?>

	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['caption'] == "zip" && in_array("areasearch",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>

		<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['zip']) || !$_smarty_tpl->tpl_vars['post_array']->value['zip']) {?>

		<select name="area">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['areasearch']['all_locations'];?>
</option>
		<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['area']) && $_smarty_tpl->tpl_vars['post_array']->value['area'] == "0") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['areasearch']['exact_location'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['area_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['area']) && $_smarty_tpl->tpl_vars['post_array']->value['area'] == $_smarty_tpl->tpl_vars['l']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['areasearch_settings']->value['um'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
		</select>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['of'];?>
<br/><!--
		--><input type="text" name="zip" size="10" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['zip'];?>
 -" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['zip'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['zip'];?>
"<?php }?> /><!--
		--><input type="image" class="input_img" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/search-arrow<?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" />

		<?php } else { ?>

		<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
			<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|zip|area",'',$_smarty_tpl->tpl_vars['category_name']->value));?>

			<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != 'zip' && $_smarty_tpl->tpl_vars['k']->value != 'area' && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>

		<div class="property current-filter"><?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['area']) && $_smarty_tpl->tpl_vars['post_array']->value['area']) {?> <?php echo $_smarty_tpl->tpl_vars['post_array']->value['area'];?>
 <?php echo $_smarty_tpl->tpl_vars['areasearch_settings']->value['um'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['of'];?>
 <?php }
echo $_smarty_tpl->tpl_vars['post_array']->value['zip'];?>
<div class="rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['constructed_url']->value;?>
" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

		<input type="hidden" name="area" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['area'];?>
" />
		<input type="hidden" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value['zip'];?>
" />

		<?php }?> 

	<?php }?>

	<hr/>

	<?php }?> 

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div>
<?php if (!$_smarty_tpl->tpl_vars['post_array']->value['with_pic']) {?> 
<input name="with_pic" id="with_pic" type="checkbox" class="noborder" />
<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['only_ads_with_pic'];?>


<?php } else { ?>

	
	<input name="with_pic" id="with_pic" type="hidden" value="on"/>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,'page|category|with_pic','with_pic',$_smarty_tpl->tpl_vars['category_name']->value));?>

		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##with_pic##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##with_pic##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != "with_pic" && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['only_ads_with_pic'];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

<?php }?> 

</div>

<hr/>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions']) {?>
<div>
<?php if (!$_smarty_tpl->tpl_vars['post_array']->value['with_auction']) {?> 
<input name="with_auction" id="with_auction" type="checkbox" class="noborder" />
<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['only_ads_with_auction'];?>


<?php } else { ?>

	
	<input name="with_auction" id="with_auction" type="hidden" value="on"/>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,'page|category|with_auction','with_auction',$_smarty_tpl->tpl_vars['category_name']->value));?>

		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##with_auction##<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##with_auction##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != "with_auction" && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

	<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['only_ads_with_auction'];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,'');
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

<?php }?> 

</div>

<hr/>
<?php }?>

<h3 class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['refine_by_keyword'];?>
</h3>
<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {?>
<div>

<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['word'];?>
 -"  class="refine_input" /><!--

--><input type="image" class="input_img" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/search-arrow<?php if ($_smarty_tpl->tpl_vars['text_direction']->value == "rtl") {?>-rtl<?php }?>.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></div>

<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
		<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category|".((string)$_smarty_tpl->tpl_vars['keyword_name']->value),'',$_smarty_tpl->tpl_vars['category_name']->value));?>

		<?php if (!$_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode'] && strchr($_smarty_tpl->tpl_vars['constructed_url']->value,"?")) {
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}?>
	<?php } else { ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != ((string)$_smarty_tpl->tpl_vars['keyword_name']->value) && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
$_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>

<div class="property current-filter"><?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value];?>
<div class="rfloat"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,'/##cat##','');
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
}?>" class="remove"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip mt4" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['remove'];?>
" /></a></div></div>

<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value];?>
"/>
<?php }?>
</form>
</div>
<?php }
}
?>