<?php

session_start();
$now = $_POST['to'];

file_put_contents("file.txt",$now);


?>