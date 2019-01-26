<h2>Contact Us</h2>
<p>To contact us you need to fill this form and Our Team will contact you shortly. You can contact us to <br>
   <ul>
   	<li>tell some malfunction of the site.</li>
   	<li>give some suggestions.</li>  
	<li>tell if we or any user is violating your copyright or patent.</li>
	<li>tell if we or any user is  Endorsing discrimination based on race, religion, disability, sex, nationality, age, violence, sexually explicit or pornographic material.</li>
	<li>Tell if any service is not working</li>
   </ul>
  

</p>
<?php

if(isset($_SESSION['bunchup_id']))
{
	mysql_select_db($db_name);
$no=mysql_num_rows(mysql_query("select * from contact_us_upload where user_no='$user_no'"));

                                      if($no >= 1)
     {
        $form_of_contact = <<< EOFILE
                                       <div class='form_of_contact_us_to_fill_contact' style='padding:4px;text-align:center;color:white;text-shadow:1px 1px 1px rgb(150,160,190);font-size:13px;'>
                                            Dear user, You have all ready submited your  form <Br>
                                            Now our team will contact you shortly then you can fill form again.
                                            Thank you.
                                          </div>
EOFILE;
echo $form_of_contact;         
     }
     else
     {

     	                   if(isset($_SESSION['bunchup_id']))
            {
                   $name_of_sender_contact=$user_name; 
                  $email_of_sender_contact=$user_email; 
                  $readonly="readonly";
                  
            }
            else
            {
            	$name_of_sender_contact=""; 
            	$email_of_sender_contact="";
            	$readonly="";
            }

            $form_of_contact = <<< EOFILE
                                       <div class='form_of_contact_us_to_fill_contact'>
        <input type='hidden' value="$user_no" id="contact_user_no">
      	<input type='name' class='input_of_form_to_contect' id='name' placeholder='Name' maxlength="50" value="$name_of_sender_contact" readonly='$readonly'>
      	<input type='email'   class='input_of_form_to_contect' id='email' placeholder='Email' maxlength='50' value="$email_of_sender_contact" readonly='$readonly'>
          
          <select type='problem' class='input_of_form_to_contect' id='problem'>
               <option selected value="">Select your Subject</option>
               <option value="Report a malfunction">Report a malfunction</option>
               <option value="Give a Sugestion">Give a Sugestion</option>
               <option value="Report a violating of copyright or patent">Report a violating of copyright or patent</option>
               <option value="Report a problem of service">Report a problem of service</option>
               <option value="Report any Wrong Endorsing">Report any Wrong Endorsing</option>
               <option value="Other">Other</option>
          </select>
          <textarea placeholder='Message for Bunchup' class='input_of_form_to_contect' id='message' style='height:90px;' maxlength='400'></textarea>
          <div class="upload_div">

          </div>
          <div class='hidden_message_come'>
          </div>

          <input type='button' class='submit_input_of_form_to_contect' id='submit_contact_us' value="Submit">

      </div>
EOFILE;

ECHO $form_of_contact;

     }

}
else
{
 $form_of_contact = <<< EOFILE
                                       <div class='form_of_contact_us_to_fill_contact' style='padding:4px;text-align:center;color:white;text-shadow:1px 1px 1px rgb(150,160,190);font-size:13px;'>
                                           Dear visiter, Please sign up or sign in to fill the contact us form.
                                          </div>
EOFILE;
echo $form_of_contact; 
}



?>


    
 

