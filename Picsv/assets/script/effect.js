$(document).ready(function(){

		$(".effect_1").show("drop" , {direction:"up"} , 300);

		setTimeout(function(){

			$(".effect_2").show("drop" , {direction: "left"} , 500);

				setTimeout(function(){

					$(".effect_3").show("drop" , {direction: "left"} , 500);

				}, 550);

		} , 350);

});