<?php

if(!defined('ABSPATH')){
    // if accessed directly exit
    exit;
}

if(!function_exists('ecom_custom_theme_support')) {
    function ecom_custom_theme_support(){
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        
        /**
         * WooCommerce Theme Support
         */
        add_theme_support('woocommerce', array(
            "thumbnail_image_width" => 200,
            "single_image_width" => 400,
            "product_grid" => array(
                "default_rows" => 5,
                "min_rows" => 5,
                "max_rows" => 5,
                "default_columns" => 4,
                "min_columns" => 4,
                "max_columns" => 4                
            )
        ));
        add_theme_support('wc-product-gallery-zoom'); // adds single product image zoom
        add_theme_support('wc-product-gallery-lightbox'); // adds lightbox on product image click
        add_theme_support('wc-product-gallery-slider'); // adds image slider

        // remove woocommerce default stylesheet
        // add_filter('woocommerce_enqueue_styles', '__return false');
    }
}

add_action('after_setup_theme','ecom_custom_theme_support');