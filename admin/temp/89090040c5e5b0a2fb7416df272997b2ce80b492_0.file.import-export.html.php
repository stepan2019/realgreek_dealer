<?php /* Smarty version 3.1.24, created on 2019-09-03 15:18:38
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/import-export.html" */ ?>
<?php
/*%%SmartyHeaderCode:6196592565d6e844e283237_48879144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89090040c5e5b0a2fb7416df272997b2ce80b492' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/import-export.html',
      1 => 1458647512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6196592565d6e844e283237_48879144',
  'variables' => 
  array (
    'lng' => 0,
    'is_admin' => 0,
    'self' => 0,
    'error' => 0,
    'ad_templates' => 0,
    'user_templates' => 0,
    'templates' => 0,
    'v' => 0,
    'plans' => 0,
    'categories' => 0,
    'no_users' => 0,
    'users' => 0,
    'ads_settings' => 0,
    'groups' => 0,
    'settings' => 0,
    'demo' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d6e844e43ddb3_01883210',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d6e844e43ddb3_01883210')) {
function content_5d6e844e43ddb3_01883210 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '6196592565d6e844e283237_48879144';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title">
<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['import_export'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="import-export.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['export'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="import.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['import'];?>
</span></a>
	</div></div>

	<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="scheduled_imports.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['scheduled_imports'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="ie_templates.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['templates'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="ie_settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['settings'];?>
</span></a>
	</div></div>
	<?php }?>

</div>
</div>

<div class="p30">
<form name="ie" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
" enctype="multipart/form-data">

<div class="form_container" style="padding-top: 0px !important;">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['ie']['csv_export']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</div>
	<div class="right_form">
		<input type="radio" name="csv_export_type" value="ad" checked="checked" onClick="changeTemplates('<?php echo $_smarty_tpl->tpl_vars['ad_templates']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
', 'ad', 'csv')" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['ad'];?>
&nbsp;&nbsp;
	 	<input type="radio" name="csv_export_type" value="user" onClick="changeTemplates('<?php echo $_smarty_tpl->tpl_vars['user_templates']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
', 'user', 'csv')" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['user'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['show_field_names'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_field_names" checked="checked" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['template'];?>
</div>
	<div class="right_form">
		<select name="csv_template">
			<option value="all"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix" id="csv_ad_additional">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">

			<select name="csv_plan">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['plan'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
			&nbsp;
			<select name="csv_category">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['category'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
			&nbsp;

			<?php if ($_smarty_tpl->tpl_vars['no_users']->value <= 100) {?>
			<select name="csv_user">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
:&nbsp;<input type="text" name="csv_user" id="csv_user" />
			<?php }?>

			&nbsp;
			<select name="csv_ad_order_by">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_by'];?>
</option>
			<option value="date_added"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_date'];?>
</option>
			<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?><option value="price"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_price'];?>
</option><?php }?>
			<option value="title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_title'];?>
</option>
			<option value="viewed"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_views'];?>
</option>
			</select>
			&nbsp;

			<select name="csv_ad_order_way">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_way'];?>
</option>
			<option value="asc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
			<option value="desc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
			</select>


	</div>
</div>

<div class="clearfix" id="csv_user_additional" style="display: none;">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<select name="csv_group">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;

		<select name="csv_user_order_by">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_by'];?>
</option>
			<option value="registration_date"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_date'];?>
</option>
			<option value="username"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_username'];?>
</option>
			<option value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['contact_name_field'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_contact_name'];?>
</option>
			<option value="listings"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_listings'];?>
</option>
			<option value="group"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_group'];?>
</option>
		</select>
		&nbsp;

		<select name="csv_user_order_way">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_way'];?>
</option>
			<option value="asc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
			<option value="desc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		</select>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['date_start'];?>
</div>
	<div class="right_form"><input name="csv_date_start" id="csv_date_start" size="15" type="text" value="" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['date_end'];?>
</div>
	<div class="right_form"><input name="csv_date_end" id="csv_date_end" size="15" type="text" value="" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['latest'];?>
</div>
	<div class="right_form"><input name="csv_last" type="text" size="4" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="CSV_export" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['export'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['ie']['xml_export']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</div>
	<div class="right_form">
		<input type="radio" name="xml_export_type" value="ad" checked="checked" onClick="changeTemplates('<?php echo $_smarty_tpl->tpl_vars['ad_templates']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
', 'ad', 'xml')">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['ad'];?>
&nbsp;&nbsp;
	 	<input type="radio" name="xml_export_type" value="user" onClick="changeTemplates('<?php echo $_smarty_tpl->tpl_vars['user_templates']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
', 'user', 'xml')">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['user'];?>


	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['template'];?>
</div>
	<div class="right_form">
		<select name="xml_template">
			<option value="all"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['all_fields'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix" id="xml_ad_additional">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<select name="xml_plan">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['plan'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<select name="xml_category">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['category'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['no_users']->value <= 100) {?>
		<select name="xml_user">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
:&nbsp;<input type="text" name="xml_user" id="xml_user" />
		<?php }?>
		&nbsp;
		<select name="xml_ad_order_by">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_by'];?>
</option>
			<option value="date_added"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_date'];?>
</option>
			<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?><option value="price"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_price'];?>
</option><?php }?>
			<option value="title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_title'];?>
</option>
			<option value="viewed"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_views'];?>
</option>
		</select>
		&nbsp;
		<select name="xml_ad_order_way">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_way'];?>
</option>
			<option value="asc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
			<option value="desc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		</select>
	</div>
</div>

<div class="clearfix" id="xml_user_additional" style="display: none;">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
		<select name="xml_group">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<select name="xml_user_order_by">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_by'];?>
</option>
			<option value="registration_date"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_date'];?>
</option>
			<option value="username"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_username'];?>
</option>
			<option value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['contact_name_field'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_contact_name'];?>
</option>
			<option value="listings"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_listings'];?>
</option>
			<option value="group"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_group'];?>
</option>
		</select>
		&nbsp;
		<select name="xml_user_order_way">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_way'];?>
</option>
			<option value="asc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
			<option value="desc"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['date_start'];?>
</div>
	<div class="right_form"><input name="xml_date_start" id="xml_date_start" size="15" type="text" value="" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['date_end'];?>
</div>
	<div class="right_form"><input name="xml_date_end" id="xml_date_end" size="15" type="text" value="" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['latest'];?>
</div>
	<div class="right_form"><input name="xml_last" type="text" size="4" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="XML_export" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['export'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 

<?php echo '<script'; ?>
 type="text/javascript">
	
	$(function() {
		$('#csv_date_start').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});

		$('#csv_date_end').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});

		$('#xml_date_start').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});

		$('#xml_date_end').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});

                $( "#csv_user" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
                $( "#xml_user" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
        });

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>