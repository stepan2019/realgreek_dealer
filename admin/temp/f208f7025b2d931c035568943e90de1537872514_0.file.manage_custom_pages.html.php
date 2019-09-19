<?php /* Smarty version 3.1.24, created on 2019-08-30 00:43:39
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/manage_custom_pages.html" */ ?>
<?php
/*%%SmartyHeaderCode:9772037435d68713b842d04_45723072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f208f7025b2d931c035568943e90de1537872514' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/manage_custom_pages.html',
      1 => 1458383618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9772037435d68713b842d04_45723072',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'array_custom_pages' => 0,
    'v' => 0,
    'live_site' => 0,
    'demo' => 0,
    'no_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d68713b8a9117_53011045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d68713b8a9117_53011045')) {
function content_5d68713b8a9117_53011045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9772037435d68713b842d04_45723072';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_pages'];?>
</div>

<div class="p30">
<form name="custom_pages" method="post" action="manage_custom_pages.php">

<div class="lfloat">
<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['custom_pages']['add'] == 1) {?>
<a href="add_custom_page.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<?php }?>
</div>
<div class="rfloat">
<input type="text" name="search">
<div class="buttons">
	<strong><input type="submit" name="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
</div>
</div>
<div class="clearfix"></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="40" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['title'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['link'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="100" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_custom_pages']->value;
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
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td><a href="javascript:;" class="view" id="view<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['custom_content'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['external_link'];
}?>
	<br/>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['navlink'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['main_navlink'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['navlink'] == 2) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['secondary_navlink'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['not_linked'];
}?>
	</td>
	<td><a href="<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 2) {
echo $_smarty_tpl->tpl_vars['v']->value['hreflink'];
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/content.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>"><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 2) {
echo $_smarty_tpl->tpl_vars['v']->value['hreflink'];
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/content.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?></a></td>
	<td>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['custom_pages']['edit'] == 1) {?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'custom_page')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'custom_page')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?>
		<?php }?>
	</td>
	<td>

		<a href="javascript:;" class="view" id="view<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['view_content'];?>
" alt="">
		</a>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['custom_pages']['edit'] == 1) {?>
		<a href="edit_custom_page.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>
		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {?><a href="edit_content.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit_content.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['edit_content'];?>
" alt=""></a><?php }?>
		
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'custom_page', '');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'custom_page', '');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>	
		<?php }?> 

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['custom_pages']['delete'] == 1) {?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only'] == 0) {?><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_pages']['confirm_delete']);?>
','custom_page');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php }?>
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_pages']->value == 0) {?>
	<tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['no_custom_pages'];?>
</td></tr>
<?php }?>

</table>
</form>
</div> 

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

$("a.view").click(function(event){
	var cp_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 800,
		'height'        		: 700,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/view_custom_page.php?id='+cp_id
	});
});

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>