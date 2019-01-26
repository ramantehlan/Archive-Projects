$(document).ready(function(){

	$("#progress_bar").progressbar({
		value: 0
	});

	/******************************************************
	function to handle uploads
	******************************************************/

	//while data is still being uploaded
	function progress_handler(event){

		//getting percent of data that has been uploaded
		var percent = Math.round( (event.loaded / event.total) * 100);

		//priting percent
		$(".progress-label").html(percent + "% Uploaded");

		//moving progress bar according to percent
		$("#progress_bar").progressbar({
				value: percent
		});

	}

	//data has been uploaded successfully
	function complete_handler(event){
		var success_box = $(".success_box");

		//printing the action file data here
		success_box.show("drop" , {direction: "left"} , 300);
		
			success_box.html(event.target.responseText);

			setTimeout(function(){
					success_box.hide("drop" , {direction: "left"} , 300);
					$("#progress_bar").hide("drop" , {direction: "up"} , 300);
			},3000);
		

	}

   /*******************************************************
	function on clicking of button
   ********************************************************/

	$("#submit_data").click(function(){

		//declaring variables
		btn = document.getElementById("submit_data");
		err = $(".error_box");
		pro = $("#progress_bar");

		//hide old errors
		err.hide("drop" , {direction: "right"} , 300);

		//to disable the button for a while
		btn.disabled = true;

			//getting variable from page
			var company_id = document.getElementById("company_id").value;
			var branch_id  = document.getElementById("branch_id").value;
			var data_file 	   = document.getElementById("data_file").files[0];

			if(company_id.length == 0 || branch_id.length == 0 || document.getElementById("data_file").value.length == 0){
					err.show("drop" , {direction : "right"} , 300);
					err.html("ERROR- No field can be left empty.");

					btn.disabled = false;
			}
			else if(data_file.type != "application/vnd.ms-excel"){
				err.show("drop" , {direction: "right"} , 300);
				err.html("ERROR- Upload file extension can only be csv.");

				btn.disabled = false;
			}
			else{
				
				//hide error box
				err.hide("drop" , {direction: "right"} , 300);

				//showing the progress_bar
				pro.show("drop" , {direction: "up"} , 200);

				var formdata = new FormData();

				formdata.append("company_id" , company_id);
				formdata.append("branch_id" , branch_id);
				formdata.append("data_file" , data_file);

				//create a XMLHttpRequest
				var request = new XMLHttpRequest();

				request.upload.addEventListener("progress" , progress_handler , false);
				request.addEventListener("load" , complete_handler , false),
				request.open("POST" , $("#submit_data_form").attr("action"));

				request.send(formdata);

				btn.disabled = false;

				document.getElementById("company_id").value = "";
				document.getElementById("branch_id").value = "";
				document.getElementById("data_file").value = "";

			}


		return false;

	});

});

