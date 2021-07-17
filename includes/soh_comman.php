<?php
if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_comman')) {

    class SOH_comman {

        protected static $instance;

        public static function instance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
                self::$instance->init();
            }
             return self::$instance;
        }
         function init() {
            global $soh_comman;
            $optionget = array(
                'soh_store_hours_manager' => 'yes',
                'soh_alert_box_font_size' => '16',
                'soh_alert_box_color' => '#3d97ff',
                'soh_alert_box_background_color' => '#000cff',
                'soh_alert_box_icon_logo' => '',
                'soh_notification_management_mode' => 'yes',
                'soh_text_open_widget' => 'Open',
                'soh_text_close_widget' => 'Close',
                'soh_text_hours_open_model' => 'We are open!',
                'soh_text_hours_close_model' => 'Sorry, today shop is close!',
                'soh_text_schedule_header' => 'Business hours',
                'soh_text_holiday_schedule' => 'Holiday',
                'soh_widget_countdown_font_size' => '16',
                'soh_widget_font_color' => '#ff7526',
                'soh_widget_background_color' => '#2468f2',
                'soh_holiday_monday' => '',
                'soh_holiday_tuesday' => '',
                'soh_holiday_wednesday' => '',
                'soh_holiday_thursday' => '',
                'soh_holiday_friday' => '',
                'soh_holiday_saturday' => '',
                'soh_holiday_sunday' => '',
                'soh_period_monday' => '',
                'soh_period_tuesday' => '',
                'soh_period_wednesday' => '',
                'soh_period_thursday' => '',
                'soh_period_friday' => '',
                'soh_period_saturday' => '',
                'soh_period_sunday' => '',
            );
           
            foreach ($optionget as $key_optionget => $value_optionget) {
               $soh_comman[$key_optionget] = get_option( $key_optionget,$value_optionget );
            }
        }
    }

    SOH_comman::instance();
}
?>