jQuery(document).ready(function () {
    var soh = stor_opening_hours;
    soh.init();

    jQuery('.soh_modal_close_icon').on('click', function(){
        jQuery('.soh_alert_notification_main').fadeOut(500);
        jQuery('.soh_alert_notification_content').removeClass('soh_alert_show_popup_background');
    });
    
    jQuery('.soh-alert-show-popup').click(function(){
        jQuery('.soh_alert_notification_main').fadeOut(500);
        jQuery('.soh_alert_notification_content').removeClass('soh_alert_show_popup_background');
    });
   
});
var stor_opening_hours = {
    init_delay: 0,
    display_time: 10,
    timeout_display: 0,
    timeout_init: 0,
    init: function () {
        this.timeout_init = setTimeout(function () {
            stor_opening_hours.popup_show();
        }, this.init_delay * 1000);

        /*Gift box icon*/
        jQuery('.soh_alert_notification_popup_widget').on('click', function(){
            stor_opening_hours.popup_show();
            stor_opening_hours.clear_time_init();
        });
    },
    popup_show: function () {
        jQuery('.soh_alert_notification_main').fadeIn(500);
        jQuery('body').addClass('soh-alert-show-popup');
        jQuery('.soh_alert_notification_content').addClass('soh_alert_show_popup_background');
        this.timeout_display = setTimeout(function () {
            stor_opening_hours.popup_hide();
        }, this.display_time * 1000);
    },
    popup_hide: function () {
        jQuery('.soh_alert_notification_main').fadeOut(500);
        jQuery('.soh_alert_notification_content').removeClass('soh_alert_show_popup_background');
    },
    clear_time_init: function () {
        clearTimeout(this.timeout_init);
    },
    clear_time_display: function () {
        clearTimeout(this.timeout_display);
    },
}