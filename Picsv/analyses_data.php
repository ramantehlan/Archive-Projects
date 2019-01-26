<?php 
	
if(isset($_POST['company_id'])){

	//connecting to database
	include 'connect.php';

	//company id comming as post
	$company_id = $_POST['company_id'];

	$code = mysqli_query($connect , "SELECT * from `$db_name`.`data` where company_id = '$company_id';");
	$code2 = mysqli_query($connect , "SELECT DISTINCT branch_id FROM `$db_name`.`data` where company_id = '$company_id';");
	$code3 = mysqli_query($connect , "SELECT DISTINCT product as 'product' FROM `$db_name`.`data` WHERE company_id = '$company_id';");
	$code4 = mysqli_query($connect , "SELECT SUM(cost) as 'total' FROM `$db_name`.`data` where company_id = '$company_id' and  `date` like '%-%-2016';");

	$no_of_results = mysqli_num_rows($code);
	$no_of_branch  = mysqli_num_rows($code2);
	$no_of_product = mysqli_num_rows($code3);	
	$sales_data   = mysqli_fetch_array($code4);

	$total_sales = $sales_data['total'];


	if($no_of_results <= 0 )
	{
		echo "<div class='intro_of_search'>
							no result found
			</div>";
	}
	else{
	     ?> 
	       <div class='intro_of_search'>
							<div class='intro_title'>
								<?php echo $company_id; ?>
							</div>

							<div class='intro_list'>
									<div class='intro_list_title'>
										Number of data entry:
									</div>
									<div class='intro_list_content'>
										<?php echo $no_of_results; ?>
									</div>
							</div> 

							<div class='intro_list'>
									<div class='intro_list_title'>
										Number of branches/shops:
									</div>
									<div class='intro_list_content'>
										<?php echo $no_of_branch; ?>
									</div>
							</div> 

							<div class='intro_list'>
									<div class='intro_list_title'>
										Number of Products:
									</div>
									<div class='intro_list_content'>
										<?php echo $no_of_product; ?>
									</div>
							</div> 

							<div class='intro_list'>
									<div class='intro_list_title'>
										Total sales:
									</div>
									<div class='intro_list_content'>
										<?php echo $total_sales; ?>
									</div>
							</div> 
			</div>




			<?php
					/*************************************
					first chart is to find out sales according
					to month last year 2016
					************************************/

					//this is to store total sum according to there serial/month
					$chart_1_sum = array();
					//this string will be pasted in javascript to show data
					$chart_1_str = "";

					//to sum all the cost according to the mont
					for($i = 1; $i <= 12; $i++){

						//adding 0 if number is less then 9
						if($i <=9 ){
								$month = "0$i";
						}else{
							$month = $i;
						}

							//sum of cost accordint ot month
							$chart_1_code = mysqli_query($connect , "SELECT SUM(cost) as 'total' FROM `$db_name`.`data` where `date` like '%-$month-2016';" );

							$chart_1_data = mysqli_fetch_array($chart_1_code);

							//adding this month sum to sum array
							$chart_1_sum[$i] = $chart_1_data['total'];

							//string to paste data
							$chart_1_str .= $chart_1_sum[$i] . " , ";

					}

					//this is to remove comma from the end of string
					$chart_1_str = rtrim($chart_1_str , ",");


			?>

			<div class='box'>
					<div class='box_heading'>
								<div class='graph_indicator'>
									Bars
								</div>
								Global Sales in 2016
					</div>

					<div class='box_body'>

						<canvas id="chart_1"></canvas>

					</div>
			</div>

			<script type="text/javascript">

	//global configuration


//for font
Chart.defaults.global.defaultFontColor = "#ADADAD";
Chart.defaults.global.defaultFontFamily = "text-normal";
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontStyle = "normal";

//for chart
Chart.defaults.global.responsive = true;
Chart.defaults.global.responsiveAnimationDuration = 500;
Chart.defaults.global.maintainAspectRatio = true;
Chart.defaults.global.events = ["mousemove", "mouseout", "click", "touchstart", "touchmove", "touchend"];
Chart.defaults.global.onClick = null;
Chart.defaults.global.legendCallback = null;
Chart.defaults.global.onResize = null;

//for element configuration
Chart.defaults.global.elements.arc.backgroundColor = 'rgba(123,154,231,1)';
Chart.defaults.global.elements.arc.borderColor = "#fff";
Chart.defaults.global.elements.arc.borderWidth = 5;


//.other_options will come infront of below global
//these are same as options used below
//Chart.defaults.global.tooltips
//Chart.defaults.global.hover
//Chart.defaults.global.animation



/****************
#all animations 

'linear', 'easeInQuad', 'easeOutQuad', 'easeInOutQuad', 
'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 
'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 
'easeInOutQuint', 'easeInSine', 'easeOutSine', 'easeInOutSine', 
'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInCirc', 
'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 
'easeInOutElastic', 'easeInBack','easeOutBack', 'easeInOutBack', 
'easeInBounce', 'easeOutBounce', 'easeInOutBounce'

#all modes

point , nearest , index , dataset , x , y

#point style

 'circle', 'triangle', 'rect', 'rectRot', 'cross', 'crossRot', 'star', 'line', and 'dash'.

*********************/

					var chart_box_1 = document.getElementById("chart_1");

					var chart_1 = new Chart(chart_box_1,{
    type: 'bar',
    data: {
        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
        datasets: [{
            label: 'Sales',
            data: [<?php echo $chart_1_str; ?>],
            backgroundColor: [
                '#FF4D80',
                '#FF3E41',
                '#DF367C',
                '#883955',
                '#4C3549',
                '#8980F5',
                '#D00000',
                '#FFBA08',
                '#329F5B',
                '#3F88C5',
                '#032B43',
                '#323031'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 0
        }] ,
        xLabels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"] ,
        yLabels: [10 , 20 , 30 , 40 , 50 , 60] ,
    },
    options: {

    	hover: {
    			mode: "point",
    			intersect: true,
    			animationDuration: 600,
    			onHover: null,//call the function
    	},

    	animation: {
    			duration: 1500,
    			easing: "easeOutSine",
    			onProgress: null ,//function
    			onComplete: null //function 
    	},

    	tooltips:{
    		enabled: true,
    		mode: "nearest",
    		intersect: true,
    		position: "average", //nearest or average
    		backgroundColor: "#000",
    		titleFontFamily: "text-thin",
    		titleFontSize: 12,
    		titleFontStyle: "bold",
    		titleFontColor: "#fff",
    		titleSpacing: 0,
    		titleMarginBottom: 5,
    		bodyFontFamily: "text-normal",
    		bodyFontSize: 13,
    		bodyFontStyle: "normal",
    		bodyFontColor: "#f4f4f4",
    		bodySpacing: 0,
    		/*footerFontFamily: "text-heading",
    		footerFontSize
			footerFontStyle
			footerFontColor
			footerSpacing
			footerMarginTop
    		*/
    		xPadding:20,
    		yPadding:10,
    		caretSize: 6,
    		cornerRadius: 6,
    		//multiKeyBackground: "#fff",
    		displayColors: true
    	},

    	legend: {
    		display: true,
    		position: "top",
    		fullWidth: false,
    		//onClick: null,
    		//onHover: null,
    		labels: {
    				boxWidth: 10,
    				fontSize: 13,
    				fontStyle: "normal",
    				fontColor: "#96897B",
    				fontFamily: "text-menu",
    				padding: 20,
    			},
    		reverse: true
    	},

    	layout:{
    			padding:0
    	},

        scales: {
        	
            yAxes: [{
            	display: true,
            	color:"rgba(0,0,0,1)",
            	drawBorder: true,

            	scaleLabel:{
            		display: true,
            		labelString: "new",
            		fontSize: 18
            	},

                ticks: {
                    beginAtZero:true,
                    display: true,
                    fontColor:"#000"
                },
                gridLines: {
        			display: true,
        			color:"rgba(0,0,0,0.1)",
        			drawBorder: true,
        			zeroLineColor: "rgba(0,0,0,1)",
        		}
            }],

            xAxes: [{
				 gridLines: {
        			display: true
        		}
            }]
        },

        title: {
            display: true,
            position: 'top',
            fullWidth: true,
            fontSize: 14,
            fontFamily: "text-thin",
            fontColor: "#000000",
            fontStyle: "bold",
            padding: 20,
            text: 'Custom Chart Title',
        }
    }
});

/*chart_1.data.datasets[0].data[0] = 16300;
chart_1.update();

setTimeout(function(){

var data = chart_1.toBase64Image();

var pom = document.createElement('a');
pom.setAttribute('href', data);
pom.setAttribute('download', "filename.png");
pom.setAttribute("id" , "downloadable_link");
document.body.appendChild(pom);
var new_a = document.getElementById("downloadable_link");
new_a.innerHTML = 'download';
}, 3000);
*/

			</script>

			


		<div class = "box">
					<div class='box_heading'>
								<div class='graph_indicator in_3'>
									Lines
								</div>
								Global Sales in 2016
					</div>

					<div class='box_body'>

						<canvas id="chart_0"></canvas>

					</div>
			</div>

<script type="text/javascript">

	
	var chart_box_0 = document.getElementById("chart_0");

					var chart_0 = new Chart(chart_box_0,{
    type: 'line',
    data: {
        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
        datasets: [{
         
            label: "Sales",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,1)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 3,
            pointHitRadius: 10,
            data: [<?php echo $chart_1_str; ?>],
            spanGaps: false,
            pointStyle: "circle",
            showLine: true,
            steppedLine: false,

        }] 
    },
    options: {
    		    	animation: {
    			duration: 1500,
    			easing: "easeInOutExpo",
    			onProgress: null ,//function
    			onComplete: null //function 
    	},
    	tooltips:{
    		enabled: true,
    		mode: "nearest",
    		intersect: true,
    		position: "average", //nearest or average
    		backgroundColor: "#000",
    		titleFontFamily: "text-thin",
    		titleFontSize: 12,
    		titleFontStyle: "bold",
    		titleFontColor: "#fff",
    		titleSpacing: 0,
    		titleMarginBottom: 5,
    		bodyFontFamily: "text-normal",
    		bodyFontSize: 13,
    		bodyFontStyle: "normal",
    		bodyFontColor: "#f4f4f4",
    		bodySpacing: 0,
    		/*footerFontFamily: "text-heading",
    		footerFontSize
			footerFontStyle
			footerFontColor
			footerSpacing
			footerMarginTop
    		*/
    		xPadding:20,
    		yPadding:10,
    		caretSize: 6,
    		cornerRadius: 6,
    		//multiKeyBackground: "#fff",
    		displayColors: false
    	},

    	legend: {
    		display: false,
    		position: "top",
    		fullWidth: false,
    		//onClick: null,
    		//onHover: null,
    		labels: {
    				boxWidth: 10,
    				fontSize: 13,
    				fontStyle: "normal",
    				fontColor: "#96897B",
    				fontFamily: "text-menu",
    				padding: 20,
    			},
    		reverse: false
    	},

    	layout:{
    			padding:0
    	},

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },

        title: {
            display: false,
            position: 'top',
            fullWidth: true,
            fontSize: 14,
            fontFamily: "text-thin",
            fontColor: "#000000",
            fontStyle: "bold",
            padding: 20,
            text: 'Custom Chart Title',
        }
    }
});
</script>


			<div class='box'>
					<div class='box_heading'>
								<div class='graph_indicator in_2'>
									Pie
								</div>
								Most Sold Product 2016
					</div>

					<div class='box_body'>

						<canvas id="chart_2"></canvas>

					</div>
			</div>

			<?php

				/*******************************************************************
					this is to get data about which product was sold most
				*******************************************************************/

					//1) create array with list of all kind of product Sold
					//this array is to store the names
					$product_name = array();

					//set location in array for different names
					$n = 0;
					//code3 is defined above
					while ($product_data = mysqli_fetch_array($code3)) {
						$product_name[$n] = $product_data['product'];

						$n++;
					}

					//this str is to store data of string in percentage form
					$chart_2_data = "";
					//tp store labels/product names
					$chart_2_labels = "";

					for($i=0; $i < count($product_name); $i++) { 
						 $product = $product_name[$i];
						 
						 $chart_2_code = mysqli_query($connect , "SELECT COUNT(product) as 'num' from `$db_name`.`data` where product = '$product';");
						 $chart_2_str = mysqli_fetch_array($chart_2_code);

						 $chart_2_data .= $chart_2_str['num'] . " , ";
						 $chart_2_labels .= " '$product' , ";
					}

					//this is to remove the last comman
					$chart_2_data = rtrim($chart_2_data , ",");
					$chart_2_labels = rtrim($chart_2_labels , ",");
					



			?>

<script type="text/javascript">
	
 var chart_box_2 = document.getElementById("chart_2");

 var chart_2 = new Chart( chart_box_2 , {	
 		type: 'pie',
 		data: {
        labels: [ <?php echo $chart_2_labels; ?>],
        datasets: [{
            label: 'Product',
            data: [<?php echo $chart_2_data; ?>],
            backgroundColor: [
                '#FF4D80',
                '#FF3E41',
                '#DF367C',
                '#883955',
            ],
            borderColor: [
                'rgb(255,255,255)',
            ],
            borderWidth: 0,
            hoverBorderWidth: 2
        }]
    },
    options: {

    	tooltips:{
    		enabled: true,
    		mode: "nearest",
    		intersect: true,
    		position: "average", //nearest or average
    		backgroundColor: "#000",
    		titleFontFamily: "text-thin",
    		titleFontSize: 12,
    		titleFontStyle: "bold",
    		titleFontColor: "#fff",
    		titleSpacing: 0,
    		titleMarginBottom: 5,
    		bodyFontFamily: "text-normal",
    		bodyFontSize: 13,
    		bodyFontStyle: "normal",
    		bodyFontColor: "#f4f4f4",
    		bodySpacing: 0,
    		/*footerFontFamily: "text-heading",
    		footerFontSize
			footerFontStyle
			footerFontColor
			footerSpacing
			footerMarginTop
    		*/
    		xPadding:20,
    		yPadding:10,
    		caretSize: 6,
    		cornerRadius: 6,
    		//multiKeyBackground: "#fff",
    		displayColors: false
    	},

    	legend: {
    		display: true,
    		position: "top",
    		fullWidth: true,
    		//onClick: null,
    		//onHover: null,
    		labels: {
    				boxWidth: 10,
    				fontSize: 13,
    				fontStyle: "normal",
    				fontColor: "#96897B",
    				fontFamily: "text-menu",
    				padding: 20,
    			},
    		reverse: false
    	},

    	layout:{
    			padding:00
    	},

        title: {
            display: false,
            position: 'top',
            fullWidth: true,
            fontSize: 14,
            fontFamily: "text-thin",
            fontColor: "#000000",
            fontStyle: "bold",
            padding: 20,
            text: 'Custom Chart Title',
        }
    }

 });

</script>
		

<?php 

	}

}else{
	echo "<div class='intro_of_search'>
						Error- No post set
			</div>";	
}

?>