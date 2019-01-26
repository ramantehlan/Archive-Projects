<?php echo "<textarea class='real_pad' id='notes' >";
                  
                         if(isset($_SESSION['path']))
              {
 
              }
              else
              {
                      session_start();   
              }
                     
                  // this is to print the file
                           $file=fopen($_SESSION['path'],"r");
                             while(!feof($file))
                             {
                               echo fgets($file) ;
                             }
                            fclose($file);

                echo "</textarea>";      
          

?>

