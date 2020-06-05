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

    <div class="home-page">
        
        <div class="home-page__wrapper">
            <!--<video autoplay muted loop id="myVideo">
                <source src="video/background_animation_sm.mp4" type="video/mp4">
            </video>-->-

            <div class="home-page__confession-wrapper">

                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 1500">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        Sometimes there are more important things than working at home... like surviving the
                        pandemic along with your family.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                       <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_3" onclick="play_3()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
            </div>
            <form id="confession-form" uk-scrollspy="cls:uk-animation-fade;">
                <textarea type="text" class="confession__input uk-textarea"></textarea>
                <button class="uk-button uk-button-default">Confess</button>
            </form>

        </div>

    </div>

<?php include("includes/footer.php") ?>