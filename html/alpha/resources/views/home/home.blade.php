@extends('home.layout.base')
@section('title', 'Home')

@section('content')


<!-- Promo Block -->
<div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
    data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-black-opacity-0_4--after"
        style="height: 120%; background-image: url(/img/acbvi/acbvi_building.png);"></div>

    <div class="container g-pt-170">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-7 g-mb-90">
                <!-- Content Info -->
                <div class="mb-5">
                    <h1 class="g-color-white g-font-weight-600 g-font-size-50 mb-3">Comprehensive Visually
                        Impaired Center.!!!!</h1>
                    <p class="g-color-white g-font-size-18 g-line-height-2">Arizona Center for the Blind and
                        Visually Impaired</p>
                </div>
                <a class="btn u-btn-primary g-brd-main--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13 mr-3"
                    href="page-services-1.php">
                    Donate
                    <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
                </a>
                <a class="btn u-btn-primary g-brd-main--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13 mr-3"
                    href="page-works-1.php">
                    Apply for services
                    <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
                </a>
                <!-- End Content Info -->
            </div>

            <div class="col-md-6 col-lg-4 g-mb-90">
                <!-- Join Form -->
                <form class="g-bg-white rounded g-px-30 g-py-40">
                    <div class="text-center">
                        <h2 class="h3 g-font-weight-600 g-mb-35">Get Updates from ACBVI</h2>
                    </div>

                    <input class="form-control rounded g-px-20 g-py-12 mb-3" type="text" placeholder="Your Name">
                    <input class="form-control rounded g-px-20 g-py-12 mb-3" type="email" placeholder="Your Email">

                    <div class="g-mb-35">
                        <button
                            class="btn btn-block u-btn-primary g-brd-main--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13"
                            type="submit">Submit</button>
                    </div>

                    <div class="text-center mb-3">
                        <h3 class="h5">Follow us on</h3>
                    </div>

                    <div class="row no-gutters">
                        <div class="col">
                            <a class="btn btn-block u-btn-facebook g-font-weight-600 g-font-size-12 text-uppercase g-rounded-right-0 g-rounded-left-3 g-px-25 g-py-13"
                                href="page-works-1.php">
                                <i class="mr-2 fa fa-facebook"></i>
                                Facebook
                            </a>
                        </div>
                        <div class="col">
                            <a class="btn btn-block u-btn-twitter g-font-weight-600 g-font-size-12 text-uppercase g-rounded-left-0 g-rounded-right-3 g-px-25 g-py-13"
                                href="page-works-1.php">
                                <i class="mr-2 fa fa-twitter"></i>
                                Twitter
                            </a>
                        </div>
                    </div>
                </form>
                <!-- End Join Form -->
            </div>
        </div>
    </div>
</div>
<!-- End Promo Block -->

<!-- About -->
<div class="container g-pt-100 g-pb-70">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-7 g-mb-50">
            <!-- About Info -->
            <div class="mb-5">
                <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">What
                    is ACBVI?</span>
                <h2 class="mb-4">Your Comprehensive Visually Impaired Center</h2>

                <div class="row">
                    <div class="col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav flex-column" role="tablist" data-target="nav-1-1-accordion-primary-ver">
                            <li class="nav-item">
                                <a class="nav-link active g-color-primary--hover g-color-primary--parent-active g-pl-0"
                                    data-toggle="tab" href="#nav-1-1-accordion-primary-ver--1" role="tab">Who we
                                    are</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link g-color-primary--hover g-color-primary--parent-active g-pl-0"
                                    data-toggle="tab" href="#nav-1-1-accordion-primary-ver--2" role="tab">Our
                                    vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link g-color-primary--hover g-color-primary--parent-active g-pl-0"
                                    data-toggle="tab" href="#nav-1-1-accordion-primary-ver--3" role="tab">Our
                                    mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link g-color-primary--hover g-color-primary--parent-active g-pl-0"
                                    data-toggle="tab" href="#nav-1-1-accordion-primary-ver--4" role="tab">Our
                                    History</a>
                            </li>
                        </ul>
                        <!-- End Nav tabs -->
                    </div>

                    <div class="col-sm-9">
                        <!-- Tab panes -->
                        <div id="nav-1-1-accordion-primary-ver" class="tab-content">
                            <div class="tab-pane fade show active" id="nav-1-1-accordion-primary-ver--1"
                                role="tabpanel">
                                <p class="g-line-height-2">Arizona Center for the Blind and Visually Impaired
                                    (ACBVI) has been providing services for individuals since 1947. ACBVI is
                                    committed to "enhancing the quality of life for people who are blind or
                                    otherwise visually impaired." </p>
                                <p class="g-line-height-2">Our services are available to adults who are legally
                                    blind or visually impaired as well as those who have a degenerative eye
                                    condition which may eventually become a visual impairment. These services
                                    are offered separately or concurrently according to the individual needs of
                                    the qualifying client.</p>
                            </div>

                            <div class="tab-pane fade" id="nav-1-1-accordion-primary-ver--2" role="tabpanel">
                                <p class="g-line-height-2">Arizona Center for the Blind and Visually Impaired
                                    (ACBVI) has been providing services for individuals since 1947. ACBVI is
                                    committed to "enhancing the quality of life for people who are blind or
                                    otherwise visually impaired." </p>
                                <p class="g-line-height-2">Our services are available to adults who are legally
                                    blind or visually impaired as well as those who have a degenerative eye
                                    condition which may eventually become a visual impairment. These services
                                    are offered separately or concurrently according to the individual needs of
                                    the qualifying client.</p>
                            </div>

                            <div class="tab-pane fade" id="nav-1-1-accordion-primary-ver--3" role="tabpanel">
                                <p class="g-line-height-2">Arizona Center for the Blind and Visually Impaired
                                    (ACBVI) has been providing services for individuals since 1947. ACBVI is
                                    committed to "enhancing the quality of life for people who are blind or
                                    otherwise visually impaired." </p>
                            </div>

                            <div class="tab-pane fade" id="nav-1-1-accordion-primary-ver--4" role="tabpanel">
                                <p class="g-line-height-2">Arizona Center for the Blind and Visually Impaired
                                    (ACBVI) has been providing services for individuals since 1947. ACBVI is
                                    committed to "enhancing the quality of life for people who are blind or
                                    otherwise visually impaired." </p>
                            </div>
                        </div>
                        <!-- End Tab panes -->
                    </div>
                </div>
                <!-- End Tab -->
            </div>

            <a class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13 mr-3"
                href="about">
                About Us
                <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
            </a>
            <a class="g-brd-bottom g-brd-main g-brd-primary--hover g-color-main g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-pb-3"
                href="contact">
                Ask a Question
            </a>
            <!-- End About Info -->
        </div>

        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto g-mb-50">
            <!-- About Info -->
            <div class="d-inline-block u-shadow-v20 g-width-300 g-height-300 g-brd-around g-brd-10 g-brd-white g-bg-cover g-bg-main-opacity-0_9--after g-rounded-circle--after text-center rounded-circle g-pa-50"
                style="background-image: url(/img/acbvi/ACBVI_LOGO.jpg);">
                <div class="g-pos-rel g-z-index-1">
                    <span class="d-block g-color-white-opacity-0_6 g-font-size-13 text-uppercase">Over</span>
                    <span
                        class="d-block g-color-white g-font-weight-300 g-font-size-70 g-line-height-1_2 mb-2">200K+</span>
                    <span
                        class="d-block g-color-white g-font-weight-300 g-font-size-13 text-uppercase">Individuals<br>in
                        Arizona</span>
                </div>

                <a class="js-fancybox d-flex g-text-underline--none--hover ml-auto g-mt-15" href="javascript:;"
                    data-src="https://youtu.be/jHeD8qZSCAs?autoplay=0" data-speed="350" data-caption="Video Popup">
                    <span
                        class="u-icon-v3 u-icon-size--xl u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-pos-rel g-z-index-1 g-cursor-pointer">
                        <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                    </span>
                </a>
            </div>
            <!-- End About Info -->
        </div>
    </div>
</div>
<!-- End About -->

<!-- Video Section -->
<div class="g-bg-secondary g-py-100">
    <!-- Video - Heading -->
    <div class="container">
        <div class="row align-items-center g-mb-40--lg">
            <div class="col-sm-4 g-mb-30 g-mb-0--lg">
                <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">Video
                    Section</span>
                <h2 class="mb-0">Our Services</h2>
            </div>

            <div class="col-sm-8">
                <div class="text-right">
                    <a class="u-link-v7 g-color-main g-color-primary--hover g-font-size-13 g-text-underline--none--hover"
                        href="#">
                        All ACBVI Services
                        <span class="u-link-v7-arrow g-font-size-18">&rightarrow;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video - Heading -->

    <!-- Works - Content -->
    <div class="container">
        <div class="row">
            <!-- Video Article -->
            <div class="col-lg-6 g-mb-30">
                <div class="h-100 g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-150 g-mb-30 g-mb-0--lg"
                    data-bg-img-src="img/acbvi/70years.png">
                    <article class="text-center g-absolute-centered--y g-z-index-1 g-px-50">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="https://www.youtube.com/watch?v=jHeD8qZSCAs&t=16s?autoplay=1" data-speed="350"
                            data-caption="Video Popup">
                            <span
                                class="u-icon-v3 u-icon-size--xl u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="g-color-white">What would You Do?</h4>
                    </article>
                </div>
            </div>
            <!-- End Video Article -->

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Video Article -->
                <div class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-50 g-mb-30"
                    data-bg-img-src="/img/acbiv/at_training.JPG">
                    <article class="text-center g-pos-rel g-z-index-1 g-px-20">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350"
                            data-caption="Video Popup">
                            <span
                                class="u-icon-v3 u-icon-size--md u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-13 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="h5 g-color-white">What does it take to overcome obstacles?</h4>
                    </article>
                </div>
                <!-- End Video Article -->

                <!-- Video Article -->
                <div class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-50 g-mb-30 g-mb-0--lg"
                    data-bg-img-src="/img/acbvi/atlab.jpg">
                    <article class="text-center g-pos-rel g-z-index-1 g-px-20">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350"
                            data-caption="Video Popup">
                            <span
                                class="u-icon-v3 u-icon-size--md u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-13 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="h5 g-color-white">More About ACBVI</h4>
                    </article>
                </div>
                <!-- End Video Article -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <ul class="list-unstyled mb-0">
                    <li class="g-brd-top g-brd-gray-light-v3 g-py-20">
                        <a class="js-fancybox u-link-v5 g-color-text g-color-primary--hover g-font-size-13"
                            href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                            data-speed="350" data-caption="Video Popup">
                            <span class="d-block g-color-main g-font-weight-600 text-uppercase mb-1">Technology
                                Center</span>
                            Access to thousands of assistive technologies and devices
                        </a>
                    </li>
                    <li class="g-brd-top g-brd-gray-light-v3 g-py-20">
                        <a class="js-fancybox u-link-v5 g-color-text g-color-primary--hover g-font-size-13"
                            href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                            data-speed="350" data-caption="Video Popup">
                            <span class="d-block g-color-main g-font-weight-600 text-uppercase mb-1">Social
                                Recreation</span>
                            Activities include Physical Fitness,Arts and Crafts, and many more
                        </a>
                    </li>
                    <li class="g-brd-top g-brd-gray-light-v3 g-py-20">
                        <a class="js-fancybox u-link-v5 g-color-text g-color-primary--hover g-font-size-13"
                            href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                            data-speed="350" data-caption="Video Popup">
                            <span class="d-block g-color-main g-font-weight-600 text-uppercase mb-1">Support
                                Services</span>
                            Support Groups, family counseling, individual counseling
                        </a>
                    </li>
                    <li class="g-brd-y g-brd-gray-light-v3 g-py-20">
                        <a class="js-fancybox u-link-v5 g-color-text g-color-primary--hover g-font-size-13"
                            href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                            data-speed="350" data-caption="Video Popup">
                            <span class="d-block g-color-main g-font-weight-600 text-uppercase mb-1">Rehab
                                Training</span>
                            Trainings range from Orientation and Mobility, Rehab Teaching, Assistive
                            Technologies
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Works - Content -->
</div>
<!-- End Video Section -->

<!-- Services -->
<div class="container g-py-100">
    <div class="row">



    </div>
    <!-- End Services -->

    <!-- Promo Banner -->
    <div class="g-bg-img-hero g-bg-pos-top g-bg-size-cover g-bg-white-gradient-opacity-v5--after"
        style="background-image: url(/img/acbvi/happy_client.JPG);">
        <div class="container g-pos-rel g-z-index-1">
            <div class="row justify-content-between">
                <div class="col-md-3 g-py-100">
                    <div class="mb-5">
                        <span
                            class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">How
                            does it work?</span>
                        <h2 class="mb-4">ACBVI Client Intake Packet</h2>
                        <p class="g-font-size-16 g-line-height-2 g-color-black">Check out out intake packet
                            which contains important information about how you or your loved one can take
                            advatage of our services.</p>
                    </div>
                    <a class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13"
                        href="login">
                        Download Packet
                        <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Banner -->



    <!-- Clients -->
</div>
@endsection