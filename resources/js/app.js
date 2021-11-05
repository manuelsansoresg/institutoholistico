/* require('./bootstrap'); */
if (document.getElementById("carousel")) {
    $(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            nav: true,
        });

        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    });
}

