<?php

// enqueue styles

if(!function_exists('ecom_enqueue_styles')){
    function ecom_enqueue_styles(){
        
        wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.1','all');
        wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.1','all');
        wp_enqueue_style('blue-css', get_template_directory_uri() . '/assets/css/blue.css', array(), '1.0.1','all');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.1','all');
        wp_enqueue_style('owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0.1','all');
        wp_enqueue_style('animate-min-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.1','all');
        wp_enqueue_style('rateit', get_template_directory_uri() . '/assets/css/rateit.css', array(), '1.0.1','all');
        wp_enqueue_style('bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.0.1','all');
    }
}

add_action('wp_enqueue_scripts','ecom_enqueue_styles');


// enqueue scripts

if(!function_exists('ecom_enqueue_scripts')){
    function ecom_enqueue_scripts(){

        wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('bootstrap-js-custom', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-bootstrap-hover', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-echo-js', get_template_directory_uri() . '/assets/js/echo.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-bootstrap-slider-js', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-jquery-rateit-js', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-bootstrap-select-js', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('ecom-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.1', true);
    }
}

add_action('wp_enqueue_scripts','ecom_enqueue_scripts');