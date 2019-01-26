<!DOCTYPE html>
<html>
<head>
		<title>Analyze Data</title>

		<link rel="stylesheet" type="text/css" href="assets/style/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="assets/style/comman-ui.css">

		<script type="text/javascript" src="assets/script/jquery.js"></script>
		<script type="text/javascript" src="assets/script/jquery-ui.js"></script>
		<script type="text/javascript" src="assets/script/effect.js"></script>

		<script type="text/javascript" src="assets/script/chartjs/chart.js"></script>
		<script type="text/javascript" src="assets/script/analyses.js"></script>

			<style type="text/css">
				
				html{background-color:#f2f2f2;
					color:#25171A;
				}

				::-webkit-input-placeholder{
					color:#8F79D1;
				}

			</style>

			<?php

				//company id is already set so reun function search id
				if(isset($_GET['id'])){

						$company_id = $_GET['id'];

						echo "<script type='text/javascript'>
								$(document).ready(function(){

								 	$('#company_id').val('$company_id');
									
									search_id();

								});

						</script>";

				}

			?>

</head>
<body>

	<div class="top_box">
		<div class="logo_3">
				<a href="index.php" class="logo_3"> Pi<span class="color_logo">CSV</span> </a>
		</div>

		<div class="search_box">
				<input type="company_id" name="company_id" id="company_id" class="search_input" placeholder="COMPANY ID">
				<input type="button" name="show_result" class="search_button" value="Search">
		</div>
	</div>

		<div class="display_box">
		</div>
	
	
	

</body>
</html>