<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Portfolio_Manager_Post_Types {

	public function register_project_post_type() {

		$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name', 'portfolio-manager' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'portfolio-manager' ),
			'menu_name'             => __( 'Projects', 'portfolio-manager' ),
			'name_admin_bar'        => __( 'Project', 'portfolio-manager' ),
			'archives'              => __( 'Project Archives', 'portfolio-manager' ),
			'attributes'            => __( 'Project Attributes', 'portfolio-manager' ),
			'parent_item_colon'     => __( 'Parent Project:', 'portfolio-manager' ),
			'all_items'             => __( 'All Projects', 'portfolio-manager' ),
			'add_new_item'          => __( 'Add New Project', 'portfolio-manager' ),
			'add_new'               => __( 'Add New', 'portfolio-manager' ),
			'new_item'              => __( 'New Project', 'portfolio-manager' ),
			'edit_item'             => __( 'Edit Project', 'portfolio-manager' ),
			'update_item'           => __( 'Update Project', 'portfolio-manager' ),
			'view_item'             => __( 'View Project', 'portfolio-manager' ),
			'view_items'            => __( 'View Projects', 'portfolio-manager' ),
			'search_items'          => __( 'Search Project', 'portfolio-manager' ),
			'not_found'             => __( 'Not found', 'portfolio-manager' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio-manager' ),
		);

		$args = array(
			'label'        => __( 'Project', 'portfolio-manager' ),
			'labels'       => $labels,
			'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'public'       => true,
			'show_ui'      => true,
			'show_in_rest' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-portfolio',
		);

		register_post_type( 'project', $args );
	}

	public function register_project_meta_fields() {

		$fields = array(
			'github_url' => 'string',
			'live_url'   => 'string',
			'tech_stack' => 'string',
		);

		foreach ( $fields as $field_name => $field_type ) {
			register_post_meta(
				'project',
				$field_name,
				array(
					'type'         => $field_type,
					'single'       => true,
					'show_in_rest' => true,
				)
			);
		}
	}

}