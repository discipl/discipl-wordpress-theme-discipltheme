<?php
/**-------------------------------------------------------------------
 * Theme Settings
 --------------------------------------------------------------------*/
 
define( 'ZP_SETTINGS_FIELD', 'zp-settings' );


/**
* zpsettings_default_theme_options function.
*/
function zpsettings_default_theme_options() {
	$options = array(
		'zp_logo' => '',
		'zp_logo_height' => 64,
		'zp_logo_width' => 180,
		'zp_footer_text' 	=> ''
	);
	
	return apply_filters( 'zpsettings_default_theme_options', $options );
}


/**
* zpsettings_sanitize_inputs function.
*/ 
add_action( 'genesis_settings_sanitizer_init', 'zpsettings_sanitize_inputs' );

function zpsettings_sanitize_inputs() {
    genesis_add_option_filter( 'one_zero',
		ZP_SETTINGS_FIELD,
			array()
		);

	genesis_add_option_filter( 'no_html',
		ZP_SETTINGS_FIELD,
			array(
				'zp_logo_height',
				'zp_logo_height',
				'zp_logo',
				'zp_logo'
			)
		);
		
	genesis_add_option_filter( 'requires_unfiltered_html',
		ZP_SETTINGS_FIELD,
			array(
				'zp_footer_text'
			)
		);
}


/**
* zpsettings_register_settings function.
*/
add_action( 'admin_init', 'zpsettings_register_settings' );

function zpsettings_register_settings() {
	register_setting( ZP_SETTINGS_FIELD, ZP_SETTINGS_FIELD );
	
	add_option( ZP_SETTINGS_FIELD, zpsettings_default_theme_options() );
	
	if ( genesis_get_option( 'reset', ZP_SETTINGS_FIELD ) ) {
		update_option( ZP_SETTINGS_FIELD, zpsettings_default_theme_options() );
		genesis_admin_redirect( ZP_SETTINGS_FIELD, array( 'reset' => 'true' ) );
		exit;
	}
}

/**
* zpsettings_theme_settings_notice function.
*/
add_action( 'admin_notices', 'zpsettings_theme_settings_notice' );

function zpsettings_theme_settings_notice() {
	if ( ! isset( $_REQUEST['page'] ) || $_REQUEST['page'] != ZP_SETTINGS_FIELD )
		return;
	if ( isset( $_REQUEST['reset'] ) && 'true' == $_REQUEST['reset'] )
		echo '<div id="message" class="updated"><p><strong>' . __( 'Settings reset.', 'start' ) . '</strong></p></div>';
	elseif ( isset( $_REQUEST['settings-updated'] ) && 'true' == $_REQUEST['settings-updated'] )
		echo '<div id="message" class="updated"><p><strong>' . __( 'Settings saved.', 'start' ) . '</strong></p></div>';
}

/**
* zpsettings_theme_options function.
*/
add_action( 'admin_menu', 'zpsettings_theme_options' );

function zpsettings_theme_options() {
	global $_zpsettings_settings_pagehook;
	
	$_zpsettings_settings_pagehook = add_submenu_page( 'genesis', 'Start Settings', 'Start Settings', 'edit_theme_options', ZP_SETTINGS_FIELD, 'zpsettings_theme_options_page' );
	
	//add_action( 'load-'.$_zpsettings_settings_pagehook, 'zpsettings_settings_styles' );
	add_action( 'load-'.$_zpsettings_settings_pagehook, 'zpsettings_settings_scripts' );
	add_action( 'load-'.$_zpsettings_settings_pagehook, 'zpsettings_settings_boxes' );
}


/**
* zpsettings_settings_scripts function.
* This function enqueues the scripts needed for the CT Settings settings page.
*/

function zpsettings_settings_scripts() {
	global $_zpsettings_settings_pagehook, $post;
	
	if( is_admin() ){
		
		
		wp_register_script( 'zp_image_upload', get_stylesheet_directory_uri() .'/include/upload/image-upload.js', array('jquery','media-upload','thickbox') );
		wp_enqueue_script('jquery');
		wp_enqueue_script('thickbox');
		wp_enqueue_style('thickbox');
		wp_enqueue_script( 'common' );
		wp_enqueue_script( 'wp-lists' );
		wp_enqueue_script( 'postbox' );
		
		wp_enqueue_media( array( 'post' => $post ) );
		wp_enqueue_script('zp_image_upload');		
	}
}


/**
* zpsettings_settings_boxes function.
*
* This function sets up the metaboxes to be populated by their respective callback functions.
*
*/
function zpsettings_settings_boxes() {
	global $_zpsettings_settings_pagehook;
	
	add_meta_box( 'zpsettings_general_settings', __( 'General Settings', 'start' ), 'zpsettings_general_settings', $_zpsettings_settings_pagehook, 'main' ,'high');
	add_meta_box( 'zpsettings_footer_settings', __( 'Footer Settings', 'start' ), 'zpsettings_footer_settings', $_zpsettings_settings_pagehook, 'main','high' );
}

/**
* zpsettings_home_settings function.
*
* Callback function for the ZP Settings Social Sharing metabox.
*
*/


function zpsettings_general_settings() { ?>   

    <p><label for="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo]"><?php _e( 'Upload Custom Logo.', 'start' ); ?></label>
    <input type="text" id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo]" value="<?php echo  genesis_get_option( 'zp_logo', ZP_SETTINGS_FIELD ); ?>" />    
    <input id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_upload_button]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_upload_button]" type="button" class="button upload_button" value="<?php _e( 'Upload Logo', 'start' ); ?>" /> 
	<input name="zp_remove_button" type="button"  class="button remove_button" value="<?php _e( 'Remove Logo', 'start' ); ?>" /> 
    <span class="upload_preview" style="display: block;">
		<img style="max-width:100%;" src="<?php echo genesis_get_option( 'zp_logo', ZP_SETTINGS_FIELD ); ?>" />
	</span>
    </p>

    <p><label for="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_width]"><?php _e( 'Custom Logo Width in pixel. e.g. 200', 'start' ); ?></label>

	<input type="text" size="30" value="<?php echo genesis_get_option( 'zp_logo_width', ZP_SETTINGS_FIELD ); ?>" id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_width]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_width]">

	</p> 
    
    <p><label for="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_height]"><?php _e( 'Custom Logo Height in pixel. e.g. 200', 'start' ); ?></label>

	<input type="text" size="30" value="<?php echo genesis_get_option( 'zp_logo_height', ZP_SETTINGS_FIELD ); ?>" id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_height]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_logo_height]">

	</p>       

    <p><label for="<?php echo ZP_SETTINGS_FIELD; ?>[zp_favicon]"><?php _e( 'Upload Custom Favicon.', 'start' ); ?></label>  

    <input type="text" id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_favicon]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_favicon]" value="<?php echo  genesis_get_option( 'zp_favicon', ZP_SETTINGS_FIELD ); ?>" />

    <input id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_favicon_upload_button]" name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_favicon_upload_button]" type="button" class="button upload_button" value="<?php _e( 'Upload Favicon', 'start' ); ?>" />
    <input name="zp_remove_button" type="button"  class="button remove_button" value="<?php _e( 'Remove Favicon', 'start' ); ?>" /> 
    <span class="upload_preview" style="display: block;">
		<img style="max-width:100%;" src="<?php echo genesis_get_option( 'zp_favicon', ZP_SETTINGS_FIELD ); ?>" />
	</span>
    </p>

             

    

	<p><span class="description"><?php _e( 'This is the general settings.','start' ); ?></span></p>    

	

<?php } 
function zpsettings_footer_settings() { ?>

    <p><label for="<?php echo ZP_SETTINGS_FIELD; ?>[zp_footer_text]"><?php _e( 'Footer Text', 'start' ); ?><br>

	<textarea rows="3"  id="<?php echo ZP_SETTINGS_FIELD; ?>[zp_footer_text]" class="widefat"  name="<?php echo ZP_SETTINGS_FIELD; ?>[zp_footer_text]"><?php echo genesis_get_option( 'zp_footer_text', ZP_SETTINGS_FIELD ); ?></textarea>

	<br><small><strong><?php _e( 'Enter your site copyright here.', 'start' ); ?></strong></small>

	</label>

	</p>    

	

<?php }


/* Replace the 'Insert into Post Button inside Thickbox'
------------------------------------------------------------ */
function zp_replace_thickbox_text($translated_text, $text ) {	

	if ( 'Insert into Post' == $text ) {

		$referer = strpos( wp_get_referer(), ZP_SETTINGS_FIELD );

		if ( $referer != '' ) {

			return __('Insert Image!', 'start' );

		}

	}
	return $translated_text;

}
/* Hook to filter Insert into Post Button in thickbox
------------------------------------------------------------ */

function zp_change_insert_button_text() {

		add_filter( 'gettext', 'zp_replace_thickbox_text' , 1, 2 );

}

add_action( 'admin_init', 'zp_change_insert_button_text' );


/**
 * zpsettings_settings_layout_columns function.
 *
 * This function sets the column layout to one for the CT Settings settings page.
 *
 */
add_filter( 'screen_layout_columns', 'zpsettings_settings_layout_columns', 10, 2 );

function zpsettings_settings_layout_columns( $columns, $screen ) {
	global $_zpsettings_settings_pagehook;
	if ( $screen == $_zpsettings_settings_pagehook ) {
		$columns[$_zpsettings_settings_pagehook] = 2;
	}
	return $columns;
}


/**
 * zpsettings_theme_options_page function.
 *
 * This function displays the content for the CT Settings settings page, builds the forms and outputs the metaboxes.
 *
 */

function zpsettings_theme_options_page() { 
	global $_zpsettings_settings_pagehook, $screen_layout_columns;
	
	$screen = get_current_screen();
	$width = "width: 100%;";
	$hide2 = $hide3 = " display: none;";
	?>	
	<div id="zpsettings" class="wrap genesis-metaboxes">
		<form method="post" action="options.php">
			<?php wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); ?>
			<?php wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); ?>
			<?php settings_fields( ZP_SETTINGS_FIELD ); ?>
			<?php screen_icon( 'options-general' ); ?>
			<h2 style="width: 100%; margin-bottom: 10px;" ><?php _e( 'Start Settings', 'start' ); ?>
                <span style="float: right; text-align: center;"><input type="submit" class="button-primary genesis-h2-button" value="<?php _e( 'Save Settings', 'start' ) ?>" style="vertical-align: top;" />
                <input type="submit" class="button genesis-h2-button" name="<?php echo ZP_SETTINGS_FIELD; ?>[reset]" value="<?php _e( 'Reset Settings', 'start' ); ?>" onclick="return genesis_confirm('<?php echo esc_js( __( 'Are you sure you want to reset?', 'start' ) ); ?>');" /></span>
            </h2>
            
       		<div class="metabox-holder">
				<div class="postbox-container" style="<?php echo $width; ?>">
					<?php do_meta_boxes( $_zpsettings_settings_pagehook, 'main', null ); ?>
				</div>
			</div>
            <div class="bottom-buttons">
                <input type="submit" class="button-primary genesis-h2-button" value="<?php _e( 'Save Settings', 'start' ) ?>" />
                <input type="submit" class="button genesis-h2-button" name="<?php echo ZP_SETTINGS_FIELD; ?>[reset]" value="<?php _e( 'Reset Settings', 'start' ); ?>" onclick="return genesis_confirm('<?php echo esc_js( __( 'Are you sure you want to reset?', 'start' ) ); ?>');" />            
            </div>            
		</form>
     </div>

	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready( function($) {
			// close postboxes that should be closed
			$('.if-js-closed').removeClass('if-js-closed').addClass('closed');
			// postboxes setup
			postboxes.add_postbox_toggles('<?php echo $_zpsettings_settings_pagehook; ?>');
		});
		//]]>
	</script>
<?php }