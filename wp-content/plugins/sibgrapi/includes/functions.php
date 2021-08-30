<?php

//Roles for Admin
function role_caps()
{
	$roles = array('editor');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_schedule');
		$role->add_cap('read_private_schedule');
		$role->add_cap('edit_schedule');
		$role->add_cap('edit_others_schedule');
		$role->add_cap('edit_published_schedule');
		$role->add_cap('publish_schedule');
		$role->add_cap('delete_others_schedule');
		$role->add_cap('delete_private_schedule');
		$role->add_cap('delete_published_schedule');
		$role->add_cap('list_users');		
		$role->add_cap('manage_options');	
	}
}
add_action('admin_init', 'role_caps',999);

// ADD style & script for Admin
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
		wp_enqueue_style('stilos', '/wp-content/plugins/sibgrapi/css/sibgrapi.css');				
		wp_enqueue_script('scripts', '/wp-content/plugins/sibgrapi/js/sibgrapi.js');		
	}
add_action('admin_enqueue_scripts', 'style_and_script');

//Rename menu iten Admin
function wd_admin_menu_rename() {
	global $menu;
	$menu[3][0] = 'Event';	
	$menu[5][0] = 'Portfolio';
}
add_action( 'admin_menu', 'wd_admin_menu_rename' );

//Remove menu page Admin
function wpdocs_remove_menus(){

	if( current_user_can('editor')){	 
	remove_menu_page( 'index.php' ); //Dashboard		
	remove_menu_page( 'themes.php' ); //Appearance
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'plugins.php' ); //Plugins
	remove_menu_page( 'users.php' );//Users
	remove_menu_page( 'tools.php' ); //Tools
	remove_menu_page( 'options-general.php' );//Settings	
	}
  }
  add_action( 'admin_menu', 'wpdocs_remove_menus' );