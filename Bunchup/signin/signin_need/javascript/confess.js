$(document).ready(function(){
$('.confisstion_write').keyup(function(){
      var val=$(this).val();
     if(val == '')
     {
         $('.confisstion_write').animate({'height':'26'});
          $('.confisstion_write').css({'border-radius':'0px 0px 3px 3px'});
          $('.bottom_bar_of_confess').hide();
     }
     else
     {     $('.bottom_bar_of_confess').show();
           $('.confisstion_write').animate({'height':'80'});
            $('.confisstion_write').css({'border-radius':'0px 0px 0px 0px'});
           
     }
});
});


