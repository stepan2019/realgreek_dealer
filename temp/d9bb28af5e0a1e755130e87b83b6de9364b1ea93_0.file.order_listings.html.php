<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:31
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/order_listings.html" */ ?>
<?php
/*%%SmartyHeaderCode:15977408465d77bff366bb62_58150976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9bb28af5e0a1e755130e87b83b6de9364b1ea93' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/order_listings.html',
      1 => 1551703722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15977408465d77bff366bb62_58150976',
  'variables' => 
  array (
    'modules_array' => 0,
    'self_noext' => 0,
    'order_link' => 0,
    'order' => 0,
    'order_way' => 0,
    'lng' => 0,
    'ads_settings' => 0,
    'acctype_link' => 0,
    'post_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bff3732b95_44350106',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bff3732b95_44350106')) {
function content_5d77bff3732b95_44350106 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '15977408465d77bff366bb62_58150976';
?>
	<div class="fbc_inv">
	<div class="search_details fb_inv">

	
	<?php if (in_array("multicurrency",$_smarty_tpl->tpl_vars['modules_array']->value) && ($_smarty_tpl->tpl_vars['self_noext']->value == "listings")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/multicurrency/search_currencies.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
	

	<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "listings" || $_smarty_tpl->tpl_vars['self_noext']->value == "user_listings" || $_smarty_tpl->tpl_vars['self_noext']->value == "store" || $_smarty_tpl->tpl_vars['self_noext']->value == "auctions" || $_smarty_tpl->tpl_vars['self_noext']->value == "featured_ads") {?>
	<select id="order" name="order" onchange="doSel(this)">
	<option value="location.href='<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_link']->value,'##order##','date_added'),'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == '' && $_smarty_tpl->tpl_vars['order_way']->value == '') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['sort_by'];?>
</option>
	<option value="location.href='<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_link']->value,'##order##','date_added'),'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date_added' && $_smarty_tpl->tpl_vars['order_way']->value == "desc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
	<option value="location.href='<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_link']->value,'##order##','date_added'),'##order_way##','asc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date_added' && $_smarty_tpl->tpl_vars['order_way']->value == "asc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
	<?php if ($_smarty_tpl->tpl_vars['self_noext']->value != "auctions") {?>
	<option value="location.href='<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_link']->value,'##order##','price'),'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'price' && $_smarty_tpl->tpl_vars['order_way']->value == "desc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
	<option value="location.href='<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['order_link']->value,'##order##','price'),'##order_way##','asc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'price' && $_smarty_tpl->tpl_vars['order_way']->value == "asc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
	<?php }?>
	</select>
	<?php }?>

	</div> 
	
	<?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "listings" && $_smarty_tpl->tpl_vars['ads_settings']->value['search_by_account_type']) {?>
	<h2 class="search_tabs fb_inv">
	<a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['acctype_link']->value,'##acctype##','all');?>
" <?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['account_type']) || !$_smarty_tpl->tpl_vars['post_array']->value['account_type'] || mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value['account_type'], 'UTF-8') == 'all') {?>class="crt"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
</a>
	<a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['acctype_link']->value,'##acctype##','private');?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['account_type']) && mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value['account_type'], 'UTF-8') == 'private') {?>class="crt"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['private'];?>
</a>
	<a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['acctype_link']->value,'##acctype##','professional');?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['account_type']) && mb_strtolower($_smarty_tpl->tpl_vars['post_array']->value['account_type'], 'UTF-8') == 'professional') {?>class="crt"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['professional'];?>
</a>
	</h2> 
	<?php }?>

	<div class="clearfix"></div>
	
	</div> 

<?php }
}
?>