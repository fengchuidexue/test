define('cartController', ['angular', 'jquery'], function (angular, $) {
    var module = angular.module('controllers');
    module.controller('cartController', ['$scope', function ($scope) {
        $scope.data='carController....';
    }]);
});