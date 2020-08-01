$(document).ready(function() {
    $(".edit-password").click(function() {
        $(".modal-box").fadeToggle();
        $(".modal").css({ top: "100px" });
    });

    //profile delete

    $(".delete-profile").click(function() {
        $(".mec").fadeToggle();
        $(".profile-delete-modal").css({ top: "100px" });
    });

    $(".mec").click(function() {
        $(".mec").fadeToggle();
        $(".profile-delete-modal").css({ top: "-100%" });
    });

    $(".close").click(function() {
        $(".mec").fadeToggle();
        $(".profile-delete-modal").css({ top: "-100%" });
    });
});
