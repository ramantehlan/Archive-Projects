<!DOCTYPE HTML>
<html>
   <head>
        <title>World #1 social group</title>

        <!-- this is css for the index -->
        <link rel='stylesheet' href='signup_need/css/upload_information.css'>
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

<div class='center_configration_body'>
           <div class='first_row'>  
                    <div class='head_of_row'>Configration</div>
                    <div class='body_of_row'>
                           <div class='content_of_body'>
                             <img src='../need/images/small/load/1.gif' class='loading_img'><br>
                                <?php
include "../need/php_comman_plug/connect/connect.php";
session_start();

//this check that whether name is coming or not if not the do else
 if(isset($_POST['name']))
 {
                        // this is the post coming from the signup page
                             $name=$_POST['name'];
                             $id=$_POST['id'];
                             $email=$_POST['email'];
                             $password=md5(base64_encode($_POST['pass']));
                             $pin=md5(base64_encode($_POST['pin']));
                             $date_of_birth=$_POST['birthday_date'];
                             $month_of_birth=$_POST['birthday_month'];
                             $year_of_birth=$_POST['birthday_year'];
                             $gender=$_POST['gender'];
                             $country=$_POST['country'];
                             $question=$_POST['question'];
                             $answer=$_POST['answer'];
                             $hometown=$_POST['hometown'];
                             $birthtown=$_POST['birthtown'];
                             $school=$_POST['school'];
                             $p_pic=$_FILES["profile"];



                            // this is when some error come and we need to location signup page again so set it as session
                             $_SESSION['name']=$name;
                             $_SESSION['id']=$id;
                             $_SESSION['email']=$email;
                             $_SESSION['pass']=$_POST['pass'];
                             $_SESSION['pin']=$pin;
                             $_SESSION['birthday_date']=$date_of_birth;
                             $_SESSION['birthday_month']=$month_of_birth;
                             $_SESSION['birthday_year']=$year_of_birth;
                             $_SESSION['gender']=$gender;
                             $_SESSION['country']=$country;




                  //// this function is to upload the information of the user when every thing is fine
                    function upload_a_user($image_name)
                     { 
                       session_destroy();
 
                               global $db_name,$t_year,$t_month,$pin,$t_date,$name,$id,$email,$password,$date_of_birth,$month_of_birth,$year_of_birth,$gender,$country,$question,$answer,
                               $hometown,$birthtown,$school,$collage,$user_search_url;

                               mysql_select_db($db_name);
                               $no=mysql_num_rows(mysql_query("select * from users where id='$id' "));

                                 if($no >= 1)
                                     {
                                               session_start();
                                               $_SESSION['bunchup_id']=$_POST['id'];
                                               $_SESSION['bunchup_pass']=$_POST['pass'];
                        
                          mysql_select_db($db_name);
                       $g=mysql_fetch_array(mysql_query("select * from users where id='$id'"));
                        $_SESSION['bunchup_user_no']=$g['user_no'];
                         
                                             header('location:../signin/index.php');
                                      }
                                else
                                   {
                                                  // $user_db_name is code to produce the db name of this user
                                          $user_db_name= "Z_U_" . rand(0,10000000000000) . '_' . $date_of_birth .  $month_of_birth . $year_of_birth . '_' .rand(0,10000000000000000) ; 
                                              
                                              //  $enter_value_of_user is code to enter in the db users of our site about user
                                            $enter_value_of_user="INSERT INTO `users` (`user_no`, `name`, `id`, `password`, `pin`,`db_name` ,`phone`, `email`, `birth_year`, `birth_month`, 
                                              `birth_day`, `join_year`, `join_month`, `join_date`, `gender`, `country`, `question`, `answer`, `home_town`, `birth_town`, `school_name`, 
                                              `collage_name`,  `Profile_picture`, `online`,`nick_name`, `about`, `work`,`relationship_with`, `hobby`, `allow_friend_request`,
                                              `allow_follow_request`,`allow_question`,  `dob_allowed_to`	, `birth_allowed_to` ,`home_allowed_to` , `relation_allowed_to`	, 
                                              `school_allowed_to` , `collage_allowed_to` ,	`nick_name_allowed_to` ,	`work_allowed_to` ,	`hobby_allowed_to` , `fb_addres` , `twitter_addres` , `askfm_addres`)

                                             VALUES (NULL, '$name', '$id', '$password', '$pin' , '$user_db_name' , '' ,'$email', '$year_of_birth', '$month_of_birth', '$date_of_birth',
                                              '$t_year', '$t_month', '$t_date', '$gender', '$country', '$question', '$answer', '$hometown' , '$birthtown', '$school', '','$image_name',
                                               '' , '','','','','','1','1','1' ,'0','0','0','0','0','0','0','0','0','','','' );";

                                              mysql_query($enter_value_of_user) or exit (mysql_error()); 

                                              mysql_query("create database $user_db_name") or exit (mysql_error()); // this is to create the db as name given above
                                              mysql_select_db($user_db_name) or exit (mysql_error());


                                              $code_for_following="CREATE TABLE IF NOT EXISTS `following` (
                                                                   `no` int(11) NOT NULL AUTO_INCREMENT,
                                                                   `following_no` int(255) NOT NULL,
                                                                   `date_of_following` int(2) NOT NULL,
                                                                   `month_of_following` int(2) NOT NULL,
                                                                   `year_of_following` int(4) NOT NULL,
                                                                   PRIMARY KEY (`no`)
                                                                   ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";

                                              $code_for_followers="CREATE TABLE IF NOT EXISTS `followers` (
                                                                  `no` int(11) NOT NULL AUTO_INCREMENT, 
                                                                  `followers_no` int(255) NOT NULL,
                                                                  `date_of_following` int(2) NOT NULL,
                                                                  `month_of_following` int(2) NOT NULL,
                                                                  `year_of_following` int(4) NOT NULL,
                                                                  PRIMARY KEY (`no`)
                                                                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";

                                             $code_for_friends="CREATE TABLE IF NOT EXISTS `friends` (
                                                                `no` int(11) NOT NULL AUTO_INCREMENT,
                                                                `friend_no` int(255) NOT NULL,
                                                                `date_of_friendship` int(2) NOT NULL,
                                                                `month_of_friendship` int(2) NOT NULL,
                                                                `year_of_friendship` int(4) NOT NULL,
																`rate` int(11) NOT NULL,
                                                                 PRIMARY KEY (`no`)
                                                                ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";


                                             $code_for_friends_request="CREATE TABLE IF NOT EXISTS `friends_requests` (
                                                                       `no` int(11) NOT NULL AUTO_INCREMENT,
                                                                       `sender_no` int(255) NOT NULL,
                                                                       `date_of_send` int(2) NOT NULL,
                                                                       `month_of_send` int(2) NOT NULL,
                                                                       `year_of_send` int(4) NOT NULL,
                                                                       `time_of_send` time NOT NULL,
                                                                        PRIMARY KEY (`no`)
                                                                ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

                                             $code_for_friends_request_sent="CREATE TABLE IF NOT EXISTS `friend_requests_sent` (
                                                                             `no` int(11) NOT NULL AUTO_INCREMENT,
                                                                             `reciver_no` int(255) NOT NULL,
                                                                             `date_of_send` int(2) NOT NULL,
                                                                             `month_of_send` int(2) NOT NULL,
                                                                             `yeat_of_send` int(4) NOT NULL,
                                                                             `time_of_send` time NOT NULL,
                                                                               PRIMARY KEY (`no`)
                                                                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
													
											$code_for_status_update_table="CREATE TABLE IF NOT EXISTS `status_update` (
                                                                             `no` int(255) NOT NULL AUTO_INCREMENT,
                                                                             `status` text NOT NULL,
                                                                             `tb_name` varchar(50) NOT NULL,
                                                                             `date_of_update` int(2) NOT NULL,
                                                                             `month_of_update` int(2) NOT NULL,
                                                                             `year_of_update` int(4) NOT NULL,
                                                                             `time` varchar(20) NOT NULL,
                                                                              PRIMARY KEY (`no`)
                                                                                 ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

                                                mysql_query($code_for_following);
                                                mysql_query($code_for_followers);
                                                mysql_query($code_for_friends);
                                                mysql_query($code_for_friends_request);
                                                mysql_query($code_for_friends_request_sent);
												mysql_query($code_for_status_update_table);


                                              
                                           echo  "Done! now you can use this site. it will take few second to Configer.";
                                           session_start();
                                           $_SESSION['bunchup_id']=$id;
                                           $_SESSION['bunchup_pass']=$_POST['pass'];
    									   $_SESSION['bunchup_user_db_name']=$user_db_name;
										     global $db_name;
									        mysql_select_db($db_name);
										   $g=mysql_fetch_array(mysql_query("select * from users where id='$id'"));
										    $_SESSION['bunchup_user_no']=$g['user_no'];
                         
                                           header('location:../signin/index.php');

                             }// this is end of else statement

                         }// this is end of function upload_a_user


          $name_of_random_number=rand(0,100000000000000) . '_' . rand(0,100000000000000) . rand(0,100000000000000) . '_' . $date_of_birth . '_' . $month_of_birth . '_' . $year_of_birth ; 
          $file_path="../signin/users/users_uploded_photo/";
          $file_saveing_path=$file_path . $name_of_random_number . ".jpg";
           
		   

           mysql_select_db($db_name);
                             // this if statement check that profile pic is nill or nor 
                            if($p_pic['name'] =='')
                                  {
                                     upload_a_user('');
                                  }
                          else
                                {
                                          $p_type=$p_pic['type'];
                                           if($p_type == 'image/png' || $p_type == 'image/jpg' || $p_type == 'image/jpeg' || $p_type == 'image/gif' )
                                                           {
                                                              if(($p_pic['size'] / 1024) >= 2000)
                                                                        {    
                                                                                 header('location:index.php?error_in_signup=bad_image');
                                                                        }
  
                                                             else if(file_exists($file_saveing_path))
                                                                       {   
                                                                                $added_name='_' . 'g' . '_' . rand(0,100) . ".jpg";
                                                                               $file_saveing_path = $file_path . $name_of_random_number . $added_name;
                                                                               move_uploaded_file($p_pic['tmp_name'],$file_saveing_path);
                                                        
                                                                                upload_a_user($name_of_random_number . $added_name);
                                                                          
                                                                         }

                                                               else
                                                                        { // here we will upload data but with photo
                                                                          
                                                                               move_uploaded_file($p_pic['tmp_name'],$file_saveing_path);
                                                                              upload_a_user($name_of_random_number . '.jpg');
                                                                 
                                                                         }

                                                         }
                                            else 
                                                        { 
                                                                     header('location:index.php?error_in_signup=bad_image');                    
                                                        }
                                  }
  
              
            
      }
  else
  {   
   
    header('location:index.php');
  }


 
         



?>

                           </div>
                    </div>
            </div>  



</div>
  <script type='text/javascript' src='signup_need/javascript/click_photo.js'></script>
 </body>
</html>