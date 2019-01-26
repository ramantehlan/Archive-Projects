<?php
  require ("connection.php");  
?>  
	
<?php
	$ID =$_REQUEST['post_id'];
	mysql_query("DELETE FROM posts WHERE post_id = '$ID'")
	or die(mysql_error());  	
	header("Location: profiletest.php");
?>