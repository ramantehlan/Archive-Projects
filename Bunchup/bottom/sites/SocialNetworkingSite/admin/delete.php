<?php
  require ("connection.php");  
?>  
	
<?php
	$ID =$_REQUEST['member_id'];
	mysql_query("DELETE FROM members WHERE member_id = '$ID'")
	or die(mysql_error());  	
	
	header("Location: viewpost.php");
?>