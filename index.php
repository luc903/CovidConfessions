<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
require_once("config.php");

$query = "SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 7";
$result = $conn->query($query);

while($row = $result->fetch_row()) {
    $rows[]=$row[0];
}

print_r($rows);

$randomConfession_1 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 7")->fetch_object()->text;
//$randomConfession_2 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
//$randomConfession_3 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
//$randomConfession_4 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
//$randomConfession_5 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
//$randomConfession_6 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;
//$randomConfession_7 = $conn->query("SELECT text FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 1")->fetch_object()->text;


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

            }
            if (cnt == 1) {
                document.querySelector(".confession-item").setAttribute('visible', 'true');
                var x = document.getElementById('vis');
                if (x.style.visibility === 'hidden') {
                    x.style.visibility = 'visible';
                } else {
                    x.style.visibility = 'hidden';
                }

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
            <div id="splash">
                <h2>Confessions</h2>
                <div class="loading"></div>
                <img src="images/ACE.jpg">
            </div>

            <!--<video autoplay muted loop id="myVideo">
                <source src="video/background_animation_sm.mp4" type="video/mp4">
            </video>-->-

            <a-scene loading-screen="dotsColor: blue ; backgroundColor: black; enabled: false;"
                     background="color: #FAFAFA">
                <a-assets>
                    <video id="video" autoplay="false" loop="false" crossorigin="anonymous" playsinline=""
                           webkit-playsinline="">
                        <source src="video/room.mp4" type="video/mp4">
                    </video>
                </a-assets>
                <a-videosphere src="#video" rotation="0 270 0" poster="images/vr_poster.png"></a-videosphere>

                <a-entity id="textt" cursor-listener>
                    <a-text align="center" value="Tap To Begin" color="white" position="0 1 -5" opacity="0"
                            animation="property: position; to: 0 2 -3; dur: 3000; easing: easeInSine; loop: true; dir:alternate;" 
                            animation__2="property: opacity; to: 1; dur: 3000; easing: easeInSine; loop: true; dir:alternate;"-->
                            >
                    </a-text>            
                </a-entity>

                <?php $rotations = ["", "0 51 0", "0 102 0", "0 153 0", "0 204 0", "0 255 0", "0 306 0"]   ?>
                <?php $position_movement = ["0 2 -7", "0 1 -7", "0 2 -7", "0 0 -7", "0 1 -7", "0 2 -7", "0 1 -7"]   ?>
                <?php for($i = 0; $i < Count($rows); $i++): ?>
                    <a-entity class="confession-item" cursor-listener visible="false" rotation="<?php echo $rotations[$i] ?>">
                        <a-text align="center" value="<?php echo $rows[$i]; ?>" material="color:#fff"
                                baseline="center" position="0 3 -7"
                                event-set__enter="_event: mouseenter; color: #8FF7FF" wrap-count="30"
                                animation="property: position; to: <?php echo $position_movement[$i] ?>; dur: 20000; easing: easeInSine; loop: true; dir:alternate;"></a-text>
                    </a-entity>
                <?php endfor; ?>

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
                    <p id="wordLimitError" style="color: red; display: none; width: 100%; text-align: center;">That's a few too many words for us!</p>
                </form>


            </div>

        </div>

    </div>

<?php include("includes/footer.php") ?>