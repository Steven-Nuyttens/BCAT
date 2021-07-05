<?php

function bcat_files() {
    wp_enqueue_style('bcat_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'bcat_files');

?>