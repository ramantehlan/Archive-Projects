

<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Change Advance Information</b> let you change your Advance information.<br> <br>
                                                      
                                                      </div>
                                               </div>

<h2>Change Advance Information</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>
<style>
.value_of_row{padding-left:0%;
           width:83%;
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
     default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
       break;
   }
  }
?>
<div class='setting_box'>
   <form method='post' action='advance_change_upload.php'>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Nick Name</div>
          <div class='value_of_row'>
           
            <input type='nick name' placeholder='What else you call yourself' value='<?php echo $user_nick_name; ?>'
             class='input_of_general' id='nick_name' maxlength='20' name='nick_name'>
          </div>
                              
     </div>
    
      <div class='row_of_items_in_general' style='height:50px;'>
          <div class='title_of_row'>About</div>
          <div class='value_of_row'>
           
           <textarea  placeholder='Write about yourself'  class='input_of_general' id='about' maxlength='250' name='about' style='height:100%
             ;resize:none;'><?php echo $user_about; ?></textarea></div>
                                    
     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>Work</div>
          <div class='value_of_row'>
           <input type='work' placeholder='Where do your work' value='<?php echo $user_work; ?>' class='input_of_general' id='work' maxlength='30' name='work'></div>
                                    
     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>collage</div>
          <div class='value_of_row'>
           
           <input type='collage' placeholder='Your Collange name' value='<?php echo $user_collage; ?>' class='input_of_general' id='collage' maxlength='30' name='collage'></div>
                                    
     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>Relationship</div>
          <div class='value_of_row'>
           
          <input type='relation' placeholder='Relationship with' value='<?php echo $user_relationship_with; ?>' class='input_of_general' id='relationship' maxlength='30' name='relationship'></div>
                                    
     </div>

       <div class='row_of_items_in_general'>
          <div class='title_of_row'>your Hobby</div>
          <div class='value_of_row'>
           
           <input type='hobby' placeholder="What's your hobby"  value='<?php echo $user_hobby; ?>' class='input_of_general' id='hobby' maxlength='30' name='hobby'></div>
                                    
     </div>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Facebook Address</div>
          <div class='value_of_row'>
           
           <input type='hobby' placeholder="Facebook url"  value='<?php echo $fb_addres; ?>' class='input_of_general' id='fb' maxlength='30' name='facebook_url'></div>
                                    
     </div>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>Twitter Address</div>
          <div class='value_of_row'>
           
           <input type='hobby' placeholder="Twitter url"  value='<?php echo $twitter_addres; ?>' class='input_of_general' id='twitter' maxlength='30' name='twitter_url'></div>
                                    
     </div>
      <div class='row_of_items_in_general'>
          <div class='title_of_row'>ask.fm Address</div>
          <div class='value_of_row'>
           
           <input type='hobby' placeholder="Ask.fm url"  value='<?php echo $askfm_addres; ?>' class='input_of_general' id='ask_fm' maxlength='30' name='ask_fm_url'></div>
                                    
     </div>

     
    
    

    
        <div class='row_of_items_in_general' style='text-align:center;height:30px;margin-top:10px;float:left;margin-bottom:10px;'>
                       <input type='password' name='pass'  placeholder='Password' class='input_of_security' id='password' maxlength='50'> 
                                        <input type='password' name='pin' maxlength='6' class='input_of_security' id='pin' placeholder='Pin'>
     </div>
      
 

   <div class='box_of_option_for_setting'>
    <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='advance.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save'>
    </form>
  </div>




</div>
<script type='text/javascript' src='../aa_need/javascript/check_advance.js'></script>








