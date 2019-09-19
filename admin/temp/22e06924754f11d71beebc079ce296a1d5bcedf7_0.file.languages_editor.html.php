<?php /* Smarty version 3.1.24, created on 2019-08-30 00:12:59
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/languages_editor.html" */ ?>
<?php
/*%%SmartyHeaderCode:8817923505d686a0b2292a0_79435022%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e06924754f11d71beebc079ce296a1d5bcedf7' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/languages_editor.html',
      1 => 1422791968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8817923505d686a0b2292a0_79435022',
  'variables' => 
  array (
    'lng' => 0,
    'crt_lng' => 0,
    'crt_mod' => 0,
    'error' => 0,
    'array_languages' => 0,
    'v' => 0,
    'crt_lng_file' => 0,
    'modules' => 0,
    'warning' => 0,
    'content' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d686a0b27d228_50384056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d686a0b27d228_50384056')) {
function content_5d686a0b27d228_50384056 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8817923505d686a0b2292a0_79435022';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['templates'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['language_editor'];?>
</div>

<div class="p30">
<form name="templates" method="post" action="languages_editor.php<?php if ($_smarty_tpl->tpl_vars['crt_lng']->value) {?>?language=<?php echo $_smarty_tpl->tpl_vars['crt_lng']->value;
}
if ($_smarty_tpl->tpl_vars['crt_mod']->value) {?>&mod=<?php echo $_smarty_tpl->tpl_vars['crt_mod']->value;
}?>">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['select_language'];?>
</div>
	<div class="right_form">
		<select name="language" onChange="doSel(this);">
			<?php
$_from = $_smarty_tpl->tpl_vars['array_languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="location.href='?language=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'" <?php if ($_smarty_tpl->tpl_vars['crt_lng']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<span class="information">(<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['file'];?>
: <?php echo $_smarty_tpl->tpl_vars['crt_lng_file']->value;?>
)</span>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['main_file_or_module'];?>
</div>
	<div class="right_form">
		<select name="mod" onChange="doSel(this);">
			<option value="location.href='?language=<?php echo $_smarty_tpl->tpl_vars['crt_lng']->value;?>
&mod=main'" <?php if ($_smarty_tpl->tpl_vars['crt_mod']->value == "main") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['main_language_file'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="location.href='?language=<?php echo $_smarty_tpl->tpl_vars['crt_lng']->value;?>
&mod=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'" <?php if ($_smarty_tpl->tpl_vars['crt_mod']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<span class="information">(<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['file'];?>
: <?php echo $_smarty_tpl->tpl_vars['crt_lng_file']->value;?>
)</span>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><span class="warning" style="margin: 0 !important;"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</span></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><textarea name="content" rows=40 cols=90><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Save" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

<?php }?>

</div> 
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>