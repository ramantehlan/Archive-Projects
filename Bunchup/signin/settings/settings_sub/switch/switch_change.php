

<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Switch settings</b> allow you to change your social settings.<br> <br>
                                                      </div>
                                               </div>

<h2>Switch Change</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>
<style>
.value_of_row{padding-left:0%;
           width:83%;}

.title_of_row{width:25%;}

.value_of_row{width:73%;}


</style>
<?php
if(isset($_GET['error']))
{
 $error=$_GET['error'];
   switch ($error) {
      case 'wrong_pass_pin':
                       echo "<div class='error_of_the_page'>Password and Pin error! Password and Pin combination typed by you was wrong please type again.</div> "; 
       break;
        case 'wrong_e':
                       echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> "; 
       break;
     default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
       break;
   }
  }
?>
<div class='setting_box'>
   <form method='post' action='switch_check_upload.php'>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Friend requests allowed</div>
          <div class='value_of_row'>
                     <?php
                             if($allow_friend_request == 1)
                             {
                              $frra='Allow';
                             }
                             else
                             {
                                $frra='Deny';
                             }

                     ?>
                      <select type='allow' id='Frra' name='friend_request_allow' class='input_of_general'>
                              <option selected value='<?php echo $allow_friend_request;  ?>'><?php   echo $frra;    ?></option>
                              <option value=''>Select your Choise</option>
                              <option value='1'>Allow</option>
                              <option value='0'>Deny</option>
                      </select>      
             
          </div>

     </div>

        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Following requests allowed</div>
          <div class='value_of_row'>
             <?php
                             if($allow_follow_request == 1)
                             {
                              $fra='Allow';
                             }
                             else
                             {
                                $fra='Deny';
                             }

                     ?>
                          <select type='allow' id='Fra' name='following_request_allow' class='input_of_general'>
                              <option selected value='<?php   echo $allow_follow_request;  ?>'><?php  echo $fra;  ?></option>
                              <option value=''>Select your Choise</option>
                              <option value='1'>Allow</option>
                              <option value='0'>Deny</option>
                      </select> 
          </div>

     </div>

        <div class='row_of_items_in_general'>
          <div class='title_of_row'>Questions allowed</div>
          <div class='value_of_row'>
                                <?php
                             if($allow_question == 1)
                             {
                              $qra='Allow';
                             }
                             else
                             {
                                $qra='Deny';
                             }

                     ?>
                            <select type='allow' id='qra' name='Question_allow' class='input_of_general'>
                              <option selected value='<?php    echo $allow_question;    ?>'><?php   echo $qra;    ?></option>
                              <option value='1'>Select your Choise</option>
                              <option value='0'>Allow</option>
                              <option>Deny</option>
                      </select> 
          </div>

     </div>

 

      <div class='row_of_items_in_general' style='text-align:center;height:30px;margin-top:10px;float:left;margin-bottom:10px;'>
                       <input type='password' name='pass'  placeholder='Password' class='input_of_security' id='password' maxlength='50'> 
                                        <input type='password' name='pin' maxlength='6' class='input_of_security' id='pin' placeholder='Pin'>
     </div>

   <div class='box_of_option_for_setting'>
    <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='switch.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save'>
    </form>
  </div>




</div>
<script type='text/javascript' src='../aa_need/javascript/check_switch.js'></script>








