<link rel='stylesheet' href='../aa_need/css/load.css'>
<div class='wating_box'>
<img src='../../../../need/images/small/load/1.gif' class='loading_img'>
<div class='line_of_wait'>Please wait! your settings are getting save.</div>


</div>



<?php
include "../../../../need/php_comman_plug/connect/connect.php";

$nick_name=$_POST['nick_name'];
$about=$_POST['about'];
$work=$_POST['work'];
$collage=$_POST['collage'];
$relationship=$_POST['relationship'];
$hobby=$_POST['hobby'];
$fb_u=$_POST['facebook_url'];
$twitter_u=$_POST['twitter_url'];
$ask_fm_u=$_POST['ask_fm_url'];


$password=md5(base64_encode($_POST['pass']));
$pin=md5(base64_encode($_POST['pin']));

function upload_information()
{global $nick_name , $about , $work , $collage , $relationship , $hobby  , $db_name , $ask_fm_u , $twitter_u , $fb_u;








$id=$_SESSION['bunchup_id'];

mysql_select_db($db_name);


$line="UPDATE  users SET  `nick_name` =  '$nick_name' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `about` =  '$about' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `work` =  '$work' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `collage_name` =  '$collage' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `relationship_with` =  '$relationship' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `hobby` =  '$hobby' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `fb_addres` =  '$fb_u' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `twitter_addres` =  '$twitter_u' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `askfm_addres` =  '$ask_fm_u' WHERE  id='$id';";
mysql_query($line);





header("location:advance.php");

mysql_close();


}


if(isset($_POST['pass']))
{
mysql_select_db($db_name);

session_start();
$id=$_SESSION['bunchup_id'];


$line2="select * from users where id='$id' and  password='$password' and pin='$pin' ";
$check_of_pass_pin=mysql_num_rows(mysql_query($line2));

if($check_of_pass_pin <= 0)
   {
    header('location:advance_change.php?error=wrong_pass_pin');
   }

   else
   {
    upload_information();
   }


}

else
{header('location:advance_change.php?error=wrong_e');

}

mysql_close();

?>