function congrats(numbErrors) {   
    if(numbErrors==0){
        console.log("there are no errors")
        $("#CongratsModal").modal()
      }else {
        console.log("there are still errors")
      }
};