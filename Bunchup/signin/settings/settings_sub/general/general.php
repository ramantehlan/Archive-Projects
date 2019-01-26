<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>General information</b> carries that information which is mandatory to fill.<br> <br>
                                                        
                                                      </div>
                                               </div>

<h2>General Information</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>

<div class='setting_box'>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Name</div>
          <div class='value_of_row'>
          	 <div class='value_of_value_row'><?php echo $user_name; ?></div>

             
          </div>

     </div>
 
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Date of Birth</div>
          <?php 

                 switch($user_dob_m)
                 {
                 	case '1':
                          $month='January';
                 	break;
                 	case '2':
                          $month='February';
                 	break;
                 	case '3' :
                           $month='March';
                 	break;
                 	case '4' :
                         $month='April';
                 	break;
                 	case '5' :
                            $month='May';
                 	break;
                 	case '6':
                            $month='June';
                 	break;
                 	case '7':
                         $month='July';
                 	break;
                 	case '8':
                         $month='August';
                 	break;
                 	case '9':
                              $month='September';
                 	break;
                 	case '10':
                          $month='October';
                 	break;
                 	case '11':
                          $month='November';
                 	break;
                 	case '12':
                             $month='December';
                 	break;
                 }
          ?>
          <div class='value_of_row'
          ><div class='value_of_value_row'><?php echo "$user_dob_d-$month-$user_dob_y" ?> </div>

          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Gender</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_gender; ?> </div>

             
          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Country</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_country; ?></div>

              
         </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Home Town</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_home_town; ?></div>

          
         </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Birth Town</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_birth_town; ?></div>

          
         </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>School</div>
          <div class='value_of_row'>
          	<div class='value_of_value_row'><?php echo $user_school; ?></div>

         </div>
     </div> 


   <div class='box_of_option_for_setting'>
      <div class='information_about_showing_information'>
       
       </div>
      <a href='general_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>



</div>









