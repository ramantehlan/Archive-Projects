
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
        <div class="art-sheet-body" style="height: 524px;">
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
			<a href="home.php" class="active"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Home</font></span></a>
		</li>
		<li>
			<a href="view.php"><span class="l"></span><span class="r"></span>
			<span class="t"><font color="#ba1802">Member</font></span></a>
			<ul>
                <li><a href="list.php">List</a></li>
				<li><a href="add.php">Add ID Number</a></li>
                <li><a href="confirmation.php">Confirmation</a></li>
				<li><a href="viewpost.php">Member's Post</a></li>
				<li><a href="viewcomments.php">Comments in Post</a></li>
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
<div class="art-layout-cell art-sidebar1">
                <div class="art-post" style="width: 478px; margin-left: 22px; float: left;">
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
    <div class="art-block-body" style="width: 442px;">
            <div class="art-blockheader">
                <div class="l"></div>
                <div class="r"></div>
                    <h3 class="t">CHMSC</h3>
					<br>
					<br>
					<p style="padding-left: 5px;">
						&nbsp;&nbsp;&nbsp;&nbsp; CHMSC stands for Carlos Hilado Memorial State College is one of &nbsp;&nbsp;the productive institution located at Talisay City, Negros Occidental. There are hundreds of members in the instution and not all of them have given the chance to reach out with one another.</p>
					<br>
					<p style="padding-left: 5px;">
						&nbsp;&nbsp;&nbsp;&nbsp;The site can be one way to socialize with your fellow Chmscians. The group decided to propose this site to be able to develop an online friendship not only to the people you have known but also to the people that are new to you. The friends that you can make can only one of the many benefits of this site.
					</p>
			<div style="clear: both;"></div>
			</div>
	</div>
		   </div>
            <div class="cleared"></div>
    </div>
</div>
			<div class="art-block">
		<div class="art-block-tl" style="margin-left: 491px; margin-top: 6px;"></div>
			<div class="art-block-tr" style="margin-top: 6px;"></div>
			<div class="art-block-bl" style="margin-left: 491px; margin-bottom: 12px;"></div>
			<div class="art-block-br" style="margin-bottom: 12px;"></div>
			<div class="art-block-tc" style="margin-left: 491px; padding-top: 0px; margin-top: 6px;"></div>
			<div class="art-block-bc" style="margin-left: 489px; margin-bottom: 12px;"></div>
			<div class="art-block-cl" style="margin-left: 491px;"></div>
			<div class="art-block-cr"></div>
    <div class="art-block-body"  style="width: 442px; float: right; padding-top: 18px; border-bottom-width: 0px; margin-top: -391px;">
            <div class="art-blockheader">
                
          <script type="text/javascript" src="gallery3/js/jquery.js"></script>
<script type="text/javascript" src="gallery3/js/swfobject.js"></script>
<script type="text/javascript" src="gallery3/js/flashgallery.js"></script>
<script type="text/javascript">
jQuery.flashgallery('gallery3/gallery3.swf', 'gallery3/config.json', { width: '450px', height: '380px', background: 'transparent' });
</script>
			<div style="clear: both;"></div>
			</div>
	</div>

			<div class="cleared"></div>
        </div>	
		

</body>
</html>



