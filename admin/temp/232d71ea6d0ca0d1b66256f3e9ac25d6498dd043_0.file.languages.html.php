<?php /* Smarty version 3.1.24, created on 2019-08-27 01:17:09
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/languages.html" */ ?>
<?php
/*%%SmartyHeaderCode:16644900325d6484956d5307_48426292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232d71ea6d0ca0d1b66256f3e9ac25d6498dd043' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/languages.html',
      1 => 1443253718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16644900325d6484956d5307_48426292',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'array_languages' => 0,
    'v' => 0,
    'live_site' => 0,
    'demo' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d6484957a40a6_74650006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d6484957a40a6_74650006')) {
function content_5d6484957a40a6_74650006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16644900325d6484956d5307_48426292';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['languages'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="manage_saved_searches.php">

<div>
<a href="add_language.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['language_id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['language_name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['language_image'];?>
</th>
	<th></th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="100" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

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
<tr <?php if (!$_smarty_tpl->tpl_vars['v']->value['enabled']) {?>class="inactive"<?php }?>>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['default']) {?><div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['default'];?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['enabled']) {?><a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onLanguageDefault('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')<?php }?>"><div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['set_default'];?>
</div></a><?php }?></td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onLanguageMoveUp('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png" />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onLanguageMoveDown('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?>

	</td>
	<td>

		<a href="edit_language.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['default']) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['errors']['cannot_delete_default_lang'];?>
');<?php } else { ?>onDeleteLanguage('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['languages']['confirm_delete']);?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');<?php }
}?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['enabled'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onLanguageEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['default']) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['errors']['cannot_disable_default_lang'];?>
');<?php } else { ?>onLanguageDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');<?php }
}?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="" />
			</a>
		<?php }?>
		</span>

	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?><tr><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['no_language'];?>
</td></tr><?php }?>

</table>
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>