<?php

class management
{
	public function __construct()
	{
		add_action('init', array($this,'create_custom_post_type_management'));
		add_action('init', array($this,'create_management_taxonomies'));
	}

	public function create_custom_post_type_management()
	{
		$labels = [
			'name' => _x('Management', 'post type general name'),
			'singular_name' => _x('Management', 'post type singular name'),
			'add_new' => _x('Add New', 'Management'),
			'add_new_item' => __('Add New Management'),
			'edit_item' => __('Edit Management'),
			'new_item' => __('New Management'),
			'view_item' => __('View Management'),
			'search_items' => __('Search Management'),
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
			'menu_icon'             => 'dashicons-businessman',
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'     	=> array('post', 'management'),
			'map_meta_cap'        => true,
		];
		register_post_type('management', $args);
	}

	function create_management_taxonomies() {
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
			'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'categories' ),
		);	
		register_taxonomy( 'management_categories', array( 'management' ), $args );
	}	

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_management();
		$this->create_management_taxonomies();
		flush_rewrite_rules();
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Roles for Admin, Editor
function role_caps_management()
{
	$roles = array('editor', 'administrator');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_management');
		$role->add_cap('read_private_management');
		$role->add_cap('edit_management');
		$role->add_cap('edit_others_management');
		$role->add_cap('edit_published_management');
		$role->add_cap('publish_management');
		$role->add_cap('delete_others_management');
		$role->add_cap('delete_private_management');
		$role->add_cap('delete_published_management');
	}
}
add_action('admin_init', 'role_caps_management', 999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta-management.php';
