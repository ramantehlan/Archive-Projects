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
add this to friend request sent of sender
add this to friend request recived in reciver

before adding to request sent of sender 
and request recived of reciver

do 
*/                                mysql_select_db($user_db_name);

                                 $code_three=mysql_query("select * from friend_requests_sent where reciver_no='$search_user_no'");
                                   $friend_request_sent_no=mysql_num_rows($code_three);

                                    mysql_select_db($search_user_db_name);
                                    $code_four=mysql_query("select * from friends_requests where sender_no='$search_user_no'");
                                   $friend_request_recived_no=mysql_num_rows($code_four);

                                   mysql_Select_db($user_db_name);
                                   $friend_no=mysql_num_rows(mysql_query("select * from friends where friend_no=$search_user_no"));
                                    
                                   if($friend_no >= 1)
                                  {
                                     echo "Friends";
                                  }
                                 else if($friend_request_sent_no >= 1)
                                 {
                                       echo "Request Send";
                                 }
                                 else if($friend_request_recived_no >=1)
                                  {
                                           echo "Request Recived";
                                  }

                                  else
                                  {
                                     mysql_select_db($user_db_name);
$line_one="INSERT INTO  `friend_requests_sent` (  `no` ,  `reciver_no` ,  `date_of_send` ,  `month_of_send` ,  `yeat_of_send` ,  `time_of_send` ) 
VALUES (
NULL ,  '$search_user_no',  '$t_date',  '$t_month',  '$t_year',  '$t_time'
)";


mysql_query($line_one);

mysql_select_db($search_user_db_name);
$line_two="INSERT INTO  `friends_requests` (
`no` ,
`sender_no` ,
`date_of_send` ,
`month_of_send` ,
`year_of_send` ,
`time_of_send`
)
VALUES (
NULL ,  '$user_no',  '$t_date',  '$t_month',  '$t_year',  '$t_time'
);
";


mysql_query($line_two);
echo "Request Send";
                                  }


}
else
{
  header("location:http://$host_of_$host");
}






?>