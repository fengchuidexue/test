define('slideDirective', ['angular', 'jquery', 'swiper'], function (angular, $, swiper) {
    var module = angular.module('directives');
    module.directive('hdSlide', [function () {
        return {
            restrict: 'A',
            replace: true,
            templateUrl: 'src/templates/slide.html',
            controller: ['$scope', 'shop', function ($scope, shop) {
                shop.get(function (res) {
                    $scope.data = res;
                });
            }],
            link: function (scope, element, attr) {
               setTimeout(function(){
                   var swiper = new Swiper('.swiper-container', {
                       pagination: '.swiper-pagination',
                       nextButton: '.swiper-button-next',
                       prevButton: '.swiper-button-prev',
                       paginationClickable: true,
                       spaceBetween: 30,
                       centeredSlides: true,
                       autoplay: 2500,
                       autoplayDisableOnInteraction: false
                   });
               },2000);
            }
        };
    }])
});
