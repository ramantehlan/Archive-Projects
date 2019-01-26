<link rel='stylesheet' href='../aa_need/css/main.css'>
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
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Bg color</div>
          <div class='value_of_row'>
          	 <div class='value_of_value_row' style='width:50%;'>rgb(<?php echo $bg_color;  ?>)  </div>
          	 <div class='bg_color_of_user_show' style='background-color:rgb(<?php echo $bg_color; ?>)'></div>
          </div>
     </div>
       <div class='row_of_items_in_general' 
                 <?php 
                 if($bg_img == "")
                {
                  echo "No Image";
                }
                else
                {
                echo "style='height:200px;'";
                 } 
                  ?>
            >
          <div class='title_of_row' style='height:100%;'>Bg Img</div>
          <div class='value_of_row' style='height:100%;'>
           <?php
                if($bg_img == '')
                {
                  echo "No Image";
                }
                else
                {
                      echo "<img src='../../../users/background_images/$bg_img' class='display_pic_of_user'>";
                }
           ?>
                
          	 
          </div>
     </div>

     

      <div class='box_of_option_for_setting' >
      <div class='information_about_showing_information'>
       
       </div>
      <a href='display_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>


</div>









