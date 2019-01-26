	/****************************************************
	 functions used by xmlhttprequest
	*****************************************************/

		function while_loading(event){
			$(".display_box").html();
		}

		function loaded(event){
			$(".display_box").html(event.target.responseText);
		}

	/****************************************************

	*****************************************************/

	//function to search the result
	function search_id(){

		//variable to store company id
		var company_id = document.getElementById("company_id").value;

		if(company_id.length == 0){
				history.pushState("" , "" , "?");
		}else{
				history.pushState("" , "" , "?id=" + company_id);
		}
		

		var analyses = new FormData();

		analyses.append("company_id" , company_id);

		var request = new XMLHttpRequest();

		request.upload.addEventListener("progress" , while_loading , false);
		request.addEventListener("load" , loaded , false);
		request.open("POST" , "analyses_data.php");

		request.send(analyses);

	}
	
$(document).ready(function(){

	//impliment 
	$(".search_input").keyup(search_id);
	$(".search_button").click(search_id);

});