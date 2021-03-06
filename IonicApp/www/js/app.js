// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'

angular.module('donatenow', ['ionic', 'donatenow.controllers', 'donatenow.services'])

        .run(function ($ionicPlatform) {
            $ionicPlatform.ready(function () {
                // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
                // for form inputs)
                if (window.cordova && window.cordova.plugins.Keyboard) {
                    cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
                }
                if (window.StatusBar) {
                    StatusBar.styleDefault();
                }
            });
        })


        .config(function ($stateProvider, $urlRouterProvider) {

            // Ionic uses AngularUI Router which uses the concept of states
            // Learn more here: https://github.com/angular-ui/ui-router
            // Set up the various states which the app can be in.
            // Each state's controller can be found in controllers.js
            $stateProvider

                    // setup an abstract state for the tabs directive
                    .state('donatenow', {
                        url: "/donatenow",
                        abstract: true,
                        templateUrl: "templates/menu.html",
                        controller: 'CategoriesCtrl'
                    })
                    //Home Page Controller
                    .state('donatenow.home', {
                        url: '/home',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/home.html',
                                controller: 'HomeCtrl'
                            }
                        }
                    })

                    // Each tab has its own nav history stack:

                    .state('donatenow.categories', {
                        url: '/categories',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/categories.html',
                                controller: 'CategoriesCtrl'
                            }
                        }
                    })
                    .state('donatenow.category-detail', {
                        url: '/categories/:categoryId',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/category-detail.html',
                                controller: 'CategoryDetailCtrl'
                            }
                        }
                    })

                    .state('donatenow.signup', {
                        url: '/user/signup',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/signup.html',
                                controller: 'UserCtrl'
                            }
                        }
                    })
                    
                    .state('donatenow.about', {
                        url: '/about',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/about.html',
                                controller: 'AboutCtrl'
                            }
                        }
                    })


            // if none of the above states are matched, use this as the fallback
            $urlRouterProvider.otherwise('/donatenow/home');

        });
