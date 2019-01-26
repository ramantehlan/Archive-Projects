<?php
  require ("connection.php");  
?>  
	
<?php
	$ID =$_REQUEST['member_id'];
	mysql_query("DELETE FROM upload WHERE upload_id = '$ID'")
	or die(mysql_error());  	
	header("Location: photo.php");
?>