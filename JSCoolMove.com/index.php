
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Default functionality</title>
  <script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
  <link rel='stylesheet' href='jquery-ui.css'>
  <link rel='stylesheet' href='style.css'>
  <script>
  $(function(){
      $(".draggable").draggable({containment:'.frame' , cursorAt:{top:5 , left:100}  ,  handle:'.head_of_drag' });
   
      // axis 'x' or 'y' can be use
      //scrollSensivity  
       //, scrollSpeed:500 
       // scroll:true ,
       //containment :'name'
       // cursotAt:{top:value , left:value or bottom:value n all}
       //delay:100       
       // distance:300
       // cancle:name         this is to stop something from making move
       //revert:true;
       //helper:clone         
       // handle:name          this is the thing which make a move         
       // opacity:valee                n
        // helper:function(event){return $("<div class='help_helper'>move here</div>")}
        // , connectToSortable : '.short'

       /////// no px         in any case
       $('.short').sortable({
              revert:true
              

       });


      $('.new_li').draggable({containment:'.body_of_drag'
                            , connectToSortable : '.short'
                            , revert: 'invalid'
                            , helper: 'clone'
    });


                  $(".but_to_do").click(function(){
                                              $('.draggable').effect('transfer',{to: ".but_to_do",className:'new_t'});
                                               $('.draggable').effect('explode', {} ,500 );
                                             // $('.draggable').effect('size', {to:{width:200 , height:100}} ,2000 );
                  });
 

  

    $( document ).tooltip({
      track:true,
      show:{effect:'show'} ,
      hide:{ effect:'explode'}
    });
  

   $('.draggable').resizable({
    ghost:true
    ,animate:true
    ,aspectRatio: 16 / 9
    //,handles: "se"
    //,helper: "resize_div"
   });
   // in resizable if we use 
   // grid to tell the amout of resize



      
  });
  </script>
</head>
<body>

 <div class='frame'>
               <div class="draggable" >
                            <div class='resize_div'></div>
                            <div class='head_of_drag'>
                                   Movable
                            </div>
                            <div class='body_of_drag'>
                                 <ul>
                                    <li class='new_li' id='move_list'>Add me</li>
                                 </ul>
                                 <ul class='short'>
                                         <li>Books</li>
                                         <li>Cloths</li>
                                         <li>Shirt</li>
                                         <li>Pen</li>
                                 </ul>

                            </div>
               </div>

                <div class='but_to_do' title='click to see effect'>RUN</div>
                <form method='post' action='upload.php'>
                          <input type='file'  class='input_img' id='img_file'  name='profile' >
                        <input type='submit' value='Submit' class='but_to_do'>               
                </form>

            
              

 </div>
 
</body>
</html>
