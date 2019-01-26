<?php

include 'connect/connect.php';

$id=$_POST['cid'];

mysql_select_db($db_name) or exit(mysql_error());

$query="select * from users where id='$id'";
$no=mysql_num_rows(mysql_query($query));

if($no >= 1)
{
  echo "<textarea id='signup_error_i' class='hidden_textarea' readonly='readonly' style='display:none;'>false</textarea>";
}

else
{
	echo "<textarea id='signup_error_i' class='hidden_textarea' readonly='readonly' style='display:none;'></textarea>";
}







?>


