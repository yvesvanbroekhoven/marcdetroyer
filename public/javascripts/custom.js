$(document).ready(function(){


  $("#menu li a").click(function() {
       $('#menu li a').removeClass("active");
        $(this).addClass("active");
        
        $(".item").hide();


        var navitem = $(this).attr('rel');
        $(navitem).show();
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


$("#thumbs li span h2").hide();


$('#thumbs li').mouseenter(function() {

	$(this).children("span").animate({height: '150'}, 500 );
	$(this).children().children("h2").show();
});

$('#thumbs li').mouseleave(function() {

	$(this).children("span").animate({height: '0'}, 500 );
$(this).children().children("h2").hide();

});

$('.slideshow').cycle({ 
    fx:      'scrollDown', 
    speed:    700, 
    timeout:  3500 
});


});

