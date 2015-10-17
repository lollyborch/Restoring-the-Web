var app = angular.module("myApp", []);

app.controller('moduleController', ['$scope', function ($scope) {
    $scope.cricketModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=1?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=1?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=1?CompID=3'
        },
        {
            title: 'Module 4',
            url: 'working_panel.php?WebsiteID=1?CompID=4'
        },
        {
            title: 'Module 5',
            url: 'working_panel.php?WebsiteID=1?CompID=5'
        },
        {
            title: 'Module 6',
            url: 'working_panel.php?WebsiteID=1?CompID=6'
        },
        {
            title: 'Module 7',
            url: 'working_panel.php?WebsiteID=1?CompID=7'
        },
        {
            title: 'Module 8',
            url: 'working_panel.php?WebsiteID=1?CompID=8'
        }
        ];
        
    $scope.olympicsModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=2?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=2?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=2?CompID=3'
        },
        {
            title: 'Module 4',
            url: 'working_panel.php?WebsiteID=2?CompID=4'
        },
        {
            title: 'Module 5',
            url: 'working_panel.php?WebsiteID=2?CompID=5'
        },
        {
            title: 'Module 6',
            url: 'working_panel.php?WebsiteID=2?CompID=6'
        }
        ];
    $scope.cyclingModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=4?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=4?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=4?CompID=3'
        }
        ];
    $scope.balletModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=5?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=5?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=5?CompID=3'
        }
        ];
    $scope.writersModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=6?CompID=1'
        }
        ];
    $scope.uqModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=7?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=7?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=7?CompID=3'
        }
        ];
    $scope.qtacModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=8?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=8?CompID=2'
        }
        ];
    $scope.councilModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=9?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=9?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=9?CompID=3'
        }
        ];
    $scope.galleryModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=10?CompID=1'
        },
        {
            title: 'Module 2',
            url: 'working_panel.php?WebsiteID=10?CompID=2'
        },
        {
            title: 'Module 3',
            url: 'working_panel.php?WebsiteID=10?CompID=3'
        },
        {
            title: 'Module 4',
            url: 'working_panel.php?WebsiteID=10?CompID=4'
        },
        {
            title: 'Module 5',
            url: 'working_panel.php?WebsiteID=10?CompID=5'
        }
        ];
    $scope.museumModules = [
        {
            title: 'Module 1',
            url: 'working_panel.php?WebsiteID=11?CompID=1'
        }
        ];
  
}]);