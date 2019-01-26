<?php
include "../need/php_comman_plug/connect/connect.php";
include "../need/php_comman_plug/get_info/info.php";
include "../need/php_comman_plug/display/bg_color.php";



?>
<!DOCTYPE HTML>
<html>
   <head>
        <title><?php echo $user_name; ?> Home</title>

        <!-- this is css for the index -->
         <link rel='stylesheet' href='../need/css/comman/comman.css'>

         <!-- this is csss of this page only -->
        <link rel='stylesheet' href='signin_need/css/signin_index.css'>
       
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
    $site='index';
    
    $selected ='selected_option_of_menu_bar';
    $other ='option_of_menu_bar';
   
     echo "<input type='hidden' value='' id='java_url_for_plugin'>";
    include "signin_need/php_plugin/top/top.php"; ?>
   </div>
 
   <div class='body'>
              <div class='right_row'>
                               <div class='user_information_board_index shadow'>
                                          <div class='head_of_uib'>
                                                    <div class='image_of_user'>
                                                             <img src='<?php
                                                             if($user_p_picture =="")
                                                              {$p_url_p="defalt.jpg";} 
                                                            else{$p_url_p= $user_p_picture;}
                                                            
                                                              echo "http://$host_of_host/signin/users/users_uploded_photo/$p_url_p" ; 
                                                              ?>' class='img_of_user_in_uibi' alt='user image'>
                                                     </div>
                                                     <div class='name_of_user' title='<?php echo $user_name; ?>'>
                                                           <?php echo $user_name;  ?>
                                                     </div>

                                                     
                                          </div>
                                          <div class='body_of_uib'>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Status</div>
                                                            <div class='value_of_line_of_uib'>5000</div>
                                                  </div>
                                                </a>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Images</div>
                                                            <div class='value_of_line_of_uib'>50</div>
                                                  </div>
                                                  </a>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Question</div>
                                                            <div class='value_of_line_of_uib'>6</div>
                                                  </div>
                                                  </a>
                                                 <a href='#'><a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Answer</div>
                                                            <div class='value_of_line_of_uib'>24</div>
                                                  </div>
                                                  </a>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Following</div>
                                                            <div class='value_of_line_of_uib'>9040</div>
                                                  </div>
                                                  </a>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Follower</div>
                                                            <div class='value_of_line_of_uib'>30</div>
                                                  </div>
                                                  </a>
                                                 <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'>Searches</div>
                                                            <div class='value_of_line_of_uib'>3</div>
                                                  </div>
                                                  </a>
                                                  <a href='#'> <div class='option_of_uib_line'>
                                                            <div class='main_of_line_in_uib'> Confession </div>
                                                            <div class='value_of_line_of_uib'>10</div>
                                                  </div>
                                                  </a>
                                                  
                                          </div>
                               </div> 
                                  <?php
                                   
                                     include "signin_need/php_plugin/bottom/bottom.php"; 

                                     ?>           
              </div>
                  <div class='left_row'>
                     <div class='status_update_box shadow'>
                                <div class='head_of_update_box'>
                                               Status Update

                                 </div>
                                 <div class='body_of_update_box'>
                                        <textarea type='status' placeholder='Whats your trend today?' class='status_write' id='status_write' ></textarea>
                                         <div class='bottom_bar_of_update'>
                                             <div class='upload_php'>

                                             </div>
                                             <input type='button' value='Post' class='post_status_but but' id='submit_status'>
                                          </div> 
                                 </div>

                      </div>

                      <div class='confession_update_box shadow'>
                            <div class='head_of_update_box'>
                                               Confession 

                                               <div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Confession</b> is an option to share your secret or any confession anonymously to all your friends and followers.
                                                      </div>
                                               </div>
                                 </div>
                                 <div class='body_of_confess_box'>
                                        <textarea type='confession' placeholder='Do you confess?' class='confisstion_write '></textarea>
                                         <div class='bottom_bar_of_confess'>
                                             <input type='button' value='Post' class='post_confess_but but'>
                                          </div> 
                                 </div>
                      </div>

                      <div class='e-bio shadow' >
                           <div class='head_of_update_box'>
                                               E-Note 

                                               <div class='question'>
                                                      <div class='message_of_question'>
                                                       <b>E-Note</b> is an option to write your thoughts, fillings or activities happened with you today. It is something which only you can see. 
                                                      </div>
                                               </div>
                                 </div>
                                  <div class='body_of_ebio_box'>
                                        <textarea type='text' placeholder='How was the day?' class='bio_write'></textarea>
                                         <div class='bottom_bar_of_bio'>
                                             <input type='button' value='Save' class='post_bio_but but'>
                                          </div> 
                                 </div>

                      </div>
                  </div>     

   </div>
  <script type='text/javascript' src='signin_need/javascript/status.js'></script>
  <script type='text/javascript' src='signin_need/javascript/confess.js'></script>
  <script type='text/javascript' src='signin_need/javascript/bio.js'></script>
    </body>
       
</html>  