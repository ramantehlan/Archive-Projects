<?php

include ('connection.php');
if (isset($_POST['submit'])) 
  	{ 			
		$UserName = $_POST['username'];			
		$UserPassword = $_POST['password'];	
		$result = mysql_query("SELECT `admin`.`username`, `admin`.`password` FROM admin
				WHERE ((`admin`.`username` = '$UserName') AND (`admin`.`password` = '$UserPassword'))");
				
					
					if (!$result) 
					{
					die("Query to show fields from table failed");
					}
					
					$numberOfRows = MYSQL_NUMROWS($result);	
					echo $numberOfRows;					
					If ($numberOfRows == 0) 
						{
						echo "<font color= 'red'>Invalid username and password!</font>";
						
						}
					else if ($numberOfRows > 0) 
						{
						session_register('is');
						$_SESSION['is']['submit']    = TRUE;
						$_SESSION['is']['UserName'] = $_POST['username'];
						$session = "1";	
					
						header("location:home.php");						
 				}
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link rel="shortcut icon" href="images/logo.png">
<link href="admin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FF9900; font-family: "Courier New", Courier, monospace; font-size: 18px; }
-->
</style>
</head>
<body>
<form name="form" method="post" action="">
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
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
            </div>
            <div class="cleared reset-box"></div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
    <div class="art-block-body">
	<div id="body" align="center">
            <div class="formblock" align="center"> 
			   <p>&nbsp;</p>
			   <p>&nbsp;</p>
			   <p><img width="340" src="images/ad.png" style="padding-right: 20px;"></p>
			   <p>&nbsp;</p>
			   <p><a class="style3" style="padding-right: 68px;"> Username</a>
			     <a class="style3" style="padding-right: 110px;">
			       Password</a> <br>
			     <a>
			       <input type="text" name="username" class="textfields" />
			       </a> <a style="padding-right: 7px;">
		            <input type="password" name="password" class="textfields" />
		            </a>
			      <input type="submit" name="submit" id="login" value="">
			     </p>
            </div>             



						 
                                		<div class="cleared"></div>
              </div>
                </div>
		<div class="cleared">
		  </div>
		</div>
    </div>
</div>
               <div class="art-footer-body">

                            <div class="art-footer-text">
                                <p>CHMSC United | Copyright © 2011</p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
 
</div>


</form>
</body>
</html>
