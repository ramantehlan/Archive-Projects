<link rel='stylesheet' href='../aa_need/css/load.css'>
<div class='wating_box'>
<img src='../../../../need/images/small/load/1.gif' class='loading_img'>
<div class='line_of_wait'>Please wait! your settings are getting save.</div>


</div>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";

$share_dob_with=$_POST['share_dob_with'];
$share_birth_with=$_POST['share_birth_with'];
$share_home_with=$_POST['share_home_with'];
$share_relation_with=$_POST['share_relation_with'];
$share_school_with=$_POST['share_school_with'];
$share_collage_with=$_POST['share_collage_with'];
$share_nick_name_with=$_POST['share_nick_name_with'];
$share_work_with=$_POST['share_work_with'];
$share_hobby_with=$_POST['share_hobby_with'];

$password=md5(base64_encode($_POST['pass']));
$pin=md5(base64_encode($_POST['pin']));



function upload_info()
{
 global $share_hobby_with , $share_work_with , $share_collage_with , $share_school_with , $share_relation_with , $share_home_with , $share_birth_with , $share_dob_with ,  $share_nick_name_with  , $db_name ;

	mysql_select_db($db_name);
$id=$_SESSION['bunchup_id']; 	


$line="UPDATE  users SET  `hobby_allowed_to` =  '$share_hobby_with' WHERE  id='$id';";
mysql_query($line);
echo $line;

$line="UPDATE  users SET  `work_allowed_to` =  '$share_work_with' WHERE  id='$id';";
mysql_query($line);



$line="UPDATE  users SET  `collage_allowed_to` =  '$share_collage_with' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `school_allowed_to` =  '$share_school_with' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `relation_allowed_to` =  '$share_relation_with' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `home_allowed_to` =  '$share_home_with' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `birth_allowed_to` =  '$share_birth_with' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `dob_allowed_to` =  '$share_dob_with' WHERE  id='$id';";
mysql_query($line);



$line="UPDATE  users SET  `nick_name_allowed_to` =  '$share_nick_name_with' WHERE  id='$id';";
mysql_query($line);





mysql_close();

header("location:privacy.php");

}



// above function endup here

if(isset($_POST['share_home_with']))
{



mysql_select_db($db_name);


session_start();
$id=$_SESSION['bunchup_id'];

$line2="select * from users where id='$id' and  password='$password' and pin='$pin' ";
$check_of_pass_pin=mysql_num_rows(mysql_query($line2));


if($check_of_pass_pin <= 0)
   {
    mysql_close();
    header('location:privacy_change.php?error=wrong_pass_pin');

   }
else
{

        upload_info();
        mysql_close();
}

}

else
{
  header('location:privacy_change.php?error=wrong_e');
}







?>

