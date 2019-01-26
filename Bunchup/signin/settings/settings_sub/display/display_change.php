<html>
<head>
<link rel='stylesheet' href='../aa_need/css/main.css'>
<head>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<body>

<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
include "../../../../need/php_comman_plug/display/view.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Display Settings</b> allow your to change display of your site.<br> <br>
                                                        <b>Bg</b> means Background on this site.
                                                      </div>
                                               </div>

<h2>Display Settings</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
  <form action='display_change_upload.php' method='post' >
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Bg color</div>
          <div class='value_of_row'>
          	<input type='rgb' Placeholder='rgb value' class='input_of_general' value='<?php echo $bg_color; ?>' id='rgb_value' name='rgb_value'>
          </div>
     </div>
       <div class='row_of_items_in_general' style='height:205px;margin-top:5px;'>
          <div class='title_of_row' style='height:100%;'>Bg Img</div>
          <div class='value_of_row' style='height:100%;'>
          
               
               <input type='file'  class='input_of_general' style='border:0px;margin-top:2.5px' id='img_file'  name='file'><br>
               <div class='or_in_choose'>Or Choose</div>
               <img src='../../../users/background_images/1.jpg' class='display_example_img'>
               <img src='../../../users/background_images/2.jpg' class='display_example_img'>
               <img src='../../../users/background_images/3.jpg' class='display_example_img'>
               <img src='../../../users/background_images/4.jpg' class='display_example_img'>
               <img src='../../../users/background_images/5.jpg' class='display_example_img'><br>
               <img src='../../../users/background_images/6.jpg' class='display_example_img'>
               <img src='../../../users/background_images/7.jpg' class='display_example_img'>
               <img src='../../../users/background_images/8.jpg' class='display_example_img'>
               <img src='../../../users/background_images/9.jpg' class='display_example_img'>
               <img src='../../../users/background_images/10.jpg' class='display_example_img'>
          	 
          </div>
     </div>
     <INPUT TYPE='FILE' NAME='img'>

     <div class='row_of_items_in_general' style='text-align:center;height:30px;margin-top:10px;float:left;margin-bottom:10px;'>
                       <input type='password' name='pass'  placeholder='Password' class='input_of_security' id='password' maxlength='50'> 
                                        <input type='password' name='pin' maxlength='6' class='input_of_security' id='pin' placeholder='Pin'>
     </div>
     

      <div class='box_of_option_for_setting' >
      
       <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='display.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save' >
  </div>
</form>

</div>
<!-- <script type='text/javascript' src='../aa_need/javascript/check_display.js'></script> -->
</body>
</html>







