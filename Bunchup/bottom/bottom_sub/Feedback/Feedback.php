<h2>Feedback</h2>
<p>
Bunchup is trying hard to roll new features to its site but to do so we need your feedback. We need to know that do our services satisfy your social need  or not and do our services have quality.
Team of bunchup work only for you, we want to give you best dam social networking site which should be cool , trendy , fast and advance, so we invite your suggestions and ideas for our site. If we
find your suggestion or idea good then we will inform you and we will create that for you and million others. 

</p>

<?php

if(isset($_SESSION['bunchup_id']))
{
	mysql_select_db($db_name);
$no=mysql_num_rows(mysql_query("select * from feedback_upload where user_no='$user_no'"));

                                      if($no >= 1)
     {
        $form_of_contact = <<< EOFILE
                                       <div class='form_of_contact_us_to_fill_contact' style='padding:4px;text-align:center;color:white;text-shadow:1px 1px 1px rgb(150,160,190);font-size:13px;'>
                                            Dear user, You have all ready submited your form <Br>
                                            Now our team will check your idea and suggestion and then you can fill form again.
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
      
          <textarea placeholder='Message for Bunchup' class='input_of_form_to_contect' id='message' style='height:90px;' maxlength='400'></textarea>
          <div class="upload_div">

          </div>
          <div class='hidden_message_come'>
          </div>

          <input type='button' class='submit_input_of_form_to_contect' id='submit_feedback' value="Submit">

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



