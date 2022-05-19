jQuery(document).ready(function(){

    console.log("Hello world!");
    "use strict"

     

    $(window).scroll(function(){
      if($(window).scrollTop() > 40){
        $("nav").addClass("secondary");
      }
      else{
        $("nav").removeClass("secondary");
      }
    });
});