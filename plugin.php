<?php

class DatawrapperPlugin_ThemeNyancat extends DatawrapperPlugin {

    public function init() {
        DatawrapperTheme::register($this, $this->getMeta());
    }

    private function getMeta() {
        return array (
          'id' => 'nyancat',
          'title' => 'Nyan Cat',
          'link' => 'http://www.datawrapper.de',
          'extends' => 'default',
          'restricted' => NULL,
          'version' => '0.0.0',
          'option-filter' => 
          array (
            'line-chart' => 
            array (
              'show-grid' => true,
            ),
          ),
        );
    }

}
