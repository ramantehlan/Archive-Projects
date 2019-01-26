<?php
require("connection.php");
if(isset($_POST['Submit'])){
			$member=$_SESSION['member_id'];
			$name = $_FILES["image"] ["name"];
			$type = $_FILES["image"] ["type"];
			$size = $_FILES["image"] ["size"];
			$temp = $_FILES["image"] ["tmp_name"];
			$error = $_FILES["image"] ["error"];
			mysql_query("INSERT INTO upload(member_id,file_name,datetime) 
								VALUES ('$member','$name',NOW())") or die(mysql_error());
			
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
			