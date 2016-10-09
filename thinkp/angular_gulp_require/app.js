define(['angular','uiRoute'], function (angular) {
    var init = function () {
        var controllers = angular.module('controllers', []);
        var directives = angular.module('directives', []);
         var servers = angular.module('servers', []);
        var app = angular.module('app', ['controllers','directives','servers','ui.router']);
        require([
            'allControllers',
            'allDirectives',
            'route'
        ], function () {
            angular.element(document).ready(function () {
                angular.bootstrap(document, ["app"]);
            });
        });
    }
    return {init: init};
});