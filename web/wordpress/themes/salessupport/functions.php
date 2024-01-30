<?php

function salessupport_register_styles(){
    wp_enqueue_style('salessupport-style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'salessupport_register_styles');
?>