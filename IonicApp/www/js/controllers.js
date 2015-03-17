angular.module('donatenow.controllers', ['ngResource'])


        .controller('HomeCtrl', function ($scope, $stateParams, Category) {

        })

        .controller('AboutCtrl', function ($scope, $stateParams, Category) {

        })


        .controller('CategoriesCtrl', function ($scope, $stateParams, Category) {
            $scope.loading = true;
            Category.all()
                    .success(function (data) {
                        $scope.categories = data['categories'];
                        $scope.loading = false;
                        console.log(JSON.stringify(data['categories']));
                    });
        })

        .controller('CategoryDetailCtrl', function ($scope, $stateParams, Category) {
            Category.get($stateParams.categoryId).success(function (data) {
                $scope.category = data['category'];
                $scope.loading = false;
                console.log(JSON.stringify(data['category']));
            });
        })



        .controller('OrganisationsCtrl', function ($scope, $stateParams, Category) {

        })

        .controller('UserCtrl', function ($scope, $stateParams, Category) {

        })


        .controller('TodoCtrl', function ($scope, $ionicModal, Category) {

            Category.get()
                    .success(function (data) {
                        $scope.tasks = data['categories'];
                        $scope.loading = false;
                        console.log(JSON.stringify(data['categories']));
                    });



            // Create and load the Modal
            $ionicModal.fromTemplateUrl('new-task.html', function (modal) {
                $scope.taskModal = modal;
            }, {
                scope: $scope,
                animation: 'slide-in-up'
            });

            // Called when the form is submitted
            $scope.createTask = function (task) {
                $scope.tasks.push({
                    title: task.title
                });
                $scope.taskModal.hide();
                task.title = "";
            };

            // Open our new task modal
            $scope.newTask = function () {
                $scope.taskModal.show();
            };

            // Close the new task modal
            $scope.closeNewTask = function () {
                $scope.taskModal.hide();
            };
        });