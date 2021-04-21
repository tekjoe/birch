<?php

function birch_setup()
{
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.2.0/css/all.css");
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap");
    wp_enqueue_style('leaflet-css', "https://unpkg.com/leaflet@1.6.0/dist/leaflet.css");
    wp_enqueue_style('styles', get_theme_file_uri('/styles/styles.css'), null, microtime());
    wp_enqueue_script('glide-js', "https://cdn.jsdelivr.net/npm/@glidejs/glide");
    wp_enqueue_script('mapbox-js', "https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.js");
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), null, microtime(), true);
}

add_action('wp_enqueue_scripts', 'birch_setup');