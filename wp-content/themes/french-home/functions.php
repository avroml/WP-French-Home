<?php

function frenchhome_register_styles()
{
    wp_enqueue_style(
        'frenchhome_main_style',
        get_template_directory_uri() . '/style.css',
        [],
        '1.0',
        'all'
    );
}
function frenchhome_register_styles()
{
    wp_enqueue_style(
        'frenchhome_main_style',
        get_template_directory_uri() . '/style.css',
        [],
        '1.0',
        'all'
    );
}

function frenchhome_register_styles()
{
    wp_enqueue_style(
        'frenchhome_main_style',
        get_template_directory_uri() . '/style.css',
        [],
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'frenchhome_register_styles');
?>
