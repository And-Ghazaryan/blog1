$(document).ready(function() {
    $(".del").click(function() {
        var id = $(this).attr("id");
        var a = $(".b").html(
            '<a href="delete/' + id + '" class="btn-l">Հեռացնել</a>'
        );
        $(".modal-box").fadeToggle();
        $(".modal").css({ top: "100px" });
    });

    $(".modal-box").click(function() {
        $(".modal-box").fadeToggle();
        $(".modal").css({ top: "-100%" });
    });

    $("#close").click(function() {
        $(".modal-box").fadeToggle();
        $(".modal").css({ top: "-100%" });
    });

    $("#br").click(function() {
        $(".modal-box").fadeToggle();
        $(".modal").css({ top: "-100%" });
    });
});
