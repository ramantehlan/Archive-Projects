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
    <title>Home</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />

	<link rel="shortcut icon" a href="images/logo.png" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="images/icon" href="images/logo.png" />
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
			<a href="hometest.php" class="active"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Home</font></span></a>
		</li>	
		<li>
			<a href="updates.php" ><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Happenings</font></span></a>
			<ul>
				<li>
						<?php
						$member_id = $_SESSION['member_id'];
							$sent = mysql_query("SELECT * FROM messages WHERE recipient = '$member_id'")or die(mysql_error());
								$senta = mysql_numrows($sent);
								$received = mysql_query("SELECT * FROM messages WHERE receiver = '$member_id'")or die(mysql_error());
								$receiveda = mysql_numrows($received);
							?>
					<a href="mails.php" ><span class="l"></span><span class="r"></span>
					<span class="t"><font color="#000000">Mails(<?php echo $receiveda; ?>)</font></span></a>
				</li>
				<li>
					<a href="updates.php"><span class="l"></span><span class="r"></span>
					<span class="t"><font color="#000000">Friendly Offers(<?php 
					
					$member_id=$_SESSION['member_id'];
					$seeall=mysql_query("SELECT * FROM friends WHERE friends_with='$member_id' AND status='unconf'") or die(mysql_error());
					$pila=mysql_numrows($seeall);
					echo $pila; ?>)</font></span></a>
				</li>
			</ul>
		</li>
		<li>
			<a href="profiletest.php"><span class="l"></span><span class="r"></span><span class="t">
			<font color="#ba1802">Profile</font></span></a>
		</li>
		<li>
			<a href="logout.php"><span class="l"></span><span class="r"></span><span class="t">
			<font color="#ba1802">Log-out</font></span></a>
		</li>		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
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
                    <h3 class="t">Upcoming Events</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
						<script type="text/javascript" src="gallery2/js/jquery.js"></script>
<script type="text/javascript" src="gallery2/js/swfobject.js"></script>
<script type="text/javascript" src="gallery2/js/flashgallery.js"></script>
<script type="text/javascript">
jQuery.flashgallery('gallery2/gallery2.swf', 'gallery2/config.json', { width: '160px', height: '242px', background: 'transparent' });
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
                    <h3 class="t"><a href="friends.php?id=<?php echo $member_id;?>" rel='facebox' style="text-decoration: none;">School Friends</a></h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
					<ul>
							<?php
							
								$member_id=$_SESSION['member_id'];							
								$post = mysql_query("SELECT * FROM friends WHERE friends_with = '$member_id' OR member_id = '$member_id' AND status = 'conf' ")or die(mysql_error());
								
								$num_rows  =mysql_numrows($post);
							
							if ($num_rows != 0 ){

								while($row = mysql_fetch_array($post)){
				
								$myfriend = $row['member_id'];
								$member_id=$_SESSION['member_id'];
								
									if($myfriend == $member_id){
									
										$myfriend1 = $row['friends_with'];
										$friends = mysql_query("SELECT * FROM members WHERE member_id = '$myfriend1'")or die(mysql_error());
										$friendsa = mysql_fetch_array($friends);
									
									echo '<li> <a href=userprofiletest.php?id='.$friendsa["member_id"].' style="text-decoration:none;"><img src="image/members/'. $friendsa['photo'].'" height="50" width="50"><br>'.$friendsa['firstname'].' '.$friendsa['lastname'].' </a> </li>';
									}else{
										
										$friends = mysql_query("SELECT * FROM members WHERE member_id = '$myfriend'")or die(mysql_error());
										$friendsa = mysql_fetch_array($friends);
										
										echo '<li> <a href=userprofiletest.php?id='.$friendsa["member_id"].' style = "text-decoration:none;"><img src="image/members/'. $friendsa['photo'].'" height="50" width="50"><br>'.$friendsa['firstname'].' '.$friendsa['lastname'].' </a></li>';
									}
								}
								}else{
									echo 'You don\'t have friends </li>';
								}
						
								
							?>
							</ul>
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
							<h3 class="t">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share your thoughts</h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
								<form method="post" action="">
									<?php
											$member_id = $_SESSION['member_id'];
											$sql=mysql_query("SELECT * FROM members WHERE member_id='$member_id'") or die(mysql_error());
											$getpic=mysql_fetch_array($sql);
											$post = mysql_query("SELECT * FROM members WHERE member_id = '$member_id'")or die(mysql_error());
											$row = mysql_fetch_array($post); 
											echo "<a href='profiletest.php' style='text-decoration:none;'>".$row['firstname']." ".$row['lastname']."</a>"."<br />"."&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/members/".$getpic['photo']."'width='80px' height='80px'>";
											
											
									?>
									
										<p align="center"><textarea name="textarea" style="width: 300px; margin-left: 169px; margin-top: -73px;" onclick="this.value='';" >Click me..</textarea></p>
										
										<p align="center"><input  style="width: 80px; height: 36px; margin-left: 175px;" type="submit" id="share" value="Share" name="share" /><br /></p>
								
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
			<div class="art-block-body" style="width: 495px;">
						<div class="art-blockheader">
							<div class="l"></div>
							<div class="r"></div>
							<h3 class="t">Recent post</h3>
						</div>
						<div class="art-blockcontent">
							<div class="art-blockcontent-body">
							<h2 class="art-postheader">
							</h2>
						<div class="cleared"></div>
							<div>
							<?php	
										$member_id=$_SESSION['member_id'];
										$poster = mysql_query("SELECT * FROM posts WHERE member_id = '$member_id' ORDER by date DESC LIMIT 0,1")or die(mysql_error());
									while($row = mysql_fetch_array($poster)){
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
											$counter = 0;
											WHILE($stat = mysql_fetch_array($all_like)){
											$counter++;
										}
										$allcountlike = $counter;
										$postid = $row['post_id']
										?>
										<input type='hidden' value='<?php echo $row['post_id'];?>' name='cantseeme'/>
										<div id="<?php echo $postid;?>">
											<div class='pcont'>
												<div class='picofjoke'>
													
													<img src='image/members/<?php echo $rows['photo'];?>' width='50' height ='50' alt=''/><a href="userprofiletest.php?id=<?php echo $id; ?>" style="text-decoration: none;"><?php echo $rows['firstname'];?></a>
												</div>
												
												<div class = 'postcon'>
													<br />
													<?php 
													echo $row['actualpost'];?><span style='font-size:12px;'><strong><br /><br />Last </strong><?php echo $row['date'];?> <hr /><a href='seeall.php?id=<?php echo $row['post_id'];?>' rel='facebox' style='text-decoration:none;'>Thumbs up (<?php echo $allcountlike;?>)</a><a href='comment.php?id=<?php echo $row['post_id'];?>' rel='facebox' style='text-decoration:none;'>Comments(<?php echo $allcount;?>)</a></span>
												<?php
												if ($row['member_id'] == $_SESSION['member_id']){
												echo "
												<div style='float:right;'>
													<a href='deleteposthome.php?id=".$row['post_id']."' style='text-decoration:none;'>	Delete
													</a>
												</div>";
												}else{
												echo "
												<div style='float:right;'>
													<a href='#'>	Report
													</a>
												</div>";
												}
												?>
											</div>
										</div>
									</div>
									<?php }	
									
									$post = mysql_query("SELECT * FROM friends WHERE friends_with = '$member_id' OR member_id = '$member_id' AND status = 'conf' ")or die(mysql_error());
									
									while($row = mysql_fetch_array($post)){
				
									$myfriend = $row['member_id'];
									$member_id=$_SESSION['member_id'];
								
									if($myfriend == $member_id){
									
									$myfriend1 = $row['friends_with'];
									
									}else{
									$myfriend1 = $row['member_id'];
									}
									
									
									$poster = mysql_query("SELECT * FROM posts WHERE member_id = '$myfriend1' ORDER by date DESC LIMIT 0,1")or die(mysql_error());
									while($row = mysql_fetch_array($poster)){
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
										$postid = $row['post_id']
										?>
										<input type='hidden' value='<?php echo $row['post_id'];?>' name='cantseeme'/>
										<div id="<?php echo $postid;?>">
											<div class='pcont'>
												<div class='picofjoke'>
													
													<img src='image/members/<?php echo $rows['photo'];?>' width='50' height ='50' alt=''/><a href="userprofiletest.php?id=<?php echo $id; ?>" style="text-decoration: none;"><?php echo $rows['firstname'];?></a>
												</div>
												
												<div class = 'postcon'>
													<br />
													<?php 
													echo $row['actualpost'];?><span style='font-size:12px;'><strong><br /><br />Last </strong><?php echo $row['date'];?> <hr /><a href='seeall.php?id=<?php echo $row['post_id'];?>' rel='facebox' style='text-decoration:none;'>Thumbs up</a><a href='comment.php?id=<?php echo $row['post_id'];?>' rel='facebox' style='text-decoration:none;'>Comments(<?php echo $allcount;?>)</a></span>
												<?php
												if ($row['member_id'] == $_SESSION['member_id']){
												echo "
												<div style='float:right;'>
													<a href='deleteposthome.php?id=".$row['post_id']."'>	Delete
													</a>
												</div>";
												}else{
												echo "
												<div style='float:right;'>
													<a href='#' style='text-decoration:none;'>	Report
													</a>
												</div>";
												}
												?>
											</div>
										</div>
									</div>
					<?php }}
					 ?>
					<script type="text/javascript">
		$(document).ready( function() {
				$(".comment").click( function() {
					var id = $(this).attr("id");
					var comment = $(".comment_txt" + id ).val();
					$('.daw_comment').slideDown().append(
					
					"<p>" + comment + "</p>"
					
					);
					// $(".comment_txt" + id ).val("");	
					
						jQuery.ajax({
							type: "POST",
							data: ({id: id, comment: comment}),
							url: "post_comment.php",
							success: function(response) {
							
							$(".comment_txt" + id ).val("")
							}
						});
				
				});
		
		});
		</script>								
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
					<p>&nbsp;<input type="text" name="friend" id="searchfriend"  onclick="this.value='';" value="CHMSCians..."/></p>
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
                    <h3 class="t">CHMSCians you may know</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                <div>
				<p></p>
				  <ul>
					<?php
					
						$id = $_SESSION['member_id'];
						$post = mysql_query("SELECT * FROM members WHERE member_id != '$id' LIMIT 0,3")or die(mysql_error());
						while($row = mysql_fetch_array($post)){
							echo '
							<li>
								<p align="center"><a href="profilefriends.php?id='.$row['member_id'].'"><img src="image/members/'.$row['photo'].'" alt="" height="70" width="70" border="0" class="left_bt" /></p>
								<p align="center">'.$row['firstname']." ".$row['lastname'].'</p>
								<p align="center" style="margin-left: 2px;"><a href="addfriend.php?id='.$row['member_id'].'" rel="facebox"style="text-decoration:none;"  >Add as School Friend</a></p>
							</li>';
						}
					?>
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
                    <h3 class="t">CHMSC Spots</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
					
					<script type="text/javascript" src="gallery/js/jquery.js"></script>
<script type="text/javascript" src="gallery/js/swfobject.js"></script>
<script type="text/javascript" src="gallery/js/flashgallery.js"></script>
<script type="text/javascript">
jQuery.flashgallery('gallery/gallery.swf', 'gallery/config.json', { width: '195x', height: '250px', background: 'transparent' });
</script>
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
                    <h3 class="t">Advertisement</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
					<script type="text/javascript" src="gallery11/js/jquery.js"></script>
<script type="text/javascript" src="gallery11/js/swfobject.js"></script>
<script type="text/javascript" src="gallery11/js/flashgallery.js"></script>
<script type="text/javascript">
jQuery.flashgallery('gallery11/gallery11.swf', 'gallery11/config.json', { width: '200px', height: '242px', background: 'transparent' });
</script>
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