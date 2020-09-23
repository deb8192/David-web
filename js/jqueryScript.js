$(window).scroll(function() {
    if($(window).scrollTop() > 0 && $(window).width() > 720) {
        $("header").addClass("headerActive");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("header").removeClass("headerActive");
    }
});