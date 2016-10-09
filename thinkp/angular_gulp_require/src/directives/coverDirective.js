define('coverDirective', ['angular', 'jquery', 'swiper'], function (angular, $, swiper) {
    var module = angular.module('directives');
    module.directive('hdCover', [function () {
        return {
            restrict: 'A',
            replace: true,
            templateUrl: 'src/templates/hd-cover.html',
            controller: ['$scope', 'shop', function ($scope, shop) {
                promise = shop.get();
                promise.then(function (res) {
                    $scope.data = res.data.data;
                });

            }],
            link: function (scope, element, attr) {

            }
        };
    }])
});
