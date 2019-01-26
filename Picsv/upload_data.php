<?php 
/*****************************************
this script is to upload csv file to upload 
folder and read it to upload data of this field
to mysql data base.

creator:- Raman Tehlan
Date of creation:- 21/01/2016
******************************************/

// check if all post are set
if(isset($_POST['company_id']) && isset($_POST['branch_id']) && isset($_FILES['data_file'])){
	//check if file temp_name is there
	if($_FILES['data_file']['tmp_name']){
		
		$company_id	= $_POST['company_id'];
		$branch_id	= $_POST['branch_id'];
		$file_tmp_name = $_FILES['data_file']['tmp_name'];

		//this will be added to final code submition
		$code_part	= "";
		//this will be added to code while it is in loop
		$prefix_code = "( NULL , '$company_id' , '$branch_id', ";

				include "connect.php";

						//to count the row
						$row = 1;
						if( ($handle = fopen($file_tmp_name , "r")) != FALSE){
							while( ($info = fgetcsv($handle , 1000 , ",")) != FALSE ) {
								
							  //skip this for first row
							  if($row != 1){
							  		//count number of coloums are there
									$num_c = count($info);
									//store values in an order or row
									$mini_code = "";

										for($c = 1; $c < $num_c; $c++){
											$mini_code .= "'" . $info[$c] . "' ,";
										}

									$code_part .= $prefix_code . $mini_code . " CURRENT_TIMESTAMP ) ,";

								}
								$row++;
							}
						}

				$code = "INSERT INTO `$db_name`.`data` (
						`id`,
						`company_id`,
						`branch_id`,
						`date`,
						`time`,
						`product`,
						`cost`,
						`date_of_upload`
				) VALUES " . $code_part;

				//to remove comma from string end
				$code = rtrim($code , ",") . ";";

				mysqli_query($connect , $code);


			echo "Successfully uploaded";
	

	}
	else{
		echo "ERROR- No File Exist";
	}

}
else{
// if a post is not set then send error that work not done
echo "ERROR- Broken information";
}

?>

