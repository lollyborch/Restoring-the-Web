//var app = angular.module("myApp", []);
//var imageArraySport = ['http://www.placecage.com/250/150', 'http://www.fillmurray.com/g/250/150', 'https://placekitten.com/250/150' ];

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Cricket Australia',
            coverImg: 'http://www.placecage.com/250/150'
        },
        {
            title: 'Sydney Olympics',
            coverImg: 'http://www.placecage.com/250/150'
        },
        {
            title: 'AFL',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    //adds images from the Trove API call array 'imageArraySport' to the above $scope.websiteSport
    var sportIndex = 0
    $scope.websiteSport.forEach(function (newImage, sportIndex) {
    newImage.coverImg = imageArraySport[sportIndex];
    });
    
    $scope.websiteArts = [
        {
            title: 'Brisbane Writers Festival',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Australian Music Scrapbook',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Queensland Ballet',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    $scope.websiteEdu = [
        {
            title: 'UQ',
            coverImg: 'http://www.fillmurray.com/250/150'
        },
        {
            title: 'QTAC',
            coverImg: 'http://www.fillmurray.com/250/150'
        },
        {
            title: 'TAFE',
            coverImg: 'http://www.fillmurray.com/250/150'
        }
    ];
    $scope.websiteGov = [
        {
            title: 'Brisbane City Council',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Qld Art Gallery',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Qld Museum',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'ABC',
            coverImg: 'http://www.placekitten.com/g/250/150'
        }
    ];
  
}]);
