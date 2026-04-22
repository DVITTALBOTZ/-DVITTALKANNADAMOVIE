<?php

function bm_scripts(){
    wp_enqueue_style('bm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','bm_scripts');

function teammovies_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'teammovies_setup');

function Teammovies_posts_limit($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_home() || is_archive() || is_category()) {
            $query->set('posts_per_page', 10); // 👈 change 10 / 20 as you want
        }
    }
}
add_action('pre_get_posts', 'Teammovies_posts_limit');
