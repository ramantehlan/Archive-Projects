<?php
/*
$row = 1;

if( ($handle = fopen("Book1.csv" , "r" )) != FALSE){

	while( ($data = fgetcsv($handle , 1000 , ",")) != FALSE){

		$num_c = count($data);
		$row++;

		for($c = 0; $c < $num_c; $c++){
			echo $data[$c] . " ";
		}

		echo "<Br>";

	}

}

*/

?>

<!DOCTYPE html>
<html>
	<head>
			<title>Welcome to piCSV.</title>
	
			<link rel="stylesheet" href="assets/style/jquery-ui.css">
			<link rel="stylesheet" href="assets/style/comman-ui.css">

			<script type="text/javascript" src="assets/script/jquery.js"></script>
			<script type="text/javascript" src="assets/script/jquery-ui.js"></script>
			<script type="text/javascript" src="assets/script/effect.js"></script>
	</head>
	<body>
		
		<div class="header">
				<div class="top_bar effect effect_1">

						<div class="left_menu">
								<a href="upload.php">
									<div class="left_menu_options capital">
											Upload
									</div>
								</a>

								<a href="analyses.php">
									<div class="left_menu_options capital">
											Analyses
									</div>
								</a>

						</div>

						<div class="logo">
						PiCSV
						</div>
				</div>

				<div class="header_title effect effect_2">
					Upload, process and understand data with one of the most powerful <br>machine learning algorithm
				</div>
				<div class="header_content effect effect_2">
				PiCSV is <b>easiest</b> , <b>fastest</b> and <b>most advance</b> solution to understand your data and increase your sales
				</div>

				<div class="how_it_work_box effect effect_3">
						<div class="how_it_work_box_heading">
								How it work
						</div>

						<div class="work_box">
								<div class="work_box_heading">
									Step 1: Upload CSV files
								</div>
								<div class="work_box_body">
									 	Ask all your branches or shops to upload their sales data files (CSV FILES) to this portal using a unique company code and branch/shop code
								</div>
						</div>

						<div class="work_box">
								<div class="work_box_heading">
									Step 2: Analyze Data
								</div>
								<div class="work_box_body">
										Once all the sales data files are uploaded, you need to go to analyses and submit your company code and analyze all the information
								</div>
						</div>

				</div>

		</div>

	</body>
</html>

