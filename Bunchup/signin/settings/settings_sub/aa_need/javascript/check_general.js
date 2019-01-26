$(document).ready(function(){


   $('#save').click(function(){
              var name=$('#name').val();
              var date_of_birth=$('#date_up').val();
              var month_of_birth=$('#month_up').val();
              var year_of_birth=$('#year_up').val();
              var gender=$('#gender_up').val();
              var country=$('#country_up').val();
              var home=$('#home').val();
              var birth=$('#birth').val();
              var school=$('#school').val();
              //var url=$('#url').val();
              var share_with=$('#share_up').val();
              var password=$('#password').val();
              var pin=$('#pin').val();
           

           if( name == ''  || date_of_birth == '' || month_of_birth == '' ||year_of_birth == '' ||gender == '' ||country == '' ||home == '' ||birth == '' 
           	||school == ''  || /*url == '' ||*/ share_with == '' || password == '' || pin == '')
           {
                   $('.message_of_error').show();
           	       $('.message_of_error').html('Please fill all the box first');
                   
                   return false;

           } 


   

           else
           {
          $('.message_of_error').hide();
           }

	 });
})