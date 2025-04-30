<?php
/**
 * Template Name: Inicio Template
 * Template Post Type: page
 */

get_header(); ?>

<div id="inicio-root"></div>

<?php
// Enqueue specific scripts for this template
function enqueue_inicio_scripts() {
    wp_enqueue_script(
        'inicio-react-app',
        get_template_directory_uri() . '/build/inicio.js',
        array('wp-element', 'react-jsx-runtime'),
        filemtime(get_template_directory_path() . '/build/inicio.js'),
        true
    );
    
    // Localize data for React
    wp_localize_script('inicio-react-app', 'inicioData', array(
        'rest_url' => esc_url(rest_url()),
        'nonce' => wp_create_nonce('wp_rest'),
        'latest_posts' => get_latest_posts_data(),
        'stats_data' => get_stats_data()
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_inicio_scripts', 20);

// Helper function to get latest posts data
function get_latest_posts_data() {
    $posts = get_posts(array(
        'numberposts' => 3,
        'post_status' => 'publish'
    ));
    
    return array_map(function($post) {
        return array(
            'title' => $post->post_title,
            'excerpt' => wp_trim_words($post->post_content, 20),
            'date' => get_the_date('', $post),
            'link' => get_permalink($post),
            'image' => get_the_post_thumbnail_url($post, 'medium_large')
        );
    }, $posts);
}

// Helper function to get statistics data
function get_stats_data() {
    return array(
        array(
            'value' => '500+',
            'label' => 'Clientes satisfechos',
            'icon' => 'users'
        ),
        array(
            'value' => '50+',
            'label' => 'Proyectos completados',
            'icon' => 'briefcase'
        ),
        array(
            'value' => '10+',
            'label' => 'Años de experiencia',
            'icon' => 'award'
        ),
        array(
            'value' => '24/7',
            'label' => 'Soporte disponible',
            'icon' => 'headset'
        )
    );
}
?>

<?php get_footer(); ?>