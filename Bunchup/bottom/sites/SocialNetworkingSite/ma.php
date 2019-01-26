<p>List Box - Single Select<br>
<select name="listbox" size="3">
<option value="Option 1" selected>Option 1</option>
<option value="Option 2">Option 2</option>
<option value="Option 3">Option 3</option>
<option value="Option 4">Option 4</option>
<option value="Option 5">Option 5</option>
</select>
<input type="submit" name="select" >
</p>



<html>
   <head>
   <title>List Box Form Data</title>
   </head>
   <body>
   <h3>List Box Form Data</h3>
   <p>Form data passed from the form</p>
       <?php
           echo "<p>select: " . $_POST['select']."</p>\n"; 
          echo "<p>listbox: " . $_POST['listbox'] . "</p>\n";
          $values = $_POST['listmultiple'];
          echo "<p>listmultiple: ";
         foreach ($values as $a){
             echo $a;
         }
          echo "</p>\n";
     ?>
  </body>
  </html>
  