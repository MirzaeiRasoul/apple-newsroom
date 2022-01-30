<?php

function setup_theme()
{
    /*
	 * Let WordPress manage the document title.
	 * This theme does not use a hard-coded <title> tag in the document head,
	 * WordPress will provide it for us.
	 */
    add_theme_support('title-tag');
    
    
    /*
	 * Featured images (also sometimes called Post Thumbnails) are images that represent an individual Post, Page,
     * or Custom Post Type. When you create your Theme, you can output the featured image in a number of different ways,
     * on your archive page, in your header, or above a post, for example.
     */
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup_theme');

function load_styles()
{
    wp_enqueue_style('default_style', get_stylesheet_uri());
    wp_enqueue_style('main_style', get_theme_file_uri('/css/main.css'));
    wp_enqueue_style('helper_style', get_theme_file_uri('/css/helper.css'));
}

add_action('wp_enqueue_scripts', 'load_styles');
