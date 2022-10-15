$(function () {
    'use strict';

    // Showing page loader
    $(window).load(function () {
        setTimeout(function () {
            $(".page_loader").fadeOut("fast");
        }, 100)
        $('link[id="style_sheet"]').attr('href', 'css/skins/default.css');
        $('.logo img').attr('src', 'img/logos/logo.png');

        // Filterizr initialization
        if($('.filtr-container').length > 0) {
            $(function () {
                $('.filtr-container').filterizr(
                    {
                        delay: 1
                    }
                );
            });
        }

        $('.filters-listing-navigation li').click(function() {
            $('.filters-listing-navigation .filtr').removeClass('active');
            $(this).addClass('active');
        });
    });

    // WOW animation library initialization
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            mobile: false
        }
    );
    wow.init();

    // Banner slider
    (function ($) {
        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic')
        var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Pause carousel
        $myCarousel.carousel('pause');
        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval: 3000,
            pause: "false"
        });
    })(jQuery);

    // Page scroller initialization.
    $.scrollUp({
        scrollName: 'page_scroller',
        scrollDistance: 300,
        scrollFrom: 'top',
        scrollSpeed: 500,
        easingType: 'linear',
        animation: 'fade',
        animationSpeed: 200,
        scrollTrigger: false,
        scrollTarget: false,
        scrollText: '<i class="fa fa-chevron-up"></i>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647
    });

    // Counter
    function isCounterElementVisible($elementToBeChecked) {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

    $(window).scroll(function () {
        $(".counter").each(function () {
            var isOnView = isCounterElementVisible($(this));
            if (isOnView && !$(this).hasClass('Starting')) {
                $(this).addClass('Starting');
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });

    // Range sliders initialization
    $(".range-slider-ui").each(function () {
        var minRangeValue = $(this).attr('data-min');
        var maxRangeValue = $(this).attr('data-max');
        var minName = $(this).attr('data-min-name');
        var maxName = $(this).attr('data-max-name');
        var unit = $(this).attr('data-unit');

        $(this).append("" +
            "<span class='min-value'></span> " +
            "<span class='max-value'></span>" +
            "<input class='current-min' type='hidden' name='"+minName+"'>" +
            "<input class='current-max' type='hidden' name='"+maxName+"'>"
        );
        $(this).slider({
            range: true,
            min: minRangeValue,
            max: maxRangeValue,
            values: [minRangeValue, maxRangeValue],
            slide: function (event, ui) {
                event = event;
                var currentMin = parseInt(ui.values[0]);
                var currentMax = parseFloat(ui.values[1]);
                $(this).children(".min-value").text( currentMin + " " + unit);
                $(this).children(".max-value").text(currentMax + " " + unit);
                $(this).children(".current-min").val(currentMin);
                $(this).children(".current-max").val(currentMax);
            }
        });

        var currentMin = parseInt($(this).slider("values", 0));
        var currentMax = parseFloat($(this).slider("values", 1));
        $(this).children(".min-value").text( currentMin + " " + unit);
        $(this).children(".max-value").text(currentMax + " " + unit);
        $(this).children(".current-min").val(currentMin);
        $(this).children(".current-max").val(currentMax);
    });

    // Select picket
    $('.selectpicker').selectpicker();

    // Search option's icon toggle
    $('.search-options-btn').click(function () {
        $('.search-contents').toggleClass('show-search-area');
        $('.search-options-btn .fa').toggleClass('fa-chevron-down');
    });

    // Carousel with partner initialization
    (function () {
        $('#ourPartners').carousel({interval: 3600});
    }());

    (function () {
        $('.our-partners .item').each(function () {
            var itemToClone = $(this);
            for (var i = 1; i < 4; i++) {
                itemToClone = itemToClone.next();
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    }());

    // Background video playing script
    $(document).ready(function () {
        $(".player").mb_YTPlayer();
    });

    // Multilevel menuus
    $('[data-submenu]').submenupicker();

    // Expending/Collapsing advance search content
    $('.show-more-options').click(function () {
        if ($(this).find('.fa').hasClass('fa-minus-circle')) {
            $(this).find('.fa').removeClass('fa-minus-circle');
            $(this).find('.fa').addClass('fa-plus-circle');
        } else {
            $(this).find('.fa').removeClass('fa-plus-circle');
            $(this).find('.fa').addClass('fa-minus-circle');
        }
    });

    var videoWidth = $('.sidebar-widget').width();
    var videoHeight = videoWidth * .61;
    $('.sidebar-widget iframe').css('height', videoHeight);

    // Dropzone initialization
    Dropzone.autoDiscover = false;
    $(function () {
        $("div#myDropZone").dropzone({
            url: "/file-upload"
        });
    });


    // SO something in mega menu
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    })

    // Magnify activation
    $('.property-magnify-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });
    });

    $('.portfolio-item').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{enabled:true}
    });


    // Modal activation
    $('.property-video').on('click', function () {
        $('#propertyModal').modal('show');
    });


    resizeModalsContent();
    function resizeModalsContent() {
        var winWidth = $(window).width();
        var videoWidth = 450;
        if(winWidth < 992 && winWidth > 767) {
            videoWidth = 600;
        } else if(winWidth <= 768) {
            videoWidth = winWidth - 20;
        }

        var ratio = .6666;
        var videoHeight = videoWidth * ratio;
        $('.modalIframe').css('height', videoHeight);
    }


    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".fa")
            .toggleClass('fa-minus fa-plus');
    }

    $('.panel-group').on('shown.bs.collapse', toggleChevron);
    $('.panel-group').on('hidden.bs.collapse', toggleChevron);

    // Switching Color schema
    $('.color-plate').on('click', function () {
        var name = $(this).attr('data-color');
        $('link[id="style_sheet"]').attr('href', 'css/skins/' + name + '.css');
        if (name == 'default') {
            $('.logo img').attr('src', 'img/logos/logo.png');
        }
        else {
            $('.logo img').attr('src', 'img/logos/' + name + '-logo.png');
        }
    });

    $('.setting-button').on('click', function () {
        $('.option-panel').toggleClass('option-panel-collased');
    });

    $(window).resize(function () {
        resizeModalsContent();
    });
});

// mCustomScrollbar initialization
(function ($) {
    $(window).resize(function () {
        $('#map').css('height', $(this).height() - 110);
        if ($(this).width() > 768) {
            $(".map-content-sidebar").mCustomScrollbar(
                {theme: "minimal-dark"}
            );
            $('.map-content-sidebar').css('height', $(this).height() - 110);
        } else {
            $('.map-content-sidebar').mCustomScrollbar("destroy"); //destroy scrollbar
            $('.map-content-sidebar').css('height', '100%');
        }
        }).trigger("resize");
})(jQuery);


// Gallery section starts

const tabs = document.querySelectorAll(".gallary-tabs-btn");
const contents = document.querySelectorAll(".gallary-tabs-content");

tabs.forEach((tab, start) => {
    tab.addEventListener("click", () => {
    contents.forEach((matter) => {
        matter.classList.remove("gallary-tab-active");
    });
    tabs.forEach((tab) => {
        tab.classList.remove("gallary-tab-active");
    });

    contents[start].classList.add("gallary-tab-active");
    tabs[start].classList.add("gallary-tab-active");
    });
});


// Gallery zoom effect starts

$('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
  });

//   Gallery zoom effect ends

// Gallery section ends

$(window).on('load', function () {
    $("#pre-load").delay(1000).fadeOut(500);
})

// Ongoing section starts

const imgOn = document.querySelector(".img-on");
const onTitle = document.querySelector(".on-title ");
const ongoingSlideMain = document.querySelector(".ongoing-slide-main");
const iconOn = document.querySelector(".icon-on");
imgOn.addEventListener("click", () => {
  ongoingSlideMain.style.transform = "translateX(0px)";
  ongoingSlideMain.style.transition = "all 0.6s ease-in-out";

  iconOn.addEventListener("click", () => {
    ongoingSlideMain.style.transform = "translateX(-1500px)";
    ongoingSlideMain.style.transition = "all 0.6s ease-in-out";
  });
});

onTitle.addEventListener("click", () => {
    ongoingSlideMain.style.transform = "translateX(0px)";

    iconOn.addEventListener("click", () => {
        ongoingSlideMain.style.transform = "translateX(-1500px)";
        ongoingSlideMain.style.transition = "all 0.6s ease-in-out";
      });
});

const imgSix = document.querySelector(".img-six");
const onTitleSix = document.querySelector(".on-title-six");
const ongoingSlideMainSix = document.querySelector(".ongoing-slide-main-six");
const iconSix = document.querySelector(".icon-six");
imgSix.addEventListener("click", () => {
  ongoingSlideMainSix.style.transform = "translateX(0px)";
  ongoingSlideMainSix.style.transition = "all 0.6s ease-in-out";

  iconSix.addEventListener("click", () => {
    ongoingSlideMainSix.style.transform = "translateX(-1500px)";
    ongoingSlideMainSix.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleSix.addEventListener("click", () => {
    ongoingSlideMainSix.style.transform = "translateX(0px)";

    iconSix.addEventListener("click", () => {
        ongoingSlideMainSix.style.transform = "translateX(-1500px)";
        ongoingSlideMainSix.style.transition = "all 0.6s ease-in-out";
      });
});

const imgNine = document.querySelector(".img-nine");
const onTitleNine = document.querySelector(".on-title-nine");
const ongoingSlideMainNine = document.querySelector(".ongoing-slide-main-nine");
const iconNine = document.querySelector(".icon-nine");
imgNine.addEventListener("click", () => {
  ongoingSlideMainNine.style.transform = "translateX(0px)";
  ongoingSlideMainNine.style.transition = "all 0.6s ease-in-out";

  iconNine.addEventListener("click", () => {
    ongoingSlideMainNine.style.transform = "translateX(-1500px)";
    ongoingSlideMainNine.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleNine.addEventListener("click", () => {
    ongoingSlideMainNine.style.transform = "translateX(0px)";

    iconNine.addEventListener("click", () => {
        ongoingSlideMainNine.style.transform = "translateX(-1500px)";
        ongoingSlideMainNine.style.transition = "all 0.6s ease-in-out";
      });
});

const imgOne = document.querySelector(".img-one");
const onTitleOne = document.querySelector(".on-title-one ");
const ongoingSlideMainOne = document.querySelector(".ongoing-slide-mainone");
const iconOne = document.querySelector(".icon-one");
imgOne.addEventListener("click", () => {
  ongoingSlideMainOne.style.transform = "translateY(0px)";
  ongoingSlideMainOne.style.transition = "all 0.6s ease-in-out";

  iconOne.addEventListener("click", () => {
    ongoingSlideMainOne.style.transform = "translateY(-1500px)";
    ongoingSlideMainOne.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleOne.addEventListener("click", () => {
    ongoingSlideMainOne.style.transform = "translateY(0px)";

    iconOne.addEventListener("click", () => {
        ongoingSlideMainOne.style.transform = "translateY(-1500px)";
        ongoingSlideMainOne.style.transition = "all 0.6s ease-in-out";
      });
});

const imgSeven = document.querySelector(".img-seven");
const onTitleSeven = document.querySelector(".on-title-seven ");
const ongoingSlideMainSeven = document.querySelector(".ongoing-slide-main-seven");
const iconSeven = document.querySelector(".icon-seven");
imgSeven.addEventListener("click", () => {
  ongoingSlideMainSeven.style.transform = "translateY(0px)";
  ongoingSlideMainSeven.style.transition = "all 0.6s ease-in-out";

  iconSeven.addEventListener("click", () => {
    ongoingSlideMainSeven.style.transform = "translateY(-5700px)";
    ongoingSlideMainSeven.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleSeven.addEventListener("click", () => {
    ongoingSlideMainSeven.style.transform = "translateY(0px)";

    iconSeven.addEventListener("click", () => {
        ongoingSlideMainSeven.style.transform = "translateY(-5700px)";
        ongoingSlideMainSeven.style.transition = "all 0.6s ease-in-out";
      });
});

const imgFour = document.querySelector(".img-four");
const onTitleFour = document.querySelector(".on-title-four");
const ongoingSlideMainFour = document.querySelector(".ongoing-slide-main-four");
const iconFour = document.querySelector(".icon-four");
imgFour.addEventListener("click", () => {
  ongoingSlideMainFour.style.transform = "translateY(0px)";
  ongoingSlideMainFour.style.transition = "all 0.6s ease-in-out";

  iconFour.addEventListener("click", () => {
    ongoingSlideMainFour.style.transform = "translateY(-4300px)";
    ongoingSlideMainFour.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleFour.addEventListener("click", () => {
    ongoingSlideMainFour.style.transform = "translateY(0px)";

    iconFour.addEventListener("click", () => {
        ongoingSlideMainFour.style.transform = "translateY(-4300px)";
        ongoingSlideMainFour.style.transition = "all 0.6s ease-in-out";
      });
});
const imgTen = document.querySelector(".img-ten");
const onTitleTen = document.querySelector(".on-title-ten");
const ongoingSlideMainTen = document.querySelector(".ongoing-slide-main-ten");
const iconTen = document.querySelector(".icon-ten");
imgTen.addEventListener("click", () => {
  ongoingSlideMainTen.style.transform = "translateY(0px)";
  ongoingSlideMainTen.style.transition = "all 0.6s ease-in-out";

  iconTen.addEventListener("click", () => {
    ongoingSlideMainTen.style.transform = "translateY(-5600px)";
    ongoingSlideMainTen.style.transition = "all 0.6s ease-in-out";
  });
});

onTitleTen.addEventListener("click", () => {
    ongoingSlideMainTen.style.transform = "translateY(0px)";

    iconTen.addEventListener("click", () => {
        ongoingSlideMainTen.style.transform = "translateY(-5600px)";
        ongoingSlideMainTen.style.transition = "all 0.6s ease-in-out";
      });
});

const imgTwo = document.querySelector(".img-two");
const onTitleTwo = document.querySelector(".on-title-two ");
const ongoingSlideMainTwo = document.querySelector(".ongoing-slide-main-two");
const iconTwo = document.querySelector(".icon-two");
imgTwo.addEventListener("click", () => {
  ongoingSlideMainTwo.style.transform = "translateX(0px)";
  ongoingSlideMainTwo.style.transition = "all 0.6s ease-in-out";
  ongoingSlideMainTwo.style.display = "block";

  iconTwo.addEventListener("click", () => {
    ongoingSlideMainTwo.style.transform = "translateX(1500px)";
    ongoingSlideMainTwo.style.transition = "all 0.6s ease-in-out";
    ongoingSlideMainTwo.style.display = "none";
  });
});

onTitleTwo.addEventListener("click", () => {
    ongoingSlideMainTwo.style.transform = "translateX(0px)";
    ongoingSlideMainTwo.style.display = "block";


    iconTwo.addEventListener("click", () => {
        ongoingSlideMainTwo.style.transform = "translateX(1500px)";
        ongoingSlideMainTwo.style.transition = "all 0.6s ease-in-out";
        ongoingSlideMainTwo.style.display = "none";

      });
});



const imgEight = document.querySelector(".img-eight");
const onTitleEight = document.querySelector(".on-title-eight ");
const ongoingSlideMainEight = document.querySelector(".ongoing-slide-main-eight");
const iconEight = document.querySelector(".icon-eight");
imgEight.addEventListener("click", () => {
  ongoingSlideMainEight.style.transform = "translateX(0px)";
  ongoingSlideMainEight.style.transition = "all 0.6s ease-in-out";
  ongoingSlideMainEight.style.display = "block";

  iconEight.addEventListener("click", () => {
    ongoingSlideMainEight.style.transform = "translateX(1500px)";
    ongoingSlideMainEight.style.transition = "all 0.6s ease-in-out";
    ongoingSlideMainEight.style.display = "none";
  });
});

onTitleEight.addEventListener("click", () => {
    ongoingSlideMainEight.style.transform = "translateX(0px)";
    ongoingSlideMainEight.style.display = "block";


    iconEight.addEventListener("click", () => {
        ongoingSlideMainEight.style.transform = "translateX(1500px)";
        ongoingSlideMainEight.style.transition = "all 0.6s ease-in-out";
        ongoingSlideMainEight.style.display = "none";

      });
});

const imgFourteen = document.querySelector(".img-fourteen");
const onTitleFourteen = document.querySelector(".on-title-fourteen ");
const ongoingSlideMainFourteen = document.querySelector(".ongoing-slide-main-fourteen");
const iconFourteen = document.querySelector(".icon-fourteen");
imgFourteen.addEventListener("click", () => {
  ongoingSlideMainFourteen.style.transform = "translateX(0px)";
  ongoingSlideMainFourteen.style.transition = "all 0.6s ease-in-out";
  ongoingSlideMainFourteen.style.display = "block";

  iconFourteen.addEventListener("click", () => {
    ongoingSlideMainFourteen.style.transform = "translateX(1500px)";
    ongoingSlideMainFourteen.style.transition = "all 0.6s ease-in-out";
    ongoingSlideMainFourteen.style.display = "none";
  });
});

onTitleFourteen.addEventListener("click", () => {
    ongoingSlideMainFourteen.style.transform = "translateX(0px)";
    ongoingSlideMainFourteen.style.display = "block";


    iconFourteen.addEventListener("click", () => {
        ongoingSlideMainFourteen.style.transform = "translateX(1500px)";
        ongoingSlideMainFourteen.style.transition = "all 0.6s ease-in-out";
        ongoingSlideMainFourteen.style.display = "none";

      });
});

// ongoing section ends


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: true,
            loop: false
        }
    }
})



