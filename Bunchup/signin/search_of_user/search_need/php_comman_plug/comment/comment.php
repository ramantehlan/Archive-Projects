<?php
include "../../../../../need/php_comman_plug/connect/connect.php";



session_start();
$my_number=$_SESSION['bunchup_user_no'];



$user_db=$_POST['db_name'];
$comment_db=$_POST['db_of_comment'];
$mycomment=$_POST['comment'];

 $insert_in_comment="INSERT INTO  `$user_db`.`$comment_db` (
`no` ,
`user_no` ,
`comment` ,
`date_of_comment` ,
`month_of_comment` ,
`year_of_comment` ,
`time`
)
VALUES (NULL ,  '$my_number',  '$mycomment',  '$t_date',  '$t_month',  '$t_year',  '$t_time');";


mysql_query($insert_in_comment);
echo "Done";











?>