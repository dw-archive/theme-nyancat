<?php

// Here we extend the DatawrapperPlugin class.
// This is the most important file into our plugin 
class DatawrapperPlugin_ThemeNyancat extends DatawrapperPlugin {

    // This init function defined what the plugin aims for.
    public function init() {
        // Here we use the DatawrapperTheme static method to register 
        // the meta data of our theme.
        DatawrapperTheme::register($this, $this->getMeta());
    }

    // This private method defined the meta data that drive our theme
    private function getMeta() {
        // The meta data are represented as an associative array
        return array(
            // This unique id is very important
            // to help us to identify our plugin 
            // amoung the others 
            'id' => 'nyancat',
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
            ),
        );
    }

} // EOF