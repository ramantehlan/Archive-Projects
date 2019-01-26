$(document).ready(function(){
$('.status_write').keyup(function(){
      var val=$(this).val();
     if(val == '')
     {
         $('.status_write').animate({'height':'26'});
          $('.status_write').css({'border-radius':'0px 0px 3px 3px'});
          $('.bottom_bar_of_update').hide();
     }
     else
     {     $('.bottom_bar_of_update').show();
           $('.status_write').animate({'height':'80'});
            $('.status_write').css({'border-radius':'0px 0px 0px 0px'});
           
     }
});



$("#submit_status").click(function(){
     var value=$('#status_write').val();
    var display=$('.upload_php');
     if(value.length == 0)
     {
           alert('Please fill a status');
     }
     else
     {
          $.post("signin_need/php_plugin/status_upload/status_upload.php",{value:value},function(do_update){
            display.html(do_update);
          });

     }
});




});


