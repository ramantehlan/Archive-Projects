<?php

if (isset($_POST['value']))
{

include "../../../../need/php_comman_plug/connect/connect.php";
session_start();
$status=$_POST['value'];
$user_db_name=$_SESSION['bunchup_user_db_name'];
$user_no=$_SESSION['bunchup_user_no'];
$table_name=rand(0,10000) . $t_month . $t_date . $t_year . '_' . rand(0,100000000000) ;

mysql_select_db($user_db_name);

$code="INSERT INTO `status_update` (`no`, `status`, `tb_name` , `date_of_update`, `month_of_update`, `year_of_update`, `time`) 
    VALUES ('', '$status', '$table_name', '$t_date', '$t_month', '$t_year', '$t_time');";

$code_to_Create_table_comment="
CREATE TABLE IF NOT EXISTS `Z_C_$table_name` (
  `no` int(255) NOT NULL AUTO_INCREMENT,
  `user_no` int(255) NOT NULL,
  `comment` text NOT NULL,
  `date_of_comment` int(2) NOT NULL,
  `month_of_comment` int(2) NOT NULL,
  `year_of_comment` int(4) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

$code_to_Create_table_like="
CREATE TABLE IF NOT EXISTS `Z_L_$table_name` (
  `no` int(255) NOT NULL AUTO_INCREMENT,
  `user_no` int(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

mysql_query($code_to_Create_table_comment);
mysql_query($code_to_Create_table_like);


mysql_query($code);

echo "done";

}
else
{
	echo "Hi";
}



?>