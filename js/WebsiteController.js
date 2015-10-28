//<!-- Angular Content Container populated on home.php -->
var app = angular.module("myApp", []);
var imageArray = ["http://nla.gov.au/nla.obj-148694544/representativeImage", "http://nla.gov.au/nla.obj-136587996/representativeImage", "http://nla.gov.au/nla.obj-150937117/representativeImage"];

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Cricket Australia',
            imgalt: 'Cricket Australia',
            url: 'working_panel.php?WebsiteID=1?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Sydney Olympics',
            imgalt: 'Sydney Olympics',
            url: 'working_panel.php?WebsiteID=2?CompID=1',
            level: 'images/Hard.png',
            levelalt: 'hard level'
        },
        {
            title: 'Cycling Queensland',
            imgalt: 'Cycling Queensland',
            url: 'working_panel.php?WebsiteID=4?CompID=1',
            level: 'images/Hard.png',
            levelalt: 'hard level'
        }
    ];
    
    
    $scope.websiteArts = [
        
        {
            title: 'Queensland Ballet',
            imgalt: 'Queensland Ballet',
            url: 'working_panel.php?WebsiteID=5?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Brisbane Writers Festival',
            imgalt: 'Brisbane Writers Festival',
            url: 'working_panel.php?WebsiteID=6?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
    $scope.websiteEdu = [
        {
            title: 'UQ',
            imgalt: 'UQ',
            url: 'working_panel.php?WebsiteID=7?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'QTAC',
            imgalt: 'QTAC',
            url: 'working_panel.php?WebsiteID=8?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
    $scope.websiteGov = [
        {
            title: 'Brisbane City Council',
            imgalt: 'Brisbane City Council',
            url: 'working_panel.php?WebsiteID=9?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Qld Art Gallery',
            imgalt: 'Qld Art Gallery',
            url: 'working_panel.php?WebsiteID=10?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        },
        {
            title: 'Qld Museum',
            imgalt: 'Qld Museum',
            url: 'working_panel.php?WebsiteID=11?CompID=1',
            level: 'images/Easy.png',
            levelalt: 'easy level'
        }
    ];
  
}]);