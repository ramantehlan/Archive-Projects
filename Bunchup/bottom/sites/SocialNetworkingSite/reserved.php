<?php 
					
								$member_id=$_SESSION['member_id'];
								$seeall=mysql_query("SELECT * FROM friends WHERE friends_with='$member_id' AND status='unconf'") or die(mysql_error());
								while($pila=mysql_fetch_array($seeall)){
									
									$fromhum=$pila['member_id'];
									$post = mysql_query("SELECT * FROM members WHERE member_id='$fromhum'")or die(mysql_error());
									$row = mysql_fetch_array($post);
									echo '
									
										<div align="center"><img src="image/members/'.$row['photo'].'" alt="" height="70" width="70" border="0" class="left_bt" /></div>
										<div align="center">'.$row['firstname']." ".$row['lastname'].'</div>
										<div align="left">'."<input type='submit' name='accept' value='Accept' id='inputsubmit'>".'</div>
										<div align="left">'."<input type='submit' name='decline' value='Decline' id='inputsubmit'>".'</div>
									';
								}
															
							?>