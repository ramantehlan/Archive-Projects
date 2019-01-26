$(document).ready(function(){
	
	    $("#send_question").click(function(){
	      var question=$("#question").val();
        var answer=$('#answer').val();
          ///   this is to check security row only  
        if(question == '' || answer == '')
        {
            $("#security_error_in_signup").show();
            $('#security_error_in_signup').html("Please fill all the fields");
        } 
        else
        {   ///// after check it run to open life row
              $(this).slideUp();
              $("#security_error_in_signup").hide();
              var div= $(".security_row");
              div.animate({marginLeft:'0%'},600);
               // above code bring the box or do animation
            $('.life_row').fadeTo(300,0.4).fadeTo(300,1);
              // below code is to check the life 
        }
        
	         });

             $("#send_life").click(function(){
                  var home=$("#hometown").val();
                  var birth=$("#birthtown").val();
                  var school=$("#school").val();
                             var question=$("#question").val();
                         var answer=$('#answer').val();
                    // this code is to check life 
                     if(home =='' || birth=='' || school=='' )
                     {        
                            $("#security_error_in_signup").hide();
                            $("#life_error_in_signup").show();
                            $('#life_error_in_signup').html("Please fill all the fields");
                     }

              // this code is to recheck security
                    else if(question == '' || answer == '')
                      {           
                                 $("#life_error_in_signup").hide();
                                $("#security_error_in_signup").show();
                               $('#security_error_in_signup').html("Please fill all the fields");
                        }

                     else
                     {  
                        $(this).slideUp();
                        $("#life_error_in_signup").hide();
                        $("#security_error_in_signup").hide();
                        var profile=$('.profile_row');
                        profile.fadeTo(300,0.4).fadeTo(300,1).animate({marginLeft:'3%'},600);
                        var submit_all=document.getElementById("send_all");
                        submit_all.type='submit';
                            
                      }

            });

            
             $('#send_all').click(function(){
                           
                       

                             var home=$("#hometown").val();
                             var birth=$("#birthtown").val();
                             var school=$("#school").val();
                             var question=$("#question").val();
                             var answer=$('#answer').val();

                            if(home =='' || birth=='' || school=='' )
                                {        
                                    $("#security_error_in_signup").hide();
                                    $("#life_error_in_signup").show();
                                    $('#life_error_in_signup').html("Please fill all the fields");
                                    return false;
                                  }
                                 
                            else if(question == '' || answer == '')
                                {           
                                 $("#life_error_in_signup").hide();
                                $("#security_error_in_signup").show();
                               $('#security_error_in_signup').html("Please fill all the fields");
                               return false;
                                 }



                            else
                            {
                              $("#life_error_in_signup").hide();
                            $("#security_error_in_signup").hide();
                                 
                             
                                       
                            }

                         });
           
                               // this is code to check the image file valididty
                              
                          // this above code end
});


              
                           




