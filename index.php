<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
?>

    <div class="home-page">
        
        <div class="home-page__wrapper">
            <!--<video autoplay muted loop id="myVideo">
                <source src="video/background_animation_sm.mp4" type="video/mp4">
            </video>-->-

            <div class="home-page__confession-wrapper">
                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 500">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        Spent the 1st 2mo w/ bf @ his place @ home w/ family. he has bad anxiety of being
                        trapped and disease Im afraid this broke us.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                        <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_1" onclick="play_1()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 1000">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        I hate how people are acting. Fear driven tattling on neighbors-judgy Facebook posts.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                        <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_2" onclick="play_2()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
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
            <div class="home-page__confession-wrapper">
                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 2000">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        My stepdad came home & cursed us out a few weeks ago just because my mom wants him to stay
                        safe. I wish I could move out.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                        <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_4" onclick="play_4()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 2500">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        A group of friends (I considered them family) hasn’t invited me to their Zoom game nights
                        and I feel deeply sad.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                        <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_5" onclick="play_5()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
                <div class="confession" style="display: none" uk-scrollspy="cls:uk-animation-fade; delay: 3000">
                    <p>I confess that...</p>
                    <div class="confession__body">
                        <span uk-icon="icon: quote-right"></span>
                        terrified to get to close to my mother who is up in years (91). Hope this blows over so i
                        can hug her soon. Really miss that.
                        <span uk-icon="icon: quote-right"></span>
                    </div>
                    <div class="confession__footer">
                        <button class="uk-button uk-button-default" uk-icon="icon: play; ratio: 1.2"  value="play_6" onclick="play_6()"></button>
                        <small>May 2020</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include("includes/footer.php") ?>