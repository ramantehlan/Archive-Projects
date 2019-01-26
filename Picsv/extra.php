<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to extra</title>

		
		<!-- for check box -->
 		 <link rel="stylesheet" type="text/css" href="assets/style/check box.css">
 		<!-- for select box  -->
 		 <link rel="stylesheet" type="text/css" href="assets/style/nice-select.css">
 		<!-- for date picker -->
 		<link rel="stylesheet" type="text/css" href="assets/style/datepicker.css">


	</head>
	<body >

	
<br><BR><BR>
  <input class="span2" size="16" type="text" value="23-12-2012" id="dp1">
 

<div class="ondisplay" >
  
    <!-- .slideOne -->
    <div class="slideOne">  
      <input type="checkbox" value="None" id="slideOne" name="check" checked />
      <label for="slideOne"></label>
    </div>
    <!-- end .slideOne -->


    <!-- .slideTwo -->
    <div class="slideTwo">  
      <input type="checkbox" value="None" id="slideTwo" name="check" checked />
      <label for="slideTwo"></label>
    </div>
  

    <!-- .slideThree -->
    <div class="slideThree">  
      <input type="checkbox" value="None" id="slideThree" name="check" checked />
      <label for="slideThree"></label>
    </div>
    <!-- end .slideThree -->
 
  
  
    <!-- .roundedOne -->
    <div class="roundedOne">
      <input type="checkbox" value="None" id="roundedOne" name="check" checked />
      <label for="roundedOne"></label>
    </div>
    <!-- end .roundedOne -->

  

    <!-- .roundedTwo -->
    <div class="roundedTwo">
      <input type="checkbox" value="None" id="roundedTwo" name="check" checked />
      <label for="roundedTwo"></label>
    </div>
    <!-- end .roundedTwo -->

    <!-- .squaredOne -->
    <div class="squaredOne">
      <input type="checkbox" value="None" id="squaredOne" name="check" checked />
      <label for="squaredOne"></label>
    </div>
    <!-- end .squaredOne -->
  
    <!-- .squaredTwo -->
    <div class="squaredTwo">
      <input type="checkbox" value="None" id="squaredTwo" name="check" checked />
      <label for="squaredTwo"></label>
    </div>
    <!-- end .squaredTwo -->


    <!-- .squaredThree -->
    <div class="squaredThree">
      <input type="checkbox" value="None" id="squaredThree" name="check" checked />
      <label for="squaredThree"></label>
    </div>
    <!-- end .squaredThree -->



    <!-- .squaredFour -->
    <div class="squaredFour">
      <input type="checkbox" value="None" id="squaredFour" name="check" checked />
      <label for="squaredFour"></label>
    </div>
    <!-- end .squaredFour -->

    <select>
  <option data-display="Select">Nothing</option>
  <option value="1">Some option</option>
  <option value="2">Another option</option>
  <option value="3" disabled>A disabled option</option>
  <option value="4">Potato</option>
</select>





</div>

	</body>

	 <!-- for jquery -->
	 <script type="text/javascript" src="assets/script/jquery.js"></script>
	 <!-- for select box -->
   	 <script src="assets/script/jquery.nice-select.min.js"></script>
   	 <!-- for datapicker script -->
   	 <script type="text/javascript" src="assets/script/bootstrap-datepicker.js"></script>
   


   	 <script type="text/javascript">

   	 //*************************************
		//for select box
   	 //****************************************
   	 	
   	 	$(document).ready(function() {
  $('select').niceSelect();
});

   	 	/*******************************
		date picker
   	 	*******************************/
 
 		$(document).ready(function(){
 				$('#dp1').datepicker({
				format: 'dd-mm-yyyy'
			});
 		});

   	 </script>
</html>



