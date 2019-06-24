@extends('home.layout.base')
@section('title', 'Our Staff')

@section('content')
    <!-- Promo Banner -->
    <div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url(/img/acbvi/bball.jpg);">
        <div class="container g-pos-rel g-z-index-1">
            <h2 class="h1 g-color-primary g-font-size-60--lg mb-0">ACBVI events</h2>
        </div>
    </div>
    <!-- End Promo Banner -->



    <!-- events -->
    <div class="container">
        <h1>Past Events</h1>
        <div class="row g-pt-100 g-pb-30--lg">
            <div class="col-lg-6 g-mb-100">
                <!-- events Info -->
                <div class="g-pos-rel">
                    <!-- Carousel -->
                    <div id="carouselCus2" class="js-carousel u-carousel-v12"
                         data-infinite="true"
                         data-slides-show="1"
                         data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
                         data-arrow-left-classes="fa fa-angle-left"
                         data-arrow-right-classes="fa fa-angle-right g-ml-30">
                        <div class="js-slide">
                            <img class="img-fluid" src="/img/acbvi/movie_in_the_dark.jpg" alt="Image Description">
                        </div>
                        <div class="js-slide">
                            <img class="img-fluid" src="/img/acbvi/movie_in_the_dark.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Carousel -->

                    <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
                        <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
                           data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                           data-speed="350"
                           data-caption="Video Popup">
                            <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4">In the Dark Video</span>
                            <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                    <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <!-- End events Info -->
            </div>

            <div class="col-lg-6 g-mb-100">
                <div class="g-pl-40--lg">
                    <div class="mb-5">
                        <h3 class="mb-4">Movie in the Dark</h3>
                        <p class="g-line-height-2">
                            Join us for our annual "In The Dark" event, hosted by the ACBVI board of directors. This will be a FREE experiential movie event for sighted members of the community to experience a movie night without their sight. For this special viewing, the movie screen will be blacked out and you will ‘watch’ the show by listening to the action with the use of audio description. Our feature film of the evening is Game Night (2018) starring Jason Bateman and Rachel McAdams.
                        </p>
                    </div>

                    <a class="nav-link rounded g-color-white--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="page-contacts-1.html">
                        Get tickets
                    </a>
                </div>
            </div>
        </div>

        <hr class="g-brd-gray-light-v4 my-0">

        <div class="row g-pt-100">
            <div class="col-lg-6 order-lg-2 g-mb-100">
                <!-- events Info -->
                <div class="g-pos-rel">
                    <!-- Carousel -->
                    <div id="carouselCus2" class="js-carousel u-carousel-v12"
                         data-infinite="true"
                         data-slides-show="1"
                         data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
                         data-arrow-left-classes="fa fa-angle-left"
                         data-arrow-right-classes="fa fa-angle-right g-ml-30">
                        <div class="js-slide">
                            <img class="img-fluid" src="/img/acbvi/ride_for_reading.png" alt="Image Description">
                        </div>
                        <div class="js-slide">
                            <img class="img-fluid" src="/img/acbvi/ride_for_reading.png" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Carousel -->

                    <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
                        <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
                           data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                           data-speed="350"
                           data-caption="Video Popup">
                            <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4">Watch ride for reading Video</span>
                            <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                    <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <!-- End events Info -->
            </div>

            <div class="col-lg-6 order-lg-1 g-mb-100">
                <div class="g-pr-40--lg">
                    <div class="mb-5">
                        <h3 class="mb-4">Ride for Reading</h3>
                        <p class="g-line-height-2">
                            Come ride to benefit tje Arizona State Braille and Talking Book Library which serves 9,000 visually inpaired Arizona residents. Proceeds
                            go to support the library, its volunteer programs and local recording studios which provie audio books, magazines and newpapers to patrons.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="g-brd-gray-light-v4 my-0">

        <div class="row g-pt-100 g-pb-30--lg">
            <div class="col-lg-6 g-mb-100">
                <!-- events Info -->
                <div class="g-pos-rel">
                    <!-- Carousel -->
                    <div id="carouselCus2" class="js-carousel u-carousel-v12"
                         data-infinite="true"
                         data-slides-show="1"
                         data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
                         data-arrow-left-classes="fa fa-angle-left"
                         data-arrow-right-classes="fa fa-angle-right g-ml-30">
                        <div class="js-slide">
                            <img class="img-fluid" src="/img/acbvi/dinner_dark.png" alt="Image acbvi Dinner in the dark banner">
                        </div>
{{--                        <div class="js-slide">--}}
{{--                            <img class="img-fluid" src="/img/acbvi/dinner_dark.png" alt="Image Description">--}}
{{--                        </div>--}}
                    </div>
                    <!-- End Carousel -->

                    <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
                        <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
                           data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
                           data-speed="350"
                           data-caption="Video Popup">
                            <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4">Watch Building Community Video</span>
                            <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                    <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <!-- End events Info -->
            </div>

            <div class="col-lg-6 g-mb-100">
                <div class="g-pl-40--lg">
                    <div class="mb-5">
                        <h3 class="mb-4">Dinner in the Dark</h3>
                        <p class="g-line-height-2">
                            Join us for our annual "In The Dark" event, hosted by the ACBVI board of directors. This will be a FREE experiential movie event for sighted members of the community to experience a movie night without their sight. For this special viewing, the movie screen will be blacked out and you will ‘watch’ the show by listening to the action with the use of audio description. Our feature film of the evening is Game Night (2018) starring Jason Bateman and Rachel McAdams.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End events -->

    <!-- Promo Banner -->
    <div class="g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-bg-cover g-bg-white-gradient-opacity-v5--after" style="background-image: url(/img/acbvi/bball.jpg);">
        <div class="container g-pos-rel g-z-index-1">
            <div class="row justify-content-between">
                <div class="col-md-5 g-py-100">
                    <div class="mb-5">
                        <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">Be Brave</span>
                        <h2 class="mb-4">Volunteer Today</h2>
                        <p class="g-font-size-16 g-line-height-2">
                            Have you or someone you know had their life changed by sudden vision loss or impairment? Are you looking for an opportunity to give of your time or talents? ACBVI welcomes you. We have a variety of opportunities to volunteer at the center in the lunch program, with office work, in our social recreation programs, or through donations. As a nonprofit organization, we are committed to offering s services to our clients free or with minimal cost but we need your help.
                        </p>
                    </div>

                    <a class="btn u-btn-outline-primary g-brd-2 g-color-main g-color-white--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" href="tel:1-602-273-7411">
                        Call us
                        <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
                    </a>
                    <span class="d-inline-block g-font-weight-600 text-uppercase mx-4">or</span>
                    <a class="btn u-btn-black g-brd-primary--hover g-color-white g-color-white--hover g-bg-main g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" href="donate">
                        Donate
                        <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Banner -->


    </div>


    </div>
    </div>
    <!-- End Articles -->
@endsection