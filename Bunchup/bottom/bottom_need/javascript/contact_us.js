$(document).ready(function(){
	 
	 $("#submit_contact_us").click(function(){
     
      var name=document.getElementById("name").value;
      var email=document.getElementById("email").value;
      var subject=document.getElementById("problem").value;
      var message=document.getElementById("message").value;
      var user_no=document.getElementById("contact_user_no").value;

      if(name=="" || email=="" || subject=="" || message=="")
      {
          $(".hidden_message_come").show();
          $(".hidden_message_come").html("Dear user please fill all the fields.");

      }
      else
      {
           $(".hidden_message_come").hide();
           $(".upload_div").show();
           $(".upload_div").html("<img src='../need/images/small/load/1.gif' class='load_img'> <div class='right_side_meassage_dear_one'>Dear user please wait for a second....</div>");


           $.post("bottom_need/php/upload_contact/upload_contact.php",{subject:subject,message:message,user_no:user_no},function(do_upload_contact){
           	
               $(".upload_div").html(do_upload_contact);
           });
          
      }
   
	 });

});