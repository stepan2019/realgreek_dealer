<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:57
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/login_js.html" */ ?>
<?php
/*%%SmartyHeaderCode:16733961375d77c00d3fd426_99625297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e002c1a3fa5e5f3bf468b67d8e69076f3013e3c' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/login_js.html',
      1 => 1491790640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16733961375d77c00d3fd426_99625297',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c00d475046_43842727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c00d475046_43842727')) {
function content_5d77c00d475046_43842727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16733961375d77c00d3fd426_99625297';
?>
<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function() {

	$(".error").hide();

var options = { 

	beforeSerialize: function(jqForm, options){ $("body").addClass("loading") },
        beforeSubmit:  function(formData, jqForm, options) {var queryString = $.param(formData);  return true;  }, 
        success:       successResponse 
 
   }; 

function successResponse(responseText, statusText, xhr, $form)  { 

			var ret = JSON.parse(responseText);
			$("body").removeClass("loading"); 

			if(ret.response==1) {

				if(parent.$.magnificPopup) {

					// close window and redirect parent to the proper page
					parent.location.href = ret.redirect;
					parent.$.magnificPopup.instance.close();

				} 
				else window.location.href = ret.redirect;
				return;
			}

			// blocked failed attempt
			if(ret.response==-1) {

				if(parent.$.magnificPopup) {

					// close window and redirect parent to the proper page
					parent.location.href = "index.php";
					parent.$.magnificPopup.instance.close();

				} 
				else window.location.href = "index.php";
				return;

			}
			
			$(".error").html("<p>"+ret.error+"</p>");
			$(".error").show();

			<?php if ($_smarty_tpl->tpl_vars['settings']->value['login_captcha'] && $_smarty_tpl->tpl_vars['settings']->value['enable_recaptcha']) {?>
			// reload recaptcha
			gReCaptchaReset();
			<?php }?>


} 

 $('#login_form').ajaxForm(options);

});

<?php echo '</script'; ?>
>
<?php }
}
?>