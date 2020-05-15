$(function() {
    if($("#confession-form").length > 0) {
        $("#confession-form").on("submit", function(event) {
            event.preventDefault();

            var confessionText = $("textarea", $(this)).val();
            $.ajax({
                url: "/ajax/postConfession.php?confession=" + confessionText,
                method: "POST",
                success: function(response) {
                    var JSONresponse = JSON.parse(response);

                    if(JSONresponse.success == true) {
                        printResponse(true, JSONresponse.message);
                    }
                    else {
                        printResponse(false, JSONresponse.message);
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            })
        });
    }

    if($("#confessionsPage").length > 0) {
        $.ajax({
            url: "/ajax/getConfessions.php",
            success: function (response) {
                var JSONresponse = JSON.parse(response);
                var returnArray = splitArray(JSONresponse, 3);

                for(var i = 0; i < returnArray.length; i++) {
                    for(j = 0; j < returnArray[i].length; j++) {
                        $($(".confessionsPage__column")[i]).append("<h2>" + returnArray[i][j]) + "</h2>";
                    }
                }

            },
            error: function (error) {
                console.log(error);
            }
        })
    }
});

function splitArray(Array, chunk_size){
    var arrayLength = Array.length;
    var returnArray = [];

    for (index = 0; index < arrayLength; index += chunk_size) {
        myChunk = Array.slice(index, index+chunk_size);
        returnArray.push(myChunk);
    }

    return returnArray;
}

function printResponse(success, message) {
    if(success) {
        $("#response").html(message);
    }
    else {
        $("#response").html(message);
    }
}