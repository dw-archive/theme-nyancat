<?php

use Datawrapper\Theme;

Theme::register(array(
    // This unique id is very important
    // to help us to identify our plugin 
    // amoung the others 
    'id' => 'nyancat',
    // name of this plugin
    'plugin' => 'theme-nyancat',
    // This option is central for this because
    // it says that the inherits properties from the 'default' theme 
    'extends' => 'default',            
    // Some display options
    'title' => 'Nyan Cat',
    'link' => 'http://www.datawrapper.de',
    'restricted' => NULL,
    'version' => '0.0.0',
    'option-filter' => array(
        'line-chart' => array(
            'show-grid' => true,
        ),
    )
));
