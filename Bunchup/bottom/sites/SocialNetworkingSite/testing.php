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
							<h3 class="t">Update My Profile</h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
								<form name="editpof" method="post">
								<p>Firstname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="firstname" id="inputtype" value="<?php echo $first; ?>"></p>
								<p>Lastname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="lastname" id="inputtype" value="<?php echo $last; ?>"></p>
								<p>Change Password:
									<input type="text" name="password" id="inputtype" value="<?php echo $pass; ?>"></p>
								<p>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="address" id="inputtype" value=""></p>
								<p>Contact Number:&nbsp;&nbsp;
									<input type="text" name="contactnumber" id="inputtype" value=""></p>
								<p>Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="url" id="inputtype" value="<?php echo $email; ?>"></p>
								
								<p>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="gender">
										<option><?php echo $gender; ?></option>
										<option>Male</option>
										<option>Female</option>
									
									</select>
								<p>Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="ecours" id="inputtype"></p>
								<p>Birthdate:</p><p>
								<select name="Month" >
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
								<p>Interest:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<textarea name="interest" value="<?php echo $interest;?>"></textarea></p>
								<br>
								<br>
								<p><strong>Educational Background</strong></p>
								<br>
								<p><strong>Elementary Level</strong><p>
								<p>School Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="elemschool" id="inputtype"></p>
								<p>Year Graduated: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="Year">
								  <?php
												$year_bd=1985;
													while($year_bd<=2011)
														{
											?>
								  <option><?php echo $year_bd; ?></option>
								  <?php $year_bd++; } ?>
								fhfghghj
								<p align="right" style="padding-right: 129px; width: 121px; height: 48px;"><input type="submit" id="inputsubmit" name="save" value="Save Changes" id="save" width="10px"></p>
								<br />
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
</body>
</html>
