<?php

  include 'need/php_comman_plug/connect/connect.php';







// this function chck error of signup which come from get method from the signin page
function error_of_signin()
{
  if(isset($_GET['error']))
  {
    switch ($_GET['error']) 
      {
        case '1':
            $error_signin="<div class='message_of_error' id='wrong_return'>Password or Id is wrong.</div><script type='text/javascript'>$('#wrong_return').show();</script>"; 
            echo $error_signin;
        break;
      
        
        default:
        break;
      }  
  }
  else
  {}

}


/// this function check error of signup
function error_of_signup()
{
  if(isset($_GET['error_in_signup']))
  {
    switch ($_GET['error_in_signup']) {
        case '1';

        break;
        case '2';
            $error_signup="<div class='message_of_error' id='wrong_return'>Id and Email typed by you are already taken, please try some other id and email.</div><script type='text/javascript'>$('#wrong_return').show();</script>"; 
            echo $error_signup;
        break;
        case '3';
               $error_signup="<div class='message_of_error' id='wrong_return'>Id typed by you is already taken, please try some other id.</div><script type='text/javascript'>$('#wrong_return').show();</script>"; 
            echo $error_signup;
        break;
        case '4';
                $error_signup="<div class='message_of_error' id='wrong_return'>Email typed by you is already taken, please try some other email.</div><script type='text/javascript'>$('#wrong_return').show();</script>"; 
            echo $error_signup;
        break;
         case '5';
                $error_signup="<div class='message_of_error' id='wrong_return'>Your age is less then 13 years so you can't be a member of this site.</div><script type='text/javascript'>$('#wrong_return').show();</script>"; 
            echo $error_signup;
        break;
        
        default:
          break;
      }  
  }
  else
  {}
}


// this function check that whather sessetion have started or not
function session_of_user_in()
{
            session_start('sign_in');
            if(isset($_SESSION['bunchup_id']))
                     {
                             header('location:signin/');
                      }
                   else
               {
              /* do nothing */
                }
}
session_of_user_in();





?>
<!DOCTYPE HTML>
<html>
   <head>
        <title>World #1 social group</title>

        <!-- this is css for the index -->
       
         <link rel='stylesheet' href='need/css/comman/comman.css'>
           <link rel='stylesheet' href='need/css/index.css'>

        <!-- this is to background -->
        <style>
       
        </style>

        <!-- this is the jquery -->

        <script type='text/javascript' src='need/javascript/jquery/jquery.js'></script>
      <script type="text/javascript" src="need/javascript/jquery/jquery.zoomTarget/jquery.zoomooz.min.js"></script>
    
        <!-- This is meta tag -->
        <meta name='description' content='Bunchup let you bunch up your social networking in a very cool and new way, it is very unique and secure'>
        <meta name='keyword' content='social networking , Bunchup , Bunchup.com , cool and new way , unique , bunch'>
        <meta name='sumary' content='Bunchup is a social networking site, which is free to use, which is new , cool , unique , fast , secure and a never ending trend.'>
        <meta name='author' content='Bunchup'>
        <meta charset='utf-8'>
        <meta name='language' content='English'>
   </head>
   <body >
     <div class='black'>
     </div>
     <div class='language_box_pop'>
         <div class='top_of_lan_box'>
          Language
          <div class='close_language_but'></div>
         </div>
     </div>
     <div class='top'>
       <div class='middle_top'>
                        <img src='need/images/logo/logo.png' alt='logo of bunchup' class='logo'>   
                        <input type='button' class='language_button' value='Language' > 
    </div>
     </div>
   
     <div class='body_index'>
                  <div class='signup box zoomTarget'>
                    <div class='top_of_sign_up'>
                     Bunch up ? its free
                    </div>
                     <div class='sign_body'>
                       <form method='post' action='signup/' enctype="multipart/form-data">
                                    <input type='name' placeholder='Name' class='input ' maxlength='50' name='name' id='name_up' style='margin-top:0px;'>
                                    <input type='email' placeholder='Email' class='input' maxlength='50' name='email' id='mail_up'>
                                    <input type='password' placeholder='pin' class='input' maxlength='6' name='pin' id='pin_up' style='width:90%;'>
                                    <div class='question_pin'><div class='message_of_pin'>
                                     <b>pin</b> is a six digit number which make your id more secure. You use pin and password together to change information like email , name etc.
                                    </div></div>
                                    <input type='id' placeholder='id' class='input check_the_symble' maxlength='50' name='id' id='id_up'>
                                     <input type='password' placeholder='password' class='input' maxlength='50' name='pass' id='pass_up'>
                                    <input type='password' placeholder='retype password' class='input' maxlength='50' name='pass_re' id='passre_up'>
                                    <?php include 'need/php/dob_gender_country.php'; ?>
                                               <input type='submit' value='Bunch Up' id='chicksignup' onclick='checksignup();'  class='submit'>
                                                <div class='check_display'></div>
                                                <?php error_of_signup(); ?>
                                               <div class='message_of_error' id='signup_error'>
                                                l
                                               </div>
                                              
                                              </form>
                    </div>
                  </div>

                  <div class='message zoomTarget'>
                      <div class='body_message'>
                                <h2>Welcome to Bunchup</h2>
                                    <p>Bunchup is a unique social network, created to match your social life. Use it as a micro blogging, question and answer or
                                     social networking site. Just use it and start your trend. </p>

                      </div>
                      <div class='body_message_more'>
                          
                           <img src='need/images/icon/app-store-icon.png' alt='iphone'>
                           <img src='need/images/icon/Google-Play-Store.png' alt='iphone'>
                      </div>
                  </div>

                  <div class='signin box  zoomTarget'>
                    <div class='sign_body'>
                          <form method='post' action='signin/'>
                                 <input type='Id' name='id' class='input' placeholder='Id' id='id_in' style='margin-top:0px;' maxlength='50'><br>
                                 <input type='password' name='password' class='input' placeholder='Password' id='password_in' maxlength='50'><br>
                                 <div class='keep_sign_in'><input type='checkbox' name='keep_sign_in' class='check' checked="checked">Remember me 
                                  <a href='help/forgot_password.php' class='forget_password'>Forget password?</a></div>

                                 <input type='submit' value='Bunch In' class='submit' id='sign_in'>
                                 <div class='message_of_error signin_error'>
                                               </div>
                                  <?php error_of_signin(); ?>
                          </form>
                    </div>
                  </div>
                  
                  <div class='bottom '>
                       <div class='detail'>
                       &copy bunchup.inc
                       <a href='bottom/?q=about'>About</a>
                       <a href='bottom/?q=services'> Services </a>
                       <a href='bottom/?q=feedback'>Feedback </a>
                       <a href='bottom/?q=credit'>Credit </a>
                       <a href='bottom/?q=jobs'>Jobs </a>
                       <a href='bottom/?q=contactus'>Contact us </a>
                       <a href='bottom/?q=security'>Security </a>
                       <a href='bottom/?q=termcondition'>Term & Condition </a>
                       <a href='bottom/?q=privacypolicy'>Privacy Policy</a>
                       </div>
                  </div>
     </div>
     <script type='text/javascript' src='need/javascript/language pop up.js'></script>
     <script type='text/javascript' src='need/javascript/checksignup.js'></script>
     <script type='text/javascript' src='need/javascript/checksignin.js'></script>
     <script type='text/javascript'>
$(".check_the_symble").keyup(function(){ 


// this is funtion to check id box in signup form
 var str=document.getElementById("id_up");
     var regex=/[^a-z]/gi;
    str.value=str.value.replace(regex ,""); 


    });


            
      </script>
   </body>
   
</html>


