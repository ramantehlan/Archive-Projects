<?php


?>
<html>
  <head>
     <title>Welcome to binkpad</title>
     <link rel='stylesheet' href='need/css/main.css'>

     <link rel='stylesheet' href="../base/javascript/jquery/css/jquery-ui.css">
     <link rel='stylesheet' href="../base/javascript/jquery/css/self_ui.css">

     <script type="text/javascript" src="../base/javascript/jquery/jquery-1.10.2.js"></script>
     <script type="text/javascript" src="../base/javascript/jquery/jquery-ui.js"></script>
     
       <script type='text/javascript'>
            $( document ).tooltip({
      track:true,
      show:{effect:'show'} ,
      hide:{ effect:'explode'}
    });
  </script>  
  </head>
  <body>

 <div class='data'>
  <?php

    include "data.php";   

  ?>
</div>
        <div class='body'>
          <APPLET CODE="hellow.class" WIDTH=200 HEIGHT=50></APPLET>
           <!-- 
              .menu is for the left side and it is for the display of the files which are there in that folder
            -->
           <div class='menu'>
                <div class='menu_head'>
                           Menu
                </div>
                <div class='menu_body'>
                          <?php
                             include "display_menu.php";
                          ?>

                </div>
           </div>
            
          <!--
             .display is to show the content of the files on the screen with html and css codes 
           -->
           <div class='display'>
               <div class='heading_display'>
                Heading display
               </div>
               <div class='body_display'>
                    <?php
                             include "display_note.php";
                          ?>
               </div>
           </div>

           <!-- 
              .pad is to edit the content of the files on the screen
            -->
            <div class='other_tab'>
              <form method="post" action="#">
               <input type='name' placeholder="file name" maxlength="30" class="input" id='file_name' value="<?php  echo basename($_SESSION['path'],'.txt');  ?>">
               <input type='heading' placeholder="heading" maxlength='20' class='input'>
               <input type='submit' style='display:none;' id='send_name'>
              </form>
            </div>
           <div class="pad">
                 <div class='no_left'>
                          <?php
                             include "display_no.php";
                          ?>
                  </div>
                  <span class='load_pad'><?php include "display_pad.php"; ?></span>
                 
           </div>
            <div class='save_here'></div>

         
       </div>
       <script type="text/javascript" src='need/js/main.js'></script>
       
  </body>
</html>