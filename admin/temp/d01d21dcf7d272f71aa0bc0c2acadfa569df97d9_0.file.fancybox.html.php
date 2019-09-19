<?php /* Smarty version 3.1.24, created on 2019-08-26 16:31:52
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/data/fancybox.html" */ ?>
<?php
/*%%SmartyHeaderCode:7502183545d64097801eb49_57442297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01d21dcf7d272f71aa0bc0c2acadfa569df97d9' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/data/fancybox.html',
      1 => 1307796276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7502183545d64097801eb49_57442297',
  'variables' => 
  array (
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d6409780231b1_28407914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d6409780231b1_28407914')) {
function content_5d6409780231b1_28407914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7502183545d64097801eb49_57442297';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fancybox/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fancybox/jquery.fancybox-1.3.4.min.css" type="text/css" media="screen" />
<?php }
}
?>