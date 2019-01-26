<?php
include "../php_comman_plug/connect/connect.php";

$update_one="ALTER TABLE `status_update`
  DROP `like_tb_name`;";

$update_t="ALTER TABLE  `status_update` CHANGE  `comment_tb_name`  `tb_name` VARCHAR( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL";


mysql_select_db($db_name);

$line=mysql_query("select * from users");
while($GET_DB=mysql_fetch_array($line))
{
$user_db=$GET_DB['db_name'];
mysql_select_db($user_db);

mysql_query($update_one);
mysql_query($update_t);


}




?>