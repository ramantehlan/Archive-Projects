<?php
session_start();
require('function.php');
require('connection.php');
	$v_student_id= "";
 	$v_firstname = "";
	$v_lastname = "";
	$v_password = "";
	$v_passwordRetype = "";
	$v_email= "";
	$v_gender = "";
	
	
	/***********/
	$student_id = "";
	$firstname = "";
	$lastname = "";
	$password = "";
	$passwordRetype = "";
	$email = "";
	$gender = "";
	

if (isset($_POST['Submit'])){
$student_id = $_POST['student_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$passwordRetype = $_POST['passwordRetype'];
$email = $_POST['url'];
$gender = $_POST['gender'];
$pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";

//validation start
	if ($firstname=="") {
		$v_firstname	= "<font color='red'>Required Field <br /> </font>";
	} else
		{
		$v_firstname	= "";
		}
	if ($lastname=="") {
		$v_lastname= "<font color='red'>Required Field <br /> </font>";
	} else {
		$v_lastname= "";
	}
	if ($password=="") {
		$v_password= "<font color='red'>Required Field <br /> </font>";
	} else {
		$v_password= "";
	}	
	if ($password!=$passwordRetype) {
		$v_passwordRetype= "<font color='red'>Password did not match! <br /> </font>";
	} else {
		$v_passwordRetype= "";
	}			
	if ($gender=="") {
		$v_gender= "<font color='red'>Required Field <br /> </font>";
	} else {
		$v_gender= "";
	}
	if ($student_id=="") {
		$v_student_id= "<font color='red'>Required Field <br /> </font>";
	} else {
		$v_student_id= "";
	}
	
	
	if ($firstname!="" && $lastname!= "" && $password == $passwordRetype && $student_id!= "" && $email!= "" && $gender!= ""){
	
	$checkme=mysql_query("SELECT * FROM members WHERE student_id = '$student_id'") or die(mysql_error());
	$checkmyid=mysql_numrows($checkme);
		if($checkmyid > 0){
			header("location:checkid.php");
		}else{
	
			mysql_query("INSERT INTO members (firstname, lastname, password,url, gender, student_id, status_id,photo,account_status)
			VALUES ('$firstname','$lastname','$password','$email','$gender','$student_id','0','default.jpg','0')")or die(mysql_error());
			$wewness = mysql_query("SELECT * FROM members WHERE student_id = $student_id")or die(mysql_error());
			$getid = mysql_fetch_array($wewness);
			$_SESSION['member_id'] = $getid['memberid'];
			$_SESSION['login'] = 'true';
			$_SESSION['studentid'] = $student_id;
			header("location:registerexec.php");
			
			}
	}
	
}
if(isset($_POST['login'])){
		
			$studentid = $_POST['studid'];	
			$pass = $_POST['password'];
			
			$query2 = mysql_query("SELECT * FROM members WHERE student_id = '$studentid' AND password = '$pass' ") or die (mysql_error());
			
			while($studid = mysql_fetch_object($query2))
				{
				echo "$studid->member_id";
				}
				$numberOfRows = MYSQL_NUMROWS($query2);
				if ($numberOfRows == 0)
					{
					
					}
				else if ($numberOfRows > 0){
						$wewness = mysql_query("SELECT * FROM members WHERE student_id = $studentid")or die(mysql_error());
						$getid = mysql_fetch_array($wewness);
						if($getid['account_status']==0){
							$_SESSION['login'] = 'maybe';
							$_SESSION['member_id'] = $getid['member_id'];
							$_SESSION['studentid'] = $getid['student_id'];
							header('location:registerexec.php');
						}elseif($getid['account_status']==2){
							$_SESSION['login'] = 'true';
							$_SESSION['member_id'] = $getid['member_id'];
							$_SESSION['studentid'] = $getid['student_id'];
							header('location:hometest.php');
						
						}elseif($getid['account_status']==1){
							$_SESSION['login'] = 'maybe';
							$_SESSION['member_id'] = $getid['member_id'];
							$_SESSION['studentid'] = $getid['student_id'];
							header('location:fill.php');
						
						}
					}
				}
					
?>
<!DOCTYPE html PUBLIC "-//W3C//D XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/D/xhtml1-transitional.d"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Clique Us</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />

	<link rel="shortcut icon" a href="images/logo.png" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
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
					<h1 class="art-logo-name"></h1>
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
							<form id="loginForm" name="loginForm" method="post" action=""> 
								<font face="calibri" color="#ba1802" size="4">Are you already a member? Log-in here!</font>&nbsp;&nbsp; 
								<font face="calibri" color="#ba1802" size="3">ID Number: </font>
								<input style="height:24px; width:143px;" name="studid" type="text" class="username" />
								<font face="calibri" color="#ba1802" size="3">Password: </font>
								<input style="height:24px; width:143px;" name="password" type="password" class="password" />
								<label>
									<input style="width:54px;" name="login" type="submit" id="login" value="Log-in" />
								</label>
						</li>
					</form>		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    
					
<!--<div class="art-vmenublock">
    <div class="art-vmenublock-tl"></div>
    <div class="art-vmenublock-tr"></div>
    <div class="art-vmenublock-bl"></div>
    <div class="art-vmenublock-br"></div>
    <div class="art-vmenublock-tc"></div>
    <div class="art-vmenublock-bc"></div>
    <div class="art-vmenublock-cl"></div>
    <div class="art-vmenublock-cr"></div>
    <div class="art-vmenublock-cc"></div>

</div> -->
	<div class="cleared"></div>
    </div>
	<div class="art-layout-cell art-content">
		<div class = "goodmorningsaiyo">
		<div class="g"></div>
		</div>
		<div class="art-post">
			<div class="art-post-body">
			<div class="cleared"></div>
			</div>
		</div>
		<div class="cleared"></div>
	</div>
                    <div class="art-layout-cell art-sidebarlog">
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
                    <h3 class="t">Register Here</font></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
				<p>&nbsp;&nbsp;&nbsp;The great way to connect to your school. It's free!</p>
				  <form method="post">
						<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID Number:
							<input  class="lastname"  type="text" name="student_id" id="inputtype"  value="<?php echo $student_id; ?>" /><?php echo $v_student_id; ?><br /><br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:
						<input type="text" name="firstname" id="inputtype"   class="firstname" value="<?php echo $firstname; ?>" /><?php echo $v_firstname; ?><br /> <br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:
						<input  class="lastname"  type="text" name="lastname" id="inputtype"    value="<?php echo $lastname; ?>" /><?php echo $v_lastname; ?><br /> <br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="url"  name="url" id="inputtype"   />
							<?php if(isset($error['status'])){ echo $error['status'];} ?><br /> <br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:
							&nbsp;<input  class="password"  type="password" name="password" id="inputtype"   value="<?php echo $password; ?>" /><?php echo $v_password; ?><br /> <br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retype:
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"  class="passwordRetype"  name="passwordRetype" id="inputtype"   value="<?php echo $passwordRetype; ?>" /><?php echo $v_passwordRetype; ?><br /> <br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:
										&nbsp;&nbsp;&nbsp;&nbsp;<select name="gender" class="gender" value="<?php echo $password; ?>" ><?php echo $v_gender; ?>
										<option>Male</option>
										<option>Female</option>
										</select>
							   
								</select>	<br /> <br />
								&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" id="signup"   value="Sign up" />
					</form>
				</div>                
                <div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
	<div class="cleared"></div>
		</div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                    
                            <div class="art-footer-text">
                                  <p>Clique Us | Copyright © 2011</p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>