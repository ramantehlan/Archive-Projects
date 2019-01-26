  $(document).ready(function(){
  



  $('#email').keyup(function(){
   var email=$('#email').val();
   var current_email=document.getElementById('h_email').value;
 
  $.post("../../../../need/php_comman_plug/check_mail.php",{cmail:email},function(mch){
         
      $('.check_display').html(mch);
 
  var m=$('#signup_error_m').val();
     if(m.length >= 1 && email != current_email)
     {
     $('.message_of_error').show();
      $('.message_of_error').html("Email typed by you is already taken, please try some other email.");
     }
     else
     {
      $('.message_of_error').hide();
     }


  });

});

$('#id').keyup(function(){
 var id=$('#id').val();
 var h_id=document.getElementById('h_id').value;
 $.post("../../../../need/php_comman_plug/check_id.php",{cid:id},function(idch){
                                         $('.check_display').html(idch);

                              var p=$('#signup_error_i').val();
                               if(p.length >= 1 && id != h_id)
                                      {
                                    $('.message_of_error').show();
                                   $('.message_of_error').html("Id typed by you is already taken, please try some other Id.");
                                    return false;
                                         }
                                else
                                   {
                                  $('.message_of_error').hide();

                                   }
                            
                                });

});




$('#save').click(function(){

var email=document.getElementById('email').value;
var question=document.getElementById('question').value;
var answer=document.getElementById('answer').value;
var phone=document.getElementById('phone').value;
var id=document.getElementById('id').value;
var password=document.getElementById('password').value;
var pin=document.getElementById('pin').value;





  if(email=='' || question =='' || answer=="" ||  id=='' || password == '' || pin == '')
  {
 $('.message_of_error').show();
      $('.message_of_error').html('Please fill all the fields.');
       return false;
  }



            
    else if(email.indexOf('@') == -1 || email.indexOf('.com') == -1  )
   {
      
      $('.message_of_error').show();
      $('.message_of_error').html('Please fill a valid email like :- abc@gmail.com.');
       return false;
       
   }

      else if(id.length <= 5)
   {
    
      $('.message_of_error').show();
      $('.message_of_error').html("Id should have atleast 6 character.");
      return false;
       
   }

     else if(password.length <= 5)
   {
    
      $('.message_of_error').show();
      $('.message_of_error').html("Passwords should have atleast 6 character.");
      return false;
       
   }


   else
   {
         
   }

});




});
