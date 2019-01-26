<link rel='stylesheet' href='../aa_need/css/main.css'>

<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<?php 

  if(isset($_POST['password']))
{
 $password=md5(base64_encode($_POST['password']));
$pin=md5(base64_encode($_POST['pin']));

mysql_select_db($db_name);
$user_id=$_SESSION['bunchup_id'];
$line="select * from users where id='$user_id' and password='$password' and pin='$pin' ";
$no=mysql_num_rows(mysql_query($line));

           if($no == 1 )
              {
                         
                               $_SESSION['security_check']=1;
               }
          else
              {
               header('location:security_check.php?error=wrong_pass_pin');
               }


   }

else if(isset($_SESSION['security_check']))
 {
  if($_SESSION['security_check'] == 1)
  {

  }

  else
  {
    header("location:security_check.php?error=unknown");
  }

 }


  else
  {
    header("location:security_check.php?error=unknown");
  }








?>






<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Security Settings</b> allow your to customize your security.<br> <br>
                                                       
                                                      </div>
                                               </div>


<h2>Security Settings</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>E-mail</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_email; ?></div>

           </div>
     </div>  
     
        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Question</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_question; ?></div>

           </div>
     </div>  

        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Answer</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_answer; ?></div>

           </div>
     </div> 
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Phone no</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'><?php echo $user_phone; ?></div>

           </div>
     </div>  
    <div class='row_of_items_in_general'>
          <div class='title_of_row'>Your Id and URL</div>
          <div class='value_of_row'><div class='value_of_value_row'><?php echo 'www.bunchup.com/'.$user_id; ?></div>

             
         </div>
     </div>
        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Password</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo "*************"; ?></div>

           </div>
     </div>  

        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Pin</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo "**************"; ?></div>

           </div>
     </div>  

   <div class='box_of_option_for_setting'>
      <div class='information_about_showing_information'>
       
       </div>
      <a href='security_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>


</div>










