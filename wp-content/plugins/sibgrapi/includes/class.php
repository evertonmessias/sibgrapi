<?php
class sibgrapi
{
	public function __construct()
	{
		add_action('init', array($this, 'create_custom_post_type_modulo_agenda'));
	}

	public function create_custom_post_type_modulo_agenda()
	{
		$labels = [
			'name'					=> _x('Agenda', 'Agenda', 'text_domain'),
			'singular_name'			=> _x('Agenda', 'Agenda', 'text_domain'),
			'menu_name'				=> __('Agenda', 'text_domain'),
			'name_admin_bar'		=> __('Agenda', 'text_domain'),
			'add_new_item'			=> __('Criar nova Agenda', 'text_domain'),
			'edit_item'				=> __('Editar Agenda', 'text_domain') 
		];
		$args = [
			'label'                	=> __('Agenda', 'text_domain'),
			'description'           => __('Descrição Agenda', 'text_domain'),
			'labels'				=> $labels,
			'supports'              => ['title' /* , 'editor' ,'thumbnail', 'author', 'excerpt'*/],
			'taxonomies'            => [/*'category', 'post_tag'*/],
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 3,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'			=> true,
			'menu_icon'             => 'dashicons-edit-page',
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'     	=> array('post', 'agenda'),
			'map_meta_cap'        => true,
		];
		register_post_type('agenda', $args);
	}

	public function activate()
	{
		remove_role('subscriber');
		remove_role('contributor');
		remove_role('author');
		$this->create_custom_post_type_modulo_agenda();			
		flush_rewrite_rules();		
	}

	public function deactivate()
	{
		flush_rewrite_rules();
	}
}