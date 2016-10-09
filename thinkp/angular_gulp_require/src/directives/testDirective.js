define('testDirective', ['angular', 'jquery'], function (angular, $) {
    var module = angular.module('directives');
    module.directive('hdTest', [function () {
        return {
            restrict: 'A',
            replace: true,
            templateUrl:'src/templates/test.html'
        };
    }])
});
