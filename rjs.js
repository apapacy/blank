'use strict';

var templates = require('lodash')
    .map(require('glob')
        .sync('web/dependencies/js/views/**/*.twig.js'), function (template) {
        return template.slice('web/dependencies/js/'.length, template.length - 3);
    });

module.exports = {
    "modules": [
        "./**/**/**/**/**/app/front.js"
    ],
    "preloader": {
        "path": "./src/Rt/Bundle/AppBundle/Resources/frontend/views/_/preloader.js",
        "as": "__preloader"
    },
    "optimizer": {
        "mainConfigFile": "./web/dependencies/js/AppBundle/Resources/frontend/javascripts/config/require.js",
        "deps": require('lodash').union([
            "require.js",
            "AppBundle/Resources/frontend/javascripts/config/require.js",
            "__preloader.js",
            "jquery",
            "lodash",
            "backbone",
            "backbone.modelbinder",
            //"jquery.mousewheel",
            //"airblur",
            //"swiper",
            //"ScrollMagic",
            //"TweenMax",
            //"TimelineMax",
            //"TweenLite",
            //"scrollmagic/plugins/animation.gsap",
            //"scrollmagic/plugins/debug.addIndicators",
            //"snap.svg",
            //"app/airsvg"
        ], templates),
        "optimize": "uglify",
        "useStrict": true,
        "map": {
            '*': {
                "/translations.json": 'empty:',
                "/common.json": 'empty:'
            }
        }
    }
};