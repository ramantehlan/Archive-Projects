<?php
	session_start();
	include("connection.php");
	include("function.php");
	
	
	
	if (isset($_POST['insert'])){
	
	$contact = $_POST['contact'];
	$status = $_POST['status'];
	$bday = ($_POST['Month']).'-'.($_POST['Day']).'-'.($_POST['Year']); 
	$elemschool = $_POST['elemschool'];
	$elemyear = $_POST['elemyear'];
	$highschool = $_POST['highschool'];
	$hsyear = $_POST['hsyear'];
	$interest = $_POST['interest'];
	$course = $_POST['course'];
	$collegeyear = $_POST['collegeyear'];
	$employer = $_POST['employer'];
	$position = $_POST['position'];
				
	$member=$_SESSION['member_id'];		
	mysql_query("UPDATE members SET contact_no = '$contact', status = '$status',birthdate = '$bday', elems = '$elemschool', elemyear = '$elemyear', highschool = '$highschool', hsyear = '$hsyear', interest = '$interest', course = '$course', collegeyear = '$collegeyear', employer = '$employer', position = '$position', account_status = 2 WHERE member_id = '$member'") or die(mysql_error());
	
	$_SESSION['login'] = 'true';
	header("Location:hometest.php");
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
                    <h3 class="t">It's Me! </h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

			<?php
					$member_id = $_SESSION['member_id'];
					$post = mysql_query("SELECT * FROM members WHERE member_id = '$member_id'")or die(mysql_error());
					$row = mysql_fetch_array($post); ?>
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
							<h3 class="t">Get to know more informations of you!</h3>
						</div>
						<div class="art-blockcontent">
						
		<form method="post" name="upload" enctype='multipart/form-data'>	
		<label>
		<br>
		<p >&nbsp;&nbsp;&nbsp;Upload your photos, and make it as your primary picture so that a &nbsp; Chmscian may recognize you. </p>
		<br />
		<br />
		<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Uploading Tip:</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You can select multiple photos in the dialog by holding the 'ctrl' key &nbsp;&nbsp;&nbsp;down while clicking on the photos.</p><br />
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Select an image file on your computer (4MB max):</p></label>
		&nbsp;&nbsp;&nbsp;&nbsp;<input id="browse" type="file" name="image">
		 <input id="upload" type="submit" name="Submit" value="Upload" />
		 <br>
		 <br>
		 <br>
		</form>
		<?php
if (isset($_POST['Submit'])){


	$member=$_SESSION['member_id'];
	
	$name = $_FILES["image"] ["name"];
	$type = $_FILES["image"] ["type"];
	$size = $_FILES["image"] ["size"];
	$temp = $_FILES["image"] ["tmp_name"];
	$error = $_FILES["image"] ["error"];
	mysql_query("INSERT INTO upload(member_id,file_name,datetime) 
						VALUES ('$member','$name',NOW())") or die(mysql_error());
	echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;Your photo has been successfully uploaded!!!<br>";
	if ($error > 0){
		die("Error uploading file! Code $error.");
	}else{
		if($size > 10000000) //conditions for the file
		{
		die("Format is not allowed or file size is too big!");
		}
		else
		{
		move_uploaded_file($temp,"image/members/".$name);
		}
	} 
}
			
 
?>		
		<?php 
			
				uploadedphoto();
		?>
							<form name="insert" method="post">
								<p align="center"><strong>&nbsp;&nbsp;More basic informations about you </strong></p>
								<br>
								<p>&nbsp;&nbsp;Contact No.:	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="" name="contact" id="inputtype" onclick="this.value='';" value="Mobile/Telephone">
								<br>
								<br>
								<p>&nbsp;&nbsp;Status:	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="status">
										<option>Single</option>
										<option>In a relationship</option>
										<option>Engaged</option>
										<option>Married</option>
										<option>Divorced</option>
										<option>Widowed</option>
									</select>
								<br>
								<br>
								<p>&nbsp;&nbsp;Birthdate:</p>
								<br>
								<p>
								&nbsp;&nbsp;<select name="Month" >
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
								</select>
								<br>
								<br>
								<p>&nbsp;&nbsp;Interest:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<textarea name="interest" ></textarea></p>
								<br>
								<br>
								<p align="center"><strong>&nbsp;&nbsp;Education and Work</strong></p>
								<br>
								<p><strong>&nbsp;&nbsp;Elementary Level</strong><p>
								<br>
								<p>&nbsp;&nbsp;School Graduated:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="elemschool" id="inputtype" onclick="this.value='';" value="Name of school.."></p>
								<br>
								<p>&nbsp;&nbsp;Year Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="elemyear">
								  <?php
												$year_bd=1985;
													while($year_bd<=2011)
														{
											?>
								  <option><?php echo $year_bd; ?></option>
								  <?php $year_bd++; } ?></select>
								<br>
								<p><strong>&nbsp;&nbsp;Secodary Level</strong><p>
								<br>
								<p>&nbsp;&nbsp;School Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="highschool" id="inputtype" onclick="this.value='';" value="Name of school.."></p>
								<br>
								<p>&nbsp;&nbsp;Year Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="hsyear">
								  <?php
												$year_bd=1985;
													while($year_bd<=2011)
														{
											?>
								  <option><?php echo $year_bd; ?></option>
								  <?php $year_bd++; } ?></select>
								<br>
								<p><strong>&nbsp;&nbsp;Tertiary Level</strong><p>
								<br>
								<p>&nbsp;&nbsp;Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="course" id="inputtype" ></p>
								<br>
								<p>&nbsp;&nbsp;Year Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="collegeyear">
								  <?php
												$year_bd=1985;
													while($year_bd<=2011)
														{
											?>
								  <option><?php echo $year_bd; ?></option>
								  <?php $year_bd++; } ?></select>
								<br>
								<br>
								
								<p><strong>&nbsp;&nbsp;Working Experience</strong></p>
								<br>
								<p>&nbsp;&nbsp;Employer: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="employer" id="inputtype" onclick="this.value='';" value="Where have you worked at?"></p>
								<br>
								<p>&nbsp;&nbsp;Position:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="position" id="inputtype">
								<br>
								<br>
								<p align="right" style="padding-right: 129px; width: 121px; height: 48px;"><input type="submit" id="inputsubmit" name="insert" value="Save" id="save" width="10px"></p>
								<br />
		
							</form>
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
					jQuery.flashgallery('gallery/gallery.swf', 'gallery/config.json', { width: '220px', height: '300px', background: 'transparent' });
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