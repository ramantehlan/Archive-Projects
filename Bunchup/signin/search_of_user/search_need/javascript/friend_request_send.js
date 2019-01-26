$(document).ready(function(){



$("#send_friend_request").click(function(){
$('html').css("cursor","wait");
		$(".follow_button_hide_when_no_need").hide();
      var button=$(this);
        var search_no=document.getElementById("no_of_search").value;
      var my_no=document.getElementById("my_no").value;
       var display=$("#output_of_friend_request");

     
    $.post("signin/search_of_user/search_need/php_comman_plug/send_friend_request/send_friend_request.php",{no_of_searcher:my_no,no_of_search:search_no},function(send_friend_request){
           button.html(send_friend_request);
          $('html').css("cursor","default");
        
          //display.html(send_friend_request); 
          
       });

     
});


});
