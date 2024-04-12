<?php

function index_styles(){
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('close-form.js');
}

add_action('wp_enqueue_scripts', 'index_styles');