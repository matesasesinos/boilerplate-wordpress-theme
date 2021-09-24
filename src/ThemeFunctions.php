<?php

namespace BoilerplateTheme\Functions;

class ThemeFunctions
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this,'main_assets']);
    }

    public function main_assets()
    {
        wp_enqueue_style( 'boilerplate-main-css', get_stylesheet_directory_uri().'/src/css/src/build/main.min.css',null,BT_VERSION );
        wp_enqueue_script('boilerplate-main-js', get_stylesheet_directory_uri().'/src/js/src/build/app.min.js',null, BT_VERSION,true);
    }
}