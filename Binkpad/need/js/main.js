$(document).ready(function(){
                   
                  
              // above code is to stop user from entring wrong name

                   function load_div(div_name,file_name,time)
                   {
                      var start = setInterval(function(){ 
                          $(div_name).load(file_name);
                       },time);
                   }
                   
                   //load_div(".load_pad","display_pad.php",500);
                   load_div(".body_display","display_note.php",500);
                   load_div(".menu_body","display_menu.php",500);
                   load_div(".no_left","display_no.php",500);
                   load_div(".data","data.php",500);

             // above code is to exicute the code gain and agina

              $("#notes").keyup(function(){
                       
                       var value = $("#notes").val();
                       $.post("save_note.php",{note:value},function(save){
                           $(".save_here").html(save);
                       });
            
              });

              // above code is to save the note 

              $("#send_name").click(function(){
                    
                     var value = $("#file_name").val();
                     if(value == "")
                     {

                     }
                     else
                     {    
                     	   var val= document.getElementById("file_name");
                          var regex=/[^a-z]/gi;
                          val.value=val.value.replace(regex ,""); 
                     	  $.post("save_name.php",{new_name:value},function(newname){
                          $(".save_here").html(newname)
                     });
                     }
                     return false;
                    
              });
           

            //above code is to save the name of the file 

           

});