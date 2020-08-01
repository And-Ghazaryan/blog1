$(document).ready(function() {
    $("#edit_logo").change(function() {
        var fd = new FormData();
        fd.append("edit_logo", $("#edit_logo")[0].files[0]);
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            url: "../edit_logo",
            type: "POST",
            data: fd,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $(".loader").html('<img src="storage/uploads/a.gif">');
            },
            success: function(data) {
                let rs = data.split(".");
                if (rs[1] == "jpeg" || rs[1] == "jpg" || rs[1] == "png") {
                    $(".logo_box").append(
                        '<div class="img www img-logo"><input type="hidden" value="' +
                            data +
                            '" name="logo"><img src="../storage/' +
                            data +
                            '" width="100px"><div class="btn"><i class="fas fa-times"></i></div></div>'
                    );
                    $(".loader").html("");
                } else {
                    alert("Տվյալ ֆորմատը հնարավոր չէ ներբերնել");
                }
            }
        });
    });

    $(document).on("click", ".btn", function() {
        $(this)
            .parent()
            .fadeOut(function() {
                $(this).remove();
            });
    });
});
