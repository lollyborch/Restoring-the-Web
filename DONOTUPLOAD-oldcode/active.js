//adapted from http://stackoverflow.com/questions/13471129/ng-repeat-finish-event
angular.module('myApp', [])
.directive('myPostRepeatDirective', function() {
  return function(scope, element, attrs) {
    if (scope.$last){
        //add active class to first child
      $(".btnactive:nth-child(1)").addClass('active');
          console.log('active');
    }
  };
});
