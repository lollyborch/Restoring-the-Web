//temporary array while working out how to load js in order
var imageArray = ["http://nla.gov.au/nla.obj-148694544/representativeImage", "http://nla.gov.au/nla.obj-136587996/representativeImage", "http://nla.gov.au/nla.obj-150937117/representativeImage"];

//once all 3 API calls to Trove for sport are below and added to array, change array name to imageArraySport (replaces array above)
//var imageArray = new Array;
var imageArraySport = [];

//cricket image
$(document).ready(function cricket() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=cricket&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 17226811) {
					var cricketImgLink = recordList[i].identifier[0].value;
					var cricketImg = cricketImgLink + "/representativeImage"
                    imageArraySport[0]=cricketImg;
					//imageArraySport.push(cricketImg);
					console.log(imageArraySport);
					//printImg();
					break;
				}	
			}
		}
	});
    
});
//sydney olympics image
$(document).ready(function olympics() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=olympics+AND+sydney&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 33767677) {
					var olympicsImgLink = recordList[i].identifier[0].value;
					var olympicsImg = olympicsImgLink + "/representativeImage"
                    imageArraySport[1]=olympicsImg;
					//imageArraySport.push(olympicsImg);
					console.log(imageArraySport);
					//printImg();
					break;
				}	
			}
		}
	});
});
//AFL image
$(document).ready(function cycling() {
	var url = "http://api.trove.nla.gov.au/result?key=jsk1qqntnrj7qbvf&zone=picture&l-availability=y&q=cyclist+AND+1920&encoding=json&n=50"
	$.ajax({
		type: "GET",
		url: url,
		asynch: false,
		contentType: "application/json",
		dataType: "jsonp",
		success: function(callData) {
		var recordList = callData.response.zone[0].records.work;
			for (i = 0; i < recordList.length; i++) {
				if (recordList[i].id == 25031406) {
					var cyclingImgLink = recordList[i].identifier[0].value;
					var cyclingImg = cyclingImgLink + "/representativeImage"
                    imageArraySport[2]=cyclingImg;
					//imageArraySport.push(cyclingImg);
					console.log(imageArraySport);
					//printImg();
					break;
				}	
			}
		}
	});
});
/*	
function printImg() {
	($(sport).children("img").attr("src",imageArray));
	var thumbArray =($(sport).find("figure"));
	var firstThumb = thumbArray[0].children[0];
	($(firstThumb).attr("src",imageArray));
	//($(firstThumb).attr("style","height:211px"));
	//($(sport).find("h4").html("Cricket Australia"))
	//$(sport).html("<img src="+imageArray+"  height=300px width=100% class=img-responsive></img>");
};*/
