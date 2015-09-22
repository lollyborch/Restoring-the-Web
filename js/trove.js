var imageArray = new Array;
	
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
					imageArray.push(cricketImg);
					console.log(imageArray);
					printImg();
					break;
				}	
			}
		}
	});
});
	
function printImg() {
	($(sport).children("img").attr("src",imageArray));
	var thumbArray =($(sport).find("figure"));
	var firstThumb = thumbArray[0].children[0];
	($(firstThumb).attr("src",imageArray));
	($(firstThumb).attr("style","height:211px"));
	($(sport).find("h4").html("Cricket Australia"))
	//$(sport).html("<img src="+imageArray+"  height=300px width=100% class=img-responsive></img>");
};