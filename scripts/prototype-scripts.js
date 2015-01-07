$("ul[role='tablist'] li").tabify();

var app = angular.module("recordCopying", []);

app.controller("startPageCheck", function($scope, $log) {
    $scope.data = {};
    $scope.data.showPageCheckForm = false;

    $scope.togglePageCheckForm = function() {
        $log.log('togglePageCheckForm function called');
        $scope.data.showPageCheckForm = !$scope.data.showPageCheckForm;
    }
});