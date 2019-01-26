<?php
	session_start();
	include("connection.php");
	include("function.php");
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
							<h3 class="t"><a href=""><img src="images/del.jpg" style="padding-left:300px;  margin-top: 4px;"></a></h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
								<?php 
									
									$postid = $_GET['id'];
									$id = $_SESSION['member_id'];
									$query2 = mysql_query("SELECT * FROM postlike WHERE postid = '$postid' AND memberid = '$id'") or die (mysql_error());
									$numberOfRows = MYSQL_NUMROWS($query2);
									if ($numberOfRows == 0){
										mysql_query("INSERT INTO postlike(postid,memberid) VALUES('$postid','$id') ")or die(mysql_error());
									}else{
									$post = mysql_query("SELECT * FROM postlike WHERE postid = '$postid'")or die(mysql_error());
									
									$row = mysql_fetch_array($post);
										$id = $row['memberid'];
										$hu_u = mysql_query("SELECT * FROM members WHERE member_id = '$id'")or die(mysql_error());
										$rows = mysql_fetch_array($hu_u);
									
									
									echo "<div>
									<div class='picofjoke'><img src='image/members/".$rows['photo']."' width='50' height ='50' alt=''/></div>".$rows['firstname']."".$rows['lastname']."</div>";
									
								}
								?>
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
