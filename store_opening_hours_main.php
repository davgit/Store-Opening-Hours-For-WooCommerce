<?php
/**
* Plugin Name: Store Opening Hours For WooCommerce
* Description: This plugin allows you to Create Store Opening Hours in Wordpress.
* Version: 1.0
* Copyright: 2021 
*/

if (!defined('ABSPATH')) {
	exit();
}
if (!defined('SOH_PLUGIN_NAME')) {
  define('SOH_PLUGIN_NAME', 'Store Opening Hours For WooCommerce');
}
if (!defined('SOH_PLUGIN_VERSION')) {
  define('SOH_PLUGIN_VERSION', '2.0.0');
}
if (!defined('SOH_PLUGIN_FILE')) {
  define('SOH_PLUGIN_FILE', __FILE__);
}
if (!defined('SOH_PLUGIN_DIR')) {
  define('SOH_PLUGIN_DIR',plugins_url('', __FILE__));
}
if (!defined('SOH_BASE_NAME')) {
    define('SOH_BASE_NAME', plugin_basename(SOH_PLUGIN_FILE));
}

if (!class_exists('SOH')) {

	class SOH {

  	protected static $SOH_instance;

  	public static function SOH_instance() {
    	if (!isset(self::$SOH_instance)) {
      	self::$SOH_instance = new self();
      	self::$SOH_instance->init();
      	self::$SOH_instance->includes();
    	}
    	return self::$SOH_instance;
    }

    function __construct() {
    	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    	//check plugin activted or not
    	add_action('admin_init', array($this, 'SOH_check_plugin_state'));
  	}

  	function init() {	   
  		add_action( 'admin_notices', array($this, 'SOH_show_notice'));   	
    	add_action( 'admin_enqueue_scripts', array($this, 'SOH_load_admin_script_style'));
    	add_action( 'wp_enqueue_scripts',  array($this, 'SOH_load_script_style'));
  		add_filter( 'plugin_row_meta', array( $this, 'SOH_plugin_row_meta' ), 10, 2 );

    }		

    //Load all includes files
    function includes() {
      	include_once('includes/soh_comman.php');
        include_once('includes/soh_backend.php');
      	include_once('includes/soh_frontend.php');
    }

    function SOH_load_admin_script_style() {
  	  wp_enqueue_style( 'soh-backend-css', SOH_PLUGIN_DIR.'/assets/css/soh_backend_css.css', false, '1.0' );
      wp_enqueue_script( 'soh-backend-js', SOH_PLUGIN_DIR.'/assets/js/soh_backend_js.js', array( 'jquery', 'select2') );
      wp_localize_script( 'ajaxloadpost', 'ajax_postajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
      wp_enqueue_style( 'woocommerce_admin_styles-css', WP_PLUGIN_URL. '/woocommerce/assets/css/admin.css',false,'1.0',"all");
      wp_enqueue_script( 'wp-color-picker-alpha', SOH_PLUGIN_DIR . '/assets/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.0.0', true );
      wp_enqueue_style( 'wp-color-picker' );
      wp_enqueue_media();
      wp_upload_dir();
    }


    function SOH_load_script_style() {
    	wp_enqueue_script('jquery', false, array(), false, false);
    	wp_enqueue_style( 'soh-frontend-css', SOH_PLUGIN_DIR.'/assets/css/soh_frontend_css.css', false, '1.0' );
      wp_enqueue_script( 'soh-frontend-js', SOH_PLUGIN_DIR . '/assets/js/soh_frontend_js.js', false, '1.0');
    }

    function SOH_show_notice() {
    	if ( get_transient( get_current_user_id() . 'wfcerror' ) ) {

    		deactivate_plugins( plugin_basename( __FILE__ ) );

    		delete_transient( get_current_user_id() . 'wfcerror' );

    		echo '<div class="error"><p> This plugin is deactivated because it require <a href="plugin-install.php?tab=search&s=woocommerce">WooCommerce</a> plugin installed and activated.</p></div>';
    	}
  	}

    function SOH_plugin_row_meta( $links, $file ) {
      if ( SOH_BASE_NAME === $file ) {
        $row_meta = array(
            'rating'    =>  '<a href="https://www.xeeshop.com/support-us/?utm_source=aj_plugin&utm_medium=plugin_support&utm_campaign=aj_support&utm_content=aj_wordpress" target="_blank">Support</a> |<a href="#" target="_blank"><img src="'.SOH_PLUGIN_DIR.'/images/star.png" class="soh_rating_div"></a>'
        );
        return array_merge( $links, $row_meta );
      }
      return (array) $links;
    }

    function SOH_check_plugin_state(){
  		if ( ! ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) ) {
    		set_transient( get_current_user_id() . 'wfcerror', 'message' );
  		}
  	}

	}
  	add_action('plugins_loaded', array('SOH', 'SOH_instance'));  	
}

?>