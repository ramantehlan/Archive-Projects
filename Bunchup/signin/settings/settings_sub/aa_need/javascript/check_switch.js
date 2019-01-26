$(document).ready(function(){

              $("#save").click(function(){
                 
                  var frra=$("#Frra").val();
                  var fra=$("#Fra").val();
                  var qa=$("#qra").val();
                   var pass=$("#password").val();
                   var pin=$("#pin").val();
                   

                  if(frra =='' || fra=='' || qa=='' ||  pass=='' || pin=='')
                  {
                        $('.message_of_error').show();
                        $('.message_of_error').html("Please fill all the fields.");
                        return false;
                  }
                  else
                  {

                  }
                 
              });

});