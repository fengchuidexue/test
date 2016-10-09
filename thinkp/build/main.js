define('route', ['angular'], function (angular) {
    var module = angular.module('app');
    module.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) { //设置默认访问路由
        $urlRouterProvider.otherwise("/home");
        $stateProvider.state('home', {
            url: "/home",
            templateUrl: 'view/home.html',
           
        });
    }]);
});

define('allControllers', [ 'homeController'], function () {
});
define('cartController', ['angular', 'jquery'], function (angular, $) {
    var module = angular.module('controllers');
    module.controller('cartController', ['$scope', function ($scope) {
        $scope.data='carController....';
    }]);
});
define('homeController', ['angular', 'jquery'], function (angular, $) {
    var module = angular.module('controllers');
    module.controller('homeController', ['$scope',  function ($scope) {

    }]);
});
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
define('allDirectives', ['testDirective','slideDirective'], function () {});
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
