<?php
include "../../../../../need/php_comman_plug/connect/connect.php";

session_start();
$my_number=$_SESSION['bunchup_user_no'];

$his_db_name=$_POST['c_d_name_b'];
$his_object_like_table_name=$_POST['c_like_d_name'];

$code_to_del="DELETE FROM `$his_db_name`.`$his_object_like_table_name` WHERE user_no = $my_number;";
mysql_query($code_to_del);

echo "Like";
?>