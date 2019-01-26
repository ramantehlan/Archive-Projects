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
    <title>Information</title>
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
							<h3 class="t">Personal Information<a href=""><img src="images/del.jpg" style="padding-left:150px;  margin-top: 4px;"></a></h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
								
								<?php 
								
									$postid = $_GET['id'];
									$hu_u = mysql_query("SELECT * FROM members WHERE member_id = '$postid'")or die(mysql_error());
									$rows = mysql_fetch_array($hu_u);
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Name:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['firstname']."&nbsp;&nbsp;".$rows['lastname']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Address:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['address']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Contact Number:"."&nbsp;&nbsp;&nbsp;".$rows['contact_no']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Email Address:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['url']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Age:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['age']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Gender:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['gender']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Status:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['status']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Birthdate:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['birthdate']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Interest:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['interest']. " </p>";
									echo "<br />";
									echo "<p align='center'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong>"."Education and Work"."</strong>"."</p> ";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong>"."Elementary Level"."</strong>"."</p> ";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."School Graduated:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."</p>";
									echo"<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['elems']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."School Year:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['elemyear']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong>"."Highschool Level"."</strong>"."</p> ";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."School Graduated:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."</p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['highschool']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."School Year:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['hsyear']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong>"."Tertiary Level"."</strong>"."</p> ";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Course:"."</p>";
									echo"<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['course']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."School Year:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['collegeyear']. " </p>";
									echo "<p align='center'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong>"."Working Experience"."</strong>"."</p> ";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Employer:"."</p>";
									echo"<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['employer']. " </p>";
									echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Position:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['position']. " </p>";
									
								?>
								
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
