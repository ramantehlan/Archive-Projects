
<?php


/*
in this script 
delet it from sender             request_sent
and from my request_recived       


do above acion only when friend request sent of other user is not empty
and friend request recieved is not empty

*/


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



                       
                                  $code_to_del_from_other="DELETE FROM `$search_user_db_name`.`friend_requests_sent` WHERE reciver_no='$user_no';";
                                  $code_to_del_from_mine="DELETE FROM `$user_db_name`.`friends_requests` WHERE `sender_no` ='$search_user_no';";

                                  mysql_query($code_to_del_from_mine);
                                  mysql_query($code_to_del_from_other);
                                  echo "Request Canceled"; 

                                  
                              


}

else
{
  header("location:http://$host_of_$host");
}

?>