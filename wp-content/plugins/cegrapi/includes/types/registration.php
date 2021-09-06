<?php

class registration
{
	public function __construct()
	{
		add_action('init', array($this, 'create_custom_post_type_registration'));
	}

	public function create_custom_post_type_registration()
	{
		$labels = [
			'name'					=> __('Registration', 'Registration', 'text_domain'),
			'singular_name'			=> __('Registration', 'Registration', 'text_domain'),
			'menu_name'				=> __('Registration', 'text_domain'),
			'name_admin_bar'		=> __('Registration', 'text_domain'),
			'add_new_item'			=> __('Create new Registration', 'text_domain'),
			'edit_item'				=> __('Edit Registration', 'text_domain'),
			'description'           => __('Description Registration', 'text_domain') 
		];
		$args = [			
			'labels'				=> $labels,
			'supports'              => ['title' /*, 'editor' , 'thumbnail', 'author', 'excerpt'*/],
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
			'capability_type'     	=> array('post', 'registration'),
			'map_meta_cap'        => true,
		];
		register_post_type('registration', $args);
	}

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_registration();			
		flush_rewrite_rules();		
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Add in submenu
function type_registration(){
  add_submenu_page( 'cegrapi', 'Custom Post Type Admin', 'Registration', 'edit_posts','edit.php?post_type=registration');
}
add_action( 'admin_menu', 'type_registration' );


//Roles for Admin, Editor
function role_caps_registration()
{
	$roles = array('editor','administrator');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_registration');
		$role->add_cap('read_private_registration');
		$role->add_cap('edit_registration');
		$role->add_cap('edit_others_registration');
		$role->add_cap('edit_published_registration');
		$role->add_cap('publish_registration');
		$role->add_cap('delete_others_registration');
		$role->add_cap('delete_private_registration');
		$role->add_cap('delete_published_registration');
	}
}
add_action('admin_init', 'role_caps_registration',999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta-registration.php';
