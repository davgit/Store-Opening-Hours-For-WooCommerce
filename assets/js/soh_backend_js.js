jQuery(document).ready(function(){
	jQuery('ul.tabs li').click(function(){
	    var tab_id = jQuery(this).attr('data-tab');
	    jQuery('ul.tabs li').removeClass('soh-current');
	    jQuery('.soh-tab-content').removeClass('soh-current');  
	    jQuery(this).addClass('soh-current');
	    jQuery("#"+tab_id).addClass('soh-current');
	});

	var select_role = jQuery('#wg_select_user_role').select2({

        ajax: {
                url: ajaxurl,
                dataType: 'json',
                delay: true,
                data: function (params) {
                    return {
                        q: params.term,
                        action: 'wg_roles_ajax'
                    };
                },
                processResults: function( data ) {
                var options = [];
                if ( data ) {
 
                    jQuery.each( data, function( index, text ) {
                        options.push( { id: text[0], text: text[1],'price': text[2]} );
                    });
 
                }
                return {
                    results: options
                };
            },
            cache: true
        },
        minimumInputLength: 0
    });

    var vals = ["administrator"];

    vals.forEach(function(e){
    if(!select_role.find('option:contains(' + e + ')').length) 
        select_role.append(jQuery('<option>').text(e));
    });
    select_role.val(vals).trigger("change");


    jQuery('body').on('click', '.soh_upload_icon_logo', function(e) {
        e.preventDefault();
 
        var button = jQuery(this),
        custom_uploader = wp.media({
            title: 'Insert image',
            library : {
                // uncomment the next line if you want to attach image to the current post
                // uploadedTo : wp.media.view.settings.post.id, 
                type : ['image']
            },
            button: {
                text: 'Set Image' // button label text
            },
            multiple: false // for multiple image selection set to true
        }).on('select', function() { // it also has "open" and "close" events 
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('.soh_logo_image_input_val').add();
            if (jQuery(".soh_logo_image_input_val").length == 0) {
                jQuery( "<input type='text' name='soh_logo_image_input_val' class='soh_logo_image_input_val regular-text' readonly value=''>" ).insertAfter( jQuery( ".soh_upload_logo_main" ) );

            }

            if (jQuery(".soh_remove_icon_logo").length == 0) {
                jQuery( '<a href="#" class="soh_remove_icon_logo button">Remove</a>' ).insertAfter( jQuery( ".soh_upload_icon_logo" ) );
            }

            jQuery('.soh_logo_image').attr('src', attachment.url);
            jQuery(".soh_logo_hidden_img").val(attachment.id);
            jQuery(".soh_logo_image_input_val").val(attachment.url);
        })
        .open();

    });

    jQuery('body').on('click', '.soh_remove_icon_logo', function(e) {
        e.preventDefault();
        
        jQuery('.soh_logo_image').attr('src', '');
    	jQuery('.soh_remove_icon_logo').remove();
        jQuery(".soh_logo_hidden_img").val('');
    	jQuery(".soh_logo_image_input_val").val('');
    });


    jQuery('.soh_select_diff_value').on('change', function() {
        if ( this.value == 'select_different'){
        	jQuery(".soh_select2_options").show(200);
        }else{
        	jQuery(".soh_select2_options").hide(200);
        }
    });

    if(jQuery(".soh_select_diff_value").val() == 'select_different'){
      	jQuery(".soh_select2_options").show();
    }
    if(jQuery(".soh_select_diff_value").val() == 'all_site_wide'){
      	jQuery(".soh_select2_options").hide();
    }



    var addButton_monday = jQuery('.soh_day_add_monday'); //Add button selector
    var wrapper_monday = jQuery('.soh_time_wrapaer_monday'); //Input field wrapper_monday
    var fieldHTML_monday = '<tr class="soh_time_current_monday"><th class="soh_opening_timepicker_field_monday"><input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value=""></th><th class="soh_closing_timepicker_field_monday"><input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_monday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_monday).click(function(){
        jQuery(wrapper_monday).append(fieldHTML_monday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_monday).on('click', '.soh_day_close_monday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_monday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_monday tr').remove();
    });

    if(jQuery(".soh_period_check_monday").is(":checked")){ 
        jQuery(".soh_day_period_monday").show(500);
    }else{
        jQuery(".soh_day_period_monday").hide(500);
    }
    jQuery(".soh_period_check_monday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_monday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_monday").fadeOut(200);
        }
    });




    var addButton_tuesday = jQuery('.soh_day_add_tuesday'); //Add button selector
    var wrapper_tuesday = jQuery('.soh_time_wrapaer_tuesday'); //Input field wrapper_tuesday
    var fieldHTML_tuesday = '<tr class="soh_time_current_tuesday"><th class="soh_opening_timepicker_field_tuesday"><input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value=""></th><th class="soh_closing_timepicker_field_tuesday"><input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_tuesday).click(function(){
        jQuery(wrapper_tuesday).append(fieldHTML_tuesday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_tuesday).on('click', '.soh_day_close_tuesday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_tuesday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_tuesday tr').remove();
    });

    if(jQuery(".soh_period_check_tuesday").is(":checked")){ 
        jQuery(".soh_day_period_tuesday").show(500);
    }else{
        jQuery(".soh_day_period_tuesday").hide(500);
    }
    jQuery(".soh_period_check_tuesday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_tuesday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_tuesday").fadeOut(200);
        }
    });





    var addButton_wednesday = jQuery('.soh_day_add_wednesday'); //Add button selector
    var wrapper_wednesday = jQuery('.soh_time_wrapaer_wednesday'); //Input field wrapper_wednesday
    var fieldHTML_wednesday = '<tr class="soh_time_current_wednesday"><th class="soh_opening_timepicker_field_wednesday"><input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value=""></th><th class="soh_closing_timepicker_field_wednesday"><input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_wednesday).click(function(){
        jQuery(wrapper_wednesday).append(fieldHTML_wednesday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_wednesday).on('click', '.soh_day_close_wednesday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_wednesday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_wednesday tr').remove();
    });

    if(jQuery(".soh_period_check_wednesday").is(":checked")){ 
        jQuery(".soh_day_period_wednesday").show(500);
    }else{
        jQuery(".soh_day_period_wednesday").hide(500);
    }
    jQuery(".soh_period_check_wednesday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_wednesday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_wednesday").fadeOut(200);
        }
    });




    var addButton_thursday = jQuery('.soh_day_add_thursday'); //Add button selector
    var wrapper_thursday = jQuery('.soh_time_wrapaer_thursday'); //Input field wrapper_thursday
    var fieldHTML_thursday = '<tr class="soh_time_current_thursday"><th class="soh_opening_timepicker_field_thursday"><input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value=""></th><th class="soh_closing_timepicker_field_thursday"><input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_thursday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_thursday).click(function(){
        jQuery(wrapper_thursday).append(fieldHTML_thursday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_thursday).on('click', '.soh_day_close_thursday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_thursday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_thursday tr').remove();
    });

    if(jQuery(".soh_period_check_thursday").is(":checked")){ 
        jQuery(".soh_day_period_thursday").show(500);
    }else{
        jQuery(".soh_day_period_thursday").hide(500);
    }
    jQuery(".soh_period_check_thursday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_thursday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_thursday").fadeOut(200);
        }
    });




    var addButton_friday = jQuery('.soh_day_add_friday'); //Add button selector
    var wrapper_friday = jQuery('.soh_time_wrapaer_friday'); //Input field wrapper_friday
    var fieldHTML_friday = '<tr class="soh_time_current_friday"><th class="soh_opening_timepicker_field_friday"><input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value=""></th><th class="soh_closing_timepicker_field_friday"><input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_friday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_friday).click(function(){
        jQuery(wrapper_friday).append(fieldHTML_friday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_friday).on('click', '.soh_day_close_friday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_friday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_friday tr').remove();
    });

    if(jQuery(".soh_period_check_friday").is(":checked")){ 
        jQuery(".soh_day_period_friday").show(500);
    }else{
        jQuery(".soh_day_period_friday").hide(500);
    }
    jQuery(".soh_period_check_friday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_friday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_friday").fadeOut(200);
        }
    });




    var addButton_saturday = jQuery('.soh_day_add_saturday'); //Add button selector
    var wrapper_saturday = jQuery('.soh_time_wrapaer_saturday'); //Input field wrapper_saturday
    var fieldHTML_saturday = '<tr class="soh_time_current_saturday"><th class="soh_opening_timepicker_field_saturday"><input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value=""></th><th class="soh_closing_timepicker_field_saturday"><input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_saturday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_saturday).click(function(){
        jQuery(wrapper_saturday).append(fieldHTML_saturday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_saturday).on('click', '.soh_day_close_saturday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_saturday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_saturday tr').remove();
    });

    if(jQuery(".soh_period_check_saturday").is(":checked")){ 
        jQuery(".soh_day_period_saturday").show(500);
    }else{
        jQuery(".soh_day_period_saturday").hide(500);
    }
    jQuery(".soh_period_check_saturday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_saturday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_saturday").fadeOut(200);
        }
    });




    var addButton_sunday = jQuery('.soh_day_add_sunday'); //Add button selector
    var wrapper_sunday = jQuery('.soh_time_wrapaer_sunday'); //Input field wrapper_sunday
    var fieldHTML_sunday = '<tr class="soh_time_current_sunday"><th class="soh_opening_timepicker_field_sunday"><input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value=""></th><th class="soh_closing_timepicker_field_sunday"><input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value=""></th><td></td><td><a href="javascript:void(0);" class="soh_day_close_sunday button">X</a></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_sunday).click(function(){
        jQuery(wrapper_sunday).append(fieldHTML_sunday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_sunday).on('click', '.soh_day_close_sunday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_sunday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_sunday tr').remove();
    });

    if(jQuery(".soh_period_check_sunday").is(":checked")){ 
        jQuery(".soh_day_period_sunday").show(500);
    }else{
        jQuery(".soh_day_period_sunday").hide(500);
    }
    jQuery(".soh_period_check_sunday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_period_sunday").fadeIn(300);
        } else {
            jQuery(".soh_day_period_sunday").fadeOut(200);
        }
    });



    if(jQuery(".soh_notification_management_mode").is(":checked")){ 
        jQuery("#soh_role_section").show(500);
    }else{
        jQuery("#soh_role_section").hide(500);
    }
    jQuery(".soh_notification_management_mode").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery("#soh_role_section").fadeIn(300);
        } else {
            jQuery("#soh_role_section").fadeOut(200);
        }
    });

});