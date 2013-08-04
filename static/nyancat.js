(function(){

    // Playfair Theme
    // --------------

    // note: this theme was originally named 'autumn'. That id
    // is still used because we didn't want to break old charts.

    dw.theme.register('nyancat', 'default', {

        colors: {
            palette: ["#FF9900", "#FFFF00","#33FF00", "#FE99FE", "#FF0000", "#0099FF", "#6633FF"],
            secondary: [],
            context: '#aaa',
            axis: '#fff',
            positive: '#389486',
            negative: '#F24405',
            background: '#00008B'
        },

        horizontalGrid: {
            stroke: '#fff'
        },

        verticalGrid: {
            stroke: '#fff'
        },

        columnChart: {
            cutGridLines: true
        },

        frame: {
            stroke: '#fff',
            'stroke-width': 3,
            fill: '#00008B',
            'fill-opacity': 1,
            'stroke-opacity': 1
        },

        frameStrokeOnTop: true,

        vpadding: 10

    });

}).call(this);