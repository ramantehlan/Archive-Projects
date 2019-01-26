<?php 
	include ("connection.php");
	$id = $_GET['id'];
	session_start();
	
	$select = mysql_query("SELECT * FROM members WHERE member_id='$id' ");
	$object = mysql_fetch_array($select);
	if (!$object) 
		{
		die("Error: Data not found..");
		}
	
	$studId=$object['student_id'];
	$first=$object['firstname'];
	$last=$object['lastname'];
	$pass=$object['password'];
	$gender=$object['gender'];
	$email=$object['url'];
	$interest=$object['interest']; 


	 if(isset($_POST['save']) && $errors_msg == "") 
 {
			$firstname = $_POST['firstname'];
			$lastname  = $_POST['lastname'];
			$password   = $_POST['password'];
			$address   = $_POST['address'];
			$contact = $_POST['contactnumber'];
			$url = $_POST['url'];
			$gender = $_POST['gender'];
			$course = $_POST['course'];
			$bday = ($_POST['month']).'-'.($_POST['day']).'-'.($_POST['year']); 
			$interest = $_POST['interest']; 
			
			$sql = mysql_query("UPDATE members SET firstname = '$firstname', lastname = '$lastname', password = '$password', address = '$address',url = '$url',gender = '$gender', contact_no = '$contact', birthdate = '$bday', interest = '$interest', WHERE member_id = $id");
			
			$result = mysql_query($sql);
			
			if ($result){
					$success = '<p style="color:green;text-align:center;"> Records saved!</p>';
			}
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
	
	<link rel="shortcut icon" a href="images/logo.png" />
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
			<a href="hometest.php" ><span class="l"></span><span class="r"></span><span class="t"><font color="#ba1802">Home</font></span></a>
		</li>	
		<li>
			<a href="updates.php" ><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Happenings</font></span></a>
			<ul>
				<li>
					<a href="mails.php" ><span class="l"></span><span class="r"></span>
					<span class="t"><font color="#000000">Mails</font></span></a>
				</li>
				<li>
					<a href="updates.php" ><span class="l"></span><span class="r"></span>
					<span class="t"><font color="#000000">Updates</font></span></a>
				</li>
				<li>
					<a href="friendlyoffers.php"><span class="l"></span><span class="r"></span>
					<span class="t"><font color="#000000">Friendly Offers(<?php 
					
					$member_id=$_SESSION['member_id'];
					$seeall=mysql_query("SELECT * FROM friends WHERE friends_with='$member_id' AND status='unconf'") or die(mysql_error());
					$pila=mysql_numrows($seeall);
					echo $pila; ?>)</font></span></a>
				</li>
			</ul>
		</li>
		<li>
			<a href="profiletest.php" ><span class="l"></span><span class="r"></span><span class="t"><font color="#ba1802">Profile</font></span></a>
		</li>
		<li>
			<a href="logout.php" ><span class="l"></span><span class="r"></span><span class="t"><font color="#ba1802">Log-out</font></span></a>
		</li>		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
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
                    <h3 class="t">It's Me!</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

			<?php
					$member_id = $_SESSION['member_id'];
					$post = mysql_query("SELECT * FROM members WHERE member_id = '$member_id'")or die(mysql_error());
					$row = mysql_fetch_array($post); ?>
					<img src="image/members/<?php echo $row['photo'];?>" alt=""  width="138" height="120" border="0" class="left_bt" />
					<p align='center'><?php echo $row['firstname']." ".$row['lastname'];?></p>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
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
                      <h3 class="t"><a href="friends.php?id=<?php echo $member_id;?>" rel='facebox'>School Friends</a></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
			<p>
			<?php 
				//showfriends($_SESSION['studentid']['member_id']);
			?>
			 </p>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                    <div class="art-layout-cell art-content">
<div class="art-post">
<div align="center" style="margin-top: 20px;"> 
		<font style="Calibri" size="3%" >
		<img src="images/edit_friend.png"><a href="updateprof.php?id=<?php echo $member_id;?>" rel='facebox'> Update Profile </a></strong> &nbsp;&nbsp;&nbsp;&nbsp;
		 <img src="images/info.png"><a href="info.php?id=<?php echo $member_id;?>" rel='facebox'>About Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/messages.png"><a href="message.php?id=<?php echo $member_id;?>" rel='facebox'>Mails</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <img src="images/photo.png"><a href="photo.php">Snapshots</a>
		
		
		</div>


		<div class="cleared"></div>
	
</div>
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
							<h3 class="t">Your Shots</h3>
						</div>
						<div class="art-blockcontent">
						
		<form method="post" name="upload" enctype='multipart/form-data'>	
		<label>
		<br>
		<table bordercolor="#FFFFFF" border="0" width="10">
			<tr>
				<td>Name: </td>
				<td><input type="text" name="firstname" id="inputtype" value="<?php echo $first; ?>">&nbsp;<input type="text" name="lastname" id="inputtype" value="<?php echo $last; ?>"></td></tr>
			<br>
			<tr>
				<td>Change Password:</td>
				<td><input type="text" name="password" id="inputtype" value="<?php echo $pass; ?>"></td></tr>
			<br>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" id="inputtype" value=""></td><tr>
			<br>
			<tr>
				<td>Contact Number:</td>
				<td><input type="text" name="contactnumber" id="inputtype" value=""></td></tr>
			<br>
			<tr>
				<td>Email Address:</td>
				<td><input type="text" name="url" id="inputtype" value="<?php echo $email; ?>"></td></tr>
			<br>
			<tr>
				<td>Gender:</td>
				<td><select name="gender">
					<option><?php echo $gender; ?></option>
					<option>Male</option>
					<option>Female</option>
				</select></td></tr>
			<br>
			<tr>
				<td>Course: </td>
				<td><input type="text" name="ecours" id="inputtype"></td></tr>
			<br>
			<tr>
				<td>Birthdate:</td>
			<br>
				<td><select name="Month" >
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
					<?php echo "-"; ?>
					<select name="Day">
					<?php
						$day_bd=1;
						while($day_bd<=31)
							{
					?>
						<option><?php echo $day_bd; ?></option>
							<?php $day_bd++; } ?>
					</select>
					<?php echo "-"; ?>
					<select name="Year">
					 <?php
						$year_bd=1985;
						while($year_bd<=2011)
							{
					?>
						<option><?php echo $year_bd; ?></option>
					<?php $year_bd++; } ?>
					</select></td></tr>
			<br>
			<tr>
					<td>Interest: </td>
				<td><textarea name="interest" value="<?php echo $interest;?>"></textarea></td></tr>
			
			<br>
			<br>
			<tr>
			<td><strong>Educational Background</strong></td></tr>
			<br>
			<tr>
			<td><strong>Elementary Level</strong></td></tr>
			<br>
			<tr>
			<td>School Graduated:</td>
				<td><input type="text" name="elemschool" id="inputtype"></td></tr>
			<br>
			<tr>
			<td>Year Graduated: </td>
				<td><select name="Year">
					 <?php
						$year_bd=1985;
						while($year_bd<=2011)
							{
					?>
				<option><?php echo $year_bd; ?></option>
					<?php $year_bd++; } ?></td></tr>
			<br>
			<tr>				
								<td align="right"><input type="submit" id="inputsubmit" name="save" value="Save Changes" id="save" width="10px"></td></tr>
								<br />
			</table>
					<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div><form method='post' action='test.php'>
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

		<div class="cleared"></div>
	
</div>
			<div class="art-post-body">
			
			</div>
                      <div class="cleared"></div>
                    </div>
                    <div class="art-layout-cell art-sidebar2">
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
                    <h3 class="t">Look for your friends</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body" style="width: 195px;">
                <div>
  				<form name="search" method="POST" id="search" action="search.php"> 
					<p>&nbsp;<input type="text" name="friend" id="searchfriend"  onclick="this.value='';" value="CHMSCians..."/></p>
					<p><input type="submit" name="search" id="searchbutton" value="Search" /></p>
			
  </form>
</div>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		
    </div>
</div>
<div class="art-block">


               
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
			

</div>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
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
                    <h3 class="t">CHMSC Spots</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
					<script type="text/javascript" src="gallery/js/jquery.js"></script>
					<script type="text/javascript" src="gallery/js/swfobject.js"></script>
					<script type="text/javascript" src="gallery/js/flashgallery.js"></script>
					<script type="text/javascript">
					jQuery.flashgallery('gallery/gallery.swf', 'gallery/config.json', { width: '190px', height: '170px', background: 'transparent' });
					</script>
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
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
                    <h3 class="t"></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
				  
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
							<p>CHMSC United | Copyright � 2011</p>
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
<script type='text/javascript'>
			jQuery(".ended").click( function() {
				var id = $(this).attr("id");
				
				jQuery.ajax({
					type: "POST",
					data: ({id: id}),
					url: "test.php",
					success: function(response) {
					jQuery(".ended").fadeIn().html(response);
					}
				});
			})
</script>