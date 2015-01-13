// jQuery - will refactor to Angular for production

$tabs = $("ul[role='tablist'] li");
$tabs.tabify();

if($(".your-orders").length) {
    (console && console.log('Class .your-orders found, indicating current page is Your Orders'));

    // Adding 'completed-step' class to first two tabs

    $tabs.slice(0,2).each(function(){
        var $this = $(this);
        $this.addClass('completed-step');
    });

    // Triggering the tabify() behaviour on the third tab
    $tabs.eq(2).click();

}

// Angular

var app = angular.module("recordCopying", []);

app.controller("startPageCheck", function($scope, $log) {
    $scope.data = {};
    $scope.data.showPageCheckForm = false;

    $scope.togglePageCheckForm = function() {
        $log.log('togglePageCheckForm function called');
        $scope.data.showPageCheckForm = !$scope.data.showPageCheckForm;
    }
});