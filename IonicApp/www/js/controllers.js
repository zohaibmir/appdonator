angular.module('donatenow.controllers', ['ngResource'])

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