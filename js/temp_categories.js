var app = angular.module("myApp", []);
var imageArray = ["http://nla.gov.au/nla.obj-148694544/representativeImage", "http://nla.gov.au/nla.obj-136587996/representativeImage", "http://nla.gov.au/nla.obj-150937117/representativeImage"];

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Cricket Australia'
        },
        {
            title: 'Sydney Olympics'
        },
        {
            title: 'Cycling Queensland'
        }
    ];
    
    var sportIndex = 0
    $scope.websiteSport.forEach(function (newImage, sportIndex) {
    newImage.coverImg = imageArray[sportIndex];
});
  
}]);