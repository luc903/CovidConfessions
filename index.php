<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
?>

    <audio id="audio_1" src="../audio/confession_1.mp3"></audio>
    <audio id="audio_2" src="../audio/confession_2.mp3"></audio>
    <audio id="audio_3" src="../audio/confession_3.mp3"></audio>
    <audio id="audio_4" src="../audio/confession_4.mp3"></audio>
    <audio id="audio_5" src="../audio/confession_5.mp3"></audio>
    <audio id="audio_6" src="../audio/confession_6.mp3"></audio>

<script>

    function fullscreen() {
      //videoEl.setAttribute('rotation', {x: 0, y: 180, z: 0});
      var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
        (document.msFullscreenElement && document.msFullscreenElement !== null);

      var docElm = document.documentElement;
      if (!isInFullScreen) {
        if (docElm.requestFullscreen) {
          docElm.requestFullscreen();
        } else if (docElm.mozRequestFullScreen) {
          docElm.mozRequestFullScreen();
        } else if (docElm.webkitRequestFullScreen) {
          docElm.webkitRequestFullScreen();
        } else if (docElm.msRequestFullscreen) {
          docElm.msRequestFullscreen();
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      }
    }

    function start(){
        
        if (cnt == 0){
            var videoEl = document.querySelector('#video');
            videoEl.play();

            var el1 = document.querySelector('#textt');
            el1.setAttribute('visible', 'false');

            var el1 = document.querySelector('#confess');
            el1.setAttribute('visible', 'true');
            
        }
        if (cnt == 1){
            var x = document.getElementById('vis');
              if (x.style.visibility === 'hidden') {
                x.style.visibility = 'visible';
              } else {
                x.style.visibility = 'hidden';
              }
            var el1 = document.querySelector('#confess');
            el1.setAttribute('visible', 'false');
            
        }
        
        
        if (cnt >= 2){
            var videoEl = document.querySelector('#video');
            if (videoEl.paused){
                videoEl.play();
            } else {
                videoEl.pause();
            }
            //console.log(videoEl.currentTime);
        }

    };
    
    var cnt=0;
    document.addEventListener('click', function() {   
        window.start();
        cnt++;      
    });
    
    
</script>

    <div class="home-page">
        
        <div class="home-page__wrapper">
            <!--<video autoplay muted loop id="myVideo">
                <source src="video/background_animation_sm.mp4" type="video/mp4">
            </video>-->-
            
            <a-scene loading-screen="dotsColor: blue ; backgroundColor: black" background="color: #FAFAFA">
                      <a-assets>
                        <video id="video" autoplay="false" loop="true" crossorigin="anonymous" playsinline="" webkit-playsinline="" poster="images/vr_poster.png">
                          <source src="video/room.mp4" poster="images/vr_poster.png" type="video/mp4" >
                        </video>
                      </a-assets>
                      <a-videosphere src="#video" rotation="0 270 0" poster="images/vr_poster.png"></a-videosphere>


                      <a-entity id="textt" cursor-listener>
                        <a-text align="center" value="Tap To Start" material="color:#fff" position="0 1 -5"></a-text>
                      </a-entity>
            
                      <a-entity id="confess" cursor-listener visible="false" 
                                >
                        <a-text align="center" value="Tap To Confess" material="color:#fff" position="0 1 -5" event-set__enter="_event: mouseenter; color: #8FF7FF"></a-text>
                      </a-entity>
            
 </a-scene>

            
        <div id="vis" style="visibility: hidden">
             
            <div class="home-page__confession-wrapper">

                <div class="confession" style="display: none">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        Sometimes there are more important things than working at home... like surviving the
                        pandemic along with your family.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                       <button class="confession__button uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_3" onclick="play_3()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
            </div>
            <form id="confession-form" uk-scrollspy="cls:uk-animation-fade;">
                <textarea type="text" maxlength="250" class="confession__input uk-textarea"></textarea>
                <button class="uk-button uk-button-default">Confess</button>
            </form>
        
        
        
        </div>
            
        </div>

    </div>

<?php include("includes/footer.php") ?>