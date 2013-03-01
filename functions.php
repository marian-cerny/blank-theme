<?php

add_action( 'init', 'init_theme' );

function init_theme() 
{
	// REGISTER MAIN MENU
	// register_nav_menu( 'main_menu', 'Main menu' );
	
	// THUMBNAIL SUPPORT
	// add_theme_support( 'post-thumbnails' );
	
	// ADD CUSTOM SETTINGS TO EXISTING MENUS
	// register_custom_settings();
	
	// REGISTER WIDGETS
	// register_widget_areas();
	
	// REGISTER POST TYPES
	// register_custom_post_types();
	
	// only continue if on front-end
	if ( is_admin() )
		return;
	
	//ENQUEUE STYLES	
	enqueue_all_styles();
	
	//ENQUEUE SCRIPTS
	enqueue_all_scripts();
	
}

function enqueue_all_styles()
{
	wp_enqueue_style( 'main', get_css_url() . 'main.css' /*, null , false, 'screen  and (max-width: 1100px)'*/ );
}

function enqueue_all_scripts()
{
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'anti-ie', get_scripts_url() . 'sevenup_anti_ie.min.js' );
	wp_enqueue_script( 'anti-ie-black', get_scripts_url() . 'sevenup_black.0.3.min.js' );
}

function get_scripts_url()
{
	return get_template_directory_uri() . '/scripts/';
}

function get_img_url()
{
	return get_template_directory_uri() . '/design/img/';
}

function get_css_url()
{
	return get_template_directory_uri() . '/design/css/';
}



/* ===== CUSTOM SETTINGS ===== */

// function register_custom_settings()
// {
	// register_setting( 'general', 'site_desc', 'esc_attr' );
	// add_settings_field('site_desc', '<label for="site_desc">'.__('Header text' , 'site_desc' ).'</label>' , 'output_site_desc', 'general' );
// }
// OUTPUT CUSTOM SETTING
// function output_site_desc() 
// {
	// $value = get_option( 'site_desc', '' );
	// echo '<textarea rows="4" cols="40" id="site_desc" name="site_desc">' . $value . '</textarea>';
// }



/* ===== WIDGETS ===== */

// function register_widgets()
// {
	// register_sidebar(array(
		// 'name' => 'Sidebar',
		// 'description' => 'This is the sidebar widget area',
        // 'before_widget' => '',
        // 'after_widget' => '',
        // 'before_title' => '<div class="title">',
        // 'after_title' => '</div>',
    // ));
// }



/* ===== CUSTOM POST TYPES ===== */

// function register_custom_post_types() 
// {
	// $labels = array(
		// 'name'               => 'Products',
		// 'singular_name'      => 'Product', 
		// 'add_new'            => 'Add New', 
		// 'add_new_item'       => 'Add New Product',
		// 'edit_item'          => 'Edit Product',
		// 'new_item'           => 'New Product',
		// 'all_items'          => 'All Products',
		// 'view_item'          => 'View Product',
		// 'search_items'       => 'Search Products',
		// 'not_found'          => 'No products found',
		// 'not_found_in_trash' => 'No products found in the Trash', 
		// 'parent_item_colon'  => '',
		// 'menu_name'          => 'Products'
	// );
	// $args = array(
		// 'labels'        => $labels,
		// 'description'   => 'Holds our products and product specific data',
		// 'public'        => true,
		// 'menu_position' => 5,
		// 'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		// 'has_archive'   => true,
	// );
	// register_post_type( 'product', $args );	
	
	// add_action( 'init', 'register_custom_post_types' );
// }

?>