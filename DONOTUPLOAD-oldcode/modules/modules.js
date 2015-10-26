/* hard coded vars for testing
var cricket = 1;
var olympics = 1;
var cycling = 1;
var ballet = 1;
var writers = 1;
var uq = 1;
var qtac = 1;
var council = 1;
var gallery = 1;
var museum = 1;
*/


$(document).ready( function() {
    if(cricket==1){
      console.log("cricket" + cricket)
      $("#cricket").load("../modules/cricketmodules.html");
  }else {
    console.log("I got nothing")
  }

  if(olympics==1) {
      console.log("olympics" + olympics)
    $("#olympics").load("../modules/olympicmodules.html");
  }else {
    console.log("I got nothing")
  }

  if(cycling==1) {
    $("#cycling").load("../modules/cyclingmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(ballet==1) {
    $("#ballet").load("../modules/balletmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(writers==1) {
    $("#writers").load("../modules/writersmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(uq==1) {
    $("#uq").load("../modules/uqmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(qtac==1) {
    $("#qtac").load("../modules/qtacmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(council==1) {
    $("#council").load("../modules/councilmodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(gallery==1) {
    $("#gallery").load("../modules/gallerymodules.html");
  }else {
    console.log("I got nothing")
  }
    
  if(museum==1) {
    $("#museum").load("../modules/museummodules.html");
  }else {
    console.log("I got nothing")
  }
});

function cricketmoduleclass() {
    console.log("i have reached the cricketmoduleclass");
    if(cricketmod1==1){
      console.log("cricket mod 1 JS = " + cricketmod1);
      $('#modCA1').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod2==1){
      console.log("cricket mod 2 JS = " + cricketmod2);
      $('#modCA2').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod3==1){
      console.log("cricket mod 3 JS = " + cricketmod3);
      $('#modCA3').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod4==1){
      console.log("cricket mod 4 JS = " + cricketmod4);
      $('#modCA4').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod5==1){
      console.log("cricket mod 5 JS = " + cricketmod5);
      $('#modCA5').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod6==1){
      console.log("cricket mod 6 JS = " + cricketmod6);
      $('#modCA6').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod7==1){
      console.log("cricket mod 7 JS = " + cricketmod7);
      $('#modCA7').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }
    if(cricketmod8==1){
      console.log("cricket mod 8 JS = " + cricketmod8);
      $('#modCA8').addClass('moduletextstart').removeClass('moduletext');
      }else {
        console.log("I got nothing for mod JS")
      }

};