var app = angular.module("myApp", []);
var imageArray = ["http://nla.gov.au/nla.obj-148694544/representativeImage", "http://nla.gov.au/nla.obj-136587996/representativeImage", "http://nla.gov.au/nla.obj-150937117/representativeImage"];

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Cricket Australia',
            imgalt: 'Cricket Australia',
            url: 'cricketaustralia.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Sydney Olympics',
            imgalt: 'Sydney Olympics',
            url: 'sydneyolympics.html',
            level: 'images/Hard.png',
            levelalt: 'hard level'
        },
        {
            title: 'Cycling Queensland',
            imgalt: 'Cycling Queensland',
            url: 'cyclingqueensland.html',
            level: 'images/Hard.png',
            levelalt: 'hard level'
        }
    ];
    
   /* var sportIndex = 0
    $scope.websiteSport.forEach(function (newImage, sportIndex) {
    newImage.coverImg = imageArray[sportIndex];
});*/
    
    $scope.websiteArts = [
        
        {
            title: 'Queensland Ballet',
            imgalt: 'Queensland Ballet',
            url: 'queenslandballet.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Brisbane Writers Festival',
            imgalt: 'Brisbane Writers Festival',
            url: 'brisbanewritersfestival.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
    $scope.websiteEdu = [
        {
            title: 'UQ',
            imgalt: 'UQ',
            url: 'uq.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'QTAC',
            imgalt: 'QTAC',
            url: 'qtac.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
    $scope.websiteGov = [
        {
            title: 'Brisbane City Council',
            imgalt: 'Brisbane City Council',
            url: 'brisbanecitycouncil.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Qld Art Gallery',
            imgalt: 'Qld Art Gallery',
            url: 'qldartgallery.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Qld Museum',
            imgalt: 'Qld Museum',
            url: 'qldmuseum.html',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
  
}]);