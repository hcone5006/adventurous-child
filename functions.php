<?php 

function my_scripts() {
	$dir = get_stylesheet_directory_uri();
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, false,true);
	    wp_enqueue_script( 'velocity', $dir . '/js/vendor/velocity.min.js', array(), false, true );
	    wp_enqueue_script( 'jquerymin', $dir . '/js/vendor/jquery.mixitup.min.js', array(), false, true );
        wp_enqueue_script( 'fancybox', $dir . '/fancyBox/source/jquery.fancybox.pack.js', array(), false, true );
        wp_enqueue_script( 'plugins', $dir . '/js/plugins.js', array(), false, true );
        wp_enqueue_script( 'portfolio', $dir . '/js/portfolio.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts');


function theme_enqueue_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( 'decovar' . 'https://fontlibrary.org/face/decovar' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fancybox', $dir . '/fancyBox/source/jquery.fancybox.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

 ?>