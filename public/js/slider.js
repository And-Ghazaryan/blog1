$(document).ready(function() {
    let item = $(".li");
    let next = $(".next");
    let prev = $(".prev");
    if (item.length > 1) {
        next.css({ opacity: 1 });
        prev.css({ opacity: 1 });
    }

    item.first().addClass("active");

    next.click(function() {
        let index = item.filter(".active").index();
        if (index == item.length - 1) {
            index = -1;
        }
        item.eq(index + 1)
            .addClass("active")
            .siblings()
            .removeClass("active");
    });

    prev.click(function() {
        let index = item.filter(".active").index();
        item.eq(index - 1)
            .addClass("active")
            .siblings()
            .removeClass("active");
    });
});
