<?php


if(isset($_POST['no_of_search']))
{

$reciver_no=$_POST['no_of_search'];
$sender_no=$_POST['no_of_searcher'];

include "../../../../../need/php_comman_plug/connect/connect.php";

mysql_select_db($db_name);

$fetch_it=mysql_fetch_array(mysql_query("select * from users where user_no='$reciver_no'"));
$search_user_no=$fetch_it['user_no'];
$search_user_db_name=$fetch_it['db_name'];

$fetch_it_again=mysql_fetch_array(mysql_query("select * from users where user_no='$sender_no'"));
$user_no=$fetch_it_again['user_no'];
$user_db_name=$fetch_it_again['db_name'];



/*
remove it from my request recived 
and from the request send to searched user 

and add it to your friends 
and add it to search friends request


*/
                                mysql_select_db($user_db_name);

                                 $code_one=mysql_query("select * from friends where friend_no='$search_user_no'");
                                   $friend_or_not=mysql_num_rows($code_one);

                                
                                  if($friend_or_not >= 1)
                                  {
                                        echo "Friends";
                                  }
                                  else
                                  {
                                               mysql_select_db($user_db_name);
                                              $following_the_user_or_not=mysql_num_rows(mysql_query("select * from following where following_no='$search_user_no'"));


                                               if( $following_the_user_or_not >= 1)
                                               {
                                                /*
                                                     now you are following him so deleter from following of your db 
                                                     and follwers of his db and then add bellow funtion
                                                */
                                                                                     $code_to_del_from_my_following="DELETE FROM `$user_db_name`.`following` WHERE following_no='$search_user_no';";
                                                                                     $code_to_del_from_his_followers="DELETE FROM `$search_user_db_name`.`followers` WHERE followers_no = '$user_no';";
                                                                                     mysql_query($code_to_del_from_my_following);
                                                                                     mysql_query($code_to_del_from_his_followers);

                                                                                 

                                                                                 /* this below should be same as of else */
                                                                         
                                                                           mysql_select_db($search_user_db_name);
                                                     $line_to_del_request_sent="DELETE FROM `friend_requests_sent` WHERE `reciver_no` = '$user_no';";
                                                      $line_to_upload_in_other_friend="INSERT INTO `friends` (`no`, `friend_no`, `date_of_friendship`, `month_of_friendship`, `year_of_friendship`) VALUES (NULL, '$user_no', '$t_date',  '$t_month',  '$t_year');";

                                                       mysql_query($line_to_del_request_sent);
                                                        mysql_query($line_to_upload_in_other_friend);


                                                         mysql_select_db($user_db_name);

                                                       $line_to_del_request_recived="DELETE FROM `friends_requests` WHERE `sender_no` = '$search_user_no';";
                                                      $line_to_upload_in_my_friend="INSERT INTO `friends` (`no`, `friend_no`, `date_of_friendship`, `month_of_friendship`, `year_of_friendship`) VALUES (NULL, '$search_user_no', '$t_date',  '$t_month',  '$t_year');";
                                        
                                                      mysql_query($line_to_del_request_recived);
                                                     mysql_query($line_to_upload_in_my_friend);

                                                echo "Friends";

                                                }
                                                else
                                                    {
                                           
                                                     mysql_select_db($search_user_db_name);
                                                     $line_to_del_request_sent="DELETE FROM `friend_requests_sent` WHERE `reciver_no` = '$user_no';";
                                                      $line_to_upload_in_other_friend="INSERT INTO `friends` (`no`, `friend_no`, `date_of_friendship`, `month_of_friendship`, `year_of_friendship`) VALUES (NULL, '$user_no', '$t_date',  '$t_month',  '$t_year');";

                                                       mysql_query($line_to_del_request_sent);
                                                        mysql_query($line_to_upload_in_other_friend);


                                                         mysql_select_db($user_db_name);

                                                       $line_to_del_request_recived="DELETE FROM `friends_requests` WHERE `sender_no` = '$search_user_no';";
                                                      $line_to_upload_in_my_friend="INSERT INTO `friends` (`no`, `friend_no`, `date_of_friendship`, `month_of_friendship`, `year_of_friendship`) VALUES (NULL, '$search_user_no', '$t_date',  '$t_month',  '$t_year');";
                                        
                                                      mysql_query($line_to_del_request_recived);
                                                     mysql_query($line_to_upload_in_my_friend);

                                                echo "Friends";

                                  }

                                         
                                    



                                  }








}
else
{
  header("location:http://$host_of_$host");
}


?>