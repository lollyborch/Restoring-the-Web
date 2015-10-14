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
					//console.log(imageArraySport);
					printSportImg();
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
					//console.log(imageArraySport);
					printSportImg();
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
					//console.log(imageArraySport);
					printSportImg();
					break;
				}	
			}
		}
        
	});
});
	
function printSportImg() {
    if(imageArraySport.length == 3){
        $('.sportimage').each(function(index) {
            $(this).attr('src', imageArraySport[index]);
            //console.log(imageArraySport[index]);
        });
    };

};

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
					//console.log(imageArrayArts);
                    printArtsImg();
                  //  console.log("I have reached printArtsImg ballet");
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
					//console.log(imageArrayArts);
                    printArtsImg();
                  //  console.log("I have reached printArtsImg writers");
					break;
				}	
			}
		}
	});
    
});

function printArtsImg() {
    if(imageArrayArts.length == 2){
       // console.log("the array length is 2");
        $('.artimage').each(function(index) {
            $(this).attr('src', imageArrayArts[index]);
          //  console.log(imageArrayArts[index]);
        });
    };
    
};

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
                    printEducationImg();
					break;
				}	
			}
		}
	});
    
});

//QTAC study image
$(document).ready(function qtac() {
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
    if(imageArrayEducation.length == 2){
        console.log("the array length is 2");
        $('.educationimage').each(function(index) {
            $(this).attr('src', imageArrayEducation[index]);
            console.log(imageArrayEducation[index]);
        });
    };
    
};

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
                    printGovernmentImg();
					break;
				}	
			}
		}
	});
    
});

//QAG study image
$(document).ready(function qag() {
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
                    printGovernmentImg();
					break;
				}	
			}
		}
	});
    
});

//Qld museum image
$(document).ready(function qldmuseum() {
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
    if(imageArrayGovernment.length == 3){
        console.log("the array length is 2");
        $('.governmentimage').each(function(index) {
            $(this).attr('src', imageArrayGovernment[index]);
            console.log(imageArrayGovernment[index]);
        });
    };
    
};