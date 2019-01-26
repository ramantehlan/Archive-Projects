<link rel='stylesheet' href='../signin/search_of_user/search_need/css/status.css'>


<?php

mysql_select_db($search_user_db_name);

$update_code=mysql_query("select * from status_update ORDER BY no DESC ");
$no_of_update=mysql_num_rows($update_code);

if($no_of_update >= 1)
{ 
  static $no_s;
  $no_s=1;
   while($get_update_no=mysql_fetch_array($update_code))
   {  
   	   $date_of_update=$get_update_no['date_of_update'];
   	   $month_of_update=$get_update_no['month_of_update'];
   	   $year_of_update=$get_update_no['year_of_update'];
   	   $time_of_update=$get_update_no['time'];

   	   $status=$get_update_no['status'];
   	   $table_name=$get_update_no['tb_name'];
       $like_table="Z_L_$table_name";
       $comment_table="Z_C_$table_name";


   

$display_of_update = <<< EOFILE
	                                 <div class='status_box_of_wall'>
             <div class='div_of_img_in_status_wall'>
                <img src='http://$host_of_host/signin/users/users_uploded_photo/$search_user_p_picture'>
             </div>
             <div class='name_of_comment_maker'>
                  $search_user_name 
                  <div class='date_and_time_of_update'>
                  	$date_of_update/$month_of_update/$year_of_update  <span class='time_span'>$time_of_update</span>
                  </div>
             </div>
             <div class='status_of_user_in_bold'>
                      <pre>$status</pre>
             </div>
                <div class='comment_n_like_boxes_holder'>
                         <div class='div_of_like_user_img'>
                                              <div   class='left_side_like_button_in_update' id='left_side_like_button_in_update_$no_s'>
EOFILE;
echo $display_of_update;
        mysql_select_db($search_user_db_name);
        $code_to_me=mysql_query("select * from $like_table where user_no='$user_no'");
       $u_like=mysql_num_rows($code_to_me);     
       if($u_like >=1)
       {
         echo "Unlike";
       }
       else
       {
          Echo "Like";
       }

$display_of_update_b = <<< EOFILE
</div>
                                               <div class='right_side_like_users_but'>
EOFILE;

echo $display_of_update_b;
    mysql_select_db($search_user_db_name);
    $code_to_get_no_of_like=mysql_query("select * from $like_table ORDER BY no DESC ");
       $no_of_like=mysql_num_rows($code_to_get_no_of_like);
       
       if($no_of_like == 0)
       {
          echo "<div class='no_of_like_div' title='$no_of_like like'>$no_of_like <br> Like</div>";
       }
       else if($no_of_like <= 17)
       {

          while($get_user_no_of_like=mysql_fetch_array($code_to_get_no_of_like))
          {
             $like_user_no=$get_user_no_of_like['user_no'];
             
            

           mysql_select_db($db_name);
            $get=mysql_query("select * from users where user_no=$like_user_no");
           
            $fetch_data=mysql_fetch_array($get);

             $like_user_d_name=$fetch_data['name'];
             $like_p_pic_d=$fetch_data['Profile_picture'];
             $like_p_pic_id=$fetch_data['id'];

              if($like_p_pic_d =="")
              {
                 $like_p_pic_d ="defalt.jpg";
              }
              
              if($like_user_no == $user_no)
              {
                      $like_user_d_name='You';
              }
      
                      
              echo "<a href='http://$host_of_host/$like_p_pic_id'><div class='img_of_likers' title='$like_user_d_name'><img src='http://$host_of_host/signin/users/users_uploded_photo/$like_p_pic_d'></div></a>";
           
              
          }
             
          echo "<div class='no_of_like_div' title='$no_of_like like'>$no_of_like <br>Like</div>";
       } 

        else if($no_of_like >= 18)
       {
           $code_to_get_no_of_like_2=mysql_query("select * from $like_table ORDER BY no DESC limit 0,17 ");
       

          while($get_user_no_of_like=mysql_fetch_array($code_to_get_no_of_like_2))
          {
             $like_user_no=$get_user_no_of_like['user_no'];
             
            

           mysql_select_db($db_name);
            $get=mysql_query("select * from users where user_no=$like_user_no");
           
            $fetch_data=mysql_fetch_array($get);

             $like_user_d_name=$fetch_data['name'];
             $like_p_pic_d=$fetch_data['Profile_picture'];

              if($like_p_pic_d =="")
              {
                 $like_p_pic_d ="defalt.jpg";
              }
              
              if($like_user_no == $user_no)
              {
                      $like_user_d_name='You';
              }
      
                      
              echo "<div class='img_of_likers' title='$like_user_d_name'><img src='http://$host_of_host/signin/users/users_uploded_photo/$like_p_pic_d'></div>";
           
              
          }
              
          echo "<div class='no_of_like_div' title='$no_of_like like'>$no_of_like <br>Like</div>";
       }

    

             $display_of_update_2 = <<< EOFILE
                                                    
            
                                                    
                                                        
                                               </div>
             	                </div>
            <script type='text/javascript'>
                           $(document).ready(function(){
                            
                                             $('#left_side_like_button_in_update_$no_s').click(function(){
                                              var this_l=$(this).html(); 
                                             
                                              var display=$("#left_side_like_button_in_update_$no_s");
                                               if(this_l.match('Like') == 'Like')
                                               {
                                                 $(this).html("Unlike"); 
                                                    var d_name_b='$search_user_db_name';
                                                    var like_d_name='$like_table';

                                                    $.post("http://$host_of_host/signin/search_of_user/search_need/php_comman_plug/like/like.php",{c_d_name_b:d_name_b,c_like_d_name:like_d_name},function(do_like){
                                                           display.html(do_like);
                                                    });
                                               }
                                               else if(this_l.match('Unlike') == 'Unlike' )
                                               {
                                                 $(this).html("Like"); 
                                                    var d_name_b='$search_user_db_name';
                                                    var like_d_name='$like_table';

                                                    $.post("http://$host_of_host/signin/search_of_user/search_need/php_comman_plug/like/unlike.php",{c_d_name_b:d_name_b,c_like_d_name:like_d_name},function(do_unlike){
                                                               display.html(do_unlike);
                                                    });
                                               }
                                                  



                                             });
                                    
                           });
                   
            </script>
            <div class='div_of_comment_user'>
EOFILE;

echo $display_of_update_2;
                     
                   mysql_select_db($search_user_db_name);
                     
                     $code_to_c=mysql_query("select * from $comment_table ORDER BY no DESC ");
                     $no_of_comments=mysql_num_rows($code_to_c);
                      
                      if($no_of_comments <= 5)
                      {
                           while($get_first_info=mysql_fetch_array($code_to_c))
                           {
                                $comment_m_user_no=$get_first_info['user_no'];
                                $comment_m_comment=$get_first_info['comment'];

                                        
                                        $finding_hash=strpos($comment_m_comment,"#");
                                        
                                        if($finding_hash !== false)
                                        {          
                                                  $dd=substr_replace($comment_m_comment,"",0,$finding_hash +1);
                                                  $end= strpos($dd," ");

                                                  if($end !== false)
                                                  {
                                                  $new_end=strlen($dd);
                                                  $v=substr_replace($dd,"",$end,$new_end);
                                                    
                                                   $comment_m_comment=substr_replace($comment_m_comment,"<a href='http://$host_of_host/$v' class='a_of_ref' title='http://$host_of_host/$v'>#$v</a> ",$finding_hash,$end+1);
                                                  }

                                                  else
                                                  {  
                                                       $comment_m_comment=substr_replace($comment_m_comment,"<a href='http://$host_of_host/$dd' class='a_of_ref' title='http://$host_of_host/$dd'>#$dd</a> ",$finding_hash);
                                                  }
                                                 
                                                
                                         }
                                        else
                                        { 
                                        }

                                          
                                         

                                            $comment_m_comment=str_replace(':)'," <span class='Smile_faces_a smile_ui_base' title=':)' ></span> ",$comment_m_comment);
                                            $comment_m_comment=str_replace(':D'," <span class='Smile_faces_b smile_ui_base' title=':D'></span> ",$comment_m_comment);
                                          
                                            
                                $comment_m_date=$get_first_info['date_of_comment'];
                                $comment_m_month=$get_first_info['month_of_comment'];
                                $comment_m_year=$get_first_info['year_of_comment'];
                                $comment_m_time=$get_first_info['time'];

                                mysql_select_db($db_name);
                                 $code_to_com="select * from users where user_no = $comment_m_user_no";
                                 $fetching_the_data=mysql_fetch_array(mysql_query($code_to_com));

                                 $comment_m_name=$fetching_the_data['name'];
                                 $comment_m_img=$fetching_the_data['Profile_picture'];
                                 $comment_m_id=$fetching_the_data['id'];

                                    if($comment_m_img == "")
                                    {
                                       $comment_m_img ="defalt.jpg";
                                    }
 
                                          $display_of_update_3 = <<< EOFILE
                                
                                             <div class='div_of_one_comment_of_a_user'>
                                                           <a href='http://$host_of_host/$comment_m_id' >
                                                           <div class='img_div_of_a_comment' title='$comment_m_name

                                                           '>
                                                               <img src='http://$host_of_host/signin/users/users_uploded_photo/$comment_m_img'>
                                                           </div> 
                                                           </a>
                                                           <div class='name_of_comment_make_in_commment'><a href='http://$host_of_host/$comment_m_id' class='comment_user_a' title='$comment_m_name'>$comment_m_name</a>
                                                            <span class='comment_in_span'>
                                                                 $comment_m_comment
                                                            </span> 

                                                           </div>
                                                           <div class='last_line_of_one_comment'>
                                                              <div class='date_and_time'>
                                                                 $comment_m_date/$comment_m_month/$comment_m_year   <span class='time_span'>$comment_m_time PM</span>
                                                               </div>
                                                            </div>
                                             </div> 
EOFILE;
echo $display_of_update_3;


                                

                           }  
                        }  

                        else if($no_of_comments >= 6) 
                        {
                            $code_to_c=mysql_query("select * from $comment_table ORDER BY no DESC limit 0,5");
                             while($get_first_info=mysql_fetch_array($code_to_c))
                           {
                                $comment_m_user_no=$get_first_info['user_no'];
                                $comment_m_comment=$get_first_info['comment'];
                                 
                                    $finding_hash=strpos($comment_m_comment,"#");
                                        
                                        if($finding_hash !== false)
                                        {          
                                                  $dd=substr_replace($comment_m_comment,"",0,$finding_hash +1);
                                                  $end= strpos($dd," ");

                                                  if($end !== false)
                                                  {
                                                  $new_end=strlen($dd);
                                                  $v=substr_replace($dd,"",$end,$new_end);
                                                    
                                                   $comment_m_comment=substr_replace($comment_m_comment,"<a href='http://$host_of_host/$v' class='a_of_ref' title='http://$host_of_host/$v'>#$v</a> ",$finding_hash,$end+1);
                                                  }

                                                  else
                                                  {  
                                                       $comment_m_comment=substr_replace($comment_m_comment,"<a href='http://$host_of_host/$dd' class='a_of_ref' title='http://$host_of_host/$dd'>#$dd</a> ",$finding_hash);
                                                  }
                                                 
                                                
                                         }
                                        else
                                        { 
                                        }

                                          
                                         

                                            $comment_m_comment=str_replace(':)'," <span class='Smile_faces_a smile_ui_base' title=':)'></span> ",$comment_m_comment);
                                            $comment_m_comment=str_replace(':D'," <span class='Smile_faces_b smile_ui_base' title=':D'></span> ",$comment_m_comment);

                                $comment_m_date=$get_first_info['date_of_comment'];
                                $comment_m_month=$get_first_info['month_of_comment'];
                                $comment_m_year=$get_first_info['year_of_comment'];
                                $comment_m_time=$get_first_info['time'];

                                mysql_select_db($db_name);
                                 $code_to_com="select * from users where user_no = $comment_m_user_no";
                                 $fetching_the_data=mysql_fetch_array(mysql_query($code_to_com));

                                 $comment_m_name=$fetching_the_data['name'];
                                 $comment_m_img=$fetching_the_data['Profile_picture'];
                                 $comment_m_id=$fetching_the_data['id'];

                                    if($comment_m_img == "")
                                    {
                                       $comment_m_img ="defalt.jpg";
                                    }
 
                                          $display_of_update_3 = <<< EOFILE
                                
                                             <div class='div_of_one_comment_of_a_user'>
                                                           <a href='http://$host_of_host/$comment_m_id' >
                                                           <div class='img_div_of_a_comment' title='riya dobhal'>
                                                               <img src='http://$host_of_host/signin/users/users_uploded_photo/$comment_m_img'>
                                                           </div> 
                                                           </a>
                                                           <div class='name_of_comment_make_in_commment'><a href='http://$host_of_host/$comment_m_id' class='comment_user_a' title='$comment_m_name'>$comment_m_name</a>
                                                            <span class='comment_in_span'>
                                                                 $comment_m_comment
                                                            </span> 

                                                           </div>
                                                           <div class='last_line_of_one_comment'>
                                                              <div class='date_and_time'>
                                                                 $comment_m_date/$comment_m_month/$comment_m_year   <span class='time_span'>$comment_m_time PM</span>
                                                               </div>
                                                            </div>
                                             </div> 
EOFILE;
echo $display_of_update_3;


                                

                           }
                           $no_of_comments -=5;

                      echo "<div class='div_of_one_comment_of_a_user_more' >$no_of_comments More Comments</div>";
                      }

                      else
                      {

                      }
                      


          


                      $display_of_update_4 = <<< EOFILE
                                             <div class='div_of_one_comment_of_a_user'>
                                                           <a href='http://' >
                                                           <div class='img_div_of_a_comment' title='$user_name'>
                                                               <img src='http://$host_of_host/signin/users/users_uploded_photo/$user_p_picture'>
                                                           </div> 
                                                           </a>
                                                           <div class='name_of_comment_make_in_commment' id='display_of_c_$no_s'>
                                                                    <input type='Comment' autocomplete='off' placeholder='Write a Comment...' class='input_for_comment' id="mcom_m_$no_s">
                                                                    <input type='button' value='comment' class='hidden_submit' id='comment_onthe_$no_s'>
                                                                    <script type='text/javascript' >

                                                                    $(document).ready(function(){
                                                                         
                                                                            $("#comment_onthe_$no_s").click(function(){
                                                                                       var display=$("#display_of_c_$no_s");
                                                                                        var d_b_of_comment='$comment_table';
                                                                                        var d_name_b='$search_user_db_name';
                                                                                         var com_m=document.getElementById('mcom_m_$no_s');

                                                                                         if(com_m.value == "")
                                                                                         {
                                                                                                  com_m.placeholder="Can't do a blank comment.";
                                                                                         }
                                                                                         else
                                                                                         {
                                                                                                   display.html("<img src='http://$host_of_host/need/images/small/load/loader.gif' class='load_img_of_comment'>");

                                                                                         $.post("http://$host_of_host/signin/search_of_user/search_need/php_comman_plug/comment/comment.php",{comment:com_m.value,db_name:d_name_b,db_of_comment:d_b_of_comment},function(do_comment){
                                                                                             display.html("<div class='load_img_of_comment'>" + do_comment + "</div>");
                                                                                           });

                                                                                         }
                                                                                   
                                                                                          


                                                                             });
                                                                                

                                                                      });
                                                                              
                                                                    </script>                     
                                                           </div>
                                                         
                                             </div>
                                            



                                </div>
                               
             </div>
       


</div>


EOFILE;

echo $display_of_update_4;
$no_s++;
   }
	  
	
}
else
{
	echo "no update";
}


?>





