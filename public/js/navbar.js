$(document).ready(function() {
    var i = 0;
    $(".left-li").click(function() {
        i++;
        if (i == 1) {
            $(".a2").css({
                opacity: 0,
                transition: "0.1s"
            });

            $(".a3").css({
                transform: "rotate(-45deg)",
                "z-index": 11,
                transition: "0.5",
                top: "15px",
                transition: "0.5s"
            });

            $(".top").css({
                transform: "rotate(45deg)",
                transition: "0.5",
                top: "15px",
                transition: "0.5s"
            });
        }
        if (i == 2) {
            $(".a2").css({
                opacity: 1,
                transition: "1s"
            });

            $(".a3").css({
                transform: "rotate(0)",
                transition: "0.5",
                top: "25px"
            });

            $(".top").css({
                transform: "rotate(0)",
                transition: "0.5",
                top: "5px"
            });
            i = 0;
        }
        $(".categories").slideToggle();
    });
});
