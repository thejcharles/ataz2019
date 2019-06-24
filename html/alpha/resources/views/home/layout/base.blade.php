<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>ACBVI | @yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/acbvi/favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="/css/icon-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/shell.css">
</head>
<body>
<main>

    <!-- Header -->
    <header id="js-header"
            class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance u-shadow-v19">
        <div class="u-header__section g-bg-white g-transition-0_3">
            <nav class="js-mega-menu navbar navbar-expand-lg g-pa-0">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand g-pl-15 py-3" href="/">
                        <img class="g-width-95" src="/img/acbvi/purple_logo.jpg" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button
                            class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pos-abs g-top-10 g-right-0 g-pa-0 g-mt-2"
                            type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                            data-toggle="collapse" data-target="#navBar">
                     <span class="hamburger hamburger--slider g-px-15">
                         <span class="hamburger-box">
                             <span class="hamburger-inner"></span>
                         </span>
                     </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row">
                        <ul class="navbar-nav ml-auto g-pb-30 g-pb-0--lg">
                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/services">
                                    Services
                                </a>
                            </li>

                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/donate">
                                    Donate
                                </a>
                            </li>

                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/staff">
                                    Staff
                                </a>
                            </li>

                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/leadership">
                                    Board
                                </a>
                            </li>

                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/events">
                                    Events
                                </a>
                            </li>


                            <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                                <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10"
                                   href="/blog">
                                    Blog
                                </a>
                            </li>



                        </ul>
                    </div>
                    <!-- End Navigation -->

                    <!-- Social Icons -->
                    <ul
                            class="col-auto list-inline g-pos-abs g-right-0 g-pos-rel--lg g-top-minus-3 g-py-20 g-py-6--lg g-pr-5 g-mr-60 g-mr-0--lg ml-auto ml-lg-0 mb-0">
                        <li class="list-inline-item g-mx-0">
                            <a class="u-icon-v3 u-icon-size--xs g-bg-transparent g-bg-main--hover g-color-white--hover rounded"
                               href="https://www.facebook.com/acbvi"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item g-mx-0">
                            <a class="u-icon-v3 u-icon-size--xs g-bg-transparent g-bg-main--hover g-color-white--hover rounded"
                               href="https://twitter.com/ACBVI_"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item g-mx-0">
                        </li>
                    </ul>
                    <!-- End Social Icons -->

                    <div class="col-auto g-hidden-md-down g-pr-0">
                        <div class="g-bg-main g-cursor-pointer g-px-25 g-py-20">
                            <span class="d-block g-color-secondary g-font-size-11 mb-1">(602) 273-7411</span>
                            <span class="d-block g-color-secondary"><i class="mr-2 fa fa-phone"></i> Give us a
                             Call</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <!-- content-->
    @yield('content')
</main>

<div class="shortcode-html">
    <!-- Footer -->
    <footer>
        <div class="g-bg-dark">
            <div class="container g-pt-70 g-pb-40">
                <div class="row">
                    <div class="col-6 col-md-3 g-mb-30">
                        <h3 class="h6 g-color-white text-uppercase">About</h3>

                        <!-- Links -->
                        <ul class="list-unstyled mb-0">

                            <li>
                                <a class="u-link-v6 g-color-main g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="/services">
                                    Services
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>


                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="/careers">
                                    Become a Volunteer
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="/contact">
                                    Contacts
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-30">
                        <h3 class="h6 g-color-white text-uppercase">Resources</h3>

                        <!-- Links -->
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>Printable Information</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>Wioa Locations</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>Center Information</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-30">
                        <h3 class="h6 g-color-white text-uppercase">ACBVI Special</h3>

                        <!-- Links -->
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>ACBVI Events</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>ACBVI Social</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>ACBVI Donations</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>

                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-30">
                        <!-- Links -->
                        <ul class="list-inline">
                            <li class="list-inline-item mb-1">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded"
                                   href="#">
                                    <i class="fa fa-android"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mb-1">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded"
                                   href="#">
                                    <i class="fa fa-apple"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mb-1">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded"
                                   href="#">
                                    <i class="fa fa-windows"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="list-unstyled mb-4">
                            <li>
                                <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3"
                                   href="#">
                                    <span>How to Install Apps</span>
                                    <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->

                        <h3 class="h6 g-color-white text-uppercase">Address</h3>
                        <address class="g-font-size-13 g-color-gray-dark-v3 g-font-weight-600 g-line-height-2 mb-0">
                            3100 East Roosevelt<br> Phoenix, Arizona <br> 85008</address>
                    </div>
                </div>
            </div>
        </div>

        <div class="g-bg-dark-light-v1">
            <div class="container g-pt-30">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center text-md-left g-mb-30">
                        <!-- Logo -->
                        <a class="g-text-underline--none--hover mr-4" href="/">
                            <img class="g-width-95" src="/img/acbvi/purple_logo.jpg" alt="Logo">
                        </a>
                        <!-- End Logo -->
                    </div>

                    <div class="col-md-4 g-mb-30">
                        <!-- Social Icons -->
                        <ul class="list-inline text-center mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v3 u-icon-size--sm g-color-gray-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded"
                                   href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">

                                <a
                                        class="u-icon-v3 u-icon-size--sm g-color-gray-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded"
                                        href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="u-icon-v3 u-icon-size--sm g-color-gray-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded"
                                   href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="u-icon-v3 u-icon-size--sm g-color-gray-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded"
                                   href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="u-icon-v3 u-icon-size--sm g-color-gray-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded"
                                   href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>

                    <div class="col-md-4 g-mb-30 text-right">
                        <div class="d-inline-block g-mx-15">
                            <h4 class="g-color-text g-font-size-11 text-left text-uppercase">Email</h4>
                            <a href="#">contact@acbvi.org</a>
                        </div>
                        <div class="d-inline-block g-mx-15">
                            <h4 class="g-color-text g-font-size-11 text-left text-uppercase">Phone</h4>
                            <a href="#">(602) 274 7411</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to-v1 g-width-40 g-height-40 g-color-primary g-bg-main-opacity-0_5 g-bg-main--hover g-bg-main--focus g-font-size-12 rounded"
       href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
    <!-- End Go to Top -->
    <!-- JS Customization -->

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>

<!-- JS -->
<script src="./js/all.js"></script>

</body>
</html>
