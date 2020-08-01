$(".validate").bind("change keyup input click", function() {
    if (this.value.match(/[^0-9,+]/)) {
        this.value = this.value.replace(/[^0-9,+]/, "");
    }
});