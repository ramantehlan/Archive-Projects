<?php
  require ("connection.php");  
?>  
	
<?php
	$id =$_GET['post_id'];
	mysql_query("DELETE FROM reply WHERE reply_id = '$id'")
	or die(mysql_error());  	
	header("Location: sentmails.php");
?>