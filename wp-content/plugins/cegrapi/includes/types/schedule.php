<?php

class schedule
{
	public function __construct()
	{
		add_action('init', array($this, 'create_custom_post_type_schedule'));
	}

	public function create_custom_post_type_schedule()
	{
		$labels = [
			'name'					=> __('Schedule', 'Schedule', 'text_domain'),
			'singular_name'			=> __('Schedule', 'Schedule', 'text_domain'),
			'menu_name'				=> __('Schedule', 'text_domain'),
			'name_admin_bar'		=> __('Schedule', 'text_domain'),
			'add_new_item'			=> __('Create new Schedule', 'text_domain'),
			'edit_item'				=> __('Edit Schedule', 'text_domain'),
			'description'           => __('Description Schedule', 'text_domain') 
		];
		$args = [			
			'labels'				=> $labels,
			'supports'              => ['title' /* , 'editor' ,'thumbnail', 'author', 'excerpt'*/],
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => false,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'			=> true,			
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'     	=> array('post', 'schedule'),
			'map_meta_cap'        => true,
		];
		register_post_type('schedule', $args);
	}

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_schedule();			
		flush_rewrite_rules();		
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Add in submenu
function type_schedule(){
  add_submenu_page( 'cegrapi', 'Custom Post Type Admin', 'Schedule', 'edit_posts','edit.php?post_type=schedule');
}
add_action( 'admin_menu', 'type_schedule' );


//Roles for Admin, Editor
function role_caps_schedule()
{
	$roles = array('editor','administrator');
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
	}
}
add_action('admin_init', 'role_caps_schedule',999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta-schedule.php';
