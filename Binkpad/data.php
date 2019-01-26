 <?php

    //this is the path of file 
                           session_start();
                           
                           if(file_exists("notes/" . file_get_contents("file.txt")))
                           {
                               $f = file_get_contents("file.txt");
                           }
                           else
                           {
                            $f="index.txt";
                           }
                       $_SESSION['path']="notes/" . $f;
                   
                           
                           
                           //this is no of lines 
                           $_SESSION['no_of_line'] =0;
                           //this is the current line
                            $_SESSION['current_line']=1;


                            $file=fopen($_SESSION['path'],"r");
                             while(!feof($file))
                             {
                               $_SESSION['no_of_line'] +=1;
                               fgets($file);
                             }
                            fclose($file);

                          

  ?>