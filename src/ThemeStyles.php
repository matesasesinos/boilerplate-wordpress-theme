<?php

namespace BoilerplateTheme\Functions;

class ThemeStyles
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'main']);
    }

    public function main()
    {
        wp_enqueue_style('boilerplate-main-css', get_stylesheet_directory_uri() . '/css/build/main.min.css', null, BT_VERSION);
    }
}
