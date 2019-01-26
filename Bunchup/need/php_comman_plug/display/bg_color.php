<?php

mysql_select_db($db_name);

$id=$_SESSION['bunchup_id'];

$line="select * from users_display where id='$id'";

$no_of_display=mysql_num_rows(mysql_query($line));


if($no_of_display >= 1)
{
$GETVI=mysql_fetch_array(mysql_query($line));

$bg_color=$GETVI['bg_color'];
if($bg_color =='')
{
$bg_color="";
}
else
{

}

}

else
{
$bg_color="";
}

?>