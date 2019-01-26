<?php
  require ("connection.php");  
?>  
	
<?php
	$id =$_GET['id'];
	mysql_query("DELETE FROM posts WHERE post_id = '$id'")
	or die(mysql_error());  	
	header("Location: hometest.php");
?>