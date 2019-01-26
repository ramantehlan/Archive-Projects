<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script> 
<style>


</style>


<h2>Security Check</h2>

<?php 
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";

if(isset($_GET['error']))
{
 $error=$_GET['error'];
   switch ($error) {
      case 'wrong_pass_pin':
                       echo "<div class='error_of_the_page'>Password and Pin error! Password and Pin combination typed by you was wrong please type again.</div> "; 
       break;
     default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
       break;
   }
}
?>


<div class='setting_box'>
   

  <div class='div_of_form_in_security'>
<form method='post' action='security.php'>
<input type='password' class='input_of_security_check' id='password' placeholder='Password' name='password' maxlength='50'><br>
<input type='password' class='input_of_security_check' id='pin' placeholder='Pin' name='pin' maxlength='6'><br>
<input type='submit' class='input_of_button' id='submit_of_pass'  value='Enter'>

      <div class='message_of_error' style='width:180px;
                                           margin-left:0px;
                                            margin-bottom:10px;
                                            margin-top:10px;
      '></div>



</form> 
</div>



</div>
<script type='text/javascript'>
$("#submit_of_pass").click(function(){

  var pass=document.getElementById("password").value;
  var pin=document.getElementById("pin").value;

  if(pass=='' || pin=='')
  {
     $(".message_of_error").show();
     $(".message_of_error").html("please fill password and pin");

    return false;
  }
  else
  {

  }

});

</script>










