// jQuery - will refactor to Angular for production

$(document).ready(function () {
    $tabs = $("ul[role='tablist'] li");
    $tabs.tabify();

    if ($(".confirm-and-pay").length) {
        (console && console.log('Class .confirm-and-pay found, indicating current page is confirm-and-pay'));

        // Adding 'completed-step' class to first two tabs

        $tabs.slice(0, 2).each(function () {
            var $this = $(this);
            $this.addClass('completed-step');
        });

        // Triggering the tabify() behaviour on the third tab
        $tabs.eq(2).click();
    }
});


// Scrolling when the user shows the form
if ($("#get-started").length && $("#what-to-copy").length) {
    $("#get-started").click(function () {
        $('html, body').animate({
            scrollTop: $("#what-to-copy").offset().top
        }, 450);
    });
}


// Angular

var app = angular.module("recordCopying", []);

app.controller("startPageCheck", function ($scope, $log, $anchorScroll, $location) {
    $scope.data = {
        showPageCheckForm: false
    };

    $scope.togglePageCheckForm = function () {
        $log.log('togglePageCheckForm function called');
        $scope.data.showPageCheckForm = !$scope.data.showPageCheckForm;
    }
});

app.controller("startCertifiedCopy", function ($scope, $log, $anchorScroll, $location) {
    $scope.data = {
        showCertifiedCopyForm: false
    };

    $scope.toggleCertifiedCopyForm = function () {
        $log.log('toggleCertifiedCopyForm function called');
        $scope.data.showCertifiedCopyForm = !$scope.data.showCertifiedCopyForm;
    }

    $scope.options = {
        selectedCountry: 'United Kingdom',
        availableCountries: [
            'United Kingdom',
            'Australia',
            'Canada',
            'Hong Kong',
            'Japan',
            'New Zealand'
        ]
    };
});

app.controller("basketController", function ($scope) {
    $scope.data = {
        termsAccepted: false
    };
    $scope.options = {
        postOrCollect: "post",
        postalType: "firstClass",
        postSingleOrCombine: "single",
        singleOrCombine: "single"
    };
});

app.controller("confirmAndPay", function ($scope, $log) {

    $scope.quantities = {
        a3Pages: 25,
        a3PlusPages: 3
    };

    $scope.prices = {
        a3PaperColourPrice: 3.00,
        a3PaperMonoPrice: 1.00,
        a3PlusPaperPrice: 13.00,
        a3DigitalPrice: 2.80,
        a3PlusDigitalPrice: 10.00
    };

    $scope.options = {
        deliveryType: "paper",
        printingOption: "colour",
        deliveryAddress: "stored",
        selectedCountry: 'United Kingdom',
        availableCountries: [
            'United Kingdom',
            'Canada',
            'New Zealand'
        ]
    };
    $scope.totalPrice = false;

    $scope.calculateTotalPrice = function (type, printingOption) {
        if (type == "digital") {
            $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3DigitalPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusDigitalPrice);
        } else if (type == "paper") {
            switch (printingOption) {
                case "colour" :
                    $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3PaperColourPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusPaperPrice);
                    break;
                case "mono" :
                    $scope.totalPrice = ($scope.quantities.a3Pages * $scope.prices.a3PaperMonoPrice) + ($scope.quantities.a3PlusPages * $scope.prices.a3PlusPaperPrice);
                    break;
                default :
                    $log.log("Problem with calculateTotalPrice()")
            }

        }
    };

    $scope.totalPages = function () {
        return $scope.quantities.a3Pages + $scope.quantities.a3PlusPages;
    };


})