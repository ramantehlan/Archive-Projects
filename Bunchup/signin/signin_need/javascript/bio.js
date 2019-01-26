$(document).ready(function(){
$('.bio_write').keyup(function(){
      var val=$(this).val();
     if(val == '')
     {
         $('.bio_write').animate({'height':'26'});
          $('.bio_write').css({'border-radius':'0px 0px 3px 3px'});
          $('.bottom_bar_of_bio').hide();
     }
     else
     {     $('.bottom_bar_of_bio').show();
           $('.bio_write').animate({'height':'80'});
            $('.bio_write').css({'border-radius':'0px 0px 0px 0px'});
           
     }
});
});


