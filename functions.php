<?php
require __DIR__ . '/vendor/autoload.php';

use BoilerplateTheme\Options\ThemeOptions;
use BoilerplateTheme\Functions\ThemeScripts;
use BoilerplateTheme\Functions\ThemeStyles;

class Boilerplate_Init
{
    private static $initialized = false;

    static public function init()
    {
        if (self::$initialized)
            return false;
        self::$initialized = true;

        self::constants();
        self::styles();
        self::scripts();
        self::options();
        self::main_style();
    }

    static public function constants()
    {
        define('BT_VERSION', '1.0');
    }

    static public function styles()
    {
        return new ThemeStyles();
    }

    static public function scripts()
    {
        return new ThemeScripts();
    }

    static public function options()
    {
        return new ThemeOptions();
    }

    static public function main_style()
    {
        wp_enqueue_style('main-style', get_stylesheet_uri());
    }
}


Boilerplate_Init::init();
