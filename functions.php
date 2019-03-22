<?php

// adding the css and JS files


function dodgydog_setup() {
   // wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One|Margarine|Oswald|PT+Serif|Roboto+Slab|Sniglet');
   // wp_enqueue_style('fontawesome','http://use.fontawesome.com/releases/v5.7.2/css/all.css"
   //    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr');
   wp_enqueue_style('style', get_stylesheet_uri() , NULL ,' microtime()', false);
   wp_enqueue_script("main",  get_theme_file_uri('/js/main.js'), NULL, microtime(), true );
}

add_action('wp_enqueue_scripts', 'dodgydog_setup');

// adding theme support 

function gt_init() {
   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');
   add_theme_support('html5', array ('comment-list', 'comment-form', 'search-form')  );
}

add_action('after_setup_theme', 'gt_init');

// Projects post type 

function gt_custom_post_type() {
   register_post_type ('project', 
      array( 
                  'rewrite' => array('slug' => 'projects'),
                  'labels'  => array(
                     'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item'  => 'Add New Project',
            'edit_project'  => 'Edit Project',
         ),
               'menu_icon'   =>   'dashicons-editor-justify',
               'public'      =>   true,
               'has_archive' =>   true,
               'supports'    =>  array('title','thumbnail', 'editor', 'excerpt', 'comments') 
      
      
      )
      );
}

add_action( 'init', 'gt_custom_post_type');

register_nav_menus( array(
'primary' => esc_html__( 'Header', 'humescores' ),
'social' => esc_html__( 'Social Media Menu', 'humescores' ),
) );