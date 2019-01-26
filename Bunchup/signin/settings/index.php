<?php

?>
<!DOCTYPE HTML>
<html>
   <head>
        <title><?php echo $user_name; ?> Settings</title>

        <!-- this is css for the index -->
         
         <link rel='stylesheet' href='../../need/css/comman/comman.css'>
       

        <!-- this is css for this page -->
         <link rel='stylesheet' href='settings_need/css/settings.css'>

        <!-- this is to background -->
        

        <!-- this is the jquery -->

        <script type='text/javascript' src='../../need/javascript/jquery/jquery.js'></script>

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
    $site='';
  
    $selected ='selected_option_of_menu_bar';
   
    echo "<input type='hidden' value='../' id='java_url_for_plugin'>";
    $other ='option_of_menu_bar';
    include "../signin_need/php_plugin/top/top.php"; ?>
   </div>
   <div class='body'>
       <div class='left_row_of_setting' >
              <Div class='option_row_of_this_page'>
                        <div class='heading_of_left_row_setting'>
                          Settings
                       </div>
                       <div class='body_of_setting_left_row'>
                               <?php 
                                  if(isset($_GET['d']))
                                  {
                                    $d=$_GET['d'];

                                    switch($d)
                                    {
                                      case 'general':
                                             $frame_url='general/general.php';
                                             $select='general';
                                      break;
                                      case 'security':
                                            $frame_url='security/security_check.php';
                                            $select='security';
                                      break;
                                      case 'block':
                                            $frame_url='block/block.php';
                                            $select='block';
                                      break;
                                       case 'advance':
                                            $frame_url='advance/advance.php';
                                            $select='advance';
                                      break;

                                      case 'privacy':
                                             $frame_url='privacy/privacy.php';
                                             $select='privacy';
                                      break;

                                      case 'display':
                                             $frame_url='display/display.php';
                                             $select='display';
                                      break;

                                        case 'switch':
                                             $frame_url='switch/switch.php';
                                             $select='switch';
                                      break;

                                      default:
                                             $frame_url='general/general.php';
                                             $select='general';
                                      break;
                                    }
                                  }
                                  else
                                  {
                                    $frame_url='general/general.php';
                                    $select='general';
                                  }
                               ?>
                                <a href='?d=general'><Div class="<?php if($select == 'general'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>" id='general'>General</div></a>
                                <a href='?d=advance'><Div class="<?php if($select == 'advance'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>" id='advance'>Advance</div></a>
                                <a href='?d=privacy'><Div class="<?php if($select == 'privacy'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>" id='privacy'>Privacy</div></a> 
                                <a href='?d=security'><Div class='<?php if($select == 'security'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>' id='security'>Security</div></a>
                                <a href='?d=switch'><Div class='<?php if($select == 'switch'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>' id='switch'>Switch</div></a>
                                <a href='?d=display'><Div class="<?php if($select == 'display'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>" id='display'>Display</div></a>
                                <a href='?d=block'><Div class='<?php if($select == 'block'){ echo 'selected_menu_of_option_of_setting';} else{echo 'menu_of_option_of_setting';} ?>' id='block'>Blocking</div></a>
                      </div>
              </div>
               <?php
                                  
                                     include "../signin_need/php_plugin/bottom/bottom.php"; 

                                     ?>  
       </div>
       <div class='right_row_of_setting'>

                <Div class='body_of_option_page'>

                <iframe src='settings_sub/<?php echo $frame_url; ?>' id='frame_of_setting'></iframe>
                  
                 
              </div>
     </div>
  </div>
   
    </body>
</html>  