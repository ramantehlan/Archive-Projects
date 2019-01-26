<?php

  $note = $_POST['note'];

  session_start();

  $path = $_SESSION['path'];

  file_put_contents($path,$note);


?>