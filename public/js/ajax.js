$(document).ready(function() {
    $("#upload_img").change(function() {
        var fd = new FormData();
        fd.append("upload_img", $("#upload_img")[0].files[0]);
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            url: "up",
            type: "POST",
            data: fd,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $(".loader").html('<img src="storage/uploads/a.gif">');
            },
            success: function(data) {
                let rs = data.split(".");
                if (rs[1] == "jpeg" || rs[1] == "jpg") {
                    $(".img_box").append(
                        '<div class="img www"><input type="hidden" value="' +
                            data +
                            '" name="file[]"><img src="../storage/' +
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
