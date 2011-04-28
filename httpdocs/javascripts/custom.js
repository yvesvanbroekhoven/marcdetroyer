$(document).ready(function(){



 $('#thumbs a').click(function() {
	$(".main-image").hide();
	
	  var pictures = $(this).attr('rel');
     $(pictures).show();
     
    
     $('#thumbs a').addClass("active");
     $(this).removeClass("active");
        
        
 });
 


    $('#thumbs li').children('span').removeClass("active");


  $("#menu li a").click(function() {
       
       $('#menu li a').removeClass("active");
        $(this).addClass("active");
        
        $(".item").hide();


        var navitem = $(this).attr('rel');
        $(navitem).show().removeClass("hidden");
        // return false;
    });



$("#colornav .bg-black").click(function() {
        $("body").addClass("black");
        $("body").removeClass("white");
        	$(this).hide();
        	$("#colornav .bg-white").show();
        	



 });
 
 
 $("#colornav li").mouseenter(function() {
								$("#colornav li span").hide();
        	$(this).children("span").show();
 });
 
  $("#colornav li").mouseleave(function() {
								$("#colornav li span").hide();
        	$(this).children("span").hide();
 });

 
 
 
 
 $("#colornav .bg-white").click(function() {
        $("body").addClass("white");
        $("body").removeClass("black");
        $(this).hide();
        $("#colornav .bg-black").show();
        
         

 });
 
 
 	$(".main-image").hide();
 

$('.slideshow').cycle({ 
    fx:      'scrollDown', 
    speed:    700, 
    timeout:  3500 
});


});

