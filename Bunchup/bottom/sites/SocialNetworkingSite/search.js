$(document).ready(function(){
   $('#friend').keyup(function(){
	 var e = "e=" + $(this).val();
	 
		$.ajax({
	   type: "POST",
	   url: "search.php",
	   data: e,
	   cache: true,
	   success: function(msg){
		 $('#search_div').fadeIn(200).html(msg);
	   }
	});
	
   })
   $(document).click(function(){
		$('#search_div').fadeOut(200);
   })
   
	
});