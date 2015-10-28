// <!-- This script adds content to the editor on working_panel.php -->
//var cricketHTML = $("#preview").contents();
var cricketHTML = document.getElementById("preview")
var errorList = new Array();
var errorListContainer = $(validator).find("textarea");
var postData = cricketHTML.contentDocument.body.innerHTML;
var validate;
var i = 0;

$(document).ready(function(){
	validate();
});

function validate() {
	$.ajax ({
	type: "POST",
	url: "https://validator.w3.org/nu/?out=json",
	data: postData,
	contentType: "text/html",
	success: function(response) {
		errorObjects = response.messages;
			for (i = 0; i < errorObjects.length; i++) {
				var error = errorObjects[i];
				if (error.type == "error") {
					var errorDetails = [error.message,error.lastLine,error.firstColumn/*,error.extract*/];
					errorList.push(errorDetails);
				}					
				if (error.type == "info" && error.subType == "warning") {
					var warning = [error.message,error.lastLine,error.firstColumn/*,error.extract*/];
					errorList.push(warning);
				}
			}
		console.log(errorList);
		console.log(errorList.length);
        var errornumber = errorList.length - 1;
        console.log(errornumber);
		console.log(i);
		for (i = 1; i < errorList.length; i++) {
			$(errorListContainer).append(i + ". " + errorList[i][0] + " From line " +errorList[i][1] + " Column " +errorList[i][2] + "\n" + "\n");
			//document.getElementById("test").innerHTML = errorList[i].valueOf();		
			}
        $('.working-errors').text('Errors: ' + errornumber);
        if(errornumber==0){
            console.log("there are no errors")
            $("#CongratsModal").modal()
          }else {
            console.log("there are still errors")
          }
		}
	})
};

function printErrors() {
		console.log("test");
		i = 0;
		errorList = new Array();
		$(errorListContainer).html("");
		postData = cricketHTML.contentDocument.body.innerHTML; 
		validate();
}