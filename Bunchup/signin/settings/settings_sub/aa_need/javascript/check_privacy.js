$(document).ready(function(){

$('#save').click(function(){
  
   var password=$("#password").val();
   var pin=$("#pin").val();

   if(pin=='' || password == '' )
   {
    $('.message_of_error').show();
   	 $('.message_of_error').html('Please fill Pin and Password');
    return false;
   }
   else
   {
    $('.message_of_error').hide();
   }

});













});