$('document').ready(function(){
	$("#show_contactus").click(function(){
        $("#contactus_box").slideDown();
        $("#about_box").slideUp();

        $("#show_contactus").addClass("selected_a");
        $("#show_about").removeClass("selected_a");
	});

	$("#show_about").click(function(){
        $("#about_box").slideDown();
        $("#contactus_box").slideUp();
       
        $("#show_about").addClass("selected_a");
        $("#show_contactus").removeClass("selected_a");
	});
});