<link rel='stylesheet' href='../aa_need/css/load.css'>
<div class='wating_box'>
<img src='../../../../need/images/small/load/1.gif' class='loading_img'>
<div class='line_of_wait'>Please wait! your settings are getting save.</div>


</div>



<?php
session_start();
 if(isset($_SESSION['security_check']))
 {
  if($_SESSION['security_check'] == 1)
  {

  }
    else
  {
    header("location:security.php?error=unknown");
  }

 }
   else
  {
    header("location:security.php?error=unknown");
  }

include "../../../../need/php_comman_plug/connect/connect.php";

$email=$_POST['email'];
$old_email=$_POST['h_email'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$phone=$_POST['phone'];
$new_id=$_POST['id'];
$password=md5(base64_encode($_POST['password']));
$pin=md5(base64_encode($_POST['pin']));

function upload_information()
{
global $email , $question , $answer , $phone , $password , $pin , $db_name , $new_id;





$id=$_SESSION['bunchup_id'];
mysql_select_Db($db_name);

$line="UPDATE  users SET  `email` =  '$email' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `question` =  '$question' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `answer` =  '$answer' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `phone` =  '$phone' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `password` =  '$password' WHERE  id='$id';";
mysql_query($line);



  $line="UPDATE  users SET  `pin` =  '$pin' WHERE  id='$id';";
mysql_query($line);



$line="UPDATE  users SET  `id` =  '$new_id' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users_display SET  `id` =  '$new_id' WHERE  id='$id';";
mysql_query($line);

session_start();
$_SESSION['bunchup_pass']=$_POST['password'];
$_SESSION['bunchup_id']=$new_id;

mysql_close();
header('location:security.php');
}

if(isset($email))
{
mysql_select_Db($db_name);
$line="select * from users where email='$email' and email!='$old_email' ";
$no=mysql_num_rows(mysql_query($line));

                                 if($no >= 1)
                                  {
                                                  header("location:security_change.php?error=wrong_email");
                                  }
                                  else
                                  {   
                                       $id=$_SESSION['bunchup_id'];
                                    mysql_select_db($db_name) or exit(mysql_error());
                                      $query="select * from users where id='$new_id' and id!='$id'";
                                        $no=mysql_num_rows(mysql_query($query));

                                           if($no >= 1)
                                                     {
                                                         header("location:security_change.php?error=id_error");
                                                    }

                                             else
                                                       {
                                                        upload_information();
                                                          }



                                         
                                  }

}
else
{
	header("location:security_change.php?error=unknown");
}

?>