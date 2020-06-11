<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
require_once("config.php");

$randomConfession_1 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_2 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_3 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_4 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_5 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_6 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
$randomConfession_7 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;


echo $randomConfession;

mysqli_close($conn);

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

        function start() {

            if (cnt == 0) {
                var videoEl = document.querySelector('#video');
                videoEl.play();

                var el1 = document.querySelector('#textt');
                el1.setAttribute('visible', 'false');

                var el1 = document.querySelector('#confess');
                el1.setAttribute('visible', 'true');

            }
            if (cnt == 1) {
                document.querySelector("#confession_1").setAttribute('visible', 'true');
                var x = document.getElementById('vis');
                if (x.style.visibility === 'hidden') {
                    x.style.visibility = 'visible';
                } else {
                    x.style.visibility = 'hidden';
                }
                var el1 = document.querySelector('#confess');
                el1.setAttribute('visible', 'false');

            }


            if (cnt >= 2) {
                //var videoEl = document.querySelector('#video');
                var video = document.getElementById("video");
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
                //console.log(videoEl.currentTime);
            }
            
            if (cnt >3){
                var el1 = document.querySelector('#confession_1');
                el1.setAttribute('visible', 'true');
                var el2 = document.querySelector('#confession_2');
                el2.setAttribute('visible', 'true');
                var el3 = document.querySelector('#confession_3');
                el3.setAttribute('visible', 'true');
                var el4 = document.querySelector('#confession_4');
                el4.setAttribute('visible', 'true');
                var el5 = document.querySelector('#confession_5');
                el5.setAttribute('visible', 'true');
                var el6 = document.querySelector('#confession_6');
                el6.setAttribute('visible', 'true');
                var el7 = document.querySelector('#confession_7');
                el7.setAttribute('visible', 'true');
                
            }

        };
       
        var cnt = 0;
        document.addEventListener('click', function () {
            window.start();
            cnt++;
        });
        
        

    </script>

    <div class="home-page">

        <div class="home-page__wrapper">
            <!--<video autoplay muted loop id="myVideo">
                <source src="video/background_animation_sm.mp4" type="video/mp4">
            </video>-->-

            <a-scene loading-screen="dotsColor: blue ; backgroundColor: black;" background="color: #FAFAFA" >
                <a-assets>
                    <video id="video" autoplay="false" loop="false" crossorigin="anonymous" playsinline=""
                           webkit-playsinline="" poster="images/vr_poster.png">
                        <source src="video/room.mp4" poster="images/vr_poster.png" type="video/mp4">
                    </video>
                </a-assets>
                <a-videosphere src="#video" rotation="0 270 0" poster="images/vr_poster.png"></a-videosphere>
                
                <a-entity id="textt" cursor-listener>
                    <a-text align="center" value="Tap To Start" material="color:#fff" position="0 1 -5"></a-text>
                </a-entity>

                <a-entity id="confess" cursor-listener visible="false">
                    <a-text align="center" value="Tap To Confess" material="color:#fff" position="0 1 -5"
                            event-set__enter="_event: mouseenter; color: #8FF7FF"></a-text>
                </a-entity>
            
                
                <a-entity id="confession_1" cursor-listener visible="false" >
<!--                    animation="property: position; to: 0 1 -7; dur: 2000; easing: linear; loop: true"-->
                    <a-text align="center" value="<?php echo $randomConfession_1; ?>" material="color:#fff" baseline="center" position="0 1 -7"
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                    
                </a-entity>
                                
                <a-entity id="confession_2" cursor-listener visible="false" rotation="0 51 0">
                    <a-text align="center" value="<?php echo $randomConfession_2; ?>" material="color:#fff" baseline="center" position="0 1 -7" 
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
                <a-entity id="confession_3" cursor-listener visible="false" rotation="0 102 0">
                    <a-text align="center" value="<?php echo $randomConfession_3; ?>" material="color:#fff" baseline="center" position="0 1 -7" 
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
                <a-entity id="confession_4" cursor-listener visible="false" rotation="0 153 0">
                    <a-text align="center" value="<?php echo $randomConfession_4; ?>" material="color:#fff" baseline="center" position="0 1 -7"
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
                <a-entity id="confession_5" cursor-listener visible="false" rotation="0 204 0">
                    <a-text align="center" value="<?php echo $randomConfession_5; ?>" material="color:#fff" baseline="center" position="0 1 -7"
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
                <a-entity id="confession_6" cursor-listener visible="false" rotation="0 255 0">
                    <a-text align="center" value="<?php echo $randomConfession_6; ?>" material="color:#fff" baseline="center" position="0 1 -7"
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
                <a-entity id="confession_7" cursor-listener visible="false" rotation="0 306 0">
                    <a-text align="center" value="<?php echo $randomConfession_7; ?>" material="color:#fff" baseline="center" position="0 1 -7" 
                            event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"></a-text>
                </a-entity>
        
            </a-scene>


            <div id="vis" style="visibility: hidden">

<!--
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
                            <button class="confession__button uk-button uk-button-default"
                                    uk-icon="icon: play; ratio: 1.2" value="play_3" onclick="play_3()"></button>
                            <small>May 2020</small>
                        </div>
                    </div>
                </div>
-->
                <form id="confession-form" uk-scrollspy="cls:uk-animation-fade;">
                    <textarea type="text" maxlength="250" class="confession__input uk-textarea"></textarea>
                    <button class="uk-button uk-button-default">Confess</button>
                </form>


            </div>

        </div>

    </div>

<?php include("includes/footer.php") ?>