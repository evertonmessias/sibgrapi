<?php

//***************** Add General Configuration
function general_configuration_role_caps()
{
	$roles = array('editor');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->remove_cap('list_users');
		$role->remove_cap('create_users');
		$role->remove_cap('remove_users');
		$role->remove_cap('promote_users');
		$role->remove_cap('edit_users');
		$role->remove_cap('manage_options');
	}
}
add_action('admin_init', 'general_configuration_role_caps', 999);


//***************** Add Remove menu page Admin
function wpdocs_remove_menus()
{
	if (current_user_can('editor')) {
		remove_menu_page('index.php'); //Dashboard		
		remove_menu_page('themes.php'); //Appearance
		remove_menu_page('edit-comments.php');
		remove_menu_page('plugins.php'); //Plugins
		remove_menu_page('users.php'); //Users
		remove_menu_page('tools.php'); //Tools
		remove_menu_page('options-general.php'); //Settings
	}
}
add_action('admin_menu', 'wpdocs_remove_menus');


// ***************** Add style & script for Admin
function style_and_script()
{
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
<?php
	wp_enqueue_style('stilos', '/wp-content/plugins/cegrapi/assets/cegrapi.css');
	wp_enqueue_script('scripts', '/wp-content/plugins/cegrapi/assets/cegrapi.js');
}
add_action('admin_enqueue_scripts', 'style_and_script');


// ***************** Add in Menu
function menu_cegrapi()
{
	add_menu_page('CEGRAPI', 'CEGRAPI', 'edit_posts', 'cegrapi', 'function_about', 'dashicons-screenoptions', 1);
}
add_action('admin_menu', 'menu_cegrapi');


//Rename menu iten Admin
function wd_admin_menu_rename() {
	global $menu;	
	$menu[5][0] = 'Portfolio';
}
add_action( 'admin_menu', 'wd_admin_menu_rename' );

// ***************** Add About
function function_about()
{
	include ABSPATH . '/wp-content/plugins/cegrapi/includes/about.php';
}
