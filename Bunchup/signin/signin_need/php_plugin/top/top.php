          <link rel='stylesheet' href='<?php echo "http://$host_of_host/need/css/comman/smiles.css" ?>'>
     <link rel='stylesheet' href='<?php echo "http://$host_of_host/signin/signin_need/" ?>css/top.css'>

      <script type='text/javascript' src='<?php echo "http://$host_of_host/need/"; ?>javascript/jquery/jquery.js'></script>
       <script type='text/javascript' src='http://<?php echo $host_of_host;?>/need/javascript/jquery/jquery-1.10.2.js'></script>
        <script type='text/javascript' src='http://<?php echo $host_of_host;?>/need/javascript/jquery/jquery-ui.js'></script>
           <script type='text/javascript'>
            $(document).ready(function(){
                        $(document).tooltip({
                                 track:true,
                                 show:{effect:'show'} ,
                                 hide:{ effect:'explode'}
                           });

            });
                      
                      

        </script>
        <style>
               

.ui-tooltip {
  padding: 8px;
  position: absolute;
  z-index: 9999;
    max-width: 300px;
    border:0px;
    background-color:white;
    border-radius:3px;
    box-shadow:0px 0px 3px rgb(20,50,70);

}
        </style>


    <style>
    html{
       background-color:rgb(<?php echo $bg_color; ?>);
       background-attachment:fixed;
       background-repeat:repeat;
      background-image:url('<?php echo "http://$host_of_host/signin/"; ?>users/background_images/<?php 
         if(isset($bg_img))
         {
           echo $bg_img; 
         }
         else
         {

         }
       

        ?>');  
  }
    </style>
    <?php

    ?>
   

   <div class='middle_top'>
                     <img src='<?php echo "http://$host_of_host/need/"; ?>images/logo/logo.png' class='logo'>
                     <div class='menu_bar'>
                          <div class='menu_of_upper_option'>
                                     <style>
                                           .urlimg_of_board{background-image:url('<?php echo "http://$host_of_host/signin/"; ?>users/users_uploded_photo/<?php if($user_p_picture ==""){echo "defalt.jpg";} else{echo $user_p_picture;} ?>');
                                                            background-size:100% ;
                                                             text-shadow:1px 1px 3px black;
                                                            color:white;
                                                        }
                                     </style>

                                     <a href='<?php echo "http://$host_of_host/signin/"; ?>index.php'><?php if($site==="index"){echo "<style>.urlimg_of_board{ box-shadow:inset 0px 0px 10px 5px rgb(10,10,40);text-shadow:1px 1px 1px black;}</style><div class='"  . $selected ;} else{echo "<div class='" . $other;}  ?> urlimg_of_board'>Board</div></a>
                                    <a href='<?php echo "http://$host_of_host/signin/"; ?>search.php'><div class='<?php if($site==="search"){echo $selected;} else{echo $other;}  ?>'>Search</div></a>
                                     <a href='http://<?php  echo getenv("SERVER_NAME") . "/" . $_SESSION['bunchup_id']; ?>'><div class='<?php if($site==="wall"){echo $selected;} else{echo $other;}  ?>'>Wall</div></a>
                                     <a href='<?php echo "http://$host_of_host/signin/"; ?>bunch.php'><div class='<?php if($site==="bunch"){echo $selected;} else{echo $other;}  ?>'>Bunch</div></a>
                          </div>
                          <div class='middle_of_upper_option_or_search'>
                             <div class='search_div_of_upper' data-scalemode="width">
                                            <input type='' class='input_for_search' placeholder='Search for friends and people' id='input_of_search' maxlength='50'>
                                            <input type='button' class='search_button' id='but_of_search'><br>
                                            <div class='neck_of_search'>
                                               Search
                                            </div>
                                            <div class='display_of_search '  data-targetsize="0.734" id='display_of_search_down'>
                                            </div>
                             </div>
                          </div>
                     </div>
                     <div class='option_bar'>
                            <div class='option_of_option_bar setting_option'>
                                      <div class='slide_menu a_of_setting'>
                                                <a href='<?php echo "http://$host_of_host/signin/settings/"; ?>'><div class='menu_of_setting'>Settings</div></a>
                                                <a href='<?php echo "http://$host_of_host/signin/settings/"; ?>help.php'><div class='menu_of_setting'>Help</div></a>
                                                <a href='<?php echo "http://$host_of_host/signin/settings/"; ?>signout.php'><div class='menu_of_setting'>Sign out</div></a>
                                      </div>

                            </div>
                            <div class='option_of_option_bar bunch_option'>
                                       <?php
                                           mysql_select_db($user_db_name);
                                           $code="select * from friends_requests";
                                           $no_of_friend_request=mysql_num_rows(mysql_query($code));

                                           if($no_of_friend_request >= 1)
                                           {
                                             echo "<div class='numver_in_bar'>$no_of_friend_request</div>";
                                           }
                                           else
                                           { 
                                            
                                           }

                                       ?>
                                       
                                      <div class='slide_menu'>
                                                             <div class='heading_of_slide_down_menu'>
                                                                          Friend Requests
                                                             </div>
                                                             <div class='body_of_the_slide_down_menu' id='refresh_it_for_the_request'>

                                                              <?php  
                                                                    // this code is only to get friend request which have come to me 

                                                                      mysql_select_db($user_db_name); 
                                                                      $code_of_request=mysql_query("select * from friends_requests ORDER BY  `no` DESC ");
                                                                      
                                                                      static $no_r;
                                                                      $no_r += 1;
                                                                         while($GETNO=mysql_fetch_array($code_of_request))
                                                                              {           
                                                                                         $request_no=$GETNO['sender_no'];

                                                                                         mysql_select_db($db_name);
                                                                                         $code_2="select * from users where user_no='$request_no'";
                                                                                         $GET_FRIEND_NO=mysql_fetch_array(mysql_query($code_2));

                                                                                         $request_name=$GET_FRIEND_NO['name'];
                                                                                         $request_id=$GET_FRIEND_NO['id'];
                                                                                         $request_db_name=$GET_FRIEND_NO['db_name'];
                                                                                         $request_img=$GET_FRIEND_NO['Profile_picture'];

                                                                                         $code_for_mutual_friends="SELECT a.friend_no, b.friend_no
                                                                                         FROM `$user_db_name`.`friends` a, `$request_db_name`.`friends` b
                                                                                         WHERE a.friend_no = b.friend_no";
                                                                                         $mutual_friends=mysql_num_rows(mysql_query($code_for_mutual_friends));

                                                                                          if($mutual_friends >= 1)
                                                                                                { 
                                                                                                    $mutual_friends_line="$mutual_friends Mutual Friend";   
                                                                                                 }
                                                                                          else
                                                                                               {
                                                                                                    $mutual_friends_line="";
                                                                                                 }

                                                                                                   if($request_img =="")
                                                                                                             {
                                                                                                              $request_img="defalt.jpg";
                                                                                                              } 
                                                           
                                                                                                     else
                                                                                                                {
                                                                                                                   $request_img= $request_img;
                                                                                                                 }


                                                                              $display_now = <<< EOFILE
                                                          <div class='row_of_one_friend_request_box'>
                                                                            <div class='left_side_for_of_row_for_img'>
                                                                                      <a href='http://$host_of_host/$request_id'><img src='http://$host_of_host/signin/users/users_uploded_photo/$request_img' class='img_of_friend_request_user'></a>
                                                                            </div>
                                                                            <div class='right_side_for_of_row_of_request'>
                                                                                        <div class='name_of_user_in_request_box' title="$request_name"><a href='http://$host_of_host/$request_id'>$request_name</a></div>
                                                                                        <div class='mutual_friends_row_request'>$mutual_friends_line</div>
                                                                                        <div class='accept_the_request'>
                                                                                            <div class='button_of_request_in_slide_menu not_now_buttonn_to_remove_$no_r' id='reject_Friend_request_$no_r' >Not Now</div>
                                                                                            <div class='button_of_request_in_slide_menu accept_request_remove_now_go_$no_r' id='accept_friend_request_$no_r' >Accept Request</div>
                                                                                           
                                                                                        </div><br>


                                                                             </div>
                                                          </div>
                                                  <script type='text/javascript'>
                                                                    
                                                          $(document).ready(function(){

                                                                        $("#accept_friend_request_$no_r").click(function(){
                                                                                      $('html').css("cursor","wait");
                                                                                      $(this).css("cursor","wait");
                                                                                       $(".not_now_buttonn_to_remove_$no_r").hide();
                                                                                       var button=$(this);
                                                                                       var search_no='$request_no';
                                                                                       var my_no='$user_no';
     
                                                                                   $.post("http://$host_of_host/signin/search_of_user/search_need/php_comman_plug/accept_friend_request/accept_friend_request.php",{no_of_searcher:my_no,no_of_search:search_no},function(accept_friend_request){
                                                                                     
                                                                                       button.html(accept_friend_request);
                                                                                       //display.html(send_friend_request); 
                                                                                        $('html').css("cursor","default");
                                                                                        $(this).css("cursor","default");
                                                                                    });
                                                                          });


                                                                          $("#reject_Friend_request_$no_r").click(function(){
                                                                                       $('html').css("cursor","wait");
                                                                                       $(this).css("cursor","wait");
                                                                                        $(".accept_request_remove_now_go_$no_r").hide();
                                                                                        var button=$(this);
                                                                                        var search_no=document.getElementById("no_of_search").value;
                                                                                        var search_no='$request_no';
                                                                                        var my_no='$user_no';
  
                                                                                $.post("http://$host_of_host/signin/search_of_user/search_need/php_comman_plug/send_friend_notnow/send_friend_notnow.php",{no_of_searcher:my_no,no_of_search:search_no},function(accept_friend_request){
                                                 
                                                                                      button.html(accept_friend_request);
                                                                                      //display.html(send_friend_request);  
                                                                                       $('html').css("cursor","default");
                                                                                       $(this).css("cursor","default");
                                                                                 });
    
                                                                         });
                                                         });


                                              </script>


EOFILE;

                                                                            echo $display_now;
                                                                            $no_r+= 1 ;
                                                                            
                                                                      }// while statement end here

                                                              ?>
                                                                   

                                                             </div>

                                      </div>
                            </div>
                            <div class='option_of_option_bar message_option'>
                                        <div class='numver_in_bar'></div>
                                      <div class='slide_menu'>
                                                           <div class='heading_of_slide_down_menu'>
                                                                          Messages
                                                             </div>
                                                             <div class='body_of_the_slide_down_menu'>
                                                             

                                                             </div>
                                      </div>
                            </div>
                            <div class='option_of_option_bar notification_option'>
                                       <div class='numver_in_bar'></div>
                                      <div class='slide_menu'>
                                                                   <div class='heading_of_slide_down_menu'>
                                                                         Notifications
                                                             </div>
                                                             <div class='body_of_the_slide_down_menu'>

                                                             </div>
                                      </div>
                            </div>
                     </div>
   </div>
<script type='text/javascript' src='<?php echo "http://$host_of_host/signin/signin_need/"; ?>javascript/search/search.js'></script>