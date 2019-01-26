<?php
include "../need/php_comman_plug/connect/connect.php";
include "../need/php_comman_plug/get_info/info.php";
include "../need/php_comman_plug/display/bg_color.php";

?>
<!DOCTYPE HTML>
<html>
   <head>
        <title><?php echo $user_name; ?> bunch</title>

        <!-- this is css for the index -->
         <link rel='stylesheet' href='signin_need/css/bunch.css'>
         <link rel='stylesheet' href='../need/css/comman/comman.css'>

        <!-- this is to background -->
        <style>
       
        </style>

        <!-- this is the jquery -->

        <script type='text/javascript' src='../need/javascript/jquery/jquery.js'></script>

        <!-- This is meta tag -->
        <meta name='description' content='Bunchup let you bunch up your social networking in a very cool and new way, it is very unique and secure'>
        <meta name='keyword' content='social networking , Bunchup , Bunchup.com , cool and new way , unique , bunch'>
        <meta name='sumary' content='Bunchup is a social networking site, which is free to use, which is new , cool , unique , fast , secure and a never ending trend.'>
        <meta name='author' content='Bunchup'>
        <meta charset='utf-8'>
        <meta name='language' content='English'>
   </head>
   <body>
   <div id='top'>
    <?php
    $site='bunch';
    $selected ='selected_option_of_menu_bar';
    $other ='option_of_menu_bar';
   
     echo "<input type='hidden' value='' id='java_url_for_plugin'>";
     include "signin_need/php_plugin/top/top.php"; ?>
   </div>
 
   <div class='body'>
    <div class='left_box_of_friend_box_and_chat_Box'>
                       
                        <div class='left_side_bunch_line'>
                                     <div class='heading_of_left_side_bunch_line'>
                                          Friends
                                     </div>
                                     <div class='body_of_left_side_bunchline_box'>
                                                     <?php
                                                            static $repeat_no;
                                                                      $repeat_no=1;
                                                                      
                                                                      mysql_select_db($user_db_name);
                                                                      $get_f="select * from friends ORDER BY  `rate` DESC limit 0,30";
                                                                      $codeit=mysql_query($get_f);
                                                                        
                                                                   

                                                                      while($GET_no=mysql_fetch_array($codeit))
                                                                      {
                                                                            $friend_no=$GET_no['friend_no'];
                                                                            mysql_select_db($db_name);
                                                                            $got_to_main="select * from users where user_no='$friend_no'  ";
                                                                            $go_it=mysql_query($got_to_main);
                                                                            $GET_INFO_OF_FRIEND=mysql_fetch_array($go_it);

                                                                            $name_of_friend=$GET_INFO_OF_FRIEND['name'];
                                                                            $id_of_friend=$GET_INFO_OF_FRIEND['id'];
                                                                            $img_of_friend=$GET_INFO_OF_FRIEND['Profile_picture'];

                                                                                   if($img_of_friend =="")
                                                                                              { 
                                                                                                $img_of_friend="defalt.jpg";
                                                                                               } 
                                                                                     else{
                                                                                      $img_of_friend= $img_of_friend;
                                                                                             }

                                                                             $display_chat = <<< EOFILE
                                                                                  <div class='box_of_friend_or_following_in_list' title='$name_of_friend'>
                                                                                              <div class='img____of_friend_box'>
                                                                                                          <img src='http://$host_of_host/signin/users/users_uploded_photo/$img_of_friend' title='$name_of_friend' alt='User $name_of_friend'>  
                                                                                              </div>
                                                                                              <div class='right_side_of_friend_box__info'>
                                                                                                            <div class='name_of_friend_box_line'>
                                                                                                                         <a href='http://$host_of_host/$id_of_friend'>$name_of_friend</a>
                                                                                                            </div>
                                                                         
                                                                                               </div>
                                                                                   </div>
EOFILE;
                                                                         echo $display_chat;
                                                                         $repeat_no +=1;
                                                                      }


                                                     ?>
                                                   

                                     </div>
                                     <div class='bottom_of_friend_and_follower_row'>

                                     </div>

                        </div>
                        <div class='box_of_chat_div_box_right'>

                                            <div class='chat_box_of_bunch'>
                                                     <div class='heading_of_chat_box'>
                                                                          raman tehlan
                                                                  
                                                     </div>
                                                     <div class='body_of_chat_box_msg'>

                                                     </div>
                                                     <div class='bottom_of_chat_box_msg_to_send'>
                                                     <textarea class='textarea_of_chat' placeholder='Message'></textarea>
                                                     <div class='button_of_msg_post'>Send</div>

                                                     </div>

                                            </div>

                                            
                                         
                       </div>

   </div>


   </div>
    </body>
</html>  