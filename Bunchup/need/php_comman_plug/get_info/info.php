<?php
// this below is variable created to make global and then change them

                                $user_no;
                                $user_password;
                                $user_id;
                                $user_pin;
                                $user_db_name;
                                $user_name;
                                $user_email;
                                $user_phone;
                                $user_dob_y;
                                $user_dob_m;
                                $user_dob_d;
                                $user_gender;
                                $user_country;
                                $user_question;
                                $user_answer;
                                $user_home_town;
                                $user_birth_town;
                                $user_school;
                                $user_work;
                                $user_p_picture;
                                $user_online;

// this is a var to show or not




                                $user_nick_name;
                                $user_about;
                                $user_work;
                                $user_relationship_with;
                                $user_hobby;



                                $allow_friend_request;
                                $allow_follow_request;
                                $allow_question;

                                 $share_dob_with;
                                 $share_birth_with;
                                 $share_home_with; 
                                 $share_relation_with;
                                 $share_school_with; 
                                 $share_collage_with;
                                 $share_nick_name_with;
                                 $share_work_with;	
                                 $share_hobby_with;
								 
								 $fb_addres;
								 $twitter_addres;
								 $askfm_addres;

                       function user_cam_im()
                         {           // this if and else statement is for safty which should not be removed 
                                  if(isset($_SESSION['bunchup_id']))
                                           {
     
                                           }
                                  else
                                        {
                                               session_start();
                                        }

                                 global $db_name;
                                
                                 if(isset($_POST['id']))// if post have come and match the result then check
                                        {
                                                    $id=$_POST['id'];
                                                    $password=$_POST['password'];
													$password_md=md5(base64_encode($password));
                                                    mysql_select_db($db_name);

                                                    $query=mysql_query("SELECT * FROM users where id='$id' and password='$password_md' ");
                                                    $no_of_result=mysql_num_rows($query);

                                                    if($no_of_result == 1) // if post have come then do that have result if yes then set session of id
                                                       {
													     $get_once=mysql_fetch_array($query);
														 $user_no_s_no=$get_once['user_no'];
														  $user_db_name_s_db=$get_once['db_name'];
														 
                                                         $_SESSION['bunchup_id']=$id;
                                                         $_SESSION['bunchup_pass']=$password;
														  $_SESSION['bunchup_user_no']=$user_no_s_no;
														  $_SESSION['bunchup_user_db_name']=$user_db_name_s_db;
                  
                                                         start_bunchup($id); // this is a function
                                                      } 
                                                    else
                                                    {
                                                        $query=mysql_query("SELECT * FROM users where email='$id' and password='$password_md' ");
                                                        $no_of_result=mysql_num_rows($query);
                                                        if($no_of_result == 1)
                                                        {
                                                          $get_once=mysql_fetch_array($query);
                                                          $id_n=$get_once['id'];
                                                          $password=$_POST['password'];
														  $user_no_s_no=$get_once['user_no'];
														  $user_db_name_s_db=$get_once['db_name'];

                                                          $_SESSION['bunchup_id']=$id_n;
                                                          $_SESSION['bunchup_pass']=$password;
														  $_SESSION['bunchup_user_no']=$user_no_s_no;
														  $_SESSION['bunchup_user_db_name']=$user_db_name_s_db;

                  
                                                         start_bunchup($id_n);
                                                        }
                                                  
                                                      else// if post is wrong the  send back to index page with error 
                                                        {
                                                              header("location:../index.php?error=1");
                                                        }
                                                    }
                                                     

                                       }

                               else if(isset($_SESSION['bunchup_id'])) // if the session have started
                                   {    
                                                     $id=$_SESSION['bunchup_id'];
                                                     $password=$_SESSION['bunchup_pass'];
													 $password_md=md5(base64_encode($_SESSION['bunchup_pass']));;
                                                      mysql_select_db($db_name);

                                                     $query=mysql_query("SELECT * FROM users where id='$id' and password='$password_md' ");
                                                     $no_of_result=mysql_num_rows($query);

                                                 if($no_of_result == 1) // if post have come then do that have result if yes then set session of id
                                                              {
                                                               start_bunchup($id);
                                                              } 
                                                        else// if post is wrong the  send back to index page with error 
                                                             {
                                                               session_start();
                                                                session_destroy();
                                                                 header("location:../index.php?error=1");

                                                             }
                 
                                  }
                                  /*
                                        if post come do if
                                        if session come do else if 
                                        if noting come do else
                                  */
                              else
                                  { header("location:../index.php?error=1");}

                           }
               user_cam_im();// this is above function which work first

// this function is to bring all the information for this page after every thing
                             function start_bunchup($in)
                                        { 

                                          global $db_name, $user_no,$user_name,$_user_in,$user_email,$user_phone,$user_dob_y,$user_dob_y,$user_dob_m,$user_dob_d,$user_gender,$user_country,
                                           $user_home_town,$user_birth_town,$user_school,$user_collage,$user_work,$user_p_picture,$user_online;

                                            global $user_nick_name ,$user_about,$user_work,$user_relationship_with,$user_hobby;

                                           global $user_question ,$user_id, $user_answer , $user_pin ,$user_db_name, $user_password;
                                           global $allow_friend_request,$allow_follow_request,$allow_question;
  
                                           global   $share_dob_with , $share_birth_with , $share_home_with , $share_relation_with , $share_school_with , $share_collage_with , 
                                           $share_nick_name_with , $share_work_with , $share_hobby_with , $fb_addres , $twitter_addres , $askfm_addres;

                                           mysql_select_db($db_name);
                                           $code="select * from users where id='$in' ";
                                          $_GETIN=mysql_fetch_array(mysql_query($code));


  
                                              $user_no=$_GETIN['user_no'];
                                              $user_name=$_GETIN['name'];
                                              $user_id=$in;
                                              $user_password=$_GETIN['password'];
                                              $user_pin=$_GETIN['pin'];
                                              $user_db_name=$_GETIN['db_name'];
                                              $user_email=$_GETIN['email'];
                                              $user_phone=$_GETIN['phone'];
                                              $user_dob_y=$_GETIN['birth_year'];
                                              $user_dob_m=$_GETIN['birth_month'];
                                              $user_dob_d=$_GETIN['birth_day'];
                                              $user_gender=$_GETIN['gender'];
                                              $user_country=$_GETIN['country'];
                                              $user_question=$_GETIN['question'];
                                              $user_answer=$_GETIN['answer'];
                                              $user_home_town=$_GETIN['home_town'];
                                              $user_birth_town=$_GETIN['birth_town'];
                                              $user_school=$_GETIN['school_name'];
                                              $user_collage=$_GETIN['collage_name'];
                                              $user_p_picture=$_GETIN['Profile_picture'];
                                              $user_online=$_GETIN['online'];
											  
											  if($user_p_picture == "")
											    {
												 $user_p_picture='defalt.jpg';
												}



                                              $user_nick_name=$_GETIN['nick_name'];
                                              $user_about=$_GETIN['about'];
                                              $user_work=$_GETIN['work'];
                                              $user_relationship_with=$_GETIN['relationship_with'];
                                              $user_hobby=$_GETIN['hobby'];


                                              $allow_friend_request=$_GETIN['allow_friend_request'];
                                              $allow_follow_request=$_GETIN['allow_follow_request'];
                                              $allow_question=$_GETIN['allow_question'];

// note          0 is default    in bellow so 0 is for universal   1 is for friends of friends 2 is friends 3 is for friends and 4 is for both friends and follower

                                               $share_dob_with=$_GETIN['dob_allowed_to'];
                                               $share_birth_with=$_GETIN['birth_allowed_to'];
                                               $share_home_with=$_GETIN['home_allowed_to']; 
                                               $share_relation_with=$_GETIN['relation_allowed_to'];
                                               $share_school_with=$_GETIN['school_allowed_to']; 
                                               $share_collage_with=$_GETIN['collage_allowed_to'];
                                               $share_nick_name_with=$_GETIN['nick_name_allowed_to'];
                                               $share_work_with=$_GETIN['work_allowed_to'];	
                                               $share_hobby_with=$_GETIN['hobby_allowed_to'];
											   
											
											   
											    $fb_addres=$_GETIN['fb_addres'];
								                $twitter_addres=$_GETIN['twitter_addres'];
								                $askfm_addres=$_GETIN['askfm_addres'];
                                   }
?>