<?php
include "../need/php_comman_plug/connect/connect.php";
include "../need/php_comman_plug/get_info/info.php";
include "../need/php_comman_plug/display/bg_color.php";



?>
<!DOCTYPE HTML>
<html>
   <head>
        <title><?php echo $user_name; ?> Profile</title>

        <!-- this is css for the index -->
         <link rel='stylesheet' href='signin_need/css/search.css'>
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
    $site='search';
  
    $selected ='selected_option_of_menu_bar';
    $other ='option_of_menu_bar';
    
     echo "<input type='hidden' value='' id='java_url_for_plugin'>";
    include "signin_need/php_plugin/top/top.php"; ?>
   </div>
 
   <div class='body'>
                 <div class='Search_bar_of_top_in_search'>
                    <input type='search' autocomplete='off' class='input_in_search_box' <?php 
                        if(isset($_GET['s']))
                           {
                            $v=$_GET['s'];
                            echo "value='$v'";
                           }
                           else
                           {

                           }

                                        
                    ?>Placeholder='Search for friend and people' maxlength='50'>
                    <input type='button' value='Search' class='button_of_search'> 
                         
  
                </div>
                <div class='row_of_search_result_tell'>
                         <div class='no_of_result_socase'>200 Result found!</div>
                </div>

                <div class='box_of_result_of_main_search'>
                             <div class='s_result_div_for_img'>
                                   <img src='users/users_uploded_photo/defalt.jpg'>
                             </div>  
                             <div class='s_result_name'>raman tehlan <span class='s_result_nick_name'>(Ninckanem)</span></div>  
                             <div class='s_result_mutual_line'>Friends</div>
                             <div class='s_result_home_town'>Delhi,India</div> 
                             <div class='s_result_about'>i m god of proggraming , i m a change man , i m crazy for art, beauty, design, i love my grandfather most in this world, i m not too social and most important i m a hippie and i want to mark my present in this world although i can die but im dead. :P</div>  
                             <div class='s_result_comman_f'></div>
                </div>
                 

    </div>
    </body>
</html>  