<?php

session_start('sign_in');

session_destroy();

header('location:../../../index.php');

?>