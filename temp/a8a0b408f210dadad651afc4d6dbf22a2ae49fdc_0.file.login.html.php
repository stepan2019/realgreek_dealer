<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:57
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:4388507535d77c00d1bdc06_16980205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a0b408f210dadad651afc4d6dbf22a2ae49fdc' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/login.html',
      1 => 1544061924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4388507535d77c00d1bdc06_16980205',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'general_info' => 0,
    'loc' => 0,
    'settings' => 0,
    'modules_array' => 0,
    'seo_settings' => 0,
    'sef_links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c00d1e26c7_62957915',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c00d1e26c7_62957915')) {
function content_5d77c00d1e26c7_62957915 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4388507535d77c00d1bdc06_16980205';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="wait"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.form.js"><?php echo '</script'; ?>
>

<div class="mb40">
<div class="login-box wbg centered mt40">
<div class="heading form_heading nmt"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['login'];?>
</div>

<div class="login-content">

<?php if (isset($_smarty_tpl->tpl_vars['general_info']->value) && $_smarty_tpl->tpl_vars['general_info']->value) {?><div class="mb30"><p><?php echo $_smarty_tpl->tpl_vars['general_info']->value;?>
</p></div><?php }?>

<div class="error" style="display: none;"></div>

<form name="login_form" id="login_form" method="post" action="login.php?post=1<?php if (isset($_smarty_tpl->tpl_vars['loc']->value) && $_smarty_tpl->tpl_vars['loc']->value) {?>&loc=<?php echo $_smarty_tpl->tpl_vars['loc']->value;
}?>">

	<div class="fel">
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['username_or_email'];?>
</label>
	<input name="username" id="username" type="text" maxlength="30" tabindex="1"/>
	<?php } else { ?>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['email'];?>
</label>
	<input name="email" id="email" type="text" maxlength="60" tabindex="1"/>
	<?php }?>
	</div>

	<div class="fel">
	<label class="lfloat"><?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['password'];?>
</label>
	<div class="rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/password_recovery.php" id="password_recovery"><?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['forgot_pass'];?>
</a></div>
	<div class="clearfix"></div>
	<input name="password" id="password" type="password" maxlength="50" tabindex="2"/>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['login_captcha']) {?>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_recaptcha']) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("data/recaptcha.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("data/random_image.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
	<?php }?>

	<div class="mt30 mb20">
	<div class="lfloat half" style="line-height: 40px;"><input type="checkbox" name="remember" id="remember" class="inline" tabindex="3" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['remember_me'];?>
</div>
	<div class="rfloat half raligned"><input type="submit" class="button" name="Login" id="Login" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['login'];?>
" /></div>
	<div class="clearfix"></div>
	</div>

</form>

	
	<?php if (in_array("connect",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/connect/connect.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
	

</div> 

<div class="login_footer">
<?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['dont_have_account'];?>

<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['register'];
} else { ?>register.php<?php }?>" class="button positive wide_button" target="_parent"><?php echo $_smarty_tpl->tpl_vars['lng']->value['login']['register_for_free'];?>
</a>
</div>

</div> 
</div>

<?php echo $_smarty_tpl->getSubTemplate ("js/login_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>