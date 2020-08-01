$(".remove_btn").click(function() {
    var id = $(this).attr("id");
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "../img_delete",
        type: "POST",
        data: { id },
        success: function(data) {
            $("#" + data)
                .parent()
                .fadeOut(function() {
                    $(this).remove();
                });
        }
    });
});
