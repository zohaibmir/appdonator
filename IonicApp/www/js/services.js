angular.module('donatenow.services', [])
        /**
         * A simple example service that returns some data.
         */
        .factory('Category', function ($http) {


            return {
                // get all the comments
                all: function () {
                    return $http.get('http://telia.dingdev.se/api/category');
                },
                get: function (categoryId) {
                    // Simple index lookup
                    return $http.get('http://telia.dingdev.se/api/category/'+categoryId);
                }
            }
        });
