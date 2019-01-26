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