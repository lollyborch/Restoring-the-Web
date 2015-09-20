//Angular JS for content based on https://www.codecademy.com/en/courses/learn-angularjs

app.controller('WebsiteController', ['$scope', function ($scope) {
  $scope.websiteSport = [
        {
            title: 'Sport1',
            coverImg: 'http://www.fillmurray.com/g/250/150'
        },
        {
            title: 'Sport2',
            coverImg: 'http://www.fillmurray.com/g/250/150'
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
  
}]);
