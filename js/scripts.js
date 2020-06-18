var twoSecondsPassed = false;

window.setTimeout(function () {
    twoSecondsPassed = true;
}, 2000);

$(function () {

    //Load page
    // function LoadPage() {
    //     var scene = document.querySelector('a-scene');
    //     var splash = document.querySelector('#splash');
    //     var video = document.getElementById("video");
    //
    //     if (twoSecondsPassed) {
    //         scene.addEventListener('loaded', function (e) {
    //             document.getElementById('splash').fadeOut(1500);
    //             video.play();
    //         });
    //     }
    //     else {
    //         window.setTimeout(function() {
    //             LoadPage()
    //         }, 1000);
    //     }
    // }
    // document.addEventListener('DOMContentLoaded', function () {
    //     LoadPage();
    // });


    //Confession Form Page
    if ($("#confession-form").length > 0) {

        //Form Submit
        $("#confession-form").on("submit", function (event) {
            event.preventDefault();

            var confessionText = $("textarea", $(this)).val();
            $.ajax({
                url: "/ajax/postConfession.php?confession=" + confessionText,
                method: "POST",
                success: function (response) {
                    var jsonResponse = JSON.parse(response);

                    //Check to see if was accepted
                    if (jsonResponse.success) {
                        $("#confession-form").fadeOut("slow");

                        //Continue the video
                        document.getElementById("video")
                            .play();

                        //Add visible attribute to all confession text
                        document.querySelectorAll(".confession-item")
                            .forEach(function (el) {
                                el.setAttribute('visible', 'true');
                            });
                    } else {
                        console.log(jsonResponse.message);
                    }

                },
                error: function (error) {
                    console.error(error);
                }
            })
        });

        //Character limit
        document.querySelector(".confession__input")
            .addEventListener("input", function (event) {
                if (event.target.value.length >= 250) {
                    $("#wordLimitError").fadeIn("slow");
                } else {
                    $("#wordLimitError").fadeOut("slow");
                }
            })

        //Video Time to pause
        var pausing_function = function () {
            var video = document.getElementById("video");
            if (video.currentTime >= 8) {
                video.pause();

                document.querySelector(".confession-item")
                    .setAttribute('visible', 'true');

                document.getElementById('vis')
                    .style.visibility = 'visible';

                placeholder();

                this.removeEventListener("timeupdate", pausing_function);
            }
        };
        video.addEventListener("timeupdate", pausing_function);

        //Video end loop
        var loop_function = function () {
            var video = document.getElementById("video");
            if (video.currentTime >= 48) {
                console.log("Looping");
                video.currentTime = 39;
                video.play();
            }
        };
        video.addEventListener("timeupdate", loop_function);


        //Focusing on text box
        $(".confession__input").on("focus", function () {
            $(".home-page").addClass("focus");
        })

        var isLoaded = false;
        document.addEventListener("click", function () {
            if (isLoaded == false) {
                var videoEl = document.querySelector('#video');
                videoEl.play();

                var el1 = document.querySelector('#textt');
                el1.setAttribute('visible', 'false');

                isLoaded = true;
            }
        })


        //Placeholder text animation
        var ph = "I confess that...",
            searchBar = $('.confession__input'),
            // placeholder loop counter
            phCount = 0

        // function to return random number between with min/max range
        function randDelay(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        // function to print placeholder text in a 'typing' effect
        function printLetter(string, el) {

            // split string into character seperated array
            var arr = string.split(''),
                input = el,
                // store full placeholder
                origString = string,
                // get current placeholder value
                curPlace = $(input).attr("placeholder"),
                // append next letter to current placeholder
                placeholder = curPlace + arr[phCount];

            setTimeout(function () {
                // print placeholder text
                $(input).attr("placeholder", placeholder);
                // increase loop count
                phCount++;
                // run loop until placeholder is fully printed
                if (phCount < arr.length) {
                    printLetter(origString, input);
                }
                // use random speed to simulate
                // 'human' typing
            }, randDelay(50, 90));
        }

        // function to init animation
        function placeholder() {
            $(searchBar).attr("placeholder", "");
            printLetter(ph, searchBar);
        }

    }

    //View Confession page
    if ($("#confessionsPage").length > 0) {

        $.ajax({
            url: "/ajax/getConfessions.php",
            success: function (response) {
                var JSONresponse = JSON.parse(response);
                var returnArray = splitArray(JSONresponse, 1);

                for (var i = 0; i < returnArray.length; i++) {
                    for (j = 0; j < returnArray[i].length; j++) {
                        $($(".confessionsPage__column")[i]).append("<p>" + returnArray[i][j]) + "</p>";


                    }
                }

                //$("#confessionsPage").fadeIn("slow");

            },
            error: function (error) {
                console.log(error);
            }
        })
    }
});

function splitArray(Array, chunk_size) {
    var arrayLength = Array.length;
    var returnArray = [];

    for (index = 0; index < arrayLength; index += chunk_size) {
        myChunk = Array.slice(index, index + chunk_size);
        returnArray.push(myChunk);
    }

    return returnArray;
}

function printResponse(success, message) {
    if (success) {
        $("#response").html(message);
    } else {
        $("#response").html(message);
    }
}

function play_1() {
    var audio = document.getElementById("audio_1");
    audio.play();
}

function play_2() {
    var audio = document.getElementById("audio_2");
    audio.play();
}

function play_3() {
    var audio = document.getElementById("audio_3");
    audio.play();
}

function play_4() {
    var audio = document.getElementById("audio_4");
    audio.play();
}

function play_5() {
    var audio = document.getElementById("audio_5");
    audio.play();
}

function play_6() {
    var audio = document.getElementById("audio_6");
    audio.play();
}




