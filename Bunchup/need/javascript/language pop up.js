$(document).ready(function(){
	
$(".language_button").click(function(){
     $(".black").show();
     $(".language_box_pop").slideDown();

     $(".black").click(function(){
       $(".black").hide();
       $(".language_box_pop").hide();
     });

     $(".close_language_but").click(function(){
       $('.black').hide();
       $(".language_box_pop").hide();
     });
});

});