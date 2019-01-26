
<?PHP
include '../need/php_comman_plug/connect/connect.php';
  session_start();
  if(isset($_SESSION['bunchup_id']))
             {
                    header("location:../signin/index.php");
             }
     else 
     {
      /*do nothing */
     }

  if(isset($_POST['name']))
{      

        $name=$_POST['name'];
        $id=$_POST['id'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $pin=$_POST['pin'];
        $date_of_birth=$_POST['birthday_date'];
        $month_of_birth=$_POST['birthday_month'];
        $year_of_birth=$_POST['birthday_year'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];


  // check_id_mail  check  that do id typed by user exist or not    
       function check_id_mail()
       {
          global $id , $email , $db_name;
        
                   mysql_select_db($db_name) or exit(mysql_error_in_signup());
                   $query="select * from users where id='$id'";
                   $no=mysql_num_rows(mysql_query($query));
 
                   $query_b="select * from users where email='$email'";
                   $no_b=mysql_num_rows(mysql_query($query_b));

          if($no >= 1 and $no_b >=1)
               {
                     header("location:../index.php?error_in_signup=2");
                }

          else if($no >= 1)
              {
                     header("location:../index.php?error_in_signup=3");
              }

           else if($no_b >= 1)
              {
                    header("location:../index.php?error_in_signup=4");
              }

      }
         
         check_id_mail();

    // this function check_date_of_birth check the differene of todays date and date of birth of user if it is less then 13 then visiter cant be a user
         function check_date_of_birth()
        {
                global $date_of_birth , $month_of_birth ,$year_of_birth;
                        // indicate the start date here

                $t_date=date('d');
                $t_month=date('m');
                $t_year=date('20y');

                          $startdate = "$year_of_birth-$month_of_birth-$date_of_birth";
                          $enddate = "$t_year-$t_month-$t_date"; 

                           $timestamp_start = strtotime($startdate);
                           $timestamp_end = strtotime($enddate);
                           $difference = abs($timestamp_end - $timestamp_start); // that's it!
                           $years = floor($difference/(60*60*24*365));

                            // Years, months and days version
                               $years = floor($difference / (365*60*60*24));
                               

                               if($years >= '13')
                                  {
                                    
                                  }
                              else
                                  {
                                         header("location:../index.php?error_in_signup=5");
                                   }


         }

        check_date_of_birth();

}

else if(isset($_SESSION['name']))
{

         $name=$_SESSION['name'];
        $id=$_SESSION['id'];
        $email=$_SESSION['email'];
        $password=$_SESSION['pass'];
        $pin=$_SESSION['pin'];
        $date_of_birth=$_SESSION['birthday_date'];
        $month_of_birth=$_SESSION['birthday_month'];
        $year_of_birth=$_SESSION['birthday_year'];
        $gender=$_SESSION['gender'];
        $country=$_SESSION['country'];
        
}
else
{
  header("location:../index.php");
}


?>
<!DOCTYPE HTML>
<html>
   <head>
        <title>Bunch up</title>

        <!-- this is css for the index -->
         <link rel='stylesheet' href='signup_need/css/signup.css'>
         <link rel='stylesheet' href='../need/css/comman/comman.css'>

        <!-- this is to background -->
        <style>
       
        </style>

        <!-- this is the jquery -->

        <script type='text/javascript' src='../need/javascript/jquery/jquery.js'></script>

        <!-- This is meta tag -->
        <meta name='description' content='Bunchup let you bunch up your social networking in a very cool and new way, it is very unique and secure'>
        <meta name='keyword' content='social networking , Bunchup , Bunchup.com , cool and new way , unique , bunch'>
        <meta name='sumary' content='Bunchup is a social networking site, which is free to use, which is new , cool , unique , fast , secure and a never ending trend.'>
        <meta name='author' content='Bunchup'>
        <meta charset='utf-8'>
        <meta name='language' content='English'>
   </head>
   <body> 
      <?php 

 include 'signup_need/php/photoshoot.php';
 ?>
<div class='body'>
<?php 
      if(isset($_GET['error_in_signup']))
         {     
                 $error_in_signup=$_GET['error_in_signup'];
                 switch($error_in_signup)
                   {
                          case 'bad_image':
                                echo "<div class='error_in_signup_box_on_top'>Photo error_in_signup! please fill form again. Photo uploded by you should not be more then 2000kb and should be in jpg, jpeg , png or gif format.
                             </div>";
                          break;
                          case 'bad_url':
                                echo "<div class='error_in_signup_box_on_top'>Url error_in_signup! url typed by you was already taken by someone. Please type a unique url.
                             </div>";
                          break;
                          default:
                                echo "<div class='error_in_signup_box_on_top'>Unknown error! some unknow error_in_signup have occered please fill the form again.
                               </div>";
                            break;
                  }

          }
      
      
?>

<div class='left_row security_row'>
            <div class='head_of_row'>
               Security
           </div>
           <Div class='body_of_row'>
                <div class='content_of_body'>
                   <form method='post' action='upload_information.php' enctype="multipart/form-data">
                    <input type='hidden' value='<?php echo $name; ?>' name='name'>
                    <input type='hidden' value='<?php echo $id ?>' name='id'>
                    <input type='hidden' value='<?php echo $email ?>' name='email'>
                    <input type='hidden' value='<?php echo $password ?>' name='pass'>
                    <input type='hidden' value='<?php echo $pin ?>' name='pin'>
                    <input type='hidden' value='<?php echo $date_of_birth ?>' name='birthday_date'>
                    <input type='hidden' value='<?php echo $month_of_birth ?>' name='birthday_month'>
                    <input type='hidden' value='<?php echo $year_of_birth ?>' name='birthday_year'>
                    <input type='hidden' value='<?php echo $gender ?>' name='gender'>
                    <input type='hidden' value='<?php echo $country ?>' name='country'>

                     <select type="question" id="question" class="input" name="question">
                                <option select="" value="">Select your security question</option>
                                <option value="What was your bast friend name when you were 10 year old">What is your best friend name.</option>
                               <option value="What is your mother home town">Where is your mother's home town.</option>
                               <option value="what is your hobby">what is your hobby.</option>
                               <option value="what game do you play">what game do you play.</option>
                               <option value="what do you want to do in your life">what do you want to be.</option>
                               <option value="what is your favrate food">what is your nick name at home.</option>
                      </select>
                      <input type="answer" id="answer" autocomplete='off' class="input inputp" placeholder="Answer" name="answer" maxlength='20'>
                      <input type='button' id='send_question' class='submit' value='Next'>
                       <div class='message_of_error_in_signup' id='security_error_in_signup'>
                                                
                                               </div>
                  

                </div>
           </div>
        </div>

        <div class='left_row life_row'>
            <div class='head_of_row'>
               Life style
           </div>
           <Div class='body_of_row'>
                 <div class='content_of_body'>
                           <input type="hometown" id="hometown" class="input inputp" placeholder="Home town name" name="hometown" >
                          <input type="birthtown" id="birthtown" class="input inputp" placeholder="Birth town name" name="birthtown">
                          <input type="school" id="school" class="input inputp" placeholder="School name" name="school">
                          <input type='button' id='send_life' class='submit' value='Next'>
                           <div class='message_of_error_in_signup' id='life_error_in_signup'>
                                                
                                               </div>
                </div>
           </div>
        </div>

        <div class='left_row profile_row'>
            <div class='head_of_row'>
               Profile
           </div>
           <Div class='body_of_row'>
                 <div class='content_of_body'>

                        
                          <div class='or' style='margin-top:10px;'>Profile Photo</div>
                         <span class='replaceimg'><img src='signup_need/images/profile/defalt.jpg' alt='default profile picture' class='default_user' id='pre_profile_pic'></span>
                         <input type='file'  class='input_img' id='img_file'  name='profile' >
                         <div class='or'>OR</div>
                         <input type='button' id='click_photo_div' value='Click Picture' class='submit' style='width:40%;margin-left:30%;'>
                         <input type='button' id='send_all' class='submit' value='Next' >
                         <div class='message_of_php_error_in_signup'></div>
                          <div class='message_of_error_in_signup' id='profile_error_in_signup'>
                                                
                                               </div>
                    </form>    
                </div> 
           </div> 
        </div>
        
      </div>
  </div>
    <script type='text/javascript' src='signup_need/javascript/click_photo.js'></script>
    <script type='text/javascript' src='signup_need/javascript/check_upload_info.js'></script>
  </body>
</html>

