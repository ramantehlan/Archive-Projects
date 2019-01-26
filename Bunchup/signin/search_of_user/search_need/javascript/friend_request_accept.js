
$(document).ready(function(){

$("#accept_friend_request").click(function(){
$('html').css("cursor","wait");
	$(".not_now_buttonn_to_remove").hide();
      var button=$(this);
      var search_no=document.getElementById("no_of_search").value;
      var my_no=document.getElementById("my_no").value;
       var display=$("#output_of_friend_request");
     
    $.post("signin/search_of_user/search_need/php_comman_plug/accept_friend_request/accept_friend_request.php",{no_of_searcher:my_no,no_of_search:search_no},function(accept_friend_request){
           button.html(accept_friend_request);
         //display.html(send_friend_request); 
          $('html').css("cursor","default");
       });

     

     
});


});

