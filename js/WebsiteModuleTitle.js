$(document).ready(function() {
    WebsiteIDNumber = Number(WebsiteIDNumber);
    //console.log(WebsiteIDNumber);

    switch(WebsiteIDNumber) {
        case 1:
            document.getElementById('websitename').innerHTML = ': Cricket Australia'
            console.log("website id 1 Cricket Australia")
            break;
        case 2:
            document.getElementById('websitename').innerHTML = ': Sydney Olympics'
            console.log("website id 2 Sydney Olympics")
            break;
        case 3:
            document.getElementById('websitename').innerHTML = ': AFL'
            console.log("website id 3 AFL")
            break;        
        case 4:
            document.getElementById('websitename').innerHTML = ': Cycling Qld'
            console.log("website id 4 Cycling Qld")
            break;   
        case 5:
            document.getElementById('websitename').innerHTML = ': Qld Ballet'
            console.log("website id 5 Qld Ballet")
            break;       
        case 6:
            document.getElementById('websitename').innerHTML = ': Brisbane Writers Festival'
            console.log("website id 6 Brisbane Writers Festival")
            break;     
        case 7:
            document.getElementById('websitename').innerHTML = ': UQ'
            console.log("website id 7 UQ")
            break;     
        case 8:
            document.getElementById('websitename').innerHTML = ': QTAC'
            console.log("website id 8 QTAC")
            break;     
        case 9:
            document.getElementById('websitename').innerHTML = ': Brisbane City Council'
            console.log("website id 9 Brisbane City Council")
            break;     
        case 10:
            document.getElementById('websitename').innerHTML = ': Qld Museum'
            console.log("website id 10 Qld Museum")
            break;     
        default:
            console.log("there is no website id for H1")
    }
    
});

$(document).ready(function() {
    var WebsiteModuleNumber = Number(ModuleIDNumber);
    //console.log(typeof WebsiteIDNumber);
    switch(WebsiteModuleNumber) {
        case 1:
            document.getElementById('modulenumber').innerHTML = ' - Module 1'
            console.log("module 1")
            break;
        case 2:
            document.getElementById('modulenumber').innerHTML = ' - Module 2'
            console.log("module 2")
            break;
        case 3:
            document.getElementById('modulenumber').innerHTML = ' - Module 3'
            console.log("module 3")
            break;        
        case 4:
            document.getElementById('modulenumber').innerHTML = ' - Module 4'
            console.log("module 4")
            break;   
        case 5:
            document.getElementById('modulenumber').innerHTML = ' - Module 5'
            console.log("module 5")
            break;       
        case 6:
            document.getElementById('modulenumber').innerHTML = ' - Module 6'
            console.log("module 6")
            break;     
        case 7:
            document.getElementById('modulenumber').innerHTML = ' - Module 7'
            console.log("module 7")
            break;     
        case 8:
            document.getElementById('modulenumber').innerHTML = ' - Module 8'
            console.log("module 8")
            break;     
        default:
            console.log("there is no module id for H1")
    }
    
});
