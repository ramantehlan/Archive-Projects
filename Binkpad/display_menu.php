 <?php
$dir = "notes/";

// Open a directory, and read its contents
 if(isset($_SESSION['path']))
              {
 
              }
              else
              {
                      session_start();   
              }

if (is_dir($dir))
{
  if ($dh = opendir($dir))
  { $no=0;
    // List files in images directory
    while (($file = readdir($dh)) !== false)
     {
      if($file == "." || $file == "..")
         {
             echo "";
         }
      else
        {     
               if(basename($_SESSION['path']) == $file )
               {
                $class='seleted_option';
               }
               else
               {
                $class ="option";
               }
              echo "<div class='$class'  id='change_file_$no'>$file <input type='hidden' id='value_holder_$no' value='$file'></div><br>";
              
              
              
              echo "<script type='text/javascript'>
                                $('#change_file_$no').click(function(){
                                             var from = $('#value_holder_$no').val();
                                              $.post('change_file.php',{to:from},function(change_file){
                                              $('.save_here').html(change_file);
                                            });
                                     }); 
                 </script>
                  ";
                  $no++;
         }
     }
   
    closedir($dh);
  }
}

                           ?>