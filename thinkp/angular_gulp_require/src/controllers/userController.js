define('userController', ['angular', 'jquery'], function (angular, $) {
    var module = angular.module('controllers');
    module.controller('userController', ['$scope', function ($scope) {
        $scope.data='userController22233....';
        $scope.slide=[
            {pic:'1.jpg'},
            {pic:'2.jpg'},
        ];
        $scope.slide2=[
            {pic:'3.jpg'},
            {pic:'4.jpg'},
        ];
    }]);
});