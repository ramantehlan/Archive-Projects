<?php
include "../php_comman_plug/connect/connect.php";

$add_table="
CREATE TABLE IF NOT EXISTS `status_update` (
                                                                             `no` int(255) NOT NULL AUTO_INCREMENT,
                                                                             `status` text NOT NULL,
                                                                             `tb_name` varchar(50) NOT NULL,
                                                                             `date_of_update` int(2) NOT NULL,
                                                                             `month_of_update` int(2) NOT NULL,
                                                                             `year_of_update` int(4) NOT NULL,
                                                                             `time` varchar(20) NOT NULL,
                                                                              PRIMARY KEY (`no`)
                                                                                 ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";


mysql_select_db($db_name);

$line=mysql_query("select * from users");
while($GET_DB=mysql_fetch_array($line))
{
$user_db=$GET_DB['db_name'];
mysql_select_db($user_db);

mysql_query($add_table);

}




?>