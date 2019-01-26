<?php


if(isset($_POST['no_of_search']))
{

$reciver_no=$_POST['no_of_search'];
$sender_no=$_POST['no_of_searcher'];

include "../../../../../need/php_comman_plug/connect/connect.php";

mysql_select_db($db_name);

/*
sender is me in all the cases 
*/
$fetch_it=mysql_fetch_array(mysql_query("select * from users where user_no='$reciver_no'"));
$search_user_no=$fetch_it['user_no'];
$search_user_db_name=$fetch_it['db_name'];

$fetch_it_again=mysql_fetch_array(mysql_query("select * from users where user_no='$sender_no'"));
$user_no=$fetch_it_again['user_no'];
$user_db_name=$fetch_it_again['db_name'];


/* 
here i will add in my db in following no of user whom i m following
and i will add to his db in follower my no

*/




                                           mysql_select_db($user_db_name);
                                           $following_the_user_or_not=mysql_num_rows(mysql_query("select * from following where following_no='$search_user_no'"));

                                           mysql_select_db($search_user_db_name);
                                           $user_is_following_or_not=mysql_num_rows(mysql_query("select * from followers where followers_no='$user_no'"));

                                           if($following_the_user_or_not >= 1)
                                           {
                                                   echo "Following";
                                           }
                                           else if($user_is_following_or_not >= 1)
                                           {
                                                     echo "Following";
                                           } 
                                           else
                                           {
                                           	$code_to_enter_in_mydb_following="INSERT INTO  `$user_db_name`.`following` (
`no` ,
`following_no` ,
`date_of_following` ,
`month_of_following` ,
`year_of_following`
)
VALUES (
NULL ,  '$search_user_no',  '$t_date',  '$t_month',  '$t_year'
);";


$code_to_enter_otherdb_followers="INSERT INTO  `$search_user_db_name`.`followers` (
`no` ,
`followers_no` ,
`date_of_following` ,
`month_of_following` ,
`year_of_following`
)
VALUES (
NULL ,  '$user_no',  '$t_date',  '$t_month',  '$t_year'
);";

mysql_query($code_to_enter_in_mydb_following);
mysql_query($code_to_enter_otherdb_followers);

echo "Following";
                                           }



}
else
{
  header("location:http://$host_of_$host");
}


?>
