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