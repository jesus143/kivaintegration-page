<?php 

/*
Plugin Name: Kiva Integration Page
Plugin URI: 
Description: This is the extension of the kiva integration plugin and it will allow to create new page and a responsive page with the data of kiva users.
Version: 0.1
Author: Jesus Erwin Suarez
Author URI: 
*/




 /**
 * Plugin path
 */
define('kip_plugin_path', plugin_dir_path( __FILE__ )); 

/**
 *  plugin barcode folders url
 */
define('kip_plugin_url', get_site_url() . '/wp-content/plugins/kivaintegration-page'); 
 

/**
 * Create page when plugin si activated
 */ 
register_activation_hook( __FILE__, 'kip_insert_page' ); 

 /**
  * remove plugin page when deactivated 
  */
register_deactivation_hook( __FILE__, 'kip_remove_page' ); 
 

require_once(kip_plugin_path . 'inc/kivaintegration.page.class.php'); 
require_once(kip_plugin_path . 'inc/shortcodes.php');  

add_shortcode('kip_page', 'kip_page_func');   

 // $kivaIntegrationPage = new KivaIntegrationPageClass(); 
 // $kivaIntegrationPage->exec(); 

// kiva admin area
add_action("admin_menu", "kip_admin_menu"); 
function kip_admin_menu() {  
    add_menu_page('Kiva Integration Page', 'Kiva Integration Page', 'manage_options', "kiva-integration-page", 'kip_admin_view'); 
} 
function kip_admin_view () {  

 		if(isset($_POST['kip_update'])) {
 			update_option('kip_clean_water_message', $_POST['kip_clean_water_message']); 
 			print "<div style='color:green;padding: 8px;width: 50%;'>Successfully updated!</div>"; 
 		} 

 		// print "Option = " . get_option('kip_clean_water_message');  
		// print "<pre>"; 
		// 	print_r($_SERVER); 
		// print "</pre>"; 
		 
 		?> 
 		<br> 
		<form action="<?php echo $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING']; ?>" method="post" >
			<label> <b> Clean Water Message </b> </label> <br> <br>
		  	<textarea name="kip_clean_water_message" rows="10" cols="100" style="resize:none"   ><?php echo get_option('kip_clean_water_message'); ?></textarea><br>
			<input type="submit" class="alert alert-danger"  value="Update" name="kip_update" />
		</form> 
	<?php 
} 