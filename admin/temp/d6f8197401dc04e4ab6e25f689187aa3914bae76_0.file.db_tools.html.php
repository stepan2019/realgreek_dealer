<?php /* Smarty version 3.1.24, created on 2019-08-30 00:14:56
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/db_tools.html" */ ?>
<?php
/*%%SmartyHeaderCode:20819895185d686a8066d674_26054791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f8197401dc04e4ab6e25f689187aa3914bae76' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/db_tools.html',
      1 => 1422762352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20819895185d686a8066d674_26054791',
  'variables' => 
  array (
    'lng' => 0,
    'self' => 0,
    'error' => 0,
    'info' => 0,
    'backups_array' => 0,
    'v' => 0,
    'demo' => 0,
    'template_path' => 0,
    'no_backups' => 0,
    'schedule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d686a8076fb62_31117213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d686a8076fb62_31117213')) {
function content_5d686a8076fb62_31117213 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '20819895185d686a8066d674_26054791';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['database'];?>
</div>

<div class="p30">
<form name="db" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
" enctype="multipart/form-data">


<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?> <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?> <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<table cellpadding="0" cellspacing="0" align="center" class="datatable" style="margin: 0 50px 30px 50px; width: 1040px !important;">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['date'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['file'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['size'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['download'];?>
</th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['backups_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['date'],"%A, %B %e, %Y");?>
</td>
	<td><a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?download=<?php echo $_smarty_tpl->tpl_vars['v']->value['file'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['file'];?>
</a></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['size_formatted'];?>
</td>
	<td><a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?download=<?php echo $_smarty_tpl->tpl_vars['v']->value['file'];?>
" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/download-db.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['download'];?>
"></a></td>
	<td>
		<a href="javascript:;" onClick = "onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['file'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['confirm_delete'];?>
','db')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?restore=<?php echo $_smarty_tpl->tpl_vars['v']->value['file'];?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/restore.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['restore'];?>
" alt="" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?></a><?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_backups']->value == 0) {?>
	<tr><td colspan="5"><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['no_backups'];?>
</td></tr>
<?php }?>

</table>

<div class="form_container" style="padding-top: 0 !important;">

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['database']['backup']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<input type="radio" name="compress" value="0" checked> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['uncompressed'];?>
&nbsp;&nbsp;
		<input type="radio" name="compress" value="1"> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['compressed'];?>

	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Backup" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['backup'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['database']['import']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><input name="upload_restore" type="file" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Restore" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['import'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['database']['scheduled_backups']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><input type="checkbox" name="enabled" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['enabled'] == 1) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<input type="radio" name="backup_compress" value="0" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['backup_compress'] == '0') {?>checked<?php }?> /> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['uncompressed'];?>
&nbsp;&nbsp;
		<input type="radio" name="backup_compress" value="1" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['backup_compress'] == '1') {?>checked<?php }?> /> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['compressed'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<input name="backup_freq" type="radio" value="daily" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['backup_freq'] == "daily") {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['daily'];?>
&nbsp;&nbsp;
		<input name="backup_freq" type="radio" value="weekly" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['backup_freq'] == "weekly" || !$_smarty_tpl->tpl_vars['schedule']->value['backup_freq']) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['weekly'];?>
&nbsp;&nbsp;
		<input name="backup_freq" type="radio" value="monthly" <?php if ($_smarty_tpl->tpl_vars['schedule']->value['backup_freq'] == "monthly") {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['monthly'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['keep_only'];?>
</div>
	<div class="right_form"><input type="text" name="keep" size="4" value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value['keep'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['database']['backups'];?>
</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Save_schedule" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 



</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>