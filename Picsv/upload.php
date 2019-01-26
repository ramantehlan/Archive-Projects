<!DOCTYPE html>
<html>
	<head>
			<title>Upload to piCSV</title>
			<link rel="stylesheet" href="assets/style/jquery-ui.css">
			<link rel="stylesheet" href="assets/style/comman-ui.css">

			<script type="text/javascript" src="assets/script/jquery.js"></script>
			<script type="text/javascript" src="assets/script/jquery-ui.js"></script>
			<script type="text/javascript" src="assets/script/effect.js"></script>

			<script type="text/javascript" src="assets/script/upload.js"></script>

			<style type="text/css">
				
				html{background-color:#0161A0;
					 color:#ffffff;
				}

			</style>
	</head>
<body>
	
	<div class="logo_2 ">
			<a href="index.php" class="logo_2 effect effect_1"">PiCSV</a>
	</div>

	<div class="upload_box effect effect_2">

		<div id="progress_bar">
				<div class="progress-label">0% uploaded</div>
		</div>
		
		<div class="upload_box_heading">
			Upload CSV file here
		</div>

		<div class="upload_box_body">
				<form method="post" enctype="multipart/form-data" action="upload_data.php" id="submit_data_form">

						<input type="company_id" name="company_id" id="company_id" class="input" placeholder="Company Id">

						<input type="branch_id" name="branch_id" id="branch_id" class="input" placeholder="Branch/Shop Id">

						<input type="file" name="data_file" id="data_file" class="input">

						<input type="submit" class="submit_button" id="submit_data" value="SUBMIT">

				</form>
		</div>

	</div>

	<div class="error_box">
		ERROR
	</div>

	<div class="success_box">
		Successfully uploaded
	</div>

</body>
</html>