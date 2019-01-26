

<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>
<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Privacy settings</b> allow your to costumize your privacy.<br> <br>
                                                        
                                                      </div>
                                               </div>

<h2>Change General Information</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>
<style>
.value_of_row{padding-left:0%;
           width:83%;}

.added_feature_for_privacy_to_row{
                      width:48%;
                      float:left;
                      margin-left:2%;
                      margin-top:7px;
}

.added_feature_for_privacy_to_title{
                                 width:49%;
                                    padding-left:1%;
}

.added_feature_for_privacy_to_value{
                                  width:48%;
                                  padding-left:2%;
}


</style>
<?php
if(isset($_GET['error']))
{
 $error=$_GET['error'];
   switch ($error) {
      case 'wrong_pass_pin':
                       echo "<div class='error_of_the_page'>Password and Pin error! Password and Pin combination typed by you was wrong please type again.</div> "; 
       break;
        case 'wrong_dob':
                       echo "<div class='error_of_the_page'>Age error! date of birth filled by your says that you are under 13, Please fill a valid date of birth.</div> "; 
       break;
     default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
       break;
   }
  }
?>
<div class='setting_box'>
   <form method='post' action='privacy_check_upload.php'>


    

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Date of birth to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_dob_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_dob_with'>
                                   <option value='<?php echo $share_dob_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Birth place to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_birth_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_birth_with'>
                                   <option value='<?php echo $share_birth_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Home place to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_home_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_home_with'>
                                   <option value='<?php echo $share_home_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Relation to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_relation_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_relation_with'>
                                   <option value='<?php echo $share_relation_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show School name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_school_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_school_with'>
                                   <option value='<?php echo $share_school_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Collage name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_collage_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_collage_with'>
                                   <option value='<?php echo $share_collage_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Nick Name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_nick_name_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_nick_name_with'>
                                   <option value='<?php echo $share_nick_name_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Work to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_work_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_work_with'>
                                   <option value='<?php echo $share_work_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       <div class='row_of_items_in_general added_feature_for_privacy_to_row'>
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Hobby to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
                          <?php
                
               switch($share_hobby_with)
               {
                case "0":
                         $email_with= "Everyone";
                break;
                case "1":
                          $email_with="Friends of Friends";
                 break;
                 case "2":
                            $email_with="Friends";
                 break;
                 case "3":
                            $email_with="Followers";
                 break;
                 case "4":
                            $email_with= "Friends and Followers";
                 break;

               }

              

              ?>
                         <select class='input_of_general' name='share_hobby_with'>
                                   <option value='<?php echo $share_hobby_with;?>' selected><?php echo $email_with; ?></option>
                                   <option value='0'>Everyone</option>
                                   <option value='1'>Friends of Friends</option>
                                   <option value='2'>Friends</option>
                                   <option value='3'>Followers</option>
                                   <option value='4'>Friends and Followers</option>
                         </select>                
                    
          </div>
     </div>

       

    

      <div class='row_of_items_in_general' style='text-align:center;height:30px;margin-top:15px;float:left;margin-bottom:10px;'>
                       <input type='password' name='pass'  placeholder='Password' class='input_of_security' id='password' maxlength='50'> 
                                        <input type='password' name='pin' maxlength='6' class='input_of_security' id='pin' placeholder='Pin'>
     </div>

   <div class='box_of_option_for_setting'>
    <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='privacy.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save'>
    </form>
  </div>




</div>
<script type='text/javascript' src='../aa_need/javascript/check_privacy.js'></script>








