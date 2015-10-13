$(function printSportImg() {
   $('.sportimage').each(function(index) {
  $(this).attr('src', imageArraySport[index]);
  });

});