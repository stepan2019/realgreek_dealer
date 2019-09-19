<?php /* Smarty version 3.1.24, created on 2019-09-10 15:23:21
         compiled from "E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/index_js.html" */ ?>
<?php
/*%%SmartyHeaderCode:12493105785d77bfe935b344_73672693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206ea7e404aab678e00cf987c1305e186979cd34' => 
    array (
      0 => 'E:/workspace/oxy/OxyClassifieds-v9.7/templates/flux/js/index_js.html',
      1 => 1553926232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12493105785d77bfe935b344_73672693',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77bfe9360ae6_84801279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77bfe9360ae6_84801279')) {
function content_5d77bfe9360ae6_84801279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12493105785d77bfe935b344_73672693';
?>
<?php echo '<script'; ?>
>
$(document).ready(function() {

$(document).on("click", "a.addtofav", function(){

	var listing_id = $(this).attr("id").substr(3);
	var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
	makeFavorite(listing_id, live_site);
	
	var id = $(this).attr("id");
    // change class to addtofav
    $("#"+id).attr('class', 'remfav tooltip');
    // change title to $lng.listings.remove_favourite
    $("#"+id).attr('title', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['remove_favourite'];?>
');
    // change inner div class to "starfav sl-rem-fav"
    $("#"+id).find("div").attr('class', 'starfav rem-fav');

	
  }
);

$(document).on("click", "a.remfav", function(){

	var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
	var listing_id = $(this).attr("id").substr(3);
	remFavorite(listing_id, live_site);

	var id = $(this).attr("id");
    // change class to addtofav
    $("#"+id).attr('class', 'addtofav tooltip');
    // change title to $lng.listings.remove_favourite
    $("#"+id).attr('title', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['add_to_favourites'];?>
');
    // change inner div class to "starfav sl-rem-fav"
    $("#"+id).find("div").attr('class', 'starfav make-fav');

  }
);


$(".ac_over").on('click',function(){
	var acid = jQuery(this).attr("id").substr(2);
	$("#ac"+acid).hide();
});


<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations']) {?>

	var choose = "<?php echo $_smarty_tpl->tpl_vars['lng']->value['location']['choose'];?>
";
	// delete location
	$(".link_delete_location").click(function(){

		var field = jQuery(this).attr("id").substr(7);

		// empty input field values
		$("#"+field).val("");
		$("#"+field+"_id").val("");

		// change the delete button to gray
		$("#img_delete_"+field).addClass("low_op");

		// remove "current" class from the old field
		jQuery(this).closest('.loc_holder').find('li').removeClass("bold").removeClass("underline");

		emptyNextFields(field);

    });

	// when a location element is clicked

	$(document).on("click", ".dep_selector", function(event){ 

		// get the location field
		var field = jQuery(this).closest('.loc_selector').attr("id").substr(4);
		var val_id = jQuery(this).attr("id").substr(field.length);
		var val_name = jQuery(this).find('span:first').html();
		
		emptyNextFields(field);
		setField(field, val_id, val_name);
		populateNextFieldList(field, val_id);
		
		//alert("field "+field+" val "+val_id);
		// remove class crt_loc from all li elements
		jQuery(this).closest('.loc_selector').find('li').removeClass("bold").removeClass("underline");
		
		// change css class for that particular field to make it visible
		jQuery(this).addClass("bold").addClass("underline");
		
		// change the delete button
		$("#img_delete_"+field).removeClass("low_op");
		
	});

	$(document).on("click", ".menu_selector", function(event){ 

		var val_name = jQuery(this).find('span:first').html();
		$("#location").val(val_name);

		// remove class crt_loc from all li elements
		jQuery(this).closest('.loc_selector').find('li').removeClass("bold").removeClass("underline");
		
		// change css class for that particular field to make it visible
		jQuery(this).addClass("bold").addClass("underline");
		
		// change the delete button
		$("#img_delete").removeClass("low_op");
		
		$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/set_location.php", $("#set_location").serialize(), function(data){ 
			parent.location.reload(true);
		} );

		
	});

	$(document).on("click", "#delete", function(event){ 

		$("#location").val();

		$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/set_location.php", $("#set_location").serialize(), function(data){ 
			parent.location.reload(true);
		} );

		
	});

	function emptyField(f) {

			$("#"+f).val("");
			$("#"+f+"_id").val("");
			$("#div_"+f).html("");
	
	}

	function getNextField(f) {

		var locations_array_str = $("#locations_array").val();
		var locations_array = locations_array_str.split("|");
		var no_loc = locations_array.length;
		
		var index = 0;
		for (var idx=0; idx<no_loc; idx++) {
			var loc = locations_array[idx].split("^");
			
			if(f==loc[0] && idx<no_loc-1) { 
				loc = locations_array[idx+1].split("^");
				return loc[0];
			}  
		}	
		return "";
		
	}

	function emptyNextFields(f) {
	
		var locations_array_str = $("#locations_array").val();
		var locations_array = locations_array_str.split("|");
		var no_loc = locations_array.length;
		
		var del_index = 0;
		for (var idx=0; idx<no_loc; idx++) {
			var loc = locations_array[idx].split("^");
			if(f==loc[0]) { del_index = idx+1; break; } 
		}	

		for(idx=del_index; idx<no_loc; idx++ ) {

			var loc = locations_array[idx].split("^");
			$("#"+loc[0]).val("");
			$("#"+loc[0]+"_id").val("");
			$("#div_"+loc[0]).html("<br/>"+choose+" "+loc[1]+"<br/></br>");

			// change the delete button to gray
			$("#img_delete_"+loc[0]).addClass("low_op")
			
		}
	
	}

	function setField(f, val_id, val_name) {
	
		$("#"+f+"_id").val(val_id);
		$("#"+f).val(val_name);

	}
	
	function populateNextFieldList(f, val) {
		// val numeric si table
		var next_field = getNextField(f);
		if(!next_field) return;
	
		var table = $("#"+next_field+"_table").val();
		
		//get next field values for field f, value val
		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/get_info.php?type=dep_value&field="+next_field+"&table="+table+"&val="+val,
		success: function(data) {

			var str = "<br/>";

			if(data) {

			var arr = data.split("|");
			var no = arr.length;
			var no_per_column = Math.ceil((no/3));
			var loc_name = "";
			var loc_id = "";
			var no_elem = "";
			str = "<ul class='nolist list1'>";

			for(idx=0; idx<no; idx++ ) {
				split_d=arr[idx].split('^');
				loc_id=split_d[0];
				loc_name=split_d[1];
				no_elem=split_d[2];
				str+="<li class=\"mlink dep_selector\" id=\""+next_field+loc_id+"\"><span >"+loc_name+"</span>";
				if(no_elem) str+=" ( "+no_elem+" )";
				str+="</li>";
				if( idx%no_per_column==no_per_column-1 ) str+="</ul><ul class='nolist list1'>";
			}
			str+="</ul>";
			} // end if data
			$("#div_"+next_field).html(str);


		}
	});

	}

 $("#Save").click(function(event){

		event.preventDefault();
		$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/set_location.php", $("#set_location").serialize(), function(data){ 
			location.reload(true);
		} );
		
	});

<?php }?> 

}); // end document ready
<?php echo '</script'; ?>
>

<?php }
}
?>