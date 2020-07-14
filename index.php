<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
require_once("config.php");
?>
<<<<<<< HEAD
=======
    <audio id="audio_1" src="../audio/confessions_intro_1.mp3"></audio>

>>>>>>> d395074366ffeec2ee6521148a632d997a3b1bc8
    <div class="home-page">
        <div class="home-page__wrapper">
            <div id="splash">
                <h1>Welcome To Confessions</h1>
                
                <div class="loading"></div>
                
                <div id="instructions">
                    <div class="instructions__wrapper">
                        <ul>
                            <li><p><strong>Click to begin</strong> – sit back and watch!</p></li>
                            <li><p>You can use your mouse to explore – it’s 360</p></li>
                            <li><p><strong>Enter your confession</strong> in the Confession Box to continue, it will be added to the gallery</p></li>
                            <li><p>Or click <strong>I’ll come back</strong> to journey straight to The Confession Gallery</p></li>
                            <li><p>Inside The Confession Gallery click your mouse over the neon boxes to read other confessions!</p></li>            
                        </ul>

                        <button id="begin" type="button" class="uk-button uk-button-default" >Click Here to Begin</button>
                    </div>
                </div>
                
               <img src="images/ACE.png">
            </div>

            <a-scene loading-screen="dotsColor: blue ; backgroundColor: black; enabled: false;"
                     background="color: #FAFAFA" cursor-listener>

<<<<<<< HEAD
                <a-camera id="camera" rotation="0 180 0" look-controls animation="property: rotation; from:0 0 0; to:0 180 0; dur: 39000; delay: 2000; easing: easeInOutSine;"> 
=======
                <a-camera id="camera" rotation="0 180 0" look-controls animation="property: rotation; to:0 180 0; dur: 39000; easing: easeOutSine;"> 
>>>>>>> d395074366ffeec2ee6521148a632d997a3b1bc8
                </a-camera>

                <a-assets>
<<<<<<< HEAD
                     <video id="video" loop="false" preload="true" crossorigin="anonymous" playsinline=""
=======
                     <video id="video" loop="false" crossorigin="anonymous" playsinline=""
>>>>>>> d395074366ffeec2ee6521148a632d997a3b1bc8
                           webkit-playsinline="" src="video/video.mp4">
                       <source src="video/video.mp4" type="video/mp4">
                    </video>
                </a-assets>
                
                <a-videosphere src="#video" rotation="0 270 0"></a-videosphere>
              
                <a-entity id="textt">
                    <a-text align="center" value="Welcome to our Anonymous Confessions Experience" color="white" wrap-count="25" position="0 2 -5" opacity="0"
                            animation__2="property: opacity; to: 1; dur: 3000; easing: easeInSine;"></a-text>
                    
                    <a-text  align="center" value="Click Here To Begin" color="white" position="0 0 -5" opacity="0"
                            id="start" material="opacity: 0" start
                            animation="property: position; to: 0 1 -3; dur: 3000; easing: easeInSine; loop: true; dir:alternate;"
                            animation__2="property: opacity; to: 1; dur: 3000; easing: easeInSine; loop: true; dir:alternate;">
                    </a-text>
                </a-entity>
                
                
                
                <a-entity id="instructions">
                    
                    <a-text id="instructions__watch"align="center" value="Sit back and watch!" color="white" position="0 0 -3" opacity="0" id="start" material="opacity: 0"
                            animation="property: opacity; to: 0; dur: 3000; easing: easeInSine; loop: 2; dir:alternate;">
                    </a-text>
                    
                    <a-text id="instructions__text" align="center" baseline="bottom" value="This scene is interactive" color="white" wrap-count="25" position="0 -1 -6" opacity="0" 
<<<<<<< HEAD
                    animation="property: opacity; to: 0; dur: 3000; easing: easeInOutBack; loop:true; dir:alternate;"
                    ></a-text>
                    <a-text id="instructions__mouse" align="center" baseline="bottom" value="Use your mouse to explore!" color="white" wrap-count="25" position="0 -1.5 -6" opacity="0" 
                    animation="property: opacity; to: 0; dur: 3000; delay: 1000; easing: easeInOutBack; loop:true; dir:alternate;"
                    ></a-text>
                    
                    <a-text id="instructions__wait" align="center" baseline="bottom" value="Thank For Your Confession" color="white" wrap-count="25" position="0 1 -6" opacity="0" 
                    animation="property: opacity; to: 0; dur: 3000; easing: easeInOutBack; loop:2; dir:alternate;"
=======
                    animation="property: opacity; to: 0; dur: 3000; easing: easeInOutBack; loop:4; dir:alternate;"
                    ></a-text>
                    <a-text id="instructions__mouse" align="center" baseline="bottom" value="Use your mouse to explore!" color="white" wrap-count="25" position="0 -1.5 -6" opacity="0" 
                    animation="property: opacity; to: 0; dur: 3000; delay: 1000; easing: easeInOutBack; loop:4; dir:alternate;"
                    ></a-text>
                    
                    <a-text id="instructions__wait" align="center" baseline="bottom" value="Thank For Your Confession" color="white" wrap-count="25" position="0 0 -6" opacity="0" 
                    animation="property: opacity; to: 0; dur: 3000; easing: easeInOutBack; loop:4; dir:alternate;"
>>>>>>> d395074366ffeec2ee6521148a632d997a3b1bc8
                    ></a-text>
                </a-entity>
        
            </a-scene>

            <div id="vis" style="visibility: hidden">
                
                <form id="confession-form" uk-scrollspy="cls:uk-animation-fade;">
                    <p id="instruction">Type your anonymous confession here</p>
                    <textarea onkeyup="textAreaAdjust(this)" style="overflow:hidden" type="text" maxlength="250" class="confession__input uk-textarea"></textarea>
                    <span class="character-count"></span>
                    <button value="submit" class="uk-button uk-button-default">Confess</button>
                    <button id="skip" type="button" class="uk-button uk-button-default" >I'll come back</button>
                    <p id="wordLimitError" style="color: red; display: none; width: 100%; text-align: center;">That's a
                        few too many words for us!</p>
                </form>
                
            </div>

        </div>

    </div>

<?php include("includes/footer.php") ?>