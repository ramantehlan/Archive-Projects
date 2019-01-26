<?php

$search_user_no;
$search_user_id;
$search_user_db_name;
$search_user_name;
$search_user_email;
$search_user_phone;
$search_user_dob_y;
$search_user_dob_m;
$search_user_dob_d;
$search_user_gender;
$search_user_country;
$search_user_home_town;
$search_user_birth_town;
$search_user_school;
$search_user_collage;
$search_user_work;
$search_user_p_picture;
$search_user_online;



$search_user_nick_name;
$search_user_about;
$search_user_work;
$search_user_relationship_with;
$search_user_hobby;

$search_allow_friend_request;
$search_allow_follow_request;
$search_allow_question;

$search_fb_addres;
$search_twitter_addres;
$search_askfm_addres;


function get_search_user_info()
{ global $id_of_search , $db_name;
global $search_user_no , $search_user_id , $search_user_password , $search_user_id , $search_user_pin , $search_user_db_name , $search_user_name , $search_user_email , $search_user_phone ,
 $search_user_dob_y , $search_user_dob_m , $search_user_dob_d , $search_user_gender , $search_user_country , $search_user_home_town , $search_user_birth_town , 
 $search_user_school , $search_user_work , $search_user_p_picture , $search_user_online , $search_user_collage;

global $search_user_nick_name , $search_user_about , $search_user_work , $search_user_relationship_with , $search_user_hobby;

global $search_allow_friend_request , $search_allow_follow_request,$search_allow_question , $search_fb_addres , $search_twitter_addres , $search_askfm_addres;

mysql_select_db($db_name);
$code="select * from users where id='$id_of_search'";
$line=mysql_query($code);
$GET_SEARCH_INFO=mysql_fetch_array($line);
 
$search_user_name=$GET_SEARCH_INFO['name'];
$search_user_id=$id_of_search;
$search_user_no=$GET_SEARCH_INFO['user_no'];
$search_user_db_name=$GET_SEARCH_INFO['db_name'];
$search_user_phone=$GET_SEARCH_INFO['phone'];
$search_user_dob_y=$GET_SEARCH_INFO['birth_year'];
$search_user_dob_m=$GET_SEARCH_INFO['birth_month'];
$search_user_dob_d=$GET_SEARCH_INFO['birth_day'];
$search_user_gender=$GET_SEARCH_INFO['gender'];
$search_user_country=$GET_SEARCH_INFO['country'];
$search_user_home_town=$GET_SEARCH_INFO['home_town'];
$search_user_birth_town=$GET_SEARCH_INFO['birth_town'];
$search_user_school=$GET_SEARCH_INFO['school_name'];
$search_user_collage=$GET_SEARCH_INFO['collage_name'];
$search_user_work=$GET_SEARCH_INFO['work'];
$search_user_p_picture=$GET_SEARCH_INFO['Profile_picture'];
$search_user_online=$GET_SEARCH_INFO['online'];

if($search_user_p_picture =='')
{
$search_user_p_picture = "defalt.jpg";
}

$search_user_nick_name=$GET_SEARCH_INFO['nick_name'];
$search_user_about=$GET_SEARCH_INFO['about'];
$search_user_work=$GET_SEARCH_INFO['work'];
$search_user_relationship_with=$GET_SEARCH_INFO['relationship_with'];
$search_user_hobby=$GET_SEARCH_INFO['hobby'];

$search_allow_friend_request=$GET_SEARCH_INFO['allow_friend_request'];
$search_allow_follow_request=$GET_SEARCH_INFO['allow_follow_request'];
$search_allow_question=$GET_SEARCH_INFO['allow_question'];

$search_fb_addres=$GET_SEARCH_INFO['fb_addres'];
$search_twitter_addres=$GET_SEARCH_INFO['twitter_addres'];
$search_askfm_addres=$GET_SEARCH_INFO['askfm_addres'];
}

get_search_user_info();

?>