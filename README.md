## A Datawrapper theme?

```
+      o     +      o     +      o     +              o   
    +            +            +             o     +       +
o          +                     +
    o  +         +          +           +        +
+        o   +        o   +        o     o       +        o
-_-_-_-_-_-_--_-_-_-_-_-_--_-_-_-_-_-_-_,------,      o
_-_-_-_-_-_-__-_-_-_-_-_-__-_-_-_-_-_-_-|   /\_/\  
-_-_-_-_-_-_--_-_-_-_-_-_--_-_-_-_-_-_-~|__( ^ .^)  +     +  
_-_-_-_-_-_-__-_-_-_-_-_-__-_-_-_-_-_-_-""  ""      
+      o     +      o     +      o         o   +       o
    +            +            +         +
o        o            o             o         o      o     +
    o            o            o           +
+      +     +      +     +      +     o        o      +    
```

Datawrapper comes with the ability to be adapter to the user needs via plugins. Its simple architecture provides a way to extend basic functionalities using an hook system (inspired by the well kown WordPress architecture). Each plugin can extend the core and some are dedicated to charts customizations (changing colors, backgrounds, typos, etc). We're about to learn how to set up this last one.

## Study the existing theme

### Setup Files
For this tutorial we work into the `/plugins/theme-nyancat`. For quick start, just git clone this repository (from the root):
    
    git clone https://github.com/datawrapper/theme-nyancat ./plugins/theme-nyancat 
    
This command will create your theme into `/plugins` taking care of using the *theme-* prefix for you. Now you should have the following files into the plugin directory:   

```
.  plugins/theme-nyancat
├── LICENSE
├── package.json
├── plugin.php
├── README.md
└── static
    ├── bg.gif
    ├── cat.gif
    ├── nyancat.css
    ├── nyancat.js
    ├── rain.gif
    └── slkscr.ttf

```

### Plugin's meta data
Let's take a look of package.json. This file follows the syntaxe of its cousin from [Node Package Manager](http://package.json.nodejitsu.com/):
    
    {
        "name": "Nyan cat theme",
        "version": "0.0.0"
    }

### Plugin's behavior
Much more important, after comes the plugin.php that defined the behavior of your plugin. This file contains a class that extends the `DatawrapperPlugin` class:

```php    
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
```
### Theme registering
Now take a look of the `nyancat.js`. As you can see the filename is the same as the *id* defined before into `plugin.php`:

```javascript
(function(){
    // This function allow us to resiter our theme into the client-side script.
    // We use the same id as the one defined into plugin.php and say explicitely 
    // wich theme is its parent ('default'). This argument is optional.
    dw.theme.register('nyancat', 'default', {
        colors: {
            // The palette options defined the colors available within each chart.
            palette: ["#FF9900", "#FFFF00","#33FF00", "#FE99FE", "#FF0000", "#0099FF", "#6633FF"],
            secondary: [],
            context: '#aaa',
            axis: '#fff',
            // Default color use for positive values
            positive: '#FF9900',
            // Default color use for neagtives values
            negative: '#FE99FE',
            background: '#00008B'
        },
        // Grid's options
        horizontalGrid: { stroke: '#fff' },
        verticalGrid:   { stroke: '#fff' },
        // Here a way to add option for a specific visualisation 
        columnChart: {
            cutGridLines: true
        },
        frameStrokeOnTop: true,
        vpadding: 10
    });
}).call(this);
```

### Theme stylesheet
At last, look at `nyancat.css` still named as follow the *id* option. Here a few extracts :

```css
body.chart {
  background:#013567 repeat url("./bg.gif");
	color:white;
	font-family:SilkscreenNormal, Monaco, "Courier New", Courier, monospace;
}
```

```css
.label span {
  text-shadow:none;
	color:white; 
	font-weight:bold;
}

```

### Activate the plugin

To activate the plugin, just enter this command:

    php script/plugin.php install theme-nyancat
  
Then import static files

    php script/plugin.php reload
  
Your theme is now up and running !

![preview](http://i.imgur.com/qq4mrrE.png?1)

***
Credits: [@pirhoo](http://github.com/pirhoo)