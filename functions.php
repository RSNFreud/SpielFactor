<?php
// Custom settings
function custom_settings_add_menu() {
  add_submenu_page( 'themes.php', 'Theme Settings', 'Theme Settings', 'manage_options', 'custom-settings', 'custom_settings_page');
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

/**
 * Insert custom login logo
 */
 
function custom_login_logo() {
    echo '
        <style>
            .login h1 a { 
                background-image: url(wp-content/themes/Wordpress Site/images/logo.jpg) !important; 
                background-size: 234px 67px; 
                width:234px; 
                height:67px; 
                display:block; 
            }
        </style>
    ';
}
add_action( 'login_head', 'custom_login_logo' );

// Twitter
function setting_facebookfeed() { ?>
  <input type="text" name="facebookfeed" id="facebookfeed" value="<?php echo get_option( 'facebookfeed' ); ?>" />
<?php }

function setting_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option( 'email' ); ?>" />
<?php }

function setting_register() { ?>
  <input type="text" name="register" id="register" value="<?php echo get_option( 'register' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'facebookfeed', 'Facebook Name', 'setting_facebookfeed', 'theme-options', 'section' );
  add_settings_field( 'email', 'Contact Email', 'setting_email', 'theme-options', 'section' );
  add_settings_field( 'register', 'Registration Page URL', 'setting_register', 'theme-options', 'section' );

  register_setting('section', 'facebookfeed');
  register_setting('section', 'email');
  register_setting('section', 'register');
}
add_action( 'admin_init', 'custom_settings_page_setup' );