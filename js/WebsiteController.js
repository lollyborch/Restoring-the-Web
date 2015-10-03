//Angular JS for content based on https://www.codecademy.com/en/courses/learn-angularjs

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
