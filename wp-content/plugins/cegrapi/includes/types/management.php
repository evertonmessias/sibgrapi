<?php

class management
{
	public function __construct()
	{
		add_action('init', array($this, 'create_custom_post_type_management'));
	}

	public function create_custom_post_type_management()
	{
		$labels = [
			'name'					=> __('Management', 'Management', 'text_domain'),
			'singular_name'			=> __('Management', 'Management', 'text_domain'),
			'menu_name'				=> __('Management', 'text_domain'),
			'name_admin_bar'		=> __('Management', 'text_domain'),
			'add_new_item'			=> __('Criar nova Management', 'text_domain'),
			'edit_item'				=> __('Editar Management', 'text_domain'),
			'description'           => __('Descrição Management', 'text_domain') 
		];
		$args = [			
			'labels'				=> $labels,
			'supports'              => ['title' , 'editor'  /*, 'thumbnail', 'author', 'excerpt'*/],
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
			'capability_type'     	=> array('post', 'management'),
			'map_meta_cap'        => true,
		];
		register_post_type('management', $args);
	}

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_management();			
		flush_rewrite_rules();		
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

//Add in submenu
function type_management(){
  add_submenu_page( 'cegrapi', 'Custom Post Type Admin', 'Management', 'edit_posts','edit.php?post_type=management');
}
add_action( 'admin_menu', 'type_management' );


//Roles for Admin, Editor
function role_caps_management()
{
	$roles = array('editor','administrator');
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
add_action('admin_init', 'role_caps_management',999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/postmeta-management.php';
