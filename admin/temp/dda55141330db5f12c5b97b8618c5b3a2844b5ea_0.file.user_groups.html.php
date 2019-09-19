<?php /* Smarty version 3.1.24, created on 2019-09-10 15:24:54
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/user_groups.html" */ ?>
<?php
/*%%SmartyHeaderCode:10216792045d77c0465ac9c5_91757755%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda55141330db5f12c5b97b8618c5b3a2844b5ea' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/user_groups.html',
      1 => 1519195036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10216792045d77c0465ac9c5_91757755',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_groups' => 0,
    'v' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c046626b83_86439930',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c046626b83_86439930')) {
function content_5d77c046626b83_86439930 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10216792045d77c0465ac9c5_91757755';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_groups'];?>
</div>

<div class="p30">
<form name="groups" method="post">

<div>
<a href="addgroup.php" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['groups']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt="">
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['description'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['post_ads'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['register'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['activate'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['store'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['bulk_uploads_short'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['no_users'];?>
</th>
	<th width=60><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?> inactive<?php }?>">
	<td><input type="checkbox" class="noborder" name="group<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="group<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
	<td class="laligned"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['post_ads']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['auto_register']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['activate_via_email']) {?><div><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_email'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['v']->value['activate_via_sms']) {?><div><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_sms'];?>
</div><?php }
if (!$_smarty_tpl->tpl_vars['v']->value['activate_via_email'] && !$_smarty_tpl->tpl_vars['v']->value['activate_via_sms']) {?><div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];?>
</div><?php }?></td>
	<td><?php if (!$_smarty_tpl->tpl_vars['v']->value['post_ads']) {?>-<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['store'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['groups']['do_not_allow'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['store'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['groups']['allow_to_buy'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['groups']['enable_by_default'];
}
}?></td>
	<td><?php if (!$_smarty_tpl->tpl_vars['v']->value['post_ads']) {?>-<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['bulk_uploads']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}
}?></td>
	<td><a class="sc1 underline" href="users_list.php?group=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['users'];?>
</a></td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'group')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt="" />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'group')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt="" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png" />
		<?php }?>

	</td>
	<td>
		<a href="editgroup.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['users'] > 0) {?>
		<a href="javascript:;" class="delgroup" id="del<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php } else { ?>	
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onGroupDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
');<?php }?>">
		<?php }?>

		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onGroupEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onGroupDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (count($_smarty_tpl->tpl_vars['array_groups']->value) == 0) {?>
	<tr><td colspan="11"><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['no_groups'];?>
</td></tr>
<?php }?>

</table>
</form>
</div> 

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});


$("a.delgroup").click(function(event){
	var group_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 500,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/delete_group.php?id='+group_id,
		'onClosed': function(){ location.reload(true); }
	});
});

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>