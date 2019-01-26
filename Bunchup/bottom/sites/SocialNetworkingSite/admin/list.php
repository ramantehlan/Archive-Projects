
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
			<a href="home.php"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Home</font></span></a>
		</li>
		<li>
			<a href="view.php" class="active"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Member</font></span></a>
			<ul>
                <li><a href="list.php">List</a></li>
				<li><a href="add.php">Add ID Number</a></li>
                <li><a href="confirmation.php">Confirmation</a></li>
				<li><a href="viewpost.php">Member's Post</a></li>
			</ul>
		</li>
		<li>
			<a href="aboutus.php"><span class="l"></span><span class="r"></span><span class="t">
			<font color="#ba1802">About Us</font></span></a>
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
									<div class="art-blockcontent">
										<div class="art-blockcontent-body">




			<table id="demoTable" style="border: 1px solid #ccc; width: 900px;" cellspacing="0" width="700" bgcolor="#FFFFFF" align="center">
        <thead >
                <tr>
						<th sort="description" align="center"><span class="style7">ID Number</span></th>
						<th sort="description" align="center"><span class="style7">Photo</span></th>
						<th sort="description" align="center"><span class="style7">Firstname</span></th>
                        <th sort="beds" align="center"><span class="style7">Lastname</span></th>
						<th sort="description" align="center"><span class="style7"></span></th>
						
						
				</tr>
        </thead>
        <tbody>
	
	
		</tbody>
	   
	  <?php
 				 require ("connection.php");  
		
			

				$query = ("SELECT * FROM members WHERE account_status = 2") or die(mysql_error()); 
				$result = mysql_query($query) or die(mysql_error());
				while($row = mysql_fetch_array($result))
				{
				echo "<td align='center'>" .$row['student_id']. " </td>";
				echo "<td align='center'><img src='...image/members/".$row['photo']."' width='130px' height='230px' ></td>";
				echo "<td align='center'>" .$row['firstname']. " </td>";
				echo "<td align='center'>" .$row['lastname']. " </td>";
				
				echo "<td align='center'> </td> </tr>";
				}
							
				?>
	   
					
		
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=5><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
								
                        </td>
                </tr>
				
				
        </tfoot>
		
</table>	
		
</div>
</body>
</html>



