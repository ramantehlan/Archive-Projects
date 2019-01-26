   <?php
   // this is to print the file
     if(isset($_SESSION['path']))
              {
 
              }
              else
              {
                      session_start();   
              }
                         
                           $file=fopen($_SESSION['path'],"r");
                             while(!feof($file))
                             {
                               echo fgets($file) . "<br>";
                             }
                            fclose($file);

                           ?>