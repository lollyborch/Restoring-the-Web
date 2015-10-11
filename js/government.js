var imageArrayGovernment = [];

//BCC image
$(document).ready(function BCC() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=brisbane+council+espace&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 191090820) {
					var BCCImgLink = recordList[i].identifier[0].value;
                    imageArrayGovernment[0]=BCCImgLink;
					console.log(imageArrayGovernment);
                    //printGovernmentImg();
					break;
				}	
			}
		}
	});
    
});

//QAG study image
$(document).ready(function writers() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=queensland+art+espace&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 191093713) {
					var artImgLink = recordList[i].identifier[0].value;
					var artImg = artImgLink + "/web_Slide_008.jpg"
                    imageArrayGovernment[1]=artImg;
					console.log(imageArrayGovernment);
                   // printGovernmentImg();
					break;
				}	
			}
		}
	});
    
});

//Qld museum image
$(document).ready(function writers() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=queensland+museum+espace&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 191093709) {
					var museumImgLink = recordList[i].identifier[0].value;
					var museumImg = museumImgLink + "/web_Slide_020.jpg"
                    imageArrayGovernment[2]=museumImg;
					console.log(imageArrayGovernment);
                    printGovernmentImg();
					break;
				}	
			}
		}
	});
    
});

function printGovernmentImg() {
    
     
	($(government).children("img").attr("src",imageArrayGovernment));
    
	var thumbArray =($(government).find("figure"));
	var firstThumb = thumbArray[0].children[0];
	($(firstThumb).attr("src",imageArrayGovernment[2]));
  //  console.log(thumbArray);
    //console.log(firstThumb);
    
	//($(firstThumb).attr("style","height:211px"));
	//($(sport).find("h4").html("Cricket Australia"))
	//$(sport).html("<img src="+imageArray+"  height=300px width=100% class=img-responsive></img>");
};