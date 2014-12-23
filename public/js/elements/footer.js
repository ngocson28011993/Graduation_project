
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.top-up').fadeIn();
            } else {
                $('.top-up').fadeOut();
            }
        });
        $('.top-up').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
            return false;
        });
