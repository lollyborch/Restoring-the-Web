//Angular JS for content based on https://www.codecademy.com/en/courses/learn-angularjs

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Sport1',
            coverImg: 'http://www.placecage.com/250/150'
        },
        {
            title: 'Sport2',
            coverImg: 'http://www.placecage.com/250/150'
        },
        {
            title: 'Sport3',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Sport4',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Sport5',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    $scope.websiteArts = [
        {
            title: 'Arts1',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Arts2',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Arts3',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Arts4',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Arts5',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    $scope.websiteEdu = [
        {
            title: 'Edu1',
            coverImg: 'http://www.fillmurray.com/250/150'
        },
        {
            title: 'Edu2',
            coverImg: 'http://www.fillmurray.com/250/150'
        },
        {
            title: 'Edu3',
            coverImg: 'http://www.fillmurray.com/250/150'
        },
        {
            title: 'Edu4',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Edu5',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    $scope.websiteGov = [
        {
            title: 'Gov1',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Gov2',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Gov3',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Gov4',
            coverImg: 'http://www.placekitten.com/g/250/150'
        },
        {
            title: 'Gov5',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
    $scope.websiteBusiness = [
        {
            title: 'Bus1',
            coverImg: 'http://www.placekitten.com/250/150'
        },
        {
            title: 'Bus2',
            coverImg: 'http://www.placekitten.com/250/150'
        },
        {
            title: 'Bus3',
            coverImg: 'http://www.placekitten.com/250/150'
        },
        {
            title: 'Bus4',
            coverImg: 'http://www.placekitten.com/250/150'
        },
        {
            title: 'Bus5',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        }
    ];
  
}]);
