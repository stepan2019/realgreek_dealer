<?php /* Smarty version 3.1.24, created on 2019-08-29 14:00:04
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/users_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:6302094615d67da64150f18_02073110%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ccc1747fc74f03306403e63bd860924c5a3941' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/users_list.html',
      1 => 1544439956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6302094615d67da64150f18_02073110',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'modules_array' => 0,
    'pages_link' => 0,
    'show' => 0,
    'order_by_link' => 0,
    'order' => 0,
    'settings' => 0,
    'order_way_link' => 0,
    'order_way' => 0,
    'page' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'groups' => 0,
    'v' => 0,
    'phone_fields' => 0,
    'p' => 0,
    'credits_enabled' => 0,
    'array_users' => 0,
    'total' => 0,
    'no_columns' => 0,
    'crt_page_link' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d67da6485f7b9_04581856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d67da6485f7b9_04581856')) {
function content_5d67da6485f7b9_04581856 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '6302094615d67da64150f18_02073110';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="users_list.php">

<div>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['add'] == 1) {?>
	<a href="adduser.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['delete'] == 1) {?>
	<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt="">
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?>
	<input type="image" value="activate_selected" name="activate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/activate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['activate_all'];?>
" class="tooltip icon" style="border: 0px;">

	<input type="image" value="deactivate_selected" name="deactivate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/deactivate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['deactivate_all'];?>
" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['confirm_deactivate_all']);?>
')<?php }?>" style="border: 0px;">
	
	<?php if (in_array("suspend_user",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/suspend_user/suspend_all.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
	
	<?php }?>
</div>


<div class="lfloat" style="width: 600px;">

<div class="lfloat">
	<select name="show" onChange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=all'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "all") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['all_users'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=active'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "active") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['active_users'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=inactive'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "inactive") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['inactive_users'];?>
</option>
		
		<?php if (in_array("suspend_user",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("modules/suspend_user/show.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>

		
	</select>
		
	<select name="order" onchange="doSel(this);">
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','registration_date');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'registration_date') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_date'];?>
</option>

		<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','username');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'username') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_username'];?>
</option>
		<?php }?>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##',$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']);?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == $_smarty_tpl->tpl_vars['settings']->value['contact_name_field']) {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_contact_name'];?>
</option>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','listings');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'listings') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_listings'];?>
</option>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','group');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'group') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_group'];?>
</option>

	</select>

	<select name="order_way" onchange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'desc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','asc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'asc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>

	</select>
</div>

	<div class="buttonwrapper lfloat ml10"><div class="button3-left">

	<a href="javascript:;" id="add_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-down-arrow.png" /></span></a>

	<a href="javascript:;" id="remove_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-up-arrow.png" /></span></a>

	</div></div>


	<div class="buttonwrapper lfloat ml10"><div class="button4-left">
	<a href="users_list.php?only_moderators=1"><span class="button4-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['view_moderators'];?>
</span></a>
	</div></div>

</div>
<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<div id="search_box" style="text-align: left; line-height: 35px; ">

<input type="hidden" name="page" value = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="order" value = "<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
<input type="hidden" name="show" value = "<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
" />
<input type="hidden" name="order_way" value = "<?php echo $_smarty_tpl->tpl_vars['order_way']->value;?>
" />
<input type="hidden" name="no_per_page" value = "<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;?>
" />

<input type="text" name="id" size="6" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['id'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['id'];
}?>"/>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
<input type="text" name="username" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['username'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['username'];
}?>" />
<?php }?>

<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['settings']->value['contact_name_field'];?>
" size="30" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['contact_name'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']];
}?>" />

<input type="text" name="email" size="30" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['email'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['email'];
}?>" />

<input type="text" name="ip" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['ip'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['ip'];
}?>" />

<select name="group">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['group'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['group']) && $_smarty_tpl->tpl_vars['post_array']->value['group'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>

<input name="date_from_vis" id="date_from_vis" type="text" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_from'];?>
"/>
<input name="date_from" id="date_from" type="hidden"/>

<input name="date_to_vis" id="date_to_vis" type="text" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_to'];?>
" />
<input name="date_to" id="date_to" type="hidden" />

<?php
$_from = $_smarty_tpl->tpl_vars['phone_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['p']->value['caption'];?>
" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['p']->value['caption']])) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['p']->value['caption']];
}?>" />
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

&nbsp;<input type="checkbox" name="only_moderators" id="only_moderators" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['only_moderators']) && $_smarty_tpl->tpl_vars['post_array']->value['only_moderators'] == 1) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['view_moderators'];?>
&nbsp;

&nbsp;<input type="checkbox" name="only_stores" id="only_stores" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['only_stores']) && $_smarty_tpl->tpl_vars['post_array']->value['only_stores'] == 1) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users_with_store'];?>
&nbsp;

<div class="buttons">
	<strong><input type="submit" name="Search" id="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['id'];?>
</th>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?><th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];?>
</th><?php }?>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['contact_name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['group'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['no_listings'];?>
</th>
	<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value) {?><th><?php echo $_smarty_tpl->tpl_vars['lng']->value['credits']['credits'];?>
</th><?php }?>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['date'];?>
</th>
	<th width="100"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?> inactive<?php }
if ($_smarty_tpl->tpl_vars['v']->value['moderator']) {?> sc3<?php }
if ($_smarty_tpl->tpl_vars['v']->value['blocked']) {?> spam<?php }?>">
	<td><input type="checkbox" class="usrchk noborder" name="user<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="user<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?><td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];
if (in_array("connect",$_smarty_tpl->tpl_vars['modules_array']->value) && isset($_smarty_tpl->tpl_vars['v']->value['auth_provider']) && $_smarty_tpl->tpl_vars['v']->value['auth_provider']) {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/connect/images/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_provider'];?>
_icon.png" /><?php }
if ($_smarty_tpl->tpl_vars['v']->value['user_info']) {?><img class="ml5 tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_info_formatted'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" /><?php }?></td><?php }?>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];
if (!$_smarty_tpl->tpl_vars['settings']->value['enable_username'] && $_smarty_tpl->tpl_vars['v']->value['user_info']) {?><img class="ml5 tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_info'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" /><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['listings'] > 0) {?><a class="sc1 underline" href="manage_listings.php?user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['v']->value['listings'];
if ($_smarty_tpl->tpl_vars['v']->value['listings'] > 0) {?></a><?php }?></td>
	<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value) {?><td><?php echo $_smarty_tpl->tpl_vars['v']->value['no_credits'];?>
</td><?php }?>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>

	
		<?php if ($_smarty_tpl->tpl_vars['v']->value['pending'] || (isset($_smarty_tpl->tpl_vars['v']->value['pending_actions']) && count($_smarty_tpl->tpl_vars['v']->value['pending_actions']))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['v']->value['pending_actions']) > 1 || (!$_smarty_tpl->tpl_vars['v']->value['pending'] && isset($_smarty_tpl->tpl_vars['v']->value['pending_actions']) && count($_smarty_tpl->tpl_vars['v']->value['pending_actions']) > 0)) {?>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?><a href="javascript:;" class="invoice" id="inv<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php }?>
		<div class="small-btn pendingbutton icon tooltip icon"  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['pending_info'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending'];?>
</div>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?></a><?php }?>
		<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?><a href="javascript:;" onclick="onUserAccept('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"><?php }?>
		<div class="small-btn pendingbutton icon tooltip icon"  title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['accept'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending'];?>
</div>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?></a><?php }?>
		<?php }?>
		<?php }?>
	</td>
	<td class="laligned" width="100">

		<a href="javascript:;" class="usrinfo" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['info'];?>
"></a>

		<a href="javascript:;" class="usrmail" id="mail<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mail.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['mail'];?>
" alt=""></a>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?>
		<a href="edituser.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['active']) {?>
		<a href="?login_as=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/login_as.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['login_as_this_user'];?>
" alt=""></a>
		<?php }?>

		<a href="change_password.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/change_pass.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['change_password'];?>
" alt=""></a>
		<?php }?> 

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['delete'] == 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onUserDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete']);?>
');<?php }?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['users']['edit'] == 1) {?>
		<span id="div_block<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<a  class="block" id="blk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/block.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['block_unblock'];?>
" alt="">
			</a>
		</span>
	
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','user', '');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','user', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['confirm_disable'];?>
');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>	

		<span>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['store'] == 0) {?>
			<a href="javascript:;" onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','store', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['confirm_enable_store'];?>
');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/store_off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['enable_store'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','store', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['confirm_disable_store'];?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/store_on.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['disable_store'];?>
" alt="">
			</a>
		<?php }?>
		</span>	

		<span>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['bulk_uploads'] == 0) {?>
			<a href="javascript:;" onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','bulk_uploads', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['confirm_enable_bulk_uploads'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/bulk_off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['enable_bulk_uploads'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','bulk_uploads', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['confirm_enable_bulk_uploads'];?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/bulk_on.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['disable_bulk_uploads'];?>
" alt="">
			</a>
		<?php }?>
		</span>	
		
		<?php if (in_array("showcase",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("modules/showcase/users_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] || $_smarty_tpl->tpl_vars['v']->value['suspended']) {?>
		<?php if (in_array("suspend_user",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("modules/suspend_user/users_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>
		<?php }?>

		<?php }?> 
	</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['v']->value['blocked']) {?>
<tr class="spam">
<td colspan="10" class="laligned nop">
<div class="lfloat"><?php echo $_smarty_tpl->tpl_vars['lng']->value['security']['blocked'];?>
:&nbsp;</div>
<?php if ($_smarty_tpl->tpl_vars['v']->value['ip_blocked']) {?><div class="wide-btn blockedbutton icon"><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</div>&nbsp;&nbsp;<?php }?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['email_blocked']) {?><div class="wide-btn blockedbutton icon"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</div>&nbsp;&nbsp;<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['v']->value['blocked_phones'])) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['blocked_phones'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<div class="wide-btn blockedbutton icon"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</div>&nbsp;&nbsp;
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
<?php }?>
</td>
</tr>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['v']->value['suspended'] && in_array("suspend_user",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/suspend_user/suspended.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
	<tr>
	<?php $_smarty_tpl->tpl_vars["no_columns"] = new Smarty_Variable("8", null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value) {
$_smarty_tpl->tpl_vars["no_columns"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['no_columns']->value+1), null, 0);
}?>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
$_smarty_tpl->tpl_vars["no_columns"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['no_columns']->value+1), null, 0);
}?>
	<td colspan=<?php echo $_smarty_tpl->tpl_vars['no_columns']->value;?>
><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['no_users'];?>
</td></tr>
<?php }?>
</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['total']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><?php }?>

<div class="mt20">
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['show'];?>

	<select name="no_per_page_sel" onchange="doSel(this);">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['name'] = 'pg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] = ((int) 10) == 0 ? 1 : (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total']);
?>
		<option value="location.href='<?php echo $_smarty_tpl->tpl_vars['crt_page_link']->value;?>
&no_per_page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
'" <?php if ($_smarty_tpl->tpl_vars['no_per_page']->value == $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
</option>
		<?php endfor; endif; ?>
	</select>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['on_a_page'];?>

</div>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$("input").keypress(function(e)
		{
        		// if the key pressed is the enter key
        		if (e.which == 13)
        		{
				// delay action so the autocomplete list to fill
				setTimeout(function() { $("#search").submit();}, 200);

				return false;
        		}
		});
		$("#add_search").hide();
		//$("#search_box").hide();
		$("#add_search").click(function()
		{
			$("#remove_search").show();
			$("#add_search").hide();
			$("#search_box").slideDown('fast').show();
		});

		$("#remove_search").click(function()
		{
			$("#add_search").show();
			$("#remove_search").hide();
			$("#search_box").hide().slideUp('fast');
		});

		$("#check_all").click(function()
		{

			if ($('#check_all').is(':checked')) 
				$('input:checkbox.usrchk').not(this).prop('checked', this.checked);
			else 
				$("input:checkbox.usrchk").attr('checked',false);

		});

		$("a.invoice").click(function(event){
			var user_id = jQuery(this).attr("id").substr(3);
			$.fancybox({
				'width'         		: 630,
				'height'        		: 650,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'margin'		: '0',
				'padding'		: '0',
				'titleShow'		: false,
				'type'			: 'iframe',
				'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/selective_invoice_accept.php?id='+user_id+'&type=user',
				'onClosed': function(){ location.reload(true); }
			});
		});

		$("a.usrinfo").click(function(event){
			var user_id = jQuery(this).attr("id").substr(4);
			$.fancybox({
				'width'         		: 730,
				'height'        		: 700,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'margin'		: '0',
				'padding'		: '0',
				'titleShow'		: false,
				'type'			: 'iframe',
				'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/info_user.php?id='+user_id
			});
		});

		$("a.usrmail").click(function(event){
			var user_id = jQuery(this).attr("id").substr(4);
			$.fancybox({
				'width'         		: 630,
				'height'        		: 650,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'margin'		: '0',
				'padding'		: '0',
				'titleShow'		: false,
				'type'			: 'iframe',
				'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/mailto.php?id='+user_id
			});
		});
		
		$("a.block").click(function(event){
			var user_id = jQuery(this).attr("id").substr(3);
			$.fancybox({
				'width'         		: 630,
				'height'        		: 650,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'margin'		: '0',
				'padding'		: '0',
				'titleShow'		: false,
				'type'			: 'iframe',
				'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/block_item.php?id='+user_id,
				onClosed: function () { 
					parent.location.reload(true);
				}
			});
		});

	});

	$(function() {
		$('#date_from_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_from', altFormat: 'yy-mm-dd'
		});

		$('#date_to_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_to', altFormat: 'yy-mm-dd'
		});
	});



<?php echo '</script'; ?>
>

<?php if (in_array("showcase",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/showcase/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (in_array("suspend_user",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/suspend_user/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>