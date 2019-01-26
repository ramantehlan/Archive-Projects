$(document).ready(function(){
	
$("#click_photo_div").click(function(){
  $('.black').show();
  $('.photo_box_pop').slideDown();

        $('.black').click(function(){
          $(this).hide();
          $('.photo_box_pop').hide();

        });

        $('.close_photo_but').click(function(){
          $('.black').hide();
          $('.photo_box_pop').hide();

        });

});


});