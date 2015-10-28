/* uses AngularJS function to repeat empty divs for modules to be added to on my_restorations.php*/

var app = angular.module("myApp", []);

app.controller('divController', ['$scope', function ($scope) {
  $scope.divID = ['cricket', 'olympics', 'cycling', 'ballet', 'writers', 'uq', 'qtac', 'council', 'gallery', 'museum'];
    
  
}]);
