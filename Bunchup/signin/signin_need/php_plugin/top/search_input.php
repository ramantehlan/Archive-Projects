
<?php
include '../../../../need/php_comman_plug/connect/connect.php';
session_start();
$user_db_name=$_SESSION['bunchup_user_db_name'];
$user_id=$_SESSION['bunchup_id'];

                                       $input=$_POST['search_value'];
                                       mysql_select_db($db_name);
                                       $line=mysql_query("SELECT * 
                                                         FROM users where
                                                         name LIKE  '%$input%'
                                                         OR email LIKE  '%$input%'
                                                         OR nick_name LIKE  '%$input%'
                                                         OR id LIKE  '%$input%'
                                                        LIMIT 0 , 8");

                                        $no=mysql_num_rows($line);

         if($no <= 0)
             {
                            $error = <<< EOFILE
                                        <div class='more_button_at_bottom' style='margin-top:0px;'>
                                        No Result Found like :- <b>$input</b>
                                          </div>
EOFILE;
                            echo $error;
              }
          else
              {  
                             while($GET_S_IN=mysql_fetch_array($line))
                                         {
                                                                 $search_name=$GET_S_IN['name'];
                                                                 $search_id=$GET_S_IN['id'];
                                                                 $search_no=$GET_S_IN['user_no'];
                                                                 $search_db_name=$GET_S_IN['db_name'];
                                                                 $search_img_url=$GET_S_IN['Profile_picture'];

                                                              
                                                                

                                                                            // this is and else check the photo of users exist or not

                                                              
                                                             if($search_img_url =="")
                                                                {
                                                                  $search_img_url="defalt.jpg";
                                                                } 
                                                           
                                                              else
                                                                {
                                                                   $search_img_url= $search_img_url;
                                                                }
                                                            
                                                            
                                                                           

     
                                                               

                                                                mysql_select_db($user_db_name);

                                                                $code_two=mysql_query("select * from friends where friend_no='$search_no'");
                                                                $friend_no=mysql_num_rows($code_two);

                                                                $code_six=mysql_query("select * from following where following_no='$search_no'");
                                                                $following_no=mysql_num_rows($code_six);
     
                                                                $code_three=mysql_query("select * from followers where followers_no='$search_no'");
                                                                $follower_no=mysql_num_rows($code_three);

                                                                 $code="SELECT a.friend_no, b.friend_no
                                                                       FROM `$user_db_name`.`friends` a, `$search_db_name`.`friends` b
                                                                       WHERE a.friend_no = b.friend_no";
                                                                 $mutual_friends=mysql_num_rows(mysql_query($code));
      
                                                                           // this if else statements check that the person whom i m searching is my friend or its me or it my following
                                                                           // or its my mutual friend
                                                                            if($search_id == $user_id)
                                                                                { 
                                                                                   $mutual_line="";
                                                                                }

                                                                             else if($friend_no >= 1)
                                                                                {
                                                                                   $mutual_line="<div class='mutual_friends_row' >Friends</div>";
                                                                                }
                                                                            /*  else if($follower_no >=1)
                                                                                {
                                                                                   $mutual_line="<div class='mutual_friends_row' >Follower</div>";
                                                                                 }
                                                                            */

                                                                               else if($following_no >= 1)
                                                                                   {
                                                                                       $mutual_line="<div class='mutual_friends_row' >Following</div>";
                                                                                    }



                                                                              else if($mutual_friends >= 1)
                                                                                     {
                                                                                       $mutual_line="<div class='mutual_friends_row' >$mutual_friends mutual friend.</div>";
                                                                                     }
                                                                               else
                                                                                   {
                                                                                        $mutual_line="";
                                                                                   }

     

    
      
        
     

    

                                                                                 $d = <<< EOFILE
                      
                                                                         <a href='http://$host_of_host/$search_id'><div class='box_of_search zoomTarget' data-targetsize='0.8'>
                                                                                        <div class='left_box_of_img'>
                                                                                                 <img src='../../signin/users/users_uploded_photo/$search_img_url'
                                                                                                  class='img_of_a_seach_ppl'>
                                                                                         </div>
                                                                                        <div class='first_name_row'>
                                                                                                 $search_name 
                                                                                        </div>
                                                                                      
                                                                                       
                                                                                         $mutual_line
                                                                                       
                                                                         </div>
                                                                         </a>
                     
EOFILE;

echo $d;


  } ///   while  statement ends here
   

// this is the last line of search which thee that how many result are found
                             mysql_select_db($db_name);
                             $linee=mysql_query("SELECT * 
                                                 FROM users where
                                                 name LIKE  '%$input%'
                                                 OR email LIKE  '%$input%'
                                                 OR nick_name LIKE  '%$input%'
                                                 OR id LIKE  '%$input%'
                                                 ");

                           $nom=mysql_num_rows($linee);
  
                           if($nom >=9)
                                {
                                  	        $more = <<< EOFILE
                                                       <div class='more_button_at_bottom'>
                                                              <a href='http://$host_of_host/signin/search.php?s=$input'>See all $nom results</a>
                                                       </div>
EOFILE;

                                            echo $more;

                                }

                           else
                                {
  	                                      $more = <<< EOFILE
                                                    <div class='more_button_at_bottom'>
                                                          $nom Result Found!
                                                    </div>
EOFILE;
                                         echo $more;
                                }

}// else state ment end here






?>
