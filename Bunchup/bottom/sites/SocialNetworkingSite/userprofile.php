<?php
	session_start();
	include("connection.php");
	include("function.php");
	
	$userid = $_GET['id'];
	
	if($_SESSION['login'] != 'true'){
		header("location:index.php");
	}
	$id = $_SESSION['member_id'];
	
		if(isset($_POST['share'])){
			$post = $_POST['textarea'];
			mysql_query("INSERT INTO posts(member_id,actualpost,date,post_to) VALUE ('$id','$post',NOW(),'$userid')")or die(mysql_error());
		}
		if(isset($_POST['comment'])){
			$comment = $_POST['textarea'];
			$postid = $_POST['ucantseeme'];
			mysql_query("INSERT INTO postcomments(postid,memberid,date,comment) VALUE ('$postid','$userid',NOW(),'$comment')")or die(mysql_error());
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
    <title>Profile</title>
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
                    <h3 class="t">Profile</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

			<?php
					$member_id = $_SESSION['member_id'];
					$post = mysql_query("SELECT * FROM members WHERE member_id = '$userid'")or die(mysql_error());
					$row = mysql_fetch_array($post); 
			?>
					<img src="image/members/<?php echo $row['photo'];?>" alt="" height="274"  width="138" border="0" class="left_bt" />
					<p align='center'><a href="userprofile.php><?php echo $row['firstname']." ".$row['lastname'];?></a></p>
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
                    <h3 class="t"><a href="friends.php?id=<?php echo $member_id;?>" rel='facebox'>School Friend</a></h3>
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
		
		
		 <img src="images/photo.png"><a href="userphoto.php">Snapshots</a>
		
		
		</div>
		<div align="center" style="margin-top: 20px;"> 
		<font style="Calibri" size="3%">
		<?php
			$post = mysql_query("SELECT * FROM members WHERE member_id = '$userid'")or die(mysql_error());
			$row = mysql_fetch_array($post); 
		?>
		Name: &nbsp;<strong><?php echo $row['firstname']." ".$row['lastname'];?>&nbsp;&nbsp;</strong> 
		Address:&nbsp; <strong><?php echo $row['address'];?></strong>&nbsp;&nbsp;
		Age:&nbsp;<strong></strong>	&nbsp;&nbsp;
		Gender: <strong>&nbsp; <?php echo $row['gender'];?> </strong>&nbsp;&nbsp;
		Course: <strong>&nbsp; <?php echo $row['course'];?> </strong>&nbsp;&nbsp;&nbsp;&nbsp;
		Birthdate: <strong>&nbsp; <?php echo $row['birthdate'];?> </strong> &nbsp;&nbsp;
		
		</div>
		
		<div class="art-post-inner art-article" style="margin-top: 20px;">
		
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
			<div class="art-block-body" style="width: 495px;">
						<div class="art-blockheader">
							<div class="l"></div>
							<div class="r"></div>
							<h3 class="t">Write on his/her Face </h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
								<form method="post" action="">
										<textarea name="textarea" cols="50" rows="2" onclick="this.value='';" >Click me....</textarea>
										<input type="submit" id="share" value="Share" name="share" />
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
							<h3 class="t">Recent post </h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div><form method='post' action='test.php'>
								<?php 

									$post = mysql_query("SELECT * FROM posts WHERE post_to = '$userid' ORDER by date DESC")or die(mysql_error());
									while($row = mysql_fetch_array($post)){
										$id = $row['member_id'];
										$hu_u = mysql_query("SELECT * FROM members WHERE member_id = '$id'")or die(mysql_error());
										$rows = mysql_fetch_array($hu_u);
										$iyaid = $row['post_id'];
										$allcomm = mysql_query("SELECT * FROM postcomments WHERE postid = '$iyaid'")or die(mysql_error());
											$counters = 0;
											WHILE($stat = mysql_fetch_array($allcomm)){
											$counters++;
										}
										$allcount = $counters;
										
										$all_like = mysql_query("SELECT * FROM postlike WHERE postid = '$iyaid'")or die(mysql_error());
											$counterss = 0;
											WHILE($stat = mysql_fetch_array($allcomm)){
											$counterss++;
										}
										$allcounts = $counterss;
										
										echo "<input type='hidden' value='".$row['post_id']."' name='cantseeme'/>
											<div>
												<div class='picofjoke'><img src='image/members/".$rows['photo']."' width='50' height ='50' alt=''/>".$rows['firstname'].",</div><div class = 'postcon'><br />
											".$row['actualpost']."<br /><br /><strong>Last</strong> ".$row['date']."<hr /> <a href='comment.php?id=".$row['post_id']."' rel='facebox'>Comments(".$allcount.")</a>
											<div style='float:right;'><a href='deletepostprofile.php?post_id=".$row['post_id']."'>Delete</a></div>
											<hr />
											
											</div></div>";
											
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
                    <div class="art-blockcontent-body">
                <div>
  				<form name="search" method="POST" id="search" action="search.php"> 
					<p>&nbsp;<input type="text" name="friend" id="searchfriend" value="CHMSCians..." onclick="this.value='';"/></p>
					<p><input type="submit" name="search" id="searchbutton" value="Search"/></p>
			 

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
                    <h3 class="t">CHMSC Spots</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
  <ul>
    
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
                    <h3 class="t"></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
				  <ul>
					
					

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