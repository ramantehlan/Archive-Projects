$(document).ready(function(){


$('.input_for_search').keyup(function(){
var input=document.getElementById('input_of_search').value;

if(input.length >=1)
{
     slide_down_search_on_action();
               
}
else
{
slide_up_search_on_action();
}


});





      $('#but_of_search').click(function(){
         slide_down_search_on_action();

             }); 




function slide_up_search_on_action()
{

		var input=document.getElementById('input_of_search').value;
        var display=$('#display_of_search_down');
        var neck=$(".neck_of_search");

	display.slideUp();
     neck.slideUp();
	$('#input_of_search').css({'border-radius':'2px 0px 0px 2px'});
    $('#but_of_search').css({'border-radius':'0px 2px 2px 0px'});
}



function slide_down_search_on_action()
{
               /* $('html').click(function(){
                                  slide_up_search_on_action();
                       });*/


    var src_php_plug=$('#java_url_for_plugin').val();
	var input=document.getElementById('input_of_search').value;
     var display=$('#display_of_search_down');
     var neck=$(".neck_of_search");

	neck.slideDown();
    display.slideDown();

$('#input_of_search').css({'border-radius':'2px 0px 0px 0px'});
$('#but_of_search').css({'border-radius':'0px 2px 0px 0px'});
display.html("<div class='div_of_img'></div>");

$.post(src_php_plug + "signin_need/php_plugin/top/search_input.php",{search_value:input},function(search){
         display.html(search);
});

                       
}

  












});

