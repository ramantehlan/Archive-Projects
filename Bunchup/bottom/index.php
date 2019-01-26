 <?php  
                      if(isset($_GET['q']))
                      {
                             switch($_GET['q'])
                             {
                                case 'about':
                                         $select="about";
                                         $site_on_now_on_now="about/about.php";
                                break;
                                case 'services':
                                         $select="services";
                                         $site_on_now_on_now="Services/Services.php";
                                break;
                                case 'feedback':
                                          $select="feedback";
                                         $site_on_now_on_now="Feedback/Feedback.php";
                                break;
                                case 'credit':
                                        $select="credit";
                                         $site_on_now_on_now="Credit/Credit.php";
                                break;
                                case 'jobs':
                                        $select="jobs";
                                         $site_on_now_on_now="jobs/jobs.php";
                                break;
                                case 'contactus':
                                         $select="contactus";
                                         $site_on_now_on_now="Contactus/Contactus.php";
                                break;
                                case 'security':
                                        $select="security";
                                         $site_on_now_on_now="Security/Security.php";
                                break;
                                case 'termcondition':
                                           $select="termcondition";
                                         $site_on_now_on_now="termcondition/termcondition.php";
                                break;
                                case 'privacypolicy':
                                            $select="privacypolicy";
                                         $site_on_now_on_now="PrivacyPolicy/PrivacyPolicy.php";
                                break;
                                default:
                                          $select="about";
                                         $site_on_now_on_now="about/about.php";
                                break;
                             }

                      }
                      else
                      {
                        $select="about";
                         $site_on_now_on_now="about/about.php";
                      }

                   ?>
<html>
<head>
<title><?php echo $select; ?></title>
<link rel='stylesheet' href='../need/css/comman/comman.css'>
<link rel='stylesheet' href='bottom_need/css/main.css'>

<script type='text/javascript' src="../need/javascript/jquery/jquery-1.9.1.js"></script>

  <!-- This is meta tag -->
        <meta name='description' content='Bunchup let you bunch up your social networking in a very cool and new way, it is very unique and secure'>
        <meta name='keyword' content='about , feedback , services , credit , contactus , security'>
        <meta name='sumary' content='Bunchup is a social networking site, which is free to use, which is new , cool , unique , fast , secure and a never ending trend.'>
        <meta name='author' content='Bunchup'>
        <meta charset='utf-8'>
        <meta name='language' content='English'>
</head>
<body>
	  <div id='top'>
    <?php 
    session_start();
    if(isset($_SESSION['bunchup_id']))
    {  
       include "../need/php_comman_plug/connect/connect.php";
       include "../need/php_comman_plug/get_info/info.php";
        $site='';
      
        $selected ='selected_option_of_menu_bar';
        $other ='option_of_menu_bar';

        echo "<input type='hidden' value='../signin/' id='java_url_for_plugin'>";
        include "../signin/signin_need/php_plugin/top/top.php"; 
    }
    else
    {   include "../need/php_comman_plug/connect/connect.php";
       include "top/top.php";
    }
  ?>
   </div>
<div class='body'>
           <div class='left_side_bar'>
                            <div class='img_of_company'>
                                     <img src='../need/images/logo/logo.png' >
                            </div>
                            <div class='body_of_left_side_help'>
                                            
                                           <a href='?q=about'><div id='about_img' class='<?php if($select == "about"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?> '>About</div></a>
                                           <a href='?q=services'><div id='services_img' class='<?php if($select == "services"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Services</div></a>
                                           <a href='?q=feedback'><div id='feedback_img' class='<?php if($select == "feedback"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Feedback</div></a>
                                           <a href='?q=credit'><div id='credit_img' class='<?php if($select == "credit"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Credit</div></a>
                                           <a href='?q=jobs'><div id='job_img' class='<?php if($select == "jobs"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Jobs</div></a>
                                           <a href='?q=contactus'><div id='contactus_img' class='<?php if($select == "contactus"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Contact us</div></a>
                                           <a href='?q=security'><div id='security_img' class='<?php if($select == "security"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Security</div></a>
                                           <a href='?q=termcondition'><div id='termcondition_img' class='<?php if($select == "termcondition"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Term & Condition</div></a>
                                           <a href='?q=privacypolicy'><div id='privaciypolicy_img' class='<?php if($select == "privacypolicy"){echo "selected_option_of_left_side_help_button";} else {echo "option_of_left_side_help_button";} ?>'>Privacy Policy</div></a>
                                         
                            </div>
           </div>
           <div class='right_side_bar'>
                  
                   <?php
                     include "bottom_sub/" . $site_on_now_on_now;
                   ?>
           </div> 
</div>
<script type='text/javascript'  src='bottom_need/javascript/slide.js'></script>
<script type='text/javascript'  src='bottom_need/javascript/contact_us.js'></script>
<script type='text/javascript'  src='bottom_need/javascript/feedback_upload.js'></script>
</body>
</html>