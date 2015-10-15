//Angular JS for content based on https://www.codecademy.com/en/courses/learn-angularjs

app.controller('MainController', ['$scope', function ($scope) {
  $scope.categories = [
        {
            name: 'Sport',
            coverImg: 'http://www.fillmurray.com/g/180/150'
        },
        {
            name: 'Arts',
            coverImg: 'http://www.fillmurray.com/g/180/150'
        },
        {
            name: 'Education',
            coverImg: 'http://www.fillmurray.com/g/180/150'
        },
        {
            name: 'Government',
            coverImg: 'http://www.fillmurray.com/g/180/150'
        },
        {
            name: 'Business',
            coverImg: 'http://www.fillmurray.com/g/180/150'
        }
    ];
    
    // adapted from http://stackoverflow.com/questions/13471129/ng-repeat-finish-event
    $scope.fireEvent = function () {

        // This will only run after the ng-repeat has rendered its things to the DOM
        $(".activerow a:nth-child(1)").addClass('active');
        console.log('active');

    };
  
}]);
