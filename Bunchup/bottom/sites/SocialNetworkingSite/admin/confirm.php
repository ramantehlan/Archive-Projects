<?php
	include("connection.php");
	$member_id=$_GET['id'];
	if(isset($_POST['approve'])){
	mysql_query("UPDATE members SET account_status = '1' WHERE  student_id = '$member_id'") or die (mysql_error());
	header("location:confirmation.php");
	}elseif(isset($_POST['decline'])){
	mysql_query("UPDATE members SET account_status = '2' WHERE  student_id = '$member_id'") or die (mysql_error());
	header("location:confirmation.php");
	
	}
	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link rel="shortcut icon" href="images/logo.png">
<link href="admin.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #e2e092; font-family: "Courier New", Courier, monospace; font-size: 18px; }
-->
</style>
</head>
<body>
<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
        <script language="JavaScript" type="text/javascript" src="jTPS.js"></script>
		
        <link rel="stylesheet" type="text/css" href="jTPS.css">

        <script>

                $(document).ready(function () {
               
                        $('#demoTable').jTPS( {perPages:[5,12,15,50,'ALL'],scrollStep:1,scrollDelay:30,
                                clickCallback:function () {    
                                        // target table selector
                                        var table = '#demoTable';
                                        // store pagination + sort in cookie
                                        document.cookie = 'jTPS=sortasc:' + $(table + ' .sortableHeader').index($(table + ' .sortAsc')) + ',' +
                                                'sortdesc:' + $(table + ' .sortableHeader').index($(table + ' .sortDesc')) + ',' +
                                                'page:' + $(table + ' .pageSelector').index($(table + ' .hilightPageSelector')) + ';';
                                }
                        });

                        // reinstate sort and pagination if cookie exists
                        var cookies = document.cookie.split(';');
                        for (var ci = 0, cie = cookies.length; ci < cie; ci++) {
                                var cookie = cookies[ci].split('=');
                                if (cookie[0] == 'jTPS') {
                                        var commands = cookie[1].split(',');
                                        for (var cm = 0, cme = commands.length; cm < cme; cm++) {
                                                var command = commands[cm].split(':');
                                                if (command[0] == 'sortasc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click();
                                                } else if (command[0] == 'sortdesc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click().click();
                                                } else if (command[0] == 'page' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .pageSelector:eq(' + parseInt(command[1]) + ')').click();
                                                }
                                        }
                                }
                        }

                        // bind mouseover for each tbody row and change cell (td) hover style
                        $('#demoTable tbody tr:not(.stubCell)').bind('mouseover mouseout',
                                function (e) {
                                        // hilight the row
                                        e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                                }
                        );

                });


        </script>
        <style>
                body {
                        font-family: Tahoma;
                        font-size: 9pt;
                }
                #demoTable thead th {										
                        white-space: nowrap;
                        overflow-x:hidden;
                        padding: 3px;
                }
                #demoTable tbody td{
												
                        padding: 3px;
                }
        </style>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New Page</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

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
			<a href="view.php" class="active"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Members</font></span></a>
			<ul>
                <li><a href="list.php">List</a></li>
                <li><a href="confirmation.php">Confirmation</a></li>
			</ul>
		</li>
		<li>
			<a href="viewpost.php"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Member's Post</font></span></a>
		</li>
		<li>
			<a href="addpost.php"><span class="l"></span><span class="r"></span><span class="t">
			<font color="#ba1802">Add Post</font></span></a>
		</li>
		<li>
			<a href="logoutadmin.php"><span class="l"></span><span class="r"></span><span class="t">
			<font color="#ba1802">Log-out</font></span></a>
		</li>		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1" <font align="center" style="margin-left: 0px; padding-left: 121px; padding-top: 112px;">
					<?php
					
					$conmember=mysql_query("SELECT * FROM id_number WHERE idnumber='$member_id'") or die(mysql_error());
					$noresult=mysql_numrows($conmember);
					
					if($noresult==1){
						echo "This ".$member_id." is a valid ID number";
						echo "<form method='post' action=''> ";
						echo "<input type='submit' name='approve' value='Approve'>";
						
						}else{
						echo "<font size='4' style='margin-left: 119px;'  background-image: url('images/blockheader.png');>This ".$member_id." is invalid ID number";
						echo "<form method='post' action=''> ";
						echo "<br /><input type='submit' name='decline' id='decline' value=''>";
						}
						echo "</form>";
					
					?>
					</div>
				</div>
</div>

</body>
</html>



