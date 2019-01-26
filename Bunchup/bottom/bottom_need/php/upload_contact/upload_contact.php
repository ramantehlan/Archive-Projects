<?php

include "../../../../need/php_comman_plug/connect/connect.php";


if(isset($_POST['subject']))
{

$subject=$_POST['subject'];
$message=$_POST['message'];
$user_no=$_POST['user_no'];


mysql_select_db($db_name);
$no=mysql_num_rows(mysql_query("select * from contact_us_upload where user_no='$user_no'"));

if($no >= 1)
{
   echo "<div class='right_side_meassage_dear_one'>Dear user your form have been uploaded successfully</div>";
}
else if($no <=0)
{
	mysql_select_db($db_name);
	$code="INSERT INTO `contact_us_upload` (`no`, `user_no`,  `reasion_of_contact`, `message`, `date_of_upload`, `month_of_upload`, `year_of_upload`, `ip_address`) VALUES (NULL, '$user_no',   '$subject', '$message', '$t_date', '$t_month', '$t_year', '$v_ip');";
	 mysql_query($code);
	echo "<div class='right_side_meassage_dear_one'>Dear user your form have been uploaded successfully</div>";
}
else
{
	echo "<div class='right_side_meassage_dear_one'>Dear user please try after some time! now some problem have occurred</div>";
}

}



else
{
	
}



?>