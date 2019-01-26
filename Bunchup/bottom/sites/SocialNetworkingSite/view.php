<?php
	session_start();
	include("connection.php");
	include("function.php");
	
	if($_SESSION['login'] != 'true'){
		header("location:index.php");
	}
	$id = $_SESSION['member_id'];
		if(isset($_POST['share'])){
			$post = $_POST['textarea'];
			mysql_query("INSERT INTO posts(member_id,actualpost,date,post_to) VALUE ('$id','$post',NOW(),'$id')")or die(mysql_error());
		}
		if(isset($_POST['comment'])){
			$comment = $_POST['textarea'];
			$postid = $_POST['ucantseeme'];
			mysql_query("INSERT INTO postcomments(postid,memberid,date,comment) VALUE ('$postid','$id',NOW(),'$comment')")or die(mysql_error());
		}
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

	
	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	<link href="facebox1.2/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
			<link href="../css/example.css" media="screen" rel="stylesheet" type="text/css" />
			<script src="facebox1.2/src/facebox.js" type="text/javascript"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(" a[rel*=facebox]" ).facebox({
						loadingImage : " ../src/loading.gif" ,
						closeImage   : " ../src/closelabel.png" 
					})
				})
	</script>
</head>
<body>

<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-clip">
                <div class="art-header-center">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                </div>
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="./index.html"></a></h1>
                                                 <h2 class="art-logo-text"></h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">	
		<li>
			<a href="profiletest.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Member's Info</span></a>
		</li>
		<li>
			<a href="logoutadmin.php" ><span class="l"></span><span class="r"></span><span class="t">Log-out</span></a>
		</li>		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">



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
							<h3 class="t">Status</h3>
		</div>
		<div class="art-blockcontent">
		<div class="art-blockcontent-body">
		<h2 class="art-postheader">
		</h2>
		<div>
				<table align="center" border="0" bordercolor="#FFCC99" width="400px">
				<tr><td align="center"><font style="font-family:Calibri">Member ID</font></td>
				<td align="center"><font style="font-family:Calibri">Firstname</font></td>
				<td align="center"><font style="font-family:Calibri">Lastname</font></td>
				<td align="center"><font style="font-family:Calibri">Address</font></td>
				<td align="center"><font style="font-family:Calibri">Username</font></td>
				<td align="center"><font style="font-family:Calibri">Password</font></td>
				<td align="center"><font style="font-family:Calibri">Birthdate</font></td>
				<td align="center"><font style="font-family:Calibri">School_ID</font></td>
				<td align="center"><font style="font-family:Calibri">Delete Member</font></td>
				<td align="center"><font style="font-family:Calibri">Confirm</font></td>
				</tr>
				<?php
 				 require ("connection.php");  
		
			

				$query = "SELECT * FROM members"; 
				$result = mysql_query($query) or die(mysql_error());
				while($row = mysql_fetch_array($result))
				{
				$ID = $row['member_id'];
				echo "<tr><td align='center'>". $row['member_id']. " </td>";
				echo "<td align='center'>" .$row['firstname']. " </td>";
				echo "<td align='center'>" .$row['lastname']. " </td>";
				echo "<td align='center'>" .$row['address']. " </td>";
				echo "<td align='center'>" .$row['student_id']. " </td>";
				echo "<td align='center'>" .$row['password']. " </td>";
				echo "<td align='center'>" .$row['birthdate']. " </td>";
				echo "<td align='center'>" .$row['student_id']. " </td>";
				echo "<td align='center'><a href='delete.php?member_id=".$row['member_id']."'><img src='image/del.jpg'></a></td>";
				echo "<td align='center'> </td> </tr>";
				}
							
				?>
		</div>
		</div>
							

</body>
</html>



