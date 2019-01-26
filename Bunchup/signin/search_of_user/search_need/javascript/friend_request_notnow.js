



$(document).ready(function(){

$("#dont_accept_the_request_not_now").click(function(){
$('html').css("cursor","wait");
	  $("#accept_friend_request").hide();
      var button=$(this);
       var search_no=document.getElementById("no_of_search").value;
      var my_no=document.getElementById("my_no").value;
      var display=$("#output_of_friend_request");
  
      $.post("signin/search_of_user/search_need/php_comman_plug/send_friend_notnow/send_friend_notnow.php",{no_of_searcher:my_no,no_of_search:search_no},function(accept_friend_request){
      button.html(accept_friend_request);
      //display.html(send_friend_request);  
     $('html').css("cursor","default");
      });
    


});
});



