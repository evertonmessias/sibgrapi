<?php

class event
{
	public function __construct()
	{
		add_action('init', array($this, 'create_custom_post_type_event'));
	}

	public function create_custom_post_type_event()
	{
		$labels = [
			'name'					=> __('Event', 'Event', 'text_domain'),
			'singular_name'			=> __('Event', 'Event', 'text_domain'),
			'menu_name'				=> __('Event', 'text_domain'),
			'name_admin_bar'		=> __('Event', 'text_domain'),
			'add_new_item'			=> __('Create new Event', 'text_domain'),
			'edit_item'				=> __('Edit Event', 'text_domain'),
			'description'           => __('Description Event', 'text_domain') 
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
			'capability_type'     	=> array('post', 'event'),
			'map_meta_cap'        => true,
		];
		register_post_type('event', $args);
	}

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_event();			
		flush_rewrite_rules();		
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Add in submenu
function type_event(){
  add_submenu_page( 'cegrapi', 'Custom Post Type Admin', 'Events', 'edit_posts','edit.php?post_type=event');
}
add_action( 'admin_menu', 'type_event' );


//Roles for Admin, Editor
function role_caps_event()
{
	$roles = array('editor','administrator');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_event');
		$role->add_cap('read_private_event');
		$role->add_cap('edit_event');
		$role->add_cap('edit_others_event');
		$role->add_cap('edit_published_event');
		$role->add_cap('publish_event');
		$role->add_cap('delete_others_event');
		$role->add_cap('delete_private_event');
		$role->add_cap('delete_published_event');
	}
}
add_action('admin_init', 'role_caps_event',999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta-event.php';
