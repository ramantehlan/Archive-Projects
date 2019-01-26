<link rel='stylesheet' href='../aa_need/css/load.css'>
<div class='wating_box'>
<img src='../../../../need/images/small/load/1.gif' class='loading_img'>
<div class='line_of_wait'>Please wait! your settings are getting save.</div>


</div>
<?php 

include "../../../../need/php_comman_plug/connect/connect.php";


$name=$_POST['name'];
$dob_year=$_POST['birthday_year'];
$dob_month=$_POST['birthday_month'];
$dob_date=$_POST['birthday_date'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$home_town=$_POST['home'];
$birth_town=$_POST['birth'];
$school=$_POST['school'];

$password=md5(base64_encode($_POST['pass']));
$pin=md5(base64_encode($_POST['pin']));

 


   function check_date_of_birth()
        {
                global $dob_year , $dob_month ,$dob_date;
                        // indicate the start date here

                $t_date=date('d');
               $t_month=date('m');
             $t_year=date('20y');

                          $startdate = "$dob_year-$dob_month-$dob_date";

                          $enddate = "$t_year-$t_month-$t_date"; 

                           $timestamp_start = strtotime($startdate);

                           $timestamp_end = strtotime($enddate);

                          $difference = abs($timestamp_end - $timestamp_start); // that's it!
                
                          $years = floor($difference/(60*60*24*365));

                            // Years, months and days version
                               $years = floor($difference / (365*60*60*24));
                               

                               if($years >= '13')
                                  {
                                          update_infromation();
                                  }
                              else
                                  {
                                      header('location:general_change.php?error=wrong_dob');
                                      
                                   }


         }  

function update_infromation()
{ global $name ,  $dob_year , $dob_month , $dob_date , $gender , $country , $home_town , $birth_town , $school ,  $db_name;


$id=$_SESSION['bunchup_id'];

mysql_select_db($db_name);



$line="UPDATE  users SET  `name` =  '$name' WHERE  id='$id';";
mysql_query($line);






$line="UPDATE  users SET  `birth_year` =  '$dob_year' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `birth_day` =  '$dob_date' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `birth_month` =  '$dob_month' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `gender` =  '$gender' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `country` =  '$country' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `home_town` =  '$home_town' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `birth_town` =  '$birth_town' WHERE  id='$id';";
mysql_query($line);

$line="UPDATE  users SET  `school_name` =  '$school' WHERE  id='$id';";
mysql_query($line);


mysql_close();

header("location:general.php");




}

// above function endup here

if(isset($_POST['name']))
{



mysql_select_db($db_name);


session_start();
$id=$_SESSION['bunchup_id'];

$line2="select * from users where id='$id' and  password='$password' and pin='$pin' ";
$check_of_pass_pin=mysql_num_rows(mysql_query($line2));


if($check_of_pass_pin <= 0)
   {
    mysql_close();
    header('location:general_change.php?error=wrong_pass_pin');

   }
else
{

        check_date_of_birth();
        mysql_close();
}

}

else
{
  header('location:general_change.php?error=wrong_e');
}
mysql_close();







?>
