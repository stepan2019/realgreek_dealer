<?php /* Smarty version 3.1.24, created on 2019-08-30 00:43:49
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/edit_content.html" */ ?>
<?php
/*%%SmartyHeaderCode:15787702455d687145a0da84_63822084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5308776d0baaab017c5120d883ed107fa9eec14' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/edit_content.html',
      1 => 1448066424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15787702455d687145a0da84_63822084',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'lang_id' => 0,
    'error' => 0,
    'languages' => 0,
    'v' => 0,
    'content' => 0,
    'demo' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d687145a5ae21_60589684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d687145a5ae21_60589684')) {
function content_5d687145a5ae21_60589684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15787702455d687145a0da84_63822084';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="../libs/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <a href="manage_custom_pages.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_pages'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['edit_page_content'];?>
 #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</div>

<div class="p30">
<form name="cp" method="post" action="edit_content.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&lang_id=<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" enctype="multipart/form-data">

<div class="form_container" style="padding-top: 0 !important;">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="form_subtitle_bg">
<div class="rfloat" style="margin: 8px 10px 0 0;">
	<input name="lang_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<select name="lang" onchange="doSel(this);">
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
	<option value="location.href='edit_content.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&lang_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'"<?php if ($_smarty_tpl->tpl_vars['lang_id']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	<?php }?>
</div>
</div>

<div class="clearfix"></div>

<div>
<textarea id="content" name="content" rows="25" cols="60" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
</div>

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


CKEDITOR.replace( 'content', {
	height: 500,
	//filebrowserBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/blueimp/server/php/index.php',
//	filebrowserImageBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/pdw/index.php?editor=ckeditor',
//	filebrowserFlashBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/pdw/index.php?editor=ckeditor'

});

CKEDITOR.plugins.add('fileUpload',
{
    init: function (editor) {
        editor.addCommand( 'OpenDialog',new CKEDITOR.dialogCommand( 'OpenDialog' ) );
        editor.ui.addButton('FileUpload',
            {
                label: 'Upload images',
                command: 'OpenDialog',
                icon: CKEDITOR.plugins.getPath('fileUpload') + 'icon.gif'
            });
        editor.contextMenu.addListener( function( element ){
            return { 'My Dialog' : CKEDITOR.TRISTATE_OFF };
        });
        CKEDITOR.dialog.add( 'OpenDialog', function( api ){
            var dialogDefinition =
            {
                title : 'Gestisci immagini',
                minWidth : 700,
                minHeight : 500,
                contents : [
                        {
                            expand : true,
                            padding : 0,
                            elements :
                            [
                                {

                                    type : 'html',
                                    html : ' <iframe src="../../includes/fileUpload/index.php" style="width:100%;height:490px" />'
                                }
                            ]
                        }
                ],
                buttons : []
            };
            return dialogDefinition;
        } );

    }
});


var editor, html = '';
    function createEditor() {

                if ( editor ) return;

                var config = {};
                editor = CKEDITOR.replace("editor", 
                    { 
                        extraPlugins : 'fileUpload',
                    });
    }


function triggerUploadImages(url){
                if(editor ){ 
                    CKEDITOR.dialog.getCurrent().hide();
                    editor.insertHtml('<img src='+url+' />');
                }
            }  

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>