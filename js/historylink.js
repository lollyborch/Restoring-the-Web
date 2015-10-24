/*$(document).ready(function getHistoryButtonLink() {
    if(WebsiteIDNumber == 1){
        console.log("website id 1 ");
        $('#HistoryButton').attr('href', 'https://web.archive.org/web/20050105050831/http://www.cricket.com.au/');
        console.log("website id 1 link");
    } else {
        console.log("nope nope nope");
    };
    
});
*/


$(document).ready(function(getHistoryButtonLink) {
    //console.log("Website ID Number from historylink " + WebsiteIDNumber);
    //console.log(typeof WebsiteIDNumber);
    WebsiteIDNumber = Number(WebsiteIDNumber);
    //console.log(typeof WebsiteIDNumber);
    switch(WebsiteIDNumber) {
        case 1:
            $('#HistoryButton').attr('href', 'https://web.archive.org/web/20050105050831/http://www.cricket.com.au/')
            console.log("website id 1 link")
            break;
        case 2:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20000510172550/http://www.olympics.com/eng/index.html');
            console.log("website id 2 link")
            break;
        case 3:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/19990127221058/http://www.afl.com.au/home/default.html');
            console.log("website id 3 link")
            break;        
        case 4:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20030622085109/http://www.qld.cycling.org.au/html/index.htm');
            console.log("website id 4 link")
            break;   
        case 5:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20040626051840/http://www.queenslandballet.com.au/home/default.asp');
            console.log("website id 5 link")
            break;       
        case 6:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20021123130846/http://www.brisbanewritersfestival.com.au/ ');
            console.log("website id 6 link")
            break;     
        case 7:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/19990224091633/http://www2.uq.edu.au/');
            console.log("website id 7 link")
            break;     
        case 8:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20020529193900/http://www.qtac.edu.au/');
            console.log("website id 8 link")
            break;     
        case 9:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20000303112650/http://www.brisbane.qld.gov.au/');
            console.log("website id 9 link")
            break;     
        case 10:
             $('#HistoryButton').attr('href', 'https://web.archive.org/web/20010308174133/http://www.qmuseum.qld.gov.au/');
            console.log("website id 10 link")
            break;     
        default:
            console.log("there is no website id")
    }
    
});
