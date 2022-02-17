<?php 

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_filter( 'script_loader_tag', 'scripts_as_es6_modules', 10, 3 );

function style_theme(){
    wp_enqueue_style( 'styles', get_stylesheet_uri(  ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
}



function scripts_theme(){
    wp_enqueue_script('init', get_template_directory_uri(  ) . '/assets/scripts/script.js');
    
}


function scripts_as_es6_modules( $tag, $handle, $src ) {

        if ( 'init' === $handle ) {
            return str_replace( '<script ', '<script type="module"', $tag );
        }

        return $tag;
    }