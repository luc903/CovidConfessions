//On Load
$(function () {
    confession.init();
})

var confession = function () {
    //Initiate Confessions Page
    var init = function () {
        var confessions = _getConfessions();
        var html = "";

        //Concatenate HTML
        for (var i = 0; i < confessions.length; i++) {
            html += _bindData(confessions[i]);
        }

        //Append HTML to container
        $(".confessions-page__confession-wrapper").append(html);

        //Fade each confession in
        $(".confession", ".confessions-page__confession-wrapper").each(function(i) {
            $(this).delay((i + 1) * 50).fadeIn();
        })
    }

    //Get Confessions data
    var _getConfessions = function () {
        var result;

        $.ajax({
            url: "/ajax/getConfessions.php",
            async: false,
            success: function (data) {
                result = JSON.parse(data);
            },
            error: function (error) {
                console.log(error);
            }
        });

        return result;
    }

    //Bind data to HTML
    var _bindData = function (data) {
        var template = document.getElementById('confession-template').innerHTML;
        //Compile the template
        var compiled_template = Handlebars.compile(template);
        //Render the data into the template
        var rendered = compiled_template(data);

        return rendered;
    }

    //Return public functions
    return {
        init: init
    }
}();