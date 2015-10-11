var imageArrayArts = [];

//ballet image
$(document).ready(function ballet() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=ballet&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 37280055) {
					var balletImgLink = recordList[i].identifier[0].value;
					var balletImg = balletImgLink + "/representativeImage"
                    imageArrayArts[0]=balletImg;
					console.log(imageArrayArts);
                    printArtsImg();
					break;
				}	
			}
		}
	});
    
});

//writers fest image
$(document).ready(function writers() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=paper&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 33077574) {
					var writersImgLink = recordList[i].identifier[0].value;
					var writersImg = writersImgLink + "/representativeImage"
                    imageArrayArts[1]=writersImg;
					console.log(imageArrayArts);
                    printArtsImg();
					break;
				}	
			}
		}
	});
    
});

function printArtsImg() {
    
     
	($(arts).children("img").attr("src",imageArrayArts));
    
	var thumbArray =($(arts).find("figure"));
	var firstThumb = thumbArray[0].children[0];
	($(firstThumb).attr("src",imageArrayArts[0]));
  //  console.log(thumbArray);
    //console.log(firstThumb);
    
	//($(firstThumb).attr("style","height:211px"));
	//($(sport).find("h4").html("Cricket Australia"))
	//$(sport).html("<img src="+imageArray+"  height=300px width=100% class=img-responsive></img>");
};