<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:21
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/latest.html" */ ?>
<?php
/*%%SmartyHeaderCode:7255186665d77bfe91620f4_04258796%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d9cca808be3177e6834a200b5394dd25fde4b6' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/latest.html',
      1 => 1532324480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7255186665d77bfe91620f4_04258796',
  'variables' => 
  array (
    'no_latest' => 0,
    'seo_settings' => 0,
    'latest' => 0,
    'live_site' => 0,
    'details_url' => 0,
    'lng' => 0,
    'modules_array' => 0,
    'ac_settings' => 0,
    'data_set' => 0,
    'appearance' => 0,
    'ads_settings' => 0,
    'pe_settings' => 0,
    'fav_array' => 0,
    'sef_links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe9177ec4_22002515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe9177ec4_22002515')) {
function content_5d77bfe9177ec4_22002515 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'E:/workspace/oxy/OxyClassifieds-v9.7/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '7255186665d77bfe91620f4_04258796';
?>
<section id="latest_ads">
    <div class="tab_content fbr_inv" id="latest_tab_content">

			<div>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['no_latest']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>

			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'details_url', null); ob_start();
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'],$_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],'',$_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['category_id'],$_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			<div class="box-container">
			<div class="fbox box clearfix">

				<a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><img id="fpic<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['medImage'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['image_id']) {
echo substr(strip_tags($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']),0,100);
}?>" /></a>

				<?php if ($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['sold']) {?><div class="ribbon ribbon_sold"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold'];?>
</span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['rented']) {?><div class="ribbon ribbon_rented"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented'];?>
</span></div><?php }?>

				<?php if (in_array("acategories",$_smarty_tpl->tpl_vars['modules_array']->value) && in_array($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['category_id'],$_smarty_tpl->tpl_vars['ac_settings']->value['array_categories_list'])) {?>
				<div id="ac<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" class="ac_over"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['click_to_view'];?>
</div>
				<?php }?>

				<h3 class="ltitle"><?php if ($_smarty_tpl->tpl_vars['data_set']->value == "cars" && ((isset($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['make']) && $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['make']) || (isset($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['model']) && $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['model']))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['make'];?>
 <?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['model'];?>
</a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['appearance']->value['charset'] == "UTF-8") {
echo smarty_modifier_mb_truncate($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],30,"...","UTF-8");
} else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],30,"...",false);
}?></a><?php }?></h3>

				<div class="lloc"><?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['location_str'];?>
</div>

				<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?>
		
					<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['fieldset']]) || isset($_smarty_tpl->tpl_vars['pe_settings']->value[0]))) {?>
	
						<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/gallery_listing.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pe_listing'=>$_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]), 0);
?>

	
					<?php } else { ?>

						<?php if ($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['price'] >= 0) {?><div class="lprice"><?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['price_curr'];?>
</div><?php }?>
 
					<?php }?>
			
				<?php }?> 
				
				<?php if (!in_array($_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'],$_smarty_tpl->tpl_vars['fav_array']->value)) {?>
				<a href="javascript:;" class="addtofav tooltip" id="fav<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['add_to_favourites'];?>
"><div class="starfav make-fav"></div></a>
				<?php } else { ?>
				<a href="javascript:;" class="remfav tooltip" id="fav<?php echo $_smarty_tpl->tpl_vars['latest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['remove_favourite'];?>
"><div class="starfav rem-fav"></div></a>
				<?php }?>

			</div>
			</div>
			
		<?php endfor; endif; ?>
		<div class="clearfix"></div>

		</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['no_latest']->value) {?>
		<div><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['recent_ads'];
} else { ?>recent_ads.php<?php }?>"><h2 class="view_more"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['view_all_latest'];?>
</h2></a></div>
		<div class="clearfix"></div>
	<?php }?>
	
	<hr/>
</section>


<?php echo '<script'; ?>
>
//<![CDATA[
jQuery(document).ready(function() {

	if($('#tab_latest').is(':checked')) {
		$('#latest_tab_content').imagesLoaded( function() {
			startMasonryLatest();
		});
	}
	
});

$('input:radio[name="tabs"]').change(function() { if ($(this).attr("id") == 'tab_latest') startMasonryLatest(); });


function startMasonryLatest() {

$('#latest_tab_content').masonry({
  // options
  itemSelector: '.box-container'
});

}

//]]>
<?php echo '</script'; ?>
>

<?php }
}
?>