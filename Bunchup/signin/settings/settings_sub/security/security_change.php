<link rel='stylesheet' href='../aa_need/css/main.css'>

<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";


 if(isset($_SESSION['security_check']))
 {
  if($_SESSION['security_check'] == 1)
  {


    if(isset($_GET['error']))
         {
 $error=$_GET['error'];
         switch ($error) {
                    case 'wrong_email':
                       echo "<div class='error_of_the_page'>Email error! Email type by your is already taken by some other user. Please try with some other Email.</div> "; 
                   break;
                   case 'id_error':
                      echo "<div class='error_of_the_page'>Id error! Id typed by you is already taken, please try some other Id.</div> "; 
                   break;
                   case 'unknown':
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> "; 
                   break;
                   default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
                       break;
                       }
         }
    


  }
  else
  {
    header("location:security.php?error=unknown");
  }

 }
  else
  {
    header("location:security.php?error=unknown");
  }

?>







<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Security Settings</b> allow your to customize your security.<br> <br>
                                                       
                                                      </div>
                                               </div>


<h2>Security Settings change</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
   <form method='post' action='security_check_upload.php'>  

      <div class='row_of_items_in_general'>
          <div class='title_of_row'>E-mail</div>
          <div class='value_of_row'>
         <input type='hidden'  value='<?php echo $user_email; ?>' id='h_email' name='h_email'>
            <input type='text' name='email' value='<?php echo $user_email; ?>' class='input_of_general' id='email' placeholder='E-mail' maxlength='50'></div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Question</div>
          <div class='value_of_row'>
             <select type="question" id="question" class="input_of_general" name="question">
                                <option value='<?php echo $user_question; ?>'><?php echo $user_question; ?></option>
                                <option  value="">Select your security question</option>
                                <option value="What was your bast friend name when you were 10 year old">What is your best friend name.</option>
                               <option value="What is your mother home town">Where is your mother's home town.</option>
                               <option value="what is your hobby">what is your hobby.</option>
                               <option value="what game do you play">what game do you play.</option>
                               <option value="what do you want to do in your life">what do you want to be.</option>
                               <option value="what is your favrate food">what is your nick name at home.</option>
                      </select>
          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Answer</div>
          <div class='value_of_row'><input type='text' name='answer' value='<?php echo $user_answer; ?>' class='input_of_general' id='answer' placeholder='Answer' maxlength='50'></div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Phone no</div>
          <div class='value_of_row'><input type='text' name='phone' value='<?php echo $user_phone; ?>' class='input_of_general' id='phone' placeholder='Phone no' maxlength='20'></div>
     </div>
       <div class='row_of_items_in_general'>
          <div class='title_of_row'>Your id and URL</div>
          <div class='value_of_row'>
                <input type='hidden'  value='<?php echo  $user_id; ?>'  id='h_id'>
            <input type='id' id='id' placeholder='Ex-Jastinjoy'  maxlength='50' name='id' value='<?php echo  $user_id; ?>' class='input_of_general check_the_symble' style='float:right;width:72.5%;'><div style='float:right;width:20%;margin-right:2.5%;'>www.bunchup.com/</div></div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>New Password</div>
          <div class='value_of_row'>
                        <input type='password' name='password' value='' class='input_of_general' id='password' placeholder='New Password' maxlength='50'></div>
     </div>

      <div class='row_of_items_in_general'>
          <div class='title_of_row'>New Pin</div>
          <div class='value_of_row'><input type='password' name='pin' value='' class='input_of_general' id='pin' placeholder='New Pin' maxlength='6'></div>
     </div>


  <div class='box_of_option_for_setting'>
    <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='security_check.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save'>
    </form>
  </div>


</div>

<script type='text/javascript' src='../aa_need/javascript/check_security.js'></script>
<script type='text/javascript'>




  $(".check_the_symble").keyup(function(){ 
    var str=document.getElementById("id");
     var regex=/[^a-z]/gi;
    str.value=str.value.replace(regex ,""); 


    });

            
      </script>







