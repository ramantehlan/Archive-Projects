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

<h2>Switch settings</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
   <style>
.title_of_row{width:25%;}

.value_of_row{width:71%;}


.tick_of_show_yes{float:left;
                    margin-left:2%;
}

.tick_of_show_not{float:left;
                 margin-left:2%;
}

   </style>

     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Friend requests allowed</div>
          <div class='value_of_row'>
          	 <div class='value_of_value_row'>
                            <div class='<?php if($allow_friend_request==1)
              {
                 echo 'tick_of_show_yes';
              } 
                else
                {
                 echo 'tick_of_show_not';
                }
              ?>'>
                           </div>
             </div>
          </div>

     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>Following requests allowed</div>
          <div class='value_of_row'>
             <div class='value_of_value_row'>   
              <div class='<?php if($allow_follow_request==1)
              {
                 echo 'tick_of_show_yes';
              } 
                else
                {
                 echo 'tick_of_show_not';
                }
              ?>'></div>
            </div>

             
          </div>

     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>Questions allowed</div>
          <div class='value_of_row'>
             <div class='value_of_value_row'>
                      <div class='<?php if($allow_question==1)
              {
                 echo 'tick_of_show_yes';
              } 
                else
                {
                 echo 'tick_of_show_not';
                }
              ?>'></div>
             </div>

             
          </div>

     </div>
 

   <div class='box_of_option_for_setting'>
      <div class='information_about_showing_information'>
       
       </div>
      <a href='switch_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>



</div>









