<?php
include "search_need/php_comman_plug/info/info_of_search.php";
include "search_need/php_comman_plug/display/view_of_search.php";



// this is to find out that who have opended profine or wall 
// friend  , other , mine , friends of friend ,          follower is still to be edit 
              if($id_of_search == $_SESSION['bunchup_id'])
                    {
                               $profile_of='mine';
                    }
              else
                   {      

                              mysql_select_db($user_db_name);
                              $code="select * from friends where friend_no='$search_user_no'";
                              $no=mysql_num_rows(mysql_query($code));
                           
                               if($no >= 1)
                                       {
                                             $profile_of = 'friend';     
                                        }

                               else
                                     {
                                               $code="SELECT a.friend_no, b.friend_no
                                                       FROM `$user_db_name`.`friends` a, `$search_user_db_name`.`friends` b
                                                       WHERE a.friend_no = b.friend_no";
                     
                                               $mutual_friends=mysql_num_rows(mysql_query($code));
                                                     
                                                      if($mutual_friends == 0)
                                                                 {
                                                                     $profile_of='other';
                                                                  }
                                                           
                                                          else
                                                                {
                                                                   $profile_of='friends_of_friends';
                                                                }
                                     }
                     }

?>

<!DOCTYPE HTML>
<html>
   <head>
        <title><?php echo $search_user_name; ?></title>

        <!-- this is css for the index -->
       
         <link rel='stylesheet' href='http://<?php echo $host_of_host;?>/need/css/comman/comman.css'>
           <link rel='stylesheet' href='http://<?php echo $host_of_host;?>/signin/search_of_user/search_need/css/profile.css'>
          

        <!-- this is to background -->
        <style>
       
        </style>

        <!-- this is the jquery -->
        <script type='text/javascript' src='http://<?php echo $host_of_host;?>/need/javascript/jquery/jquery-1.10.2.js'></script>
        <script type='text/javascript' src='http://<?php echo $host_of_host;?>/need/javascript/jquery/jquery-ui.js'></script>
       
     

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
    // this if and else output $site cause in top.php to it make wall white if site is equal to profile
                         if($id_of_search == $_SESSION['bunchup_id'])
                                     {
                                        $site='wall';
                                    }
                        else
                                  {
                                     $site=''; 
                                 }
   
    $selected ='selected_option_of_menu_bar';
    $other ='option_of_menu_bar';
    
     echo "<input type='hidden' value='../signin/' id='java_url_for_plugin'>";
    include "../signin_need/php_plugin/top/top.php"; ?>
   </div>
 
   <div class='body'>
  <div class="holder_of_above_wall">
                <div class='top_bar'>
                     <div class='profile_bar_of_top'> <img src="../signin/users/users_uploded_photo/<?php if($search_user_p_picture ==''){echo 'defalt.jpg';} else{echo $search_user_p_picture;}  ?>" class='user_profile_pic'></img></div>
                    <div class='right_side_information'>
                               <div class='name_of_user'><?php echo $search_user_name; ?>
                                <span class='nick_name'
                                ><?php
                                 if($search_user_nick_name == "")
                                 {
                                    echo "";
                                 } 
                                 else
                                 {
                                     echo "( " . $search_user_nick_name . " )";
                                 }
                                 ?>
                                </span></div>
                               <div class='home_town'><?php echo  $search_user_home_town . "," . $search_user_country ; ?></div>
                               <div class='about'><?php echo $search_user_about; ?></div>
                               <div class='box_of_advance_info'>
                                       

                                               <div class='block_of_row_of_advance_info' title='<?php echo $search_user_school;?>'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>School</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'><?php echo $search_user_school;?></div>
                                               </div>
                                               <div class='block_of_row_of_advance_info' title='<?php echo $search_user_gender;?>'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Gender</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'><?php echo $search_user_gender;?></div>
                                               </div>
                                        <?php 
                                                         if($search_user_collage == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                             $dis = <<< EOFILE
                                                                   <div class='block_of_row_of_advance_info' title='$search_user_collage'>
                                                                     <div class='title_of_block_of_row_of_advance_info'>Collage</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_user_collage</div>
                                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }
                                        ?>
                                          <?php 
                                                         if($search_user_relationship_with == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                 <div class='block_of_row_of_advance_info' title='$search_user_relationship_with'>
                                                                     <div class='title_of_block_of_row_of_advance_info'>Relationship with</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_user_relationship_with</div>
                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }
                                        ?>
                                              
                                        

                                       
                                               <div class='block_of_row_of_advance_info' title='<?php  echo $search_user_birth_town; ?>'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Birth place</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'><?php  echo $search_user_birth_town; ?></div>
                                               </div>
                                                 <?php 
                                                         if($search_user_work == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                    <div class='block_of_row_of_advance_info' title='$search_user_work'>
                                                                     <div class='title_of_block_of_row_of_advance_info'>Work</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'> $search_user_work</div>
                                                              </div>
EOFILE;
                                                                    echo $dis;

                                                        }
                                        ?>
                                              
                                        

                                            <?php 
                                                         if($search_user_hobby == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                    <div class='block_of_row_of_advance_info' title='$search_user_hobby'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Hobby</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_user_hobby </div>
                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }


                                                          if($search_fb_addres == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                    <div class='block_of_row_of_advance_info' title='$search_fb_addres'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Facebook</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_fb_addres </div>
                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }

                                                          if($search_twitter_addres == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                    <div class='block_of_row_of_advance_info' title='$search_twitter_addres'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Twitter</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_twitter_addres</div>
                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }

                                                          if($search_askfm_addres  == "")
                                                         {
                                                            echo "";
                                                         }
                                                         else
                                                        {
                                                          $dis = <<< EOFILE
                                                                    <div class='block_of_row_of_advance_info' title='$search_askfm_addres'>
                                                                   <div class='title_of_block_of_row_of_advance_info'>Ask.fm</div>
                                                                   <div class='value_of_block_of_row_of_advance_info'>$search_askfm_addres </div>
                                               </div>
EOFILE;
                                                                    echo $dis;

                                                        }
                                        ?>


                                     

                                        
                                             
                                        

                               </div>
                               <?php
                               if($profile_of=="mine")
                               {
                                 echo "";         
                               }
                               else
                               {   echo "<div class='mutual_friends_row_in_profile_box'>";


                                                $code_of_m="SELECT a.friend_no
                                               FROM `$user_db_name`.`friends` a, `$search_user_db_name`.`friends` b
                                                WHERE a.friend_no = b.friend_no";
                                                $no_of_mutual_friend_there=mysql_num_rows(mysql_query($code_of_m));
                                               $got=mysql_query($code_of_m);
                                                 if($no_of_mutual_friend_there <= 9)
                                                           {
                                                                         while($fetch_mutual_list=mysql_fetch_array($got))
                                                                            {

                                                           $friend_no_mutual=$fetch_mutual_list['friend_no'];

                                                           mysql_select_db($db_name);
                                                           $linee_to_get=mysql_query("select * from users where user_no='$friend_no_mutual'");
                                                           $mutual_user=mysql_fetch_array($linee_to_get);
                                                           $mutual_user_img=$mutual_user['Profile_picture'];
                                                           $mutual_user_id=$mutual_user['id'];
                                                           $mutual_user_name=$mutual_user['name'];

                                                              // this is to check existance of the image
                                                                                                            if($mutual_user_img =="")
                                                                                                             {
                                                                                                              $mutual_user_img="defalt.jpg";
                                                                                                              } 
                                                           
                                                                                                           else
                                                                                                                {
                                                                                                                   $mutual_user_img= $mutual_user_img;
                                                                                                                 }

                                                           echo "<a href='http://$host_of_host/$mutual_user_id'>
                                                            <div class='img_div_for_mutual_friend_box_in'>
                                                           <img src='http://$host_of_host/signin/users/users_uploded_photo/$mutual_user_img' title='$mutual_user_name'
                                                            class='img_of_mutual_user_in_bar_profile'>
                                                             </div>
                                                             </a>
                                                       
                                                            ";




                                                                           }
                                                                           echo "<div class='at_end_of_line_of_mutual_friend_row'>$no_of_mutual_friend_there Mutual Friend</div>";

                                                           }
                                                           else if($no_of_mutual_friend_there == 0)
                                                           {
                                                            echo "";
                                                           }
                                                           else
                                                           {

                                                                             $code_of_m="SELECT a.friend_no
                                                                        FROM `$user_db_name`.`friends` a, `$search_user_db_name`.`friends` b
                                                                         WHERE a.friend_no = b.friend_no limit 0,9";
                                                                           $got=mysql_query($code_of_m);
                                                                        while($fetch_mutual_list=mysql_fetch_array($got))
                                                                            {

                                                           $friend_no_mutual=$fetch_mutual_list['friend_no'];

                                                           mysql_select_db($db_name);
                                                           $linee_to_get=mysql_query("select * from users where user_no='$friend_no_mutual'");
                                                           $mutual_user=mysql_fetch_array($linee_to_get);
                                                           $mutual_user_img=$mutual_user['Profile_picture'];
                                                           $mutual_user_id=$mutual_user['id'];
                                                           $mutual_user_name=$mutual_user['name'];
                                                                                                             
                                                                                                             // this is to check existance of the image
                                                                                                            if($mutual_user_img =="")
                                                                                                             {
                                                                                                              $mutual_user_img="defalt.jpg";
                                                                                                              } 
                                                           
                                                                                                           else
                                                                                                                {
                                                                                                                   $mutual_user_img= $mutual_user_img;
                                                                                                                 }

                                                           echo "<a href='http://$host_of_host/$mutual_user_id'>
                                                            <div class='img_div_for_mutual_friend_box_in'>
                                                           <img src='http://$host_of_host/signin/users/users_uploded_photo/$mutual_user_img' title='$mutual_user_name'
                                                            class='img_of_mutual_user_in_bar_profile'>
                                                             </div>
                                                             </a>
                                                       
                                                            ";


                                                                           }
                                                                           $no_of_mutual_friend_there -= 9;
                                                                           echo "<div class='at_end_of_line_of_mutual_friend_row'>$no_of_mutual_friend_there More Mutual Friend</div>";
                                                           }
                                                
                                                               

                                                                  echo "</div>";
                               }



                               ?>
                    </div>
                </div>

                <div class='after_top_bar_other_bar'>
                            <div class='left_side_of_other_bar'>
                                       <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>'> <div class='
                                        <?php
                                         if($search_page_on == "wall") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                Wall
                                       </div>
                                      </a>
                                      <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>/question'> <div class='
                                         <?php
                                         if($search_page_on == "question") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                 Questions
                                       </div>
                                      </a>
                                      <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>/status'> <div class='
                                         <?php
                                         if($search_page_on == "status") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                 Status
                                       </div>
                                      </a>
                                      <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>/friends'> <div class='
                                         <?php
                                         if($search_page_on == "friends") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                 Friends
                                       </div>
                                      </a>
                                      <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>/following'> <div class='
                                         <?php
                                         if($search_page_on == "following") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                 Following
                                       </div>
                                      </a>
                                           <a href='http://<?php  echo $host_of_host .'/' . $search_user_id;?>/images'> <div class='
                                         <?php
                                         if($search_page_on == "images") 
                                          {echo  "selected_option_of_left_side_of_other_bar_menu";}
                                           else
                                            {echo "option_of_left_side_of_other_bar_menu";} 
                                          ?>'>
                                                 Images
                                       </div>
                                      </a>
                             </div>
                            <div class='right_side_of_other_bar'>
                              <input type='hidden' value="<?php echo $search_user_no; ?>" id='no_of_search'>
                              <input type='hidden' value="<?php echo $user_no; ?>" id='my_no'>
                              <div id='output_of_friend_request'>

                              </div>
                            <?php
                              mysql_select_db($user_db_name);
                                          
                                   $code_five=mysql_query("select * from followers");
                                   $no_of_followers=mysql_num_rows($code_five);

                                   $code_following=mysql_query("select * from following");
                                   $no_of_following=mysql_num_rows($code_following);

                                   $code_six=mysql_query("select * from following where following_no='$search_user_no'");
                                   $following_no=mysql_num_rows($code_six);



                                  /* $code_seven=mysql_query("select * from followers where followers_no='$search_user_no'");
                                   $follower_no=mysql_num_rows($code_seven);
                                       */


                                   if($search_user_id == $user_id)
                                   {
                                    $following_request="<div  class='button_of_request_in_other_bar' >$no_of_followers Follower</div>
                                    <div  class='button_of_request_in_other_bar' >$no_of_following Following</div>
                                    ";
                                   }

                                      /*else if($follower_no >= 1 && $following_no >= 1)
                                   {
                                     $following_request="<div class='button_of_request_in_other_bar follow_button_hide_when_no_need'>Following Each Other</div>";
                                   } */

                                   else if($following_no >= 1)
                                   {
                                     $following_request="<div class='button_of_request_in_other_bar follow_button_hide_when_no_need' >Following</div>
                                                        <div class='button_of_request_in_other_bar follow_button_hide_when_no_need' >Un Follow</div>
                                     ";

                                   }

                                   /*  else if($follower_no >= 1)
                                   {
                                     $following_request="<input type='button' class='button_of_request_in_other_bar follow_button_hide_when_no_need' >Follower</div>";
                                   } */

                                   else if($search_allow_follow_request == 0)
                                    {
                                       $following_request="<div class='button_of_request_in_other_bar follow_button_hide_when_no_need' >Following Blocked</div>";
                                    }

                                    else
                                    {
                                       $following_request="<div class='button_of_request_in_other_bar follow_button_hide_when_no_need'  id='follow_a_user_but_click' >Follow</div>";
                                    }



                                    
                                   $code_two=mysql_query("select * from friends where friend_no='$search_user_no'");
                                   $friend_no=mysql_num_rows($code_two);

                                   $code_three=mysql_query("select * from friend_requests_sent where reciver_no='$search_user_no'");
                                   $friend_request_sent_no=mysql_num_rows($code_three);

                                    $code_four=mysql_query("select * from friends_requests where sender_no='$search_user_no'");
                                   $friend_request_recived_no=mysql_num_rows($code_four);

                                   $code_one=mysql_query("select * from friends ");
                                   $no_of_friends=mysql_num_rows($code_one);
     
                                     
                                     if($search_user_id == $user_id)
                                     {
                                       $friend_request="<div class='button_of_request_in_other_bar' >$no_of_friends Friend</div>";
                                     }

                                    else if($friend_no >= 1)
                                    {
                                      $friend_request="<div class='button_of_request_in_other_bar'  >Friends</div>
                                                          <div class='button_of_request_in_other_bar'  >Un Friend</div>
                                      ";
                                       $following_request="";
                                    }
                                    else if($friend_request_sent_no >= 1)
                                    {
                                      $friend_request="<div  class='button_of_request_in_other_bar' >Request Send</div>";
                                      $following_request="";
                                    }
                                     else if($friend_request_recived_no >= 1)
                                    {
                                      $friend_request="<div  class='button_of_request_in_other_bar' id='accept_friend_request'>Accept Request</div>
                                                      <div class='button_of_request_in_other_bar not_now_buttonn_to_remove' id='dont_accept_the_request_not_now'>Not Now</div>";

                                      $following_request="";
                                    }
                                       else if($following_no >= 1)
                                       {
                                             $friend_request="";
                                       }

                                    else if($search_allow_friend_request == 0)
                                    {
                                       $friend_request="<div class='button_of_request_in_other_bar remove_the_friend_request_option_cause_u_follow' value='Request Blocked'>Requests Blocked</div>";
                                    }
                                    else
                                    {
                                        $friend_request="<div class='button_of_request_in_other_bar remove_the_friend_request_option_cause_u_follow' id='send_friend_request'>Send Request</div>";
                                    }

                            
                                   



                                 ?>
                              <?php echo $friend_request;  ?>
                              <?php echo $following_request;   ?>
                              <div class='button_of_request_in_other_bar' id='grid_of_other_bar_for_option'><img src='../signin/search_of_user/search_need/images/profile/grid-view.png' class='img_of_but'>
                                
                              
                             </div>
                </div>




   </div>
</div>
   <div class='body_of_wall'>
          
        <?php
 Switch($search_page_on)
{
  case '':
      include "search_sub/wall.php";
      
  break;
  case 'question':
      include "search_sub/question.php";
  break;
   case 'status':
          include "search_sub/status.php";
  break;
   case 'friends':
         include "search_sub/friends.php";
  break;
   case 'following':
         include "search_sub/following.php";
  break;
  case 'images':
          include "search_sub/images.php";
  break;
  default:
        include "search_sub/wall.php";
  break;
}

        ?>

   </div>
<script type='text/javascript' src='../signin/search_of_user/search_need/javascript/friend_request_send.js'></script>
<script type='text/javascript' src='../signin/search_of_user/search_need/javascript/friend_request_accept.js'></script>
<script type='text/javascript' src='../signin/search_of_user/search_need/javascript/friend_request_notnow.js'></script>
<script type='text/javascript' src='../signin/search_of_user/search_need/javascript/follow_user.js'></script>
    </body>
</html>  