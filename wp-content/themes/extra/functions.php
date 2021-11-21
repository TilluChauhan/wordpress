<?php
	register_nav_menus(
		$arr=array(
		'primary_menu'=>__('primary_menu','extra'),
		'footer'=>__('footer','extra'),
		)
	);
	
	
	

	function wordpress_styles(){
		wp_enqueue_style('wordpess_all',get_theme_file_uri('css/all.min.css'),array(),'4.0.0',false);
		wp_enqueue_style('wordpess_bootstrap',get_theme_file_uri('css/bootstrap.min.css'),array(),'4.0.0',false);
		wp_enqueue_style('wordpess_owl',get_theme_file_uri('css/owl.carousel.min.css'),array(),'4.0.0',false);
		wp_enqueue_style('worpress_owltheme',get_theme_file_uri('css/owl.theme.default.min.css'),array(),'4.0.0',false);
		wp_enqueue_style('wordpress_style',get_stylesheet_uri('style.css'),array(),'4.0.0',false);

		wp_enqueue_script('worpress_jquery',get_theme_file_uri('js/jquery.min.js'),array(),'4.0.0',false);
		
		wp_enqueue_script('wordpess_popper',get_theme_file_uri('js/popper.min.js'),array(),'4.0.0',false);
		wp_enqueue_script('wordpess_bootstrap',get_theme_file_uri('js/bootstrap.min.js'),array(),'4.0.0',false);
		wp_enqueue_script('wordpess_owlcarousel',get_theme_file_uri('js/owl.carousel.min.js'),array(),'4.0.0',false);
		
		wp_enqueue_script('wordpess_sweetalert',get_theme_file_uri('js/sweetalert.min.js'),array(),'4.0.0',false);
		wp_enqueue_script('wordpess_new',get_theme_file_uri('js/new.js'),array(),'4.0.0',false);
		
		
	}
	add_action('wp_enqueue_scripts','wordpress_styles');
	
	
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="%2$s"><div><div class="%1$s">',
		'after_widget'  => '</div></div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
			
				'name'        => __( 'Footerone', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footertwo', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer3', 'twentytwenty' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer4', 'twentytwenty' ),
				'id'          => 'sidebar-4',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 2000, 2000 );
	
?>