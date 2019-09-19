<?php /* Smarty version 3.1.24, created on 2019-08-30 00:13:27
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/modules.html" */ ?>
<?php
/*%%SmartyHeaderCode:18316367545d686a27b1b6f6_49093900%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d193884ebfc031cb7cd340abd00833431f1d38' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/modules.html',
      1 => 1458646344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18316367545d686a27b1b6f6_49093900',
  'variables' => 
  array (
    'lng' => 0,
    'array_modules' => 0,
    'is_admin' => 0,
    'v' => 0,
    'live_site' => 0,
    'demo' => 0,
    'template_path' => 0,
    'no_modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d686a27bc19c4_25026736',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d686a27bc19c4_25026736')) {
function content_5d686a27bc19c4_25026736 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18316367545d686a27b1b6f6_49093900';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</div>

<div class="p30">
<form name="modules" method="post" action="modules.php" enctype="multipart/form-data">

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['modules']['module'];?>
</th>
	<th></th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

<?php if ($_smarty_tpl->tpl_vars['is_admin']->value || $_smarty_tpl->tpl_vars['v']->value['id'] == "news" || $_smarty_tpl->tpl_vars['v']->value['id'] == "multicurrency") {?>

<tr>
	<td class="laligned"><?php if ($_smarty_tpl->tpl_vars['v']->value['installed']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/index.php"><?php }?><b><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</b><?php if ($_smarty_tpl->tpl_vars['v']->value['installed']) {?></a><?php }?><br/>
	<span class="module_info"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</span></td>
	
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['installed']) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/index.php"><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
</div></a>
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
			<a href="javascript:;"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>onclick="onInstall('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"<?php }?>><div class="small-btn installbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['modules']['install'];?>
</div></a>
		<?php }?>
		<?php }?>
	</td>

	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['installed'] && $_smarty_tpl->tpl_vars['is_admin']->value) {?>
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['enabled'] == 0) {?>
			<a href="javascript:;"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','module', '');"<?php }?>><img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt=""></a>
			<?php } else { ?>
			<a href="javascript:;"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>onclick="onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','module','<?php echo $_smarty_tpl->tpl_vars['lng']->value['modules']['confirm_disable'];?>
');"<?php }?>><img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt=""></a>
			<?php }?>
		</span>
		
		<span><a href="javascript:;"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>onclick="onUninstall('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['modules']['confirm_uninstall']);?>
');"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['modules']['uninstall'];?>
" alt=""></a></span>
		<?php }?>
	</td>
</tr>

<?php }?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_modules']->value == 0) {?>
	<tr><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['lng']->value['modules']['no_modules'];?>
</td></tr>
<?php }?>

</table>
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>