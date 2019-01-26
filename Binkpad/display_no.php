  <?php
                    

              if(isset($_SESSION['path']))
              {
 
              }
              else
              {
                      session_start();   
              }

                           $current_line = $_SESSION['current_line'];
                           $no_of_line = $_SESSION['no_of_line'];
                       while( $current_line <= $no_of_line) 
                       {
                           echo "<div class='nos' title=' " . $current_line ."'> " . $current_line . "</div>";
                           $current_line +=1;
                      }
                
               
               ?>