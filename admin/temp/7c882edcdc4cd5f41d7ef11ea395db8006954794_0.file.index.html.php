<?php /* Smarty version 3.1.24, created on 2019-08-26 16:31:51
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:18261953155d64097730ad99_83432506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c882edcdc4cd5f41d7ef11ea395db8006954794' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/index.html',
      1 => 1551921558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18261953155d64097730ad99_83432506',
  'variables' => 
  array (
    'lng' => 0,
    'info' => 0,
    'template_path' => 0,
    'admin_user' => 0,
    'login_info' => 0,
    'listings' => 0,
    'ads_settings' => 0,
    'class' => 0,
    'latest_users' => 0,
    'v' => 0,
    'settings' => 0,
    'latest_subscriptions' => 0,
    'users' => 0,
    'live_site' => 0,
    'latest_listings' => 0,
    'latest_orders' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d6409775b89a5_23573050',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d6409775b89a5_23573050')) {
function content_5d6409775b89a5_23573050 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '18261953155d64097730ad99_83432506';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['statistics'];?>
</div>

<div class="p30">

<div class="lfloat stats-column mr20">

<div class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['current_version'];?>
</div>
<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['script_version'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['info']->value['script_version'];?>
</div>
	</div>
</div>
<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['last_update'];?>
</div>
		<div class="rfloat mr10"><?php if ($_smarty_tpl->tpl_vars['info']->value['last_update']) {
echo $_smarty_tpl->tpl_vars['info']->value['last_update'];
} else { ?>-<?php }?></div>
	</div>
</div>

<div class="stats-odd stats-high">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['last_available_version'];?>
</div>
		<div class="rfloat mr10"><span class="emphasized" id="available_version"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/ajax-loader.gif" /></span>&nbsp;<div class="buttons"><strong><input type="submit" name="Submit" id="Check" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['check_now'];?>
" /></strong></div></div>
	</div>
</div>

<div class="stats-odd stats-high bugfix">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['last_available_bugfix'];?>
</div>
		<div class="rfloat mr10"><span class="emphasized" id="available_bugfix"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/ajax-loader.gif" /></span></div>
	</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['info']->value['last_checked_version'] != $_smarty_tpl->tpl_vars['info']->value['script_version']) {?><div class="alert">A new version available! Please check <a href="http://www.oxyclassifieds.com/news.html" target="_blank">http://oxyclassifieds.com</a> for more information.</div><?php }?>


<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['last_login'];?>
</div>
<div class="stats-odd pl10"><a href="login_history_user.php?user=<?php echo $_smarty_tpl->tpl_vars['admin_user']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['login_info']->value['date_login_nice']) {
echo $_smarty_tpl->tpl_vars['login_info']->value['date_login_nice'];
} else { ?>-<?php }?></a></td>  <td><?php if ($_smarty_tpl->tpl_vars['login_info']->value['ip']) {
echo $_smarty_tpl->tpl_vars['login_info']->value['ip'];
} else { ?>-<?php }?></div>


<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['listings'];?>
</div>
<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['total_listings'];?>
&nbsp;[<a href="manage_listings.php" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['total'];?>
</div>
	</div>
</div>
<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['pending_edited']) {?>
<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['pending_edited'];?>
&nbsp;[<a href="manage_listings.php?show=pe" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['pending_edited'];?>
</div>
	</div>
</div>
<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['active_listings'];?>
&nbsp;[<a href="manage_listings.php?show=active" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['active'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['pending_listings'];?>
&nbsp;[<a href="manage_listings.php?show=pending" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['pending'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['expired_listings'];?>
&nbsp;[<a href="manage_listings.php?show=expired" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['expired'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['featured_listings'];?>
&nbsp;[<a href="manage_listings.php?show=featured" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['featured'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['highlited_listings'];?>
&nbsp;[<a href="manage_listings.php?show=highlited" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['highlited'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['priorities_listings'];?>
&nbsp;[<a href="manage_listings.php?show=priorities" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['priorities'];?>
</div>
	</div>
</div>

<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['urgent_listings'];?>
&nbsp;[<a href="manage_listings.php?show=urgent" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['urgent'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['video_listings'];?>
&nbsp;[<a href="manage_listings.php?show=video" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['video'];?>
</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['url_listings'];?>
&nbsp;[<a href="manage_listings.php?show=url" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['video'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['total_views'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['listings']->value['viewed'];?>
</div>
	</div>
</div>



<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['latest_users'];?>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['latest_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="<?php echo smarty_function_cycle(array('values'=>"stats-odd,stats-even"),$_smarty_tpl);?>
">
	<div class="clearfix">
	<div class="lfloat ml10"><a href="javascript:;" class="usrinfo sc3" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}?></a>&nbsp;|&nbsp;<span class="small light"><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</span>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['listings'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['ads'];?>
</div>
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>



<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['latest_subscriptions'];?>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['latest_subscriptions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="<?php echo smarty_function_cycle(array('values'=>"stats-odd,stats-even"),$_smarty_tpl);?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><a href="javascript:;" class="usrinfo sc3" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}?></a>&nbsp;|&nbsp;<span class="small light"><?php echo $_smarty_tpl->tpl_vars['v']->value['date_start_nice'];?>
</span></div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['v']->value['package_name'];?>
</div>
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</div> 


<div class="rfloat stats-column">


<div class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users'];?>
</div>
<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['total_users'];?>
&nbsp;[<a href="users_list.php" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['total'];?>
</div>
	</div>
</div>
<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['view_moderators'];?>
&nbsp;[<a href="users_list.php?only_moderators=1" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['moderators'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_affiliates']) {?>
<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['affiliates'];?>
&nbsp;[<a href="affiliates_revenues.php" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['affiliates'];?>
</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['active_users'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['active'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['inactive_users'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['inactive'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users_with_ads'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['with_ads'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users_with_store'];?>
&nbsp;[<a href="users_list.php?only_stores=1" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['with_store'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users_with_bulk_uploads'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['with_bulk_uploads'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['contact_messages_pending']) {?>
<?php if ($_smarty_tpl->tpl_vars['class']->value == "stats-odd") {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-even", null, 0);
} else {
$_smarty_tpl->tpl_vars["class"] = new Smarty_Variable("stats-odd", null, 0);
}?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['pending_messages'];?>
&nbsp;[<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/messages.php?show=pending" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
</a>]</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['users']->value['pending_messages'];?>
</div>
	</div>
</div>
<?php }?>


<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['latest_listings'];?>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['latest_listings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="<?php echo smarty_function_cycle(array('values'=>"stats-odd,stats-even"),$_smarty_tpl);?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><a href="../details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>&nbsp;|&nbsp;<span class="small light"><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</span>&nbsp;|&nbsp;<a href="javascript:;" class="usrinfo sc3" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {
if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['user'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}
} else {
echo $_smarty_tpl->tpl_vars['v']->value['mgm_email'];
}?></a></div>
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['latest_orders'];?>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['latest_orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="<?php echo smarty_function_cycle(array('values'=>"stats-odd,stats-even"),$_smarty_tpl);?>
">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['v']->value['action_str'];?>
&nbsp;<a href="order_history.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
" class="sc1">[<?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
]</a>&nbsp;|&nbsp;<span class="small light"><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</span>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['amount_nice'];?>
</div>
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


<div class="heading mt20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['info'];?>
</div>

<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view_php_info'];?>
</div>
		<div class="rfloat mr10"><a href="javascript:;" class="phpinfo sc1" >[<?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['view'];?>
]</a></div>
	</div>
</div>
<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['php_version'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['info']->value['php_version'];?>
</div>
	</div>
</div>

<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['mysql_version'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['info']->value['mysql_version'];?>
</div>
	</div>
</div>

<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['gd_version'];?>
</div>
		<div class="rfloat mr10"><?php echo $_smarty_tpl->tpl_vars['info']->value['gd_version'];?>
</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['info']->value['register_globals'] != 0) {?>
<div class="stats-odd">
	<div class="clearfix">
		<div class="lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['register_globals'];?>
</div>
		<div class="rfloat mr10"><?php if ($_smarty_tpl->tpl_vars['info']->value['register_globals'] == "On") {?><font color="#ff0000"><?php } else { ?><font color="#55bb55"><?php }?><b><?php echo $_smarty_tpl->tpl_vars['info']->value['register_globals'];?>
</b></font></div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['info']->value['register_globals'] == "On") {?>
<div class="stats-even">
	<div class="clearfix">
		<div class="lfloat ml10"><div  style="background: #ffff67; color: #000000;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['register_globals_on'];?>
</div></div>
	</div>
</div>
<?php }?>

</div> 
<div class="clearfix"></div>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

// get latest available version
$.ajax({
  url: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_current_version.php",
  success: function(data){
	var res = data.split("|");
	var last_version=res[0];
	var bugfix;
	if(res.length>1) bugfix=res[1];
    $("#available_version").html(last_version);

    if(bugfix) {
		$(".bugfix").show();
		$("#available_bugfix").show();
		$("#available_bugfix").html(bugfix);
    }
    else {
		$(".bugfix").hide();
		$("#available_bugfix").hide();
		}
  }
});

$("#Check").click(function(event){
	$("#available_version").html("<img src='<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/ajax-loader.gif' />");
	$(".bugfix").show();
	$("#available_bugfix").html("<img src='<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/ajax-loader.gif' />");
	// get latest available version from the server
	$.ajax({
		url: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_current_version.php?now=1",
		success: function(data){
		
			var res = data.split("|");
			var last_version=res[0];
			var bugfix;
			if(res.length>1) bugfix=res[1];

			$("#available_version").html("<font color='#b00'>"+last_version+"</font>");
			
			if(bugfix) {
				$(".bugfix").show();
				$("#available_bugfix").show();
				$("#available_bugfix").html("<font color='#b00'>"+bugfix+"</font>");
			}
			else { 
				$(".bugfix").hide();
				$("#available_bugfix").hide();
			}

		}
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
		'padding'		: '10',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/info_user.php?id='+user_id
	});
});

$("a.phpinfo").click(function(event){
	$.fancybox({
		'width'         		: 730,
		'height'        		: 700,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '10',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/phpinfo.php'
	});
});



});

<?php echo '</script'; ?>
>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>