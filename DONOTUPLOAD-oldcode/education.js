var imageArrayEducation = [];

//UQ image
$(document).ready(function UQ() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=UQ+building&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 191089369) {
					var UQImgLink = recordList[i].identifier[0].value;
                    imageArrayEducation[0]=UQImgLink;
					console.log(imageArrayEducation);
                    //printEducationImg();
					break;
				}	
			}
		}
	});
    
});

//QTAC study image
$(document).ready(function writers() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=UQ+library+study&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 191093925) {
					var studyImgLink = recordList[i].identifier[0].value;
					var studyImg = studyImgLink + "/web_n1959_S909_p110a.jpg"
                    imageArrayEducation[1]=studyImg;
					console.log(imageArrayEducation);
                    printEducationImg();
					break;
				}	
			}
		}
	});
    
});

function printEducationImg() {
    
     
	($(education).children("img").attr("src",imageArrayEducation));
    
	var thumbArray =($(education).find("figure"));
	var firstThumb = thumbArray[0].children[0];
	($(firstThumb).attr("src",imageArrayEducation[1]));
  //  console.log(thumbArray);
    //console.log(firstThumb);
    
	//($(firstThumb).attr("style","height:211px"));
	//($(sport).find("h4").html("Cricket Australia"))
	//$(sport).html("<img src="+imageArray+"  height=300px width=100% class=img-responsive></img>");
};