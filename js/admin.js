$(function() {
    admin.init();
})

var admin = function() {
    var init = function() {
        $(".removeConfession").on("click", function() {
            _deleteConfession($(this).val());
        });

        $(".approveConfession").on("click", function() {
            _approveConfession($(this).val());
        });
    }

    var _deleteConfession = function(id) {
        $.ajax({
            url: "/ajax/deleteConfession.php",
            method: "POST",
            data: { id: id },
            success: function() {
                _removeListItem(id);
            },
            error: function(error) {
                console.log(error);
            }
        })
    }

    var _approveConfession = function(id) {
        $.ajax({
            url: "/ajax/approveConfession.php",
            method: "POST",
            data: { id: id },
            success: function () {
                _removeListItem(id);
            },
            error: function (error) {
                console.log(error)
            }
        })
    }

    var _removeListItem = function(id) {
        $(".confession-list-item[data-id='" + id + "']").remove();
    }

    return {
        init: init
    }
}();