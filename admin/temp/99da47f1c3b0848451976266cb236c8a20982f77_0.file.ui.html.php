<?php /* Smarty version 3.1.24, created on 2019-08-29 14:00:05
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/data/ui.html" */ ?>
<?php
/*%%SmartyHeaderCode:1058312875d67da6548a4e1_36353129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99da47f1c3b0848451976266cb236c8a20982f77' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/data/ui.html',
      1 => 1457602264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058312875d67da6548a4e1_36353129',
  'variables' => 
  array (
    'ui_included' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d67da654c4d06_81029169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d67da654c4d06_81029169')) {
function content_5d67da654c4d06_81029169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1058312875d67da6548a4e1_36353129';
if (!isset($_smarty_tpl->tpl_vars['ui_included']->value) || !$_smarty_tpl->tpl_vars['ui_included']->value) {?>
<?php $_smarty_tpl->tpl_vars["ui_included"] = new Smarty_Variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ui_included"] = clone $_smarty_tpl->tpl_vars["ui_included"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ui_included"] = clone $_smarty_tpl->tpl_vars["ui_included"];?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery-ui.min.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php }

}
}
?>