<?php

include 'connect/connect.php';

$mail=$_POST['cmail'];


 

mysql_select_db($db_name) or exit(mysql_error());

$query="select * from users where email='$mail' ";
$no_m=mysql_num_rows(mysql_query($query));

if($no_m >= 1)
{
  echo "<textarea id='signup_error_m' class='hidden_textarea' readonly='readonly' style='display:none;'>false</textarea>";
}

else
{
	echo "<textarea id='signup_error_m' class='hidden_textarea' readonly='readonly' style='display:none;' value=''></textarea>";
}







?>


