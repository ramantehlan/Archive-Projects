/*************************************************************
@fileDescription to play audio and analyse it
@author          Mr Raman Tehlan
@version         1.0
@since           25-05-2016
**************************************************************/

//Create a new instance of an audio object and adjust some of its properties
     
     var audio       = new Audio();
     audio.src       = "assets/sounds/track3.mp3";
     audio.controls  = true;
     audio.loop      = true;
     audio.autoplay  = true;

//Establish all variables that your analyser will use

     var canvas , ctx , source , context , analyser , fbc_array , bars , bar_x , bar_width , bar_height;

//Initialize the mp3 player after the page loads all of its HTML into the window
     
     window.addEventListener("load" , initMp3Player , false);

          function initMp3Player()
          {
              document.getElementById("audio_box").appendChild(audio);

              context  = new AudioContext();  //AudioContext object instance
              analyser = context.createAnalyser();
              canvas   = document.getElementById("analyser");
              ctx      = canvas.getContext('2d');

              // Re-route audio playback into the procession graph of the AudioContext

              source   = context.createMediaElementSource(audio);
               
              source.connect(analyser);
              analyser.connect(context.destination);
              frameLooper();
          }

//frameLooper() animates any style of graphics you wish to the audio frequency
//Looping at the default frame rate that the browser provides (approx. 60 FPS)
       
           function frameLooper()
           {
           	  window.requestAnimationFrame(frameLooper);

           	  fbc_array = new Uint8Array(analyser.frequencyBinCount);

           	  analyser.getByteFrequencyData(fbc_array);

           	  ctx.clearRect(0,0,canvas.width , canvas.height); // clear the canvas
           	  ctx.fillStyle = '#FFFFFF';                       // Color of the bars
           	  bars = 200;
               
                  for(var i = 0; i < bars; i++)
                  {
                  	 bar_x      = i * 3;
                  	 bar_width  = 2;
                  	 bar_height = -(fbc_array[i] / 2);

                     //fillRect(x , y , width , height) // Explanation of the parameters below
                     ctx.fillRect(bar_x , canvas.height , bar_width , bar_height);

                  }

           }
