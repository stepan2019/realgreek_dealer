<?php /* Smarty version 3.1.24, created on 2019-09-10 15:25:42
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/addgroup.html" */ ?>
<?php
/*%%SmartyHeaderCode:14620301995d77c076c7a922_48727578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70bb245b1b6e5259ed0dda8b223fe343c4d3d5e' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/addgroup.html',
      1 => 1531528398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14620301995d77c076c7a922_48727578',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'languages' => 0,
    'v' => 0,
    'groups' => 0,
    'template_path' => 0,
    'modules_array' => 0,
    'credits_enabled' => 0,
    'settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c076d69b18_03483599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c076d69b18_03483599')) {
function content_5d77c076d69b18_03483599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14620301995d77c076c7a922_48727578';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({iconsPath : '../libs/nicEdit/nicEditorIcons.gif', fullPanel : true}) });

<?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <a href="user_groups.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_groups'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['add_group'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['groups']['modify_group'];
}?></div>

<div class="p30">
<form name="addgroup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['groups']['name'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['groups']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['groups']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['description'];?>
</div>
	<div class="right_form"><textarea name="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="6" cols="60"><?php if (isset($_smarty_tpl->tpl_vars['groups']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['groups']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['auto_register'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['auto_register'];?>
</div>
	<div class="right_form"><input name="auto_register" type="checkbox" class="noborder" <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value['auto_register']) && $_smarty_tpl->tpl_vars['groups']->value['auto_register'] == 1) || (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value)) {?>checked="checked"<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['post_ads'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['post_ads'];?>
</div>
	<div class="right_form"><input name="post_ads" id="post_ads" type="checkbox" class="noborder" <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value['post_ads']) && $_smarty_tpl->tpl_vars['groups']->value['post_ads'] == 1) || (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value)) {?>checked="checked"<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['activate_account'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['activate_account'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_email'];?>
</div>
	<div class="right_form">
	<input type="checkbox" name="activate_via_email" <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || $_smarty_tpl->tpl_vars['groups']->value['activate_via_email'] == 1) {?>checked="checked"<?php }?> />
	</div>
</div>
	
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['sms_activate_account'];?>
" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['activate_account'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_sms'];?>
</div>
	<div class="right_form">
	<input type="checkbox" name="activate_via_sms" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['activate_via_sms']) && $_smarty_tpl->tpl_vars['groups']->value['activate_via_sms'] == 1) {?>checked="checked"<?php }?> />
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['admin_verification'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['admin_verification'];?>
</div>
	<div class="right_form"><input name="admin_verification" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['admin_verification']) && $_smarty_tpl->tpl_vars['groups']->value['admin_verification'] == 1) {?>checked="checked"<?php }?>></div>
</div>

<div id="post_ads_allowed" <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['groups']->value['post_ads'] == 0) {?>style="display: none"<?php }?> >

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['store'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['store'];?>
</div>
	<div class="right_form">
		<input type="radio" class="noborder" name="store" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['groups']->value['store']) || !$_smarty_tpl->tpl_vars['groups']->value['store']) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['do_not_allow'];?>
&nbsp;&nbsp;
		<input type="radio" class="noborder" name="store" value="1" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['store']) && $_smarty_tpl->tpl_vars['groups']->value['store'] == 1) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['allow_to_buy'];?>
&nbsp;&nbsp;
		<input type="radio" class="noborder" name="store" value="2" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['store']) && $_smarty_tpl->tpl_vars['groups']->value['store'] == 2) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['enable_by_default'];?>

	</div>
</div>

<?php if (in_array("showcase",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['showcase'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['showcase'];?>
</div>
	<div class="right_form">
		<input type="radio" class="noborder" name="showcase" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['groups']->value['showcase']) || !$_smarty_tpl->tpl_vars['groups']->value['showcase']) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['do_not_allow'];?>
&nbsp;&nbsp;
		<input type="radio" class="noborder" name="showcase" value="1" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['showcase']) && $_smarty_tpl->tpl_vars['groups']->value['showcase'] == 1) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['allow_to_buy'];?>
&nbsp;&nbsp;
		<input type="radio" class="noborder" name="showcase" value="2" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['showcase']) && $_smarty_tpl->tpl_vars['groups']->value['showcase'] == 2) {?>checked="checked"<?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['enable_by_default'];?>

	</div>
</div>
<?php }?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['bulk_uploads'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['bulk_uploads'];?>
</div>
	<div class="right_form"><input name="bulk_uploads" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['bulk_uploads']) && $_smarty_tpl->tpl_vars['groups']->value['bulk_uploads'] == 1) {?>checked="checked"<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['listing_pending'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['listing_pending'];?>
</div>
	<div class="right_form"><input name="listing_pending" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['listing_pending']) && $_smarty_tpl->tpl_vars['groups']->value['listing_pending'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['package_pending'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['package_pending'];?>
</div>
	<div class="right_form"><input name="package_pending" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value['package_pending']) && $_smarty_tpl->tpl_vars['groups']->value['package_pending'] == 1) {?>checked="checked"<?php }?>></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['default_credits'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['default_credits'];?>
</div>
	<div class="right_form"><input name="default_credits" type="text" size="6" value="<?php if (isset($_smarty_tpl->tpl_vars['groups']->value['default_credits']) && $_smarty_tpl->tpl_vars['groups']->value['default_credits']) {
echo $_smarty_tpl->tpl_vars['groups']->value['default_credits'];
}?>" /></div>
</div>
<?php }?>
</div> 

<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_affiliates'] == 1) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['info']['affiliates'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['affiliates'];?>
</div>
	<div class="right_form"><input name="affiliates" id="affiliates" type="checkbox" class="noborder" <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value['affiliates']) && $_smarty_tpl->tpl_vars['groups']->value['affiliates'] == 1)) {?>checked="checked"<?php }?>></div>
</div>

<div id="div_affiliates" style="display: none">
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['affiliates_cookie_availability'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['affiliates_cookie_availability'];?>
</div>
	<div class="right_form"><input name="affiliates_cookie_availability" size="4" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['groups']->value['affiliates_cookie_availability'])) {
echo $_smarty_tpl->tpl_vars['groups']->value['affiliates_cookie_availability'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['affiliates_percentage'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['affiliates_percentage'];?>
</div>
	<div class="right_form"><input name="affiliates_percentage" type="text" size="4" value="<?php if (isset($_smarty_tpl->tpl_vars['groups']->value['affiliates_percentage'])) {
echo $_smarty_tpl->tpl_vars['groups']->value['affiliates_percentage'];
}?>" />&nbsp;%</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['affiliates_payment_cycle'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['affiliates_payment_cycle'];?>
</div>
	<div class="right_form"><input name="affiliates_payment_cycle" size="4" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['groups']->value['affiliates_payment_cycle'])) {
echo $_smarty_tpl->tpl_vars['groups']->value['affiliates_payment_cycle'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>
</div>

<?php }?>



<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

jQuery(document).ready(function() {

$("#post_ads").change(function(){

if($("#post_ads").is(':checked')) $("#post_ads_allowed").show(); 
else $("#post_ads_allowed").hide();

})

$("#affiliates").change(function(){

if($("#affiliates").is(':checked')) $("#div_affiliates").show(); 
else $("#div_affiliates").hide();

})

if($("#affiliates").is(':checked')) $("#div_affiliates").show(); 
else $("#div_affiliates").hide();

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>