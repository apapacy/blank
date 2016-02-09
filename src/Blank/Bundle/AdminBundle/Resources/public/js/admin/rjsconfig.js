(function () {
    'use strict';
    /*global requirejs */
    requirejs.config({
        "urlArgs":     "bust=" + (new Date()).getTime(),
        'baseUrl':     '/assets/js',
        'waitSeconds': 30,
        'paths':       {
            'json-editor': '/assets/js/json-editor',
        },
        shim: {
            'admin/json-editor': {
                deps: ['json-editor/dist/jquery.jsoneditor']
            }
        }

    });
    require(['jquery', 'admin/json-editor']);
}());