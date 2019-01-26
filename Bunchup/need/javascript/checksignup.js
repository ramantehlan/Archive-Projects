$(document).ready(function(){
 


 //this is to check the id typed by user exist or not

$('#id_up').keyup(function(){
   var id=$('#id_up').val();
  $.post("need/php_comman_plug/check_id.php",{cid:id},function(idch){
         
      $('.check_display').html(idch);
 
  var p=$('#signup_error_i').val();
     if(p.length >= 1)
     {
     $('#signup_error').show();
      $('#signup_error').html("Id typed by you is already taken, please try some other id.");
    return false;
     }
     else
     {
      $('#signup_error').hide();
     }


  });
   });
      

// this is to chekc the email typed by user exist or not
  $('#mail_up').keyup(function(){
   var mail=$('#mail_up').val();
  $.post("need/php_comman_plug/check_mail.php",{cmail:mail},function(mch){
         
      $('.check_display').html(mch);
 
  var m=$('#signup_error_m').val();
     if(m.length >= 1)
     {
     $('#signup_error').show();
      $('#signup_error').html("Email typed by you is already taken, please try some other email.");
    return false;
     }
     else
     {
      $('#signup_error').hide();
     }


  });
});


// below check that no field in sign up form is empty
   $('#chicksignup').click(function(){
    $('#wrong_return').hide();

    var name=$('#name_up').val();
    var  id=$('#id_up').val();
    var email=$('#mail_up').val();
    var pass=$('#pass_up').val();
    var pin=$('#pin_up').val();
    var passre=$('#passre_up').val();
    var year=$('#year_up').val();
    var month=$('#month_up').val();
    var date=$('#date_up').val();
    var gender=$('#gender_up').val();
    var country=$('#country_up').val();
     var p=$('#signup_error_i').val();
     var m=$('#signup_error_m').val();
   
    
    if(name == '' || id == ''  || email == '' || pass == '' ||passre == '' || year == '' || month == '' 
    	|| date == '' || gender == ''  || country == '' || pin == '' )
    {
    	
    	 $('#signup_error').show();
      $('#signup_error').html('Please fill all the fields.');

      return false;

    }



      else if(id.length <= 5)
   {
      
      $('#signup_error').show();
      $('#signup_error').html('Id should have atleast 6 character.');
       return false;
   }

   
  

    else if(email.indexOf('@') == -1 || email.indexOf('.com') == -1  )
   {
      
      $('#signup_error').show();
      $('#signup_error').html('Please fill a valid email like :- abc@gmail.com.');
       return false;
   }


   else if(pass != passre)
   {
    
      $('#signup_error').show();
      $('#signup_error').html("Passwords don't match.");
      return false;
   }

    else if(pass.length <= 5)
   {
    
      $('#signup_error').show();
      $('#signup_error').html("Passwords should have atleast 6 character.");
      return false;
       
   }


   
   

  
 

  
   else 
   {
   }

     

   });

});