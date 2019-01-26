<?php

include "../../need/php_comman_plug/connect/connect.php";
include "../../need/php_comman_plug/get_info/info.php";


$var = $host_of_host . getenv ("REQUEST_URI");

$length_of_host_of_host=strlen($host_of_host) + 1;

$url_of_search=substr_replace($var, '',0,$length_of_host_of_host);

$slesh_length=strpos($url_of_search,'/');
if($slesh_length =="")
{
	$id_of_search=$url_of_search;
	$search_page_on="wall";
}
else
{


$left_value_of_url=substr_replace($url_of_search,"",0,$slesh_length);
$id_of_search=substr_replace($url_of_search,"",$slesh_length);

$open=substr_replace($left_value_of_url,"", 0,1);


 Switch($open)
{
  case '':
      $search_page_on="wall";
      
  break;
  case 'question':
           $search_page_on="question";
  break;
   case 'status':
             $search_page_on="status";
  break;
   case 'friends':
             $search_page_on="friends";
  break;
   case 'following':
                $search_page_on="following";
  break;
  case 'images':
            $search_page_on="images";
  break;
  default:
            $search_page_on="wall";
  break;
}
}

global $db_name , $id_of_search;
         mysql_select_db($db_name);
$line=" select * from users where id='$id_of_search' ";
$no=mysql_num_rows(mysql_query($line));

if($no >= 1)
{
include "profile_search.php";
}
else
{
include "../../need/error/error_404.php";
}











?>
