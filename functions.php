<?php
function prometium_setup_theme() {
	load_theme_textdomain( "Prometium" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );


	$prometium_custom_logo= array(
		"width"  => '500',
		"height" => '100',
		'class'  => 'ddsds'
	);



	add_theme_support( "custom-logo", $prometium_custom_logo );




	register_nav_menu("topmenu",__("Top Menu","prometium"));
	register_nav_menu("footermenu",__("Footer Menu","prometium"));


}

add_action( "after_setup_theme", "prometium_setup_theme" );



function Prometium_assets() {
	wp_enqueue_script( "anonymous", "//kit.fontawesome.com/92da4b957c.js", null, "0.0.1", true );
	wp_enqueue_style( "carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ) );
	wp_enqueue_style( "responsive_style-css", get_theme_file_uri( "/assets/css/responsive_style.css" ) );
	wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ) );
	wp_enqueue_style( "default-css", get_theme_file_uri( "/assets/css/owl.theme.default.min.css" ) );
	wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ) );
	wp_enqueue_style( "launcher", get_stylesheet_uri(), null, "0.1" );


	wp_enqueue_script( "ionicons", "//unpkg.com/ionicons@5.0.0/dist/ionicons.js",null, "0.0.1", true );
	wp_enqueue_script( "custom.-js", get_theme_file_uri( "/assets/js/custom.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "bootstrap-jquery-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "jquery-min-js", get_theme_file_uri( "/assets/js/jquery.min.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "carousel-jquery-js", get_theme_file_uri( "/assets/js/owl.carousel.js" ), array( "jquery" ), null, true );


}

add_action( "wp_enqueue_scripts", "prometium_assets" );

function prometium_widgets_sidebar(){


	register_sidebar(
		array(
			'name'           =>  __('footer Sidebar one', 'prometium'),
			'id'             =>    'sidebar-1',
			'description'    =>  __('footer Sidebar one', 'prometium'),
			'before_widget'  =>    '<ul id= "%1$s" class="list-unstyled %2$s">',
			'after_widget'   =>     '</ul>',
			'before_title'   =>     '<h6 class= "footer-link-title">',
			'after_title'    =>     '</h6>'

		)

	);

	register_sidebar(
		array(
			'name'           =>  __('footer Sidebar two', 'prometium'),
			'id'             =>    'sidebar-2',
			'description'    =>  __('footer Sidebar two', 'prometium'),
			'before_widget'  =>    '<ul id= "%1$s" class="list-unstyled %2$s">',
			'after_widget'   =>     '</ul>',
			'before_title'   =>     '<h6 class= "footer-link-title">',
			'after_title'    =>     '</h6>'

		)
	);

	register_sidebar(
		array(
			'name'           =>  __('footer Sidebar three', 'prometium'),
			'id'             =>    'sidebar-3',
			'description'    =>  __('footer Sidebar three', 'prometium'),
			'before_widget'  =>    '<ul id= "%1$s" class="list-unstyled">',
			'after_widget'   =>     '</ul>',
			'before_title'   =>     '<h6 class= "footer-link-title">',
			'after_title'    =>     '</h6>'

		)

	);

	register_sidebar(
		array(
			'name'           =>  __('footer Sidebar four', 'prometium'),
			'id'             =>    'sidebar-4',
			'description'    =>  __('footer Sidebar four', 'prometium'),
			'before_widget'  =>    '<ul id= "%1$s" class="list-unstyled %2$s">',
			'after_widget'   =>     '</ul>',
			'before_title'   =>     '<h6 class= "footer-link-title">',
			'after_title'    =>     '</h6>'

		)

	);

	register_sidebar(
		array(
			'name'           =>  __('footer Sidebar five', 'prometium'),
			'id'             =>    'sidebar-5',
			'description'    =>  __('Right Sidebar', 'alpha'),
			'before_widget'  =>    '<ul id= "%1$s" class="list-unstyled %2$s">',
			'after_widget'   =>     '</ul>',
			'before_title'   =>     '<h6 class= "footer-link-title">',
			'after_title'    =>     '</h6>'

		)



	);

	register_sidebar(
		array(
			'name'           =>  __('footer Right Sidebar', 'prometium'),
			'id'             =>    'footer-right',
			'description'    =>  __('footer Right Sidebar', 'prometium'),
			'before_widget'  =>    '<a id= "%1$s" class="img-fluid %2$s">',
			'after_widget'   =>     '</a>',
			'before_title'   =>     '<a class= "">',
			'after_title'    =>     '</a>'

		)

	);

	register_sidebar(

		array(
			'name'           =>  __('Copy Right', 'prometium'),
			'id'             =>    'copy-right',
			'description'    =>  __('Copy Right', 'prometium'),
			'before_widget'  =>    '<span id= "%1$s" class=" prometium-copyright-span %2$s">',
			'after_widget'   =>     '</span>',
			'before_title'   =>     '<a class= "prometium-copyright-para">',
			'after_title'    =>     '</a>'

		)

	);

}


add_action("widgets_init","prometium_widgets_sidebar");



function prometium_menu_item_class($classes,$item){
	$classes[] = "list-inline-item";
	return $classes;
}

add_filter("nav_menu_css_class","prometium_menu_item_class", 10,2);


