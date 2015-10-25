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