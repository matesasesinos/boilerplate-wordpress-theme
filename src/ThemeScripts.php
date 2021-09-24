<?php

namespace BoilerplateTheme\Functions;

class ThemeScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'main']);
        add_filter('script_loader_tag', [$this,'script_attribute'] , 10, 3);
    }

    public function main()
    {
        wp_enqueue_script('boilerplate-main-js', get_stylesheet_directory_uri() . '/js/build/app.min.js', null, BT_VERSION, true);
    } 
    /**
     * script_attribute
     *
     * @param  mixed $tag
     * @param  mixed $handle
     * @param  mixed $src
     * @return void
     * ref: https://developer.wordpress.org/reference/hooks/script_loader_tag/ | https://stackoverflow.com/questions/58931144/enqueue-javascript-with-type-module
     */
    public function script_attribute($tag, $handle, $src)
    {
        if ('boilerplate-main-js' !== $handle) {
            return $tag;
        }
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        return $tag;
    }
}
