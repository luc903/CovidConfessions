<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
require_once("config.php");

$query = "SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);

while ($row = $result->fetch_row()) {
    $rows[] = $row[0];
}

$randomConfession_1 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 5")->fetch_object()->text;


mysqli_close($conn);

?>
    <audio id="audio_1" src="../audio/confessions_intro_1.mp3"></audio>
<!--    <audio id="audio_1" src="../audio/confession_1.mp3"></audio>-->
<!--    <audio id="audio_2" src="../audio/confession_2.mp3"></audio>--

<!--
    <audio id="audio_3" src="../audio/confession_3.mp3"></audio>
    <audio id="audio_4" src="../audio/confession_4.mp3"></audio>
    <audio id="audio_5" src="../audio/confession_5.mp3"></audio>
    <audio id="audio_6" src="../audio/confession_6.mp3"></audio>
-->

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
    
        AFRAME.registerComponent('reload', {
            schema: {
              default: ''
            },
            init() {
              const reload = document.querySelector('#reload');
              var b = false
              this.el.addEventListener('click', () => {
                if (b) {
                    reload.setAttribute('visible', 'false');
                    $(".home-page").fadeOut("slow", function () {
                        window.location.href = "/confessions";
                    });
                } else {
                   reload.setAttribute('visible', 'true');
                }
                b = !b;
                console.log('Reload');
              });
            }
          });
                

    </script>


    <div class="home-page">


        <div class="home-page__wrapper">
            <div id="splash">
                <h1>Confessions</h1>
                <div class="loading"></div>
                <p></p>
                <img src="images/ACE.jpg">
            </div>


            <a-scene loading-screen="dotsColor: blue ; backgroundColor: black; enabled: false;"
                     background="color: #FAFAFA" cursor-listener>
                
                <a-entity id="camera" camera="" position="0 1 0" look-controls cursor="rayOrigin: mouse"></a-entity>
                
                <a-assets>
                    <video id="video" autoplay="false" preload="" loop="false" crossorigin="anonymous" playsinline=""
                           webkit-playsinline="" src="video/room.mp4">
                       <source src="video/room.mp4" type="video/mp4">
                    </video>
                </a-assets>
                <a-videosphere src="#video" rotation="0 270 0"></a-videosphere>
              

                <a-entity id="textt" cursor-listener>
                    <a-text align="center" value="Tap To Begin" color="white" position="0 1 -5" opacity="0"
                            animation="property: position; to: 0 2 -3; dur: 3000; easing: easeInSine; loop: true; dir:alternate;"
                            animation__2="property: opacity; to: 1; dur: 3000; easing: easeInSine; loop: true; dir:alternate;"
></a-text>
                </a-entity>

                <?php $rotations = ["", "0 72 0", "0 144 0", "0 216 0", "0 288 0"] ?>
                <?php $position_movement = ["0 2 -5", "0 0 -5", "0 2 -5", "0 0 -5", "0 2 -5"] ?>
                <?php for ($i = 0; $i < Count($rows); $i++): ?>
                    <a-entity class="confession-item"  visible="false"
                              rotation="<?php echo $rotations[$i] ?>">
                        <a-text align="center" value="<?php echo $rows[$i]; ?>" material="color:#fff"
                                baseline="center" position="0 1 -5"
                                event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="35"
                                animation="property: position; to: <?php echo $position_movement[$i] ?>; dur: 20000; easing: easeInSine; loop: true; dir:alternate;" opacity = "1" shadow>
                            
                           <a-animation attribute="opasity"
                                   dur="1000"
                                   to="0"
                                   begin="click"
                                   delay ="10"
                                   dur="1500" 
                                   fill="forwards">
                            </a-animation>
                        
        
                        
                        </a-text>
                    </a-entity>
                <?php endfor; ?>
                
                <a-entity id="reload" visible="false" rotation="0 51 0" reload geometry="primitive:plane; height: 0; width: 0;">
                  <a-text align="center" value="See More" color="#d630e9" position="2 2 -5" opacity ="1"  material="opacity: 0"  animation="property: position; to:2 2 -5; dur: 5000; easing: easeInSine; loop: true; dir:alternate;"></a-text>
               </a-entity>
               
<!--                <a-camera><a-cursor></a-cursor></a-camera>-->
            </a-scene>


            <div id="vis" style="visibility: hidden">
                <form id="confession-form" uk-scrollspy="cls:uk-animation-fade;">
                    <textarea type="text" maxlength="250" class="confession__input uk-textarea"></textarea>
                    <button class="uk-button uk-button-default">Confess</button>
<!--                <button id="skip" class="uk-button uk-button-default" >I'll come back</button>-->
                    <p id="wordLimitError" style="color: red; display: none; width: 100%; text-align: center;">That's a
                        few too many words for us!</p>
                </form>
            </div>

        </div>

    </div>

<?php include("includes/footer.php") ?>