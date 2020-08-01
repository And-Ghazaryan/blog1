$(document).ready(function() {
    $(".update_password").click(function() {
        let old_password = $("#old_password").val();
        let newPassword = $("#newPassword").val();
        let newPassword2 = $("#newPassword2").val();
        if (newPassword == newPassword2) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                url: "update_password",
                type: "POST",
                data: { old_password, newPassword },
                success: function(data) {
                    alert(data);
                }
            });
        }
        if (newPassword !== newPassword2) {
            alert("Մուտքագրված գաղնտաբառերը չեն համընկնում:");
            return;
        }
        if (newPassword.length > 16 || newPassword.length < 8) {
            alert("Գաղտնաբառը պետք է պարունակի 6-ից 16 նշան:");
        }
    });
});
