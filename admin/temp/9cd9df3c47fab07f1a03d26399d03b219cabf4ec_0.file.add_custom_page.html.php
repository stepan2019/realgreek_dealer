<?php /* Smarty version 3.1.24, created on 2019-08-30 00:43:43
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/add_custom_page.html" */ ?>
<?php
/*%%SmartyHeaderCode:5935087685d68713f203850_98268152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd9df3c47fab07f1a03d26399d03b219cabf4ec' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/admin/templates/default/add_custom_page.html',
      1 => 1531787958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5935087685d68713f203850_98268152',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'languages' => 0,
    'v' => 0,
    'live_site' => 0,
    'tmp' => 0,
    'template_path' => 0,
    'slug' => 0,
    'navlinks' => 0,
    'groups_list' => 0,
    'settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d68713f29c615_22410512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d68713f29c615_22410512')) {
function content_5d68713f29c615_22410512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5935087685d68713f203850_98268152';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <a href="manage_custom_pages.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_pages'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['add_custom_page'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['edit_custom_page'];
}?></div>

<div class="p30">
<form name="cp" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['title'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" size=30 name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['default']) {?>id="cp_title"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['title'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['title'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['type'];?>
</div>
	<div class="right_form"><input type="radio" name="type" checked="checked" onchange="onCPType(1)" onClick="onCPType(1)" value="1" <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?> />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['custom_content'];?>

	&nbsp;&nbsp;<input type="radio" name="type" value="2" onchange="onCPType(2)" onClick="onCPType(2)" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && $_smarty_tpl->tpl_vars['tmp']->value['type'] == 2) {?>checked="checked"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?> />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['external_link'];?>

	</div>
</div>

<div class="clearfix" id="div_slug">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['custom_page_slug'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['slug'];?>
</div>
	<div class="right_form"><input type="text" size="40" name="slug" id="slug" value="<?php if (isset($_smarty_tpl->tpl_vars['slug']->value) && $_smarty_tpl->tpl_vars['slug']->value) {
echo $_smarty_tpl->tpl_vars['slug']->value;
}?>" />
	<span class="ok hidden" id="slug_ok"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['slug_ok'];?>
</span><span class="not-ok hidden" id="slug_error"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['error']['slug_exists'];?>
</span>
	</div>
</div>

<div class="clearfix" id="div_external" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['external_link'];?>
</div>
	<div class="right_form"><input type="text" size=50 name="hreflink" id="hreflink" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['hreflink'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['hreflink'];
}?>" <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['navlink'];?>
</div>
	<div class="right_form">
	<select name="navlink" id="navlink" onchange="onNavlink()"  <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?>>
		<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['navlink']) && $_smarty_tpl->tpl_vars['tmp']->value['navlink'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['main_navlink'];?>
</option>
		<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['navlink']) && $_smarty_tpl->tpl_vars['tmp']->value['navlink'] == 2) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['secondary_navlink'];?>
</option>
		<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['navlink']) && $_smarty_tpl->tpl_vars['tmp']->value['navlink'] == '0' || (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['not_linked'];?>
</option>
	</select>
	</div>
</div>

<div class="clearfix" id="div_submenu" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['submenu'];?>
</div>
	<div class="right_form">
	<select name="parent_id" <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?>>
		<option value=""> - </option>
		<?php
$_from = $_smarty_tpl->tpl_vars['navlinks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || ($_smarty_tpl->tpl_vars['v']->value['id'] != $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != $_smarty_tpl->tpl_vars['id']->value)) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['parent_id']) && $_smarty_tpl->tpl_vars['tmp']->value['parent_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['open_in_new_window'];?>
</div>
	<div class="right_form"><input type="checkbox" class="noborder" name="blank" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['blank']) && $_smarty_tpl->tpl_vars['tmp']->value['blank'] == 1 || !isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {?>checked="checked"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value == 1) {?>disabled="disabled"<?php }?> /></div>
</div>

<div id="div_internal" style="display: block">

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
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['page_title'];?>
</div>
	<div class="right_form"><input type="text" name="page_title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['page_title'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['page_title'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>"/></div>
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
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['meta_keywords'];?>
</div>
	<div class="right_form"><textarea name="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="2" cols="50"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
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
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['meta_description'];?>
</div>
	<div class="right_form"><textarea name="meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="2" cols="50"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['noindex'];?>
</div>
	<div class="right_form"><input type="checkbox" name="noindex" id="noindex" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['noindex']) && $_smarty_tpl->tpl_vars['tmp']->value['noindex']) {?>checked="checked"<?php }?> />&nbsp;&nbsp;<span class="information1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['noindex'];?>
</span></div>
</div>


<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['info']['visible'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_pages']['visible'];?>
</div>
	<div class="right_form">
		<input type="radio" name="choose_group" id="choose_group1" value="all" <?php if ((!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) || $_smarty_tpl->tpl_vars['tmp']->value['groups'] == 0) {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

		&nbsp;&nbsp;<input type="radio" name="choose_group" id="choose_group2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['groups']) && $_smarty_tpl->tpl_vars['tmp']->value['groups'] != 0) {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups'];?>

	</div>
</div>

<div class="clearfix" id="div_groups" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<select multiple="multiple" size=8 name="groups[]" id="groups" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['groups_list']->value;
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
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?><option value="1000"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['not_logged_in'];?>
</option><?php }?>
	</select>
	</div>
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
	var old_type=<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && $_smarty_tpl->tpl_vars['tmp']->value['type']) {
echo $_smarty_tpl->tpl_vars['tmp']->value['type'];
} else { ?>1<?php }?>;
	onCPType(old_type);
	var old_nav=<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['navlink']) && $_smarty_tpl->tpl_vars['tmp']->value['navlink']) {
echo $_smarty_tpl->tpl_vars['tmp']->value['navlink'];
} else { ?>0<?php }?>;
	onNavlink(old_nav);
	var old_group_val="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['groups'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['groups'];
}?>";
	if(old_group_val!="0") chooseGroup(document.forms["cp"], old_group_val);

<?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {?>
jQuery(document).ready(function() {

	$("#cp_title").focusout(function() {
	
		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/actions.php?object=slug&action=make&str="+$("#cp_title").val(),
		data		: $(this).serializeArray(),
		success: function(data) {

				$("#slug").val(data);
				
				// if id
				id_str='';
				<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>
				id_str='&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
				<?php }?>
				
				// check if slug exists
				$.ajax({
				type		: "GET",
				cache		: false,
				url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/actions.php?object=slug&action=exists&slug="+data+id_str,
				data		: $(this).serializeArray(),
				success: function(data) {
					if(data==1) {
						$("#slug_ok").hide();
						$("#slug_error").show();
					}
					else {
						$("#slug_ok").show();
						$("#slug_error").hide();
					}
				} // end success
				
				}); // end ajax
				
			} // end data
		});// end ajax

	});// end focustout

}); // end document ready

<?php }?>
	
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>