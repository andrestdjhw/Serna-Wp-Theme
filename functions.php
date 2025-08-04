<?php

function boilerplate_load_assets() {
  // Enqueue the main JavaScript file
  wp_enqueue_script(
    'ourmainjs', 
    get_theme_file_uri('/build/index.js'), 
    array('wp-element', 'react-jsx-runtime'), 
    filemtime(get_theme_file_path('/build/index.js')), // Using file modification time as version
    true
  );
  
  // Enqueue the main CSS file with a cache-busting version number
  wp_enqueue_style(
    'ourmaincss', 
    get_theme_file_uri('/build/index.css'), 
    array(), 
    filemtime(get_theme_file_path('/build/index.css')) // Using file modification time as version
  );

  // Add inline script to define Tailwind theme colors as CSS variables
  $inline_css = "
    :root {
      --primary-text: #ffffff;
      --secondary-bg: #333333;
      --default-bg: #f5f5f7;
      --primary: #87cede;
      --secondary: #7dbb5c;
      --third: #00903b;
      --naranja: #ee3725;
      --paragraph: #868385;
    }
  ";
  wp_add_inline_style('ourmaincss', $inline_css);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

function cargar_font_awesome() {
  wp_enqueue_style(
      'font-awesome',
      get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css'
  );
}
add_action('wp_enqueue_scripts', 'cargar_font_awesome');

function enqueue_react_scripts() {
    wp_enqueue_script(
        'serna-react-scripts',
        get_template_directory_uri() . '/dist/index.js', // o donde esté tu archivo compilado
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_react_scripts');