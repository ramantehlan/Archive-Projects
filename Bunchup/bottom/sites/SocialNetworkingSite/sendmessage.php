<?php
	session_start();
	include("connection.php");
	include("function.php");
	
	$userid = $_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New Page</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div class="art-post">

		<div class="art-post-inner art-article">
			<div class="art-block">
			<div class="art-block-tl"></div>
			<div class="art-block-tr"></div>
			<div class="art-block-bl"></div>
			<div class="art-block-br"></div>
			<div class="art-block-tc"></div>
			<div class="art-block-bc"></div>
			<div class="art-block-cl"></div>
			<div class="art-block-cr"></div>
			<div class="art-block-cc"></div>
			<div class="art-block-body">
						<div class="art-blockheader">
							<div class="l"></div>
							<div class="r"></div>
							<h3 class="t">Send Message</h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
							<form name="" method="post">
							<p align="left">From:
							<br>
							<?php
								$member_id = $_SESSION['member_id'];
								$post = mysql_query("SELECT * FROM members WHERE member_id = '$member_id'")or die(mysql_error());
								$row = mysql_fetch_array($post); 
								?>
							<input type="text" name="from" id="inputtype" value="<?php  echo $row['firstname']; ?>">
							
							</p>
							<p align="left">To: </p>
							<p>
							<?php
								//$member_id = $_SESSION['member_id'];
								$posts = mysql_query("SELECT * FROM members WHERE member_id = '$userid'")or die(mysql_error());
								$rows = mysql_fetch_array($posts); 
								?>
							<input type="text" name="sendto" value="<?php echo $rows['member_id']; ?>">						
							<p align="left">Message:
							<p><textarea name="message"></textarea></p>
							
							<p align="right"><input type="submit" id="inputsubmit" name="send" value="Send">
							</p>
							
							<?php 
							
								if (isset($_POST['send'])){
								
									$from = $_POST['from'];
									$sendto = $_POST['sendto'];
									$message = $_POST['message'];
								mysql_query("INSERT INTO messages (receiver, recipient, datetime, content, status)
								VALUES ('$sendto','$from',NOW(),'$message','unread')")or die(mysql_error());
								}
							 ?>
						</form>
							
							
						<div class="cleared"></div>
							<div>
							<br />
							</div>
							<div class="cleared"></div>
							</div>
						</div>
				<div class="cleared"></div>
			</div>
		</div>
             
        <div class="cleared"></div>
		</div>

		<div class="cleared"></div>
	
</div>
</body>
</html>
