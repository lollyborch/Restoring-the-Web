//var cricketHTML = $("#preview").contents();
var cricketHTML = document.getElementById("preview")
var errorList = new Array();
var test = $(validator).find("textarea");
var postData = cricketHTML.contentDocument.body.innerHTML;

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
		for (i = 0; i < errorList.length; i++) {
			console.log(test[0]);
			test.innerHTML = "Spoons";
			$(test).append(errorList[i][0] + " From line " +errorList[i][1] + " Column " +errorList[i][2] + "\n");
			//document.getElementById("test").innerHTML = errorList[i].valueOf();		
			}
		}
});

/*	function printErrors(response) {
		console.log(response);
		console.log("test");
		var test = $(validator).find("textarea");
		test.html(response);
	}*/