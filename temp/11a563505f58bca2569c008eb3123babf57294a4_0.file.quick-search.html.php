<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:20
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/quick-search.html" */ ?>
<?php
/*%%SmartyHeaderCode:384463225d77bfe8689a28_50601313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11a563505f58bca2569c008eb3123babf57294a4' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/quick-search.html',
      1 => 1522117006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '384463225d77bfe8689a28_50601313',
  'variables' => 
  array (
    'qfields' => 0,
    'self_noext' => 0,
    'live_site' => 0,
    'lng' => 0,
    'categories' => 0,
    'v' => 0,
    'post_array' => 0,
    'keyword_name' => 0,
    'ads_settings' => 0,
    'c' => 0,
    'extra_fields_no' => 0,
    'multi_depending' => 0,
    't' => 0,
    'settings' => 0,
    'location_fields' => 0,
    'location_array' => 0,
    'default_fields_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe8705ae2_20762293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe8705ae2_20762293')) {
function content_5d77bfe8705ae2_20762293 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '384463225d77bfe8689a28_50601313';
$_smarty_tpl->tpl_vars["extra_fields_no"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['qfields']->value), null, 0);?>

<div id="quick-search" <?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "index") {?>class="first-page-quick-search"<?php }?>>
<div class="page_bounds">
<form name="qsearch" id="qsearch" method="post" action="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php">
<div id="qs_container">
	
	<div class="qs_category qsf">
		<select name="qs_category" id="qs_category">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['all_categories'];?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['category']) && $_smarty_tpl->tpl_vars['post_array']->value['category'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
	</div>
	
	<div class="qs_keyword qsf relative">
	<input type="text" name="qs_<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['search_for'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value];
}?>"/>
	<a href="javascript:;" id="remove_qs_keyword" class="close qs_delete<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {?> hidden<?php }?>" ></a>
	</div>
	
	<div class="qs_location qsf relative">
	<input type="text" name="qs_location" id="qs_location" placeholder="<?php echo $_smarty_tpl->tpl_vars['lng']->value['quick_search']['location'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['location']) && $_smarty_tpl->tpl_vars['post_array']->value['location']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['location'];
}?>"/>
	<a href="javascript:;" id="remove_qs_location" class="close qs_delete<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['location']) || !$_smarty_tpl->tpl_vars['post_array']->value['location']) {?> hidden<?php }?>" ></a>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search']) {?>
	<div class="qs_distance_search qsf">
		<select name="qs_dist" id="qs_dist" <?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['location']) || !$_smarty_tpl->tpl_vars['post_array']->value['location']) {?>disabled<?php }?>>
			<option value="0">+&nbsp;0&nbsp;<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['array_ds_distances_list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['dist']) && $_smarty_tpl->tpl_vars['post_array']->value['dist'] == $_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>>+&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_location_autosuggest']) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['address_components'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
	<?php if ($_smarty_tpl->tpl_vars['c']->value['field']) {?><input type="hidden" name="qs_<?php echo $_smarty_tpl->tpl_vars['c']->value['field'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['c']->value['field'];?>
" class="location_ac_field" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']];
}?>"><?php }?>
	<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search']) {?>
	<input type="hidden" name="qs_lat" id="qs_lat" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['lat']) && $_smarty_tpl->tpl_vars['post_array']->value['lat']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['lat'];
}?>">
	<input type="hidden" name="qs_long" id="qs_long" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['long']) && $_smarty_tpl->tpl_vars['post_array']->value['long']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['long'];
}?>">
	<?php }?>
	
	<div class="search-button qsf<?php if ($_smarty_tpl->tpl_vars['extra_fields_no']->value) {?> search-button-nomob<?php }?>"><input type="submit" name="Search" id="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
"/></div>
	
</div> 
	

<?php if ($_smarty_tpl->tpl_vars['extra_fields_no']->value) {?>
<div id="qs_extended" >
	<?php
$_from = $_smarty_tpl->tpl_vars['qfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?>
	<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" style="display: none"<?php }?>>
	<select name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>disabled="disabled"<?php }?> onchange="selDepending(1, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>this.form.qs_category.value<?php } else { ?>0<?php }?>, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '' )">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name1'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	</select>
	<input type="hidden" name="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" id="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" value="" />

	
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption1'],$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	
	jQuery(document).ready(function(){
	
		// field 1
		$('select[name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
"]').find('option:icontains("<?php echo rawurlencode($_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]);?>
")').attr("selected",true);
		selDepending(1, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>this.form.qs_category.value<?php } else { ?>0<?php }?>, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '' );

		// field2
		<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?>
		
		setTimeout(function() { $('select[name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
"]').find('option:icontains("<?php echo rawurlencode($_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]);?>
")').attr("selected",true);}, 500);

		<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3) {?>
		selDepending(1, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>this.form.qs_category.value<?php } else { ?>0<?php }?>, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '' );

		// field3
		<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?>
		
		setTimeout(function() { $('select[name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
"]').find('option:icontains("<?php echo rawurlencode($_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]);?>
")').attr("selected",true);}, 1000);

		<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4) {?>
		selDepending(1, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>this.form.qs_category.value<?php } else { ?>0<?php }?>, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '' );

		// field4
		<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?>
		
		setTimeout(function() { $('select[name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
"]').find('option:icontains("<?php echo rawurlencode($_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]);?>
")').attr("selected",true);}, 1000);

		<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5) {?>
		selDepending(1, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if ($_smarty_tpl->tpl_vars['multi_depending']->value && in_array($_smarty_tpl->tpl_vars['v']->value['dep_id'],explode(',',$_smarty_tpl->tpl_vars['multi_depending']->value))) {?>this.form.qs_category.value<?php } else { ?>0<?php }?>, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '' );
		
		<?php }?> 

		<?php }?> 

		<?php }?> 

		<?php }?>

		<?php }?> 
	
		<?php }?>

		

	});
	
	<?php echo '</script'; ?>
>
	<?php }?>
	

	</div>
	<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" style="display: none"<?php }?>>
	<select disabled='disabled' name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" 
	<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3) {?>onchange="selDepending(2, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, 0, '', 0, '' , '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
')"<?php }?>>
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name2'];?>
</option>
	</select><input type="hidden" name="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" id="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" value="" />

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3) {?>
	</div>
	<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" style="display: none"<?php }?>>
	<select disabled='disabled' name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4) {?>onchange="selDepending(3, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
' )"<?php }?>>
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name3'];?>
</option>
	</select></span><input type="hidden" name="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" id="dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" value="" />

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4) {?>
	</div>
	<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" style="display: none"<?php }?>>
	<select disabled='disabled' name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5) {?>onchange="selDepending(4, 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', 'qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, 0, '', 0, '', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
' )"<?php }?>>
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name4'];?>
</option>
	</select>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5) {?>
	</div>
	<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" style="display: none"<?php }?>>
	<select disabled='disabled' name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name5'];?>
</option>
	</select>

<?php }?>
	</div>

	<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox" || $_smarty_tpl->tpl_vars['v']->value['type'] == "url" || $_smarty_tpl->tpl_vars['v']->value['type'] == "email" || ($_smarty_tpl->tpl_vars['v']->value['type'] == "price" && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) || !in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['default_fields_types']->value)) {?>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>_low<?php }?>" style="display: none"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['is_numeric'] && $_smarty_tpl->tpl_vars['v']->value['search_elements']) {?>
		<select id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>
		</div>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" style="display: none"<?php }?>>
		<select id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['search_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,',',''),'.','');?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>
		<?php } else { ?>
		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -"/>
		&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;
		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -"/>
		<?php }?>

		<?php } else { ?>

		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"/>
		<?php }?>

		</div>

	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "menu") {?>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>_low<?php }?>" style="display: none"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>

		<select id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>
		</div>	
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" style="display: none"<?php }?>>
		<select id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high">
			<option value="">- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>

		<?php } else { ?>

		<select id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] && in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == $_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		</div>

	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "date") {?>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" style="display: none"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['search_type'] == 2) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("data/qs_date-interval.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low_vis" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low_vis" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?>disabled="disabled"<?php }?> />
		&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['advanced_search']['to'];?>
&nbsp;
		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high_vis" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high_vis" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="- <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 -" 
		<?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?>disabled="disabled"<?php }?> />

		<input type="hidden" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_low" />
		<input type="hidden" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_high" />
		<?php } else { ?>

		<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?>disabled="disabled"<?php }?> />

		<input type="hidden" name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" />
		<?php echo $_smarty_tpl->getSubTemplate ("data/qs_date.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


		<?php }?>
		</div>

	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "radio") {?>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" style="display: none"<?php }?>>
		<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" class="noborder" value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '' && $_smarty_tpl->tpl_vars['v']->value['default_val'] == $_smarty_tpl->tpl_vars['t']->value) {?> checked="checked" <?php }?> />&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<?php echo $_smarty_tpl->tpl_vars['t']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>	
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox") {?>
		<div class="qsf" <?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] != 0) {?> id="li_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" style="display: none"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&nbsp;<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" value="1" class="noborder"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['Yes'];?>
&nbsp;&nbsp;<input name="qs_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" value="0" class="noborder"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['No'];?>

		</div>
		</li>
	<?php }?>

	<?php }?>

	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

	</div> 

<div class="search-button search-button-mob qsf"><input type="submit" name="Search1" id="Search1" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
"/></div>

<?php }?> 

<div class="clearfix"></div>
	<input type="hidden" name="order" value="date_added" />
	<input type="hidden" name="order_way" value="desc" />
	
</form>
</div>
</div>
<?php }
}
?>