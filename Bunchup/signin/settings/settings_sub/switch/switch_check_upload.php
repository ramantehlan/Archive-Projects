<link rel='stylesheet' href='../aa_need/css/load.css'>
<div class='wating_box'>
<img src='../../../../need/images/small/load/1.gif' class='loading_img'>
<div class='line_of_wait'>Please wait! your settings are getting save.</div>


</div>
<?php 

include "../../../../need/php_comman_plug/connect/connect.php";

$Friend_requests_allowed=$_POST['friend_request_allow'];
$Following_requests_allowed=$_POST['following_request_allow'];
$Questions_allowed=$_POST['Question_allow'];
$password=md5(base64_encode($_POST['pass']));
$pin=md5(base64_encode($_POST['pin']));


function upload_information()
{
global $Following_requests_allowed , $Friend_requests_allowed , $Questions_allowed , $Share_with;
     

   $id=$_SESSION['bunchup_id'];

mysql_select_db($db_name);



$line="UPDATE  users SET  `allow_friend_request` =  '$Friend_requests_allowed' WHERE  id='$id';";
mysql_query($line);
  
$line="UPDATE  users SET  `allow_follow_request` =  '$Following_requests_allowed' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `allow_question` =  '$Questions_allowed' WHERE  id='$id';";
mysql_query($line);



mysql_close();

header("location:switch.php"); 

}



if(isset($_POST['friend_request_allow']))
{



mysql_select_db($db_name);


session_start();
$id=$_SESSION['bunchup_id'];

$line2="select * from users where id='$id' and  password='$password' and pin='$pin' ";
$check_of_pass_pin=mysql_num_rows(mysql_query($line2));


if($check_of_pass_pin <= 0)
   {
    header('location:switch_change.php?error=wrong_pass_pin');
   }
else
{

     upload_information();
}

}

else
{
  header('location:switch_change.php?error=wrong_e');
}
mysql_close();









?>