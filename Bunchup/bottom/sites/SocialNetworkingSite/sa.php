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
			<a href="profiletest.php" class="active"><span class="l"></span><span class="r"></span><span class="t"><font color="#ba1802">Profile</font></span></a>
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
                    <h3 class="t">New Block <?php
					getinfo();
			 ?></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

			<?php
					$member_id = $_SESSION['member_id'];
					$post = mysql_query("SELECT * FROM members WHERE member_id = '$member_id'")or die(mysql_error());
					$row = mysql_fetch_array($post); ?>
					<img src="image/members/<?php echo $row['photo'];?>" alt="" height="120" width="138" border="0" class="left_bt" />
					<p align='center'><?php echo $row['firstname']." ".$row['lastname'];?></p>
					<p class="edit_profile"> <a href="editprofile.php?id=<?php echo $member_id;?>" rel='facebox'> Edit Profile </a></p>
					<p class="info_profile"> <a href="info.php?id=<?php echo $member_id;?>" rel='facebox'>Info</a></p>
					<p class="wall_profile"> <a href="profiletest.php">Wall</a></p>
					<p class="message_profile"> <a href="message.php?id=<?php echo $member_id;?>" rel='facebox'>Messages</a></p>
					<p class="viewphotos_profile"> <a href="photo.php">View Photos</a></p>
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
                      <h3 class="t"><a href="friends.php?id=<?php echo $member_id;?>" rel='facebox'>Friends</a></h3>
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

		<div class="art-post-inner art-article">
			<div class="art-block">
			
			<div class="art-block-body">
						
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							
						<div class="cleared"></div>

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
							<h3 class="t">Your Photos</h3>
						</div>
						<div class="art-blockcontent">
						


<?php

$errors_msg  ="";
//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","1000"); 

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['Submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
 	$image =$_FILES;

 	//if it is not empty
  if($image) 
 	{
 	//get the original name of the file from the clients machine
 		$filename = $image;
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		 $extension = strtolower($extension);
 		  
 	  //if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	  //otherwise we will do more tests
   if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			$errors_msg =  '<p  style="color:green;text-align:center;">Unknown extension! </p>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['image']['tmp_name']);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	$errors_msg = '<p>You have exceeded the size limit!</p>';
	$errors=1;
}
else {

	move_uploaded_file($temp,"images/upload/".$name);
}

//we will give an unique name, for example the time in unix time format
$image_name=time().'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname="images/upload/".$image_name;
//we verify if the image has been uploaded, and print error instead
$copied = copy($_FILES['image']['tmp_name'], $newname);

if (!$copied) 
{
	
}}}}

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && $errors_msg == "") 
 {
			$id = $_SESSION['member_id'];
			$dated = date('Y-m-d h:i:s');
			$newname="images/upload/".$image_name;
			
			$query = mysql_query("INSERT INTO upload (member_id,file_name,caption, datetime) VALUES ('$id','$newname','$newname','$dated')") or die (mysql_error());
	
	       
			
			$result = mysql_query($query);

			
			if ($result){
					$success = '<p style="color:green;text-align:center;"> Records saved!</p>';
			}
			else{
				echo 'upload failed.';
			}
	
 }
 
 //echo $errors_msg;
 
?>		
		<form method="post" name="upload">	
		<label>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Upload your photos, and your fellow Chmscians can recognize you. </p><br />
		<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Uploading Tip:</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You can select multiple photos in the dialog by holding the 'ctrl' key down while &nbsp;&nbsp;&nbsp;&nbsp;clicking on the photos.</p><br />
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Select an image file on your computer (4MB max):</p></label>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image">
		 <input type="submit" id="inputsubmit" name="Submit" value="Upload" />
		</form>
		<?php 
			// echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;Uploaded Photos</h1>";
			//	uploadedphoto();
			
			?>
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
                    <h3 class="t">Search</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
  				<form name="search" method="POST" id="search"> 
					<p><input type="text" name="friend" id="searchfriend" /></p>
					<p><input type="submit" name="search" id="searchbutton" value="Search"/></p>
			 
	  <?php
					 
						 #SEARCH MEMBER
						if(isset($_POST['search'])){
							$search_term = $_POST['friend'];
							 #search query
							 echo "<div style=\"float: left;padding: 14px 21px;width: 548px;\">";
							 echo "<h3 style=\"padding-bottom:10px;\">Search Result</h3>";
							 searchmembers($search_term);
							 echo "</div>";
						}
					 ?>
  </form>
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
                    <h3 class="t">Do I know U?</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
  <p>Lorem ipsum dolor sit amet. Nam sit amet sem. Mauris a ante.</p>
  <ul>
    <li>
      <a href="#" title="All News">All News</a> (50)
    </li>
    <li>
      <a href="#" title="Best of the Year">Best of the Year</a> (4)
    </li>
    <li>
      <a href="#" title="Hyperlink">Hyperlink</a> (24)
    </li>
    <li>
      <a href="#" title="Visited link" class="visited">Visited link</a> (17)
    </li>
    <li>
      <a href="#" title="Hovered link" class="hover">Hovered link</a> (6)
    </li>
  </ul>
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
                    <h3 class="t">Archives</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
  <ul>
    <li>
      <a href="#" title="November 2008">November 2008</a>
    </li>
    <li>
      <a href="#" title="October 2008">October 2008</a>
    </li>
    <li>
      <a href="#" title="September 2008">September 2008</a>
    </li>
    <li>
      <a href="#" title="June 2008">June 2008</a>
    </li>
  </ul>
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
                    <h3 class="t">Blogroll</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
				  <ul>
					<li>
					  <a href="#">My first blog</a>
					</li>
					<li>
					  <a href="#">Who will prevail?</a>
					</li>
					<li>
					  <a href="#">Stay positive!</a>
					</li>
					<li>
					  <a href="#">Oil still going up</a>
					</li>
					<li>
					  <a href="#">Obama wins again</a>
					</li>
					<li>
					  <a href="#">Gripes and Grins</a>
					</li>
					<li>
					  <a href="#">2008 Olympics</a>
					</li>
					<li>
					  <a href="#">How to SEO</a>
					</li>
					<li>
					  <a href="#">On Global Warming</a>
					</li>
					<li>
					  <a href="#">Can you guess?</a>
					</li>
				  </ul>
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