define('cartDirective', ['angular', 'jquery', 'swiper'], function (angular, $, swiper) {
    var module = angular.module('directives');
    module.directive('hdCart', [function () {
        return {
            restrict: 'A',
            replace: true,
            scope: {title: '@'},
            templateUrl: 'src/templates/hd-cart.html',
            controller: ['$scope', 'cart', function ($scope, cart) {
                //购物车服务
                $scope.cartServer = cart;
            }]
        };
    }])
});
