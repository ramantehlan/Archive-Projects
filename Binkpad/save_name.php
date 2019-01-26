<?php

 session_start();

 $path=$_SESSION['path'];
 $new=$_POST['new_name'];
 
 $file="$new" . ".txt";


 rename($path,"notes/$file");
 
 file_put_contents("file.txt",$file);


?>