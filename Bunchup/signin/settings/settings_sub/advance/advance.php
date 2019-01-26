<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Advance information</b> carries that information which is not mandatory to fill.<br> <br>
                                                        
                                                      </div>
                                               </div>

<h2>Advance Information</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Nick Name</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'><?php 
              if($user_nick_name=='')
            {
                  echo 'Not provided';
            } 
            else
            {
              echo $user_nick_name;
            } 
            ?></div>

            
     </div>
   </div>
     <div class='row_of_items_in_general' style='height:50px;'>
          <div class='title_of_row' >About</div>
          <div class='value_of_row'>
            <div class='value_of_value_row_about'><?php    
             if($user_about=='')
            {
                  echo 'Not provided';
            } 
            else
            {
              echo $user_about;
            }
             ?></div>

            
     </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Work</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'><?php 
                if($user_work =='')
            {
                  echo 'Not provided';
            } 
            else
            {
              echo $user_work;
            }
              ?></div>

             </div>
     </div>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>collage</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'><?php 
              if($user_collage =='')
            {
                  echo 'Not provided';
            } 
            else
            {
              echo $user_collage;
            }
             ?></div>

            
         </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Relationship</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'><?php

             if($user_relationship_with == "")
              {
                echo 'Not in relationship';
          }
             else
             {
              echo $user_relationship_with;
             }
             ?></div>

             </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>your Hobby</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'>
              <?php 
              if($user_hobby=='')
              {echo 'Not provided';
          }  
              else
              {
                echo $user_hobby;
              }
              ?></div>

         
             </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Facebook Address</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'>
              <?php 
              if($fb_addres=='')
              {echo 'Not provided';
          }  
              else
              {
                echo $fb_addres;
              }
              ?></div>

         
             </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Twitter Address</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'>
              <?php 
              if($twitter_addres=='')
              {echo 'Not provided';
          }  
              else
              {
                echo $twitter_addres;
              }
              ?></div>

         
             </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>ask.fm Address</div>
          <div class='value_of_row'>
            <div class='value_of_value_row'>
              <?php 
              if($askfm_addres=='')
              {echo 'Not provided';
          }  
              else
              {
                echo $askfm_addres;
              }
              ?></div>

         
             </div>
     </div>

      

  

   <div class='box_of_option_for_setting'>
      <a href='advance_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>



</div>









