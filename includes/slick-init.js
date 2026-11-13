
$(document).ready(function () {
        $('.adamic-story').slick({
            infinite: true,
            dots: false,
            arrows: true,
          /*  waitForAnimate: true,*/
            slidesToShow: 4,
            slidesToScroll: 1,


        });

        $('.mug-carousel').slick({
            infinite: true,
            arrows: false,
            dots: true,
           /* waitForAnimate: true,*/
            autoplay: true


        });

        
    });

