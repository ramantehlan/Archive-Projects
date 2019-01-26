<?php
  require ("connection.php");  
?>  
	
<?php
	$id =$_GET['post_id'];
	mysql_query("DELETE FROM postcomments WHERE postcommentid = '$id'")
	or die(mysql_error());  	
	header("Location: profiletest.php");
?>