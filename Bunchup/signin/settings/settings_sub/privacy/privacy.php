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

<h2>Privacy settings</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>
<style>
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

<div class='setting_box'>
    
   

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Date of birth to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'>
          	 <?php
                
               switch($share_dob_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Birth place to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'>
          	 	 <?php
                
               switch($share_birth_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

         <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Home place to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'>	 <?php
                
               switch($share_home_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Relation to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'>	 <?php
                
               switch($share_relation_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show School name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'> <?php
                
               switch($share_school_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Collage name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'><?php
                
               switch($share_collage_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Nick Name to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'>	 <?php
                
               switch($share_nick_name_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Work to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'> <?php
                
               switch($share_work_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

        <div class='row_of_items_in_general added_feature_for_privacy_to_row' >
          <div class='title_of_row added_feature_for_privacy_to_title'>Show Hobby to</div>
          <div class='value_of_row added_feature_for_privacy_to_value'>
          	 <div class='value_of_value_row'> <?php
                
               switch($share_hobby_with)
               {
               	case "0":
                         echo "Everyone";
               	break;
               	case "1":
                          echo "Friends of Friends";
               	 break;
               	 case "2":
                              echo "Friends";
                 break;
                 case "3":
                              echo "Followers";
                 break;
                 case "4":
                              echo "Friends and Followers";
                 break;

               }

          	  

          	  ?></div>

             
          </div>

     </div>

  


      


   <div class='box_of_option_for_setting' style='margin-top:10px;'>
      <div class='information_about_showing_information'>
       
       </div>
      <a href='privacy_change.php'><input type='button' class='Edit_option' value='Edit'></a>
  </div>

</div>









