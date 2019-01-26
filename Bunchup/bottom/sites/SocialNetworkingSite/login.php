<?php
	//start session
	session_start();

	//include mysql_connection.php to connect to the database
	require_once("connection.php"); 
	
	// Define $myusername and $mypassword
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	
	// To protect MySQL injection
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	

	// mySql query 
	$sql="SELECT * FROM members WHERE student_id='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	 	
				
	//checks the query for errors
	
	
	$count=mysql_num_rows($result);
	//echo $count;
		if ($count==1) {
			  
			  $data = mysql_fetch_assoc($result);
			   $_SESSION['user'] = array('member_id' => $data['member_id'], 'real'=> $data['firstname']. ' ' .$data['lastname']);
			   
			   header("location: hometest.php");
		} 
		else {
			 header("location: index.php");
			
		}
		
		//mysql_close();
?>