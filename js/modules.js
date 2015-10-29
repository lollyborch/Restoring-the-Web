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

/* uses jQuery to populate specific divs with module html based on mySQL query variables on my_restorations.php*/

$(document).ready( function() {
    if(cricket==1){
      console.log("cricket" + cricket)
      $("#cricket").load("../modules/cricketmodules.html");
  }else {
    console.log("No Cricket Restoration")
  }

  if(olympics==1) {
      console.log("olympics" + olympics)
    $("#olympics").load("../modules/olympicmodules.html");
  }else {
    console.log("No olympic Restoration")
  }

  if(cycling==1) {
    $("#cycling").load("../modules/cyclingmodules.html");
  }else {
    console.log("No cycling Restoration")
  }
    
  if(ballet==1) {
    $("#ballet").load("../modules/balletmodules.html");
  }else {
    console.log("No ballet Restoration")
  }
    
  if(writers==1) {
    $("#writers").load("../modules/writersmodules.html");
  }else {
    console.log("No writers Restoration")
  }
    
  if(uq==1) {
    $("#uq").load("../modules/uqmodules.html");
  }else {
    console.log("No uq Restoration")
  }
    
  if(qtac==1) {
    $("#qtac").load("../modules/qtacmodules.html");
  }else {
    console.log("No qtac Restoration")
  }
    
  if(council==1) {
    $("#council").load("../modules/councilmodules.html");
  }else {
    console.log("No council Restoration")
  }
    
  if(gallery==1) {
    $("#gallery").load("../modules/gallerymodules.html");
  }else {
    console.log("No gallery Restoration")
  }
    
  if(museum==1) {
    $("#museum").load("../modules/museummodules.html");
  }else {
    console.log("No museum Restoration")
  }
});

function cricketmoduleclass() {
    console.log("i have reached the cricketmoduleclass");
    if(cricketmod1==1){
      console.log("cricket mod 1 JS = " + cricketmod1);
      $('#modCA1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS1")
      }
    if(cricketmod2==1){
      console.log("cricket mod 2 JS = " + cricketmod2);
      $('#modCA2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS2")
      }
    if(cricketmod3==1){
      console.log("cricket mod 3 JS = " + cricketmod3);
      $('#modCA3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS3")
      }
    if(cricketmod4==1){
      console.log("cricket mod 4 JS = " + cricketmod4);
      $('#modCA4').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS4")
      }
    if(cricketmod5==1){
      console.log("cricket mod 5 JS = " + cricketmod5);
      $('#modCA5').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS5")
      }
    if(cricketmod6==1){
      console.log("cricket mod 6 JS = " + cricketmod6);
      $('#modCA6').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS6")
      }
    if(cricketmod7==1){
      console.log("cricket mod 7 JS = " + cricketmod7);
      $('#modCA7').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS7")
      }
    if(cricketmod8==1){
      console.log("cricket mod 8 JS = " + cricketmod8);
      $('#modCA8').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cricket mod JS8")
      }

};

function olympicsmoduleclass() {
    console.log("i have reached the olympicsmoduleclass");
    if(olympicmod1==1){
      console.log("olympics mod 1 JS = " + olympicmod1);
      $('#modSO1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS1")
      }
    if(olympicmod2==1){
      console.log("olympics mod 2 JS = " + olympicmod2);
      $('#modSO2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS2")
      }
    if(olympicmod3==1){
      console.log("olympics mod 3 JS = " + olympicmod3);
      $('#modSO3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS3")
      }
    if(olympicmod4==1){
      console.log("olympics mod 4 JS = " + olympicmod4);
      $('#modSO4').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS4")
      }
    if(olympicmod5==1){
      console.log("olympics mod 5 JS = " + olympicmod5);
      $('#modSO5').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS5")
      }
    if(olympicmod6==1){
      console.log("olympics mod 6 JS = " + olympicmod6);
      $('#modSO6').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for olympic mod JS6")
      }
};

function gallerymoduleclass() {
    console.log("i have reached the gallerymoduleclass");
    if(gallerymod1==1){
      console.log("gallery mod 1 JS = " + gallerymod1);
      $('#modQAG1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for gallery mod JS1")
      }
    if(gallerymod2==1){
      console.log("gallery mod 2 JS = " + gallerymod2);
      $('#modQAG2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for gallery mod JS2")
      }
    if(gallerymod3==1){
      console.log("gallery mod 3 JS = " + gallerymod3);
      $('#modQAG3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for gallery mod JS3")
      }
    if(gallerymod4==1){
      console.log("gallery mod 4 JS = " + gallerymod4);
      $('#modQAG4').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for gallery mod JS4")
      }
    if(gallerymod5==1){
      console.log("gallery mod 5 JS = " + gallerymod5);
      $('#modQAG5').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for gallery mod JS5")
      }
};

function councilmoduleclass() {
    console.log("i have reached the councilmoduleclass");
    if(councilmod1==1){
      console.log("council mod 1 JS = " + councilmod1);
      $('#modBCC1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for council mod JS1")
      }
    if(councilmod2==1){
      console.log("council mod 2 JS = " + councilmod2);
      $('#modBCC2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for council mod JS2")
      }
    if(councilmod3==1){
      console.log("council mod 3 JS = " + councilmod3);
      $('#modBCC3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for council mod JS3")
      }
};

function uqmoduleclass() {
    console.log("i have reached the uqmoduleclass");
    if(uqmod1==1){
      console.log("uq mod 1 JS = " + uqmod1);
      $('#modUQ1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for uq mod JS1")
      }
    if(uqmod2==1){
      console.log("uq mod 2 JS = " + uqmod2);
      $('#modUQ2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for uq mod JS2")
      }
    if(uqmod3==1){
      console.log("uq mod 3 JS = " + uqmod3);
      $('#modUQ3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for uq mod JS3")
      }
};

function balletmoduleclass() {
    console.log("i have reached the balletmoduleclass");
    if(balletmod1==1){
      console.log("ballet mod 1 JS = " + balletmod1);
      $('#modQB1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for ballet mod JS1")
      }
    if(balletmod2==1){
      console.log("ballet mod 2 JS = " + balletmod2);
      $('#modQB2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for ballet mod JS2")
      }
    if(balletmod3==1){
      console.log("ballet mod 3 JS = " + balletmod3);
      $('#modQB3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for ballet mod JS3")
      }
};

function cyclingmoduleclass() {
    console.log("i have reached the cyclingmoduleclass");
    if(cyclingmod1==1){
      console.log("cycling mod 1 JS = " + cyclingmod1);
      $('#modCQ1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cycling mod JS1")
      }
    if(cyclingmod2==1){
      console.log("cycling mod 2 JS = " + cyclingmod2);
      $('#modCQ2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cycling mod JS2")
      }
    if(cyclingmod3==1){
      console.log("cycling mod 3 JS = " + cyclingmod3);
      $('#modCQ3').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for cycling mod JS3")
      }
};

function qtacmoduleclass() {
    console.log("i have reached the qtacmoduleclass");
    if(qtacmod1==1){
      console.log("qtac mod 1 JS = " + qtacmod1);
      $('#modQTAC1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for qtac mod JS1")
      }
    if(qtacmod2==1){
      console.log("qtac mod 2 JS = " + qtacmod2);
      $('#modQTAC2').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing forqtac  mod JS2")
      }
};

function writersmoduleclass() {
    console.log("i have reached the writersmoduleclass");
    if(writersmod1==1){
      console.log("writers mod 1 JS = " + writersmod1);
      $('#modBWF1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for writers mod JS1")
      }
};

function museummoduleclass() {
    console.log("i have reached the museummoduleclass");
    if(museummod1==1){
      console.log("museum mod 1 JS = " + museummod1);
      $('#modQM1').addClass('moduleboxStart').removeClass('modulebox');
      }else {
        console.log("I got nothing for museum mod JS1")
      }
};