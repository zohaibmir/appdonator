angular.module('donatenow.services', [])
        /**
         * A simple example service that returns some data.
         */
        .factory('Category', function ($http) {


            return {
                // get all the comments
                get: function () {
                    return $http.get('http://donator.dev:8081/api/category');
                }
            }
        });
