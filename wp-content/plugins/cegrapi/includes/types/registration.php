<?php

class registration
{
	public function __construct()
	{
		add_action('init', array($this,'create_custom_post_type_registration'));
		add_action('init', array($this,'create_registration_taxonomies'));
	}

	public function create_custom_post_type_registration()
	{
		$labels = [
			'name' => _x('Registration', 'post type general name'),
			'singular_name' => _x('Registration', 'post type singular name'),
			'add_new' => _x('Add New', 'Registration'),
			'add_new_item' => __('Add New Registration'),
			'edit_item' => __('Edit Registration'),
			'new_item' => __('New Registration'),
			'view_item' => __('View Registration'),
			'search_items' => __('Search Registration'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		];
		$args = [
			'labels'				=> $labels,
			'supports'              => ['title', 'thumbnail'/*,'editor', 'author', 'excerpt'*/],
			'taxonomies'            => [/*'category', 'post_tag'*/],
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'query_var' 			=> true,
			'menu_position'         => 2,
			'show_in_admin_bar'     => true,
			'rewrite' 				=> true,
			'show_in_nav_menus'     => true,
			'can_export'			=> true,
			'menu_icon'             => 'dashicons-welcome-write-blog',
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'     	=> array('post', 'registration'),
			'map_meta_cap'        => true,
		];
		register_post_type('registration', $args);
	}

	function create_registration_taxonomies() {
		$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Categories' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Categories' ),
		);
	
		$args = array(
			'labels'            => $labels,
			'hierarchical'      => true,			
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true
		);	
		register_taxonomy( 'registration_categories','registration', $args );
	}	

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_registration();
		$this->create_registration_taxonomies();
		flush_rewrite_rules();
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Roles for Admin, Editor
function role_caps_registration()
{
	$roles = array('editor', 'administrator');
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
add_action('admin_init', 'role_caps_registration', 999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta/postmeta-registration.php';
