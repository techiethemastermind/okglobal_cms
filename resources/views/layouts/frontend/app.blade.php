<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="/storage/logos/{{ config('favicon') }}">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/css/swal/swal.min.css">
    <link rel="stylesheet" type="text/css" href="/css/sidenav.css">
    <link rel="stylesheet" type="text/css" href="/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="/css/modal-video.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/web.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @stack('after-styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175792484-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-175792484-1');
    </script>
</head>

<body class="body-bg">
    <div id="google_translate_element"></div>
    @yield('pageContent')

    <script type="text/javascript" src="/js/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.matchHeight.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/scrollreveal.js"></script>
    <script src="/js/jquery-modal-video.min.js"></script>

    <script type="text/javascript" src="/js/popper/popper.min.js"></script>

    <!-- jQuery Form -->
    <script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>

    @stack('after-scripts')

    <script>

        $('#yt-trigger').on('click', function () {
            //find iframe
            let iframe = $('#___ytsubscribe_0 iframe');

            //find button inside iframe
            let button = iframe.contents().find('#___ytsubscribe_0 iframe');

            //trigger button click
            button.trigger("click");
        });


        //  Function for back to top button
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });


        // Function for toggle button on header
        $('.navbar-toggler').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('navbar-toggler--active');
        });

        // for toggling button
        $('.navbar-toggler').click(function () {
            $("header").toggleClass("change_header_bg").toggleClass("main_header_bg");
        });

        //Function for onscroll chnaging background header 

        $(function () {
            if ($(window).scrollTop() > 300) {
                $("header").addClass("active_bg");
                $('.top-bar').addClass('d-none');
            }
            $(window).on("scroll", function () {
                if ($(window).scrollTop() > 300) {
                    $("header").addClass("active_bg");
                    $('.top-bar').addClass('d-none');
                } else {
                    $("header").removeClass("active_bg");
                    $('.top-bar').removeClass('d-none');
                }
            });
        });

        // Functions for onscroll animation also
        $(window).ready(function () {
            wow = new WOW({
                animateClass: 'animated',
                offset: 250,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            });
            wow.init();
        });

        // Functions for modal video pop up
        $(".js-modal-btn").modalVideo({channel:'youtube'});

        $(document).ready(function () {
            $('.hero-banner .owl-carousel').owlCarousel({
                margin: 0,
                nav: false,
                dots: true,
                dotsEach: true,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });

            $('.interactive-map .owl-carousel').owlCarousel({
                margin: 0,
                nav: false,
                dots: true,
                dotsEach: true,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        });
    </script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-89eef1eb-58a9-4bb6-9ccb-effc79940ee5"></div>

</body>

</html>