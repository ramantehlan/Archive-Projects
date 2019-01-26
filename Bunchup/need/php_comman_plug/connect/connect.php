<?php
$db_host='localhost';
$db_user='root';
$db_password='9868154619man';
$db_name='bunchup';
  $host_of_host=getenv ("SERVER_NAME");

$connect=mysql_connect($db_host,$db_user,$db_password);
if(!$connect)
{
 echo "Sorry some problem occer";
}
else
{
	mysql_connect($db_host,$db_user,$db_password);
	$t_date=date('d');
$t_month=date('m');
$t_year=date('20y');
$t_time=time();


$ipaddress = $_SERVER["REMOTE_ADDR"];
 $ipaddress;

  $v_country='DEFALUT';
  $v_ip=$ipaddress;

}




?>


