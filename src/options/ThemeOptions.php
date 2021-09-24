<?php

namespace BoilerplateTheme\Options;

class ThemeOptions 
{
    public function __construct()
    {
        add_action('init',[$this,'test']);
    }

    public function test()
    {
        return '<h1>Test</h1>';
    }
}

