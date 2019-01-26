<?php

mysql_select_db($db_name);


$line="select * from users_display where id='$id_of_search'";

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

$bg_img=$GETVI['bg_img'];
}

else
{
$bg_color="";
$bg_img='';
}

?>