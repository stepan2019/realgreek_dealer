<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:31
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/save_search.html" */ ?>
<?php
/*%%SmartyHeaderCode:16298960045d77bff3a10b82_60662175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad59be705ab64f15f8ef18527610c13e5e1a3304' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/save_search.html',
      1 => 1490765328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16298960045d77bff3a10b82_60662175',
  'variables' => 
  array (
    'crt_usr' => 0,
    'lng' => 0,
    'ads_settings' => 0,
    'live_site' => 0,
    'post_json' => 0,
    'str_search' => 0,
    'crt_usr_sett' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bff3a2f3d1_13298865',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bff3a2f3d1_13298865')) {
function content_5d77bff3a2f3d1_13298865 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16298960045d77bff3a10b82_60662175';
?>
<div class="hidden dark-bg save_search_details">

<div class="page_bounds mt30">

<?php if (isset($_smarty_tpl->tpl_vars['crt_usr']->value) && $_smarty_tpl->tpl_vars['crt_usr']->value) {?>

<div class="info search_info" style="display: none"><p><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['search_saved'];?>
</p></div>
<div class="error search_error" style="display: none"></div>
<div class="center mb20"><a href="javascript:;" class="button" id="save-search"><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['save_your_search'];?>
</a></div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?><hr/><?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled']) {?>

<div <?php if (isset($_smarty_tpl->tpl_vars['crt_usr']->value) && $_smarty_tpl->tpl_vars['crt_usr']->value) {?>class="mt20"<?php }?>>
<form name="alert" id="alert" method="post" action="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/add_alert.php?post=1">

<input type="hidden" name="post_str" id="post_str" value='<?php if (isset($_smarty_tpl->tpl_vars['post_json']->value)) {
echo $_smarty_tpl->tpl_vars['post_json']->value;
}?>' />
<div class="info alert_info" style="display: none"></div>
<div class="error alert_error" style="display: none;"></div>

<div class="alert_content">

<div class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['email_alert_info'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['str_search']->value) {?><div class="small-light"><?php echo $_smarty_tpl->tpl_vars['str_search']->value;?>
</div><?php } else { ?><div class="small-light"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['no_terms_searched'];?>
</div><?php }?>

<div class="mt20">
<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['send_email_alerts'];?>
&nbsp;
<select name="alert_frequency" id="alert_frequency">
<option value="0"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['immediately'];?>
</option>
<option value="1" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['daily'];?>
</option>
<option value="7"><?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['weekly'];?>
</option>
</select>
&nbsp;
<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>

&nbsp;<input type="text" size="30" name="alert_email" id="alert_email" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['your_email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['crt_usr_sett']->value['email'])) {
echo $_smarty_tpl->tpl_vars['crt_usr_sett']->value['email'];
}?>"/>
</div>

<input type="submit" class="button mt20 mt20" name="CreateAlert" id="CreateAlert" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['create_alert'];?>
" />

</div>

</form>
</div>

<?php }?>

</div> 

</div> 
<?php }
}
?>