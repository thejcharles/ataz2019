@extends('home.layout.base')
@section('title', 'Contact Us')

@section('content')

    <!-- Promo Banner -->
    <div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80"
         style="background-image: url(/img/acbvi/ada_ramp.jpg);">
        <div class="container g-pos-rel g-z-index-1">
            <h1 class="g-color-primary g-font-size-60--lg mb-0">Contact Us!</h1>
        </div>
    </div>
    <!-- End Promo Banner -->

    <!-- Address & Map -->
    <div class="g-pos-rel">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center g-py-100">
                    <!-- Address -->
                    <h2 class="h1 g-mb-60">ACBVI Office</h2>

                    <div class="row justify-content-start">
                        <div class="col col-sm-5">
                            <div class="mb-5">
                                <h3 class="g-color-text g-font-weight-400 g-font-size-13 text-uppercase mb-3">
                                    Arizona</h3>
                                <address class="g-font-weight-500">
                                    3100 East Roosevelt Street,
                                    <br>
                                    Phoenix, Arizona,
                                    <br>
                                    85008
                                </address>
                            </div>

                            <h4 class="g-color-text g-font-weight-400 g-font-size-13 text-uppercase mb-3">Reference
                                Point</h4>
                            <address class="g-font-weight-500">
                                32nd Street and Loop 202
                            </address>
                        </div>

                        <div class="col col-sm-5">
                            <div class="mb-5">
                                <h4 class="g-color-text g-font-weight-400 g-font-size-13 text-uppercase mb-3">
                                    Telephone</h4>
                                <span class="d-block g-color-main g-font-weight-500">(602) 273-7411</span>
                            </div>
                            <h4 class="g-color-text g-font-weight-400 g-font-size-13 text-uppercase mb-3">Email</h4>
                            <span class="d-block g-color-main g-font-weight-500">contact@acbvi.org</span>
                        </div>
                    </div>
                    <!-- End Address -->
                </div>

                <div class="col-md-5 align-self-center h-100 g-pos-abs--md g-top-0 g-right-0 g-pr-0">
                    <!-- Google Map -->
                    <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 h-100"
                         data-type="custom" data-lat="33.4587" data-lng="-112.0147" data-zoom="18" data-title="ACBVI"
                         data-styles='[["", "", [{"saturation":-100},{"lightness":40},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#888"}]] ]'
                         data-pin="true" data-pin-icon="/img/acbvi/icons/pin/marker.png">
                    </div>
                    <!-- End Google Map -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Address & Map -->

    <!-- Contact Form -->
    <div class="g-brd-y g-brd-gray-light-v4">
        <div class="container g-py-100">
            <div class="g-mb-60">
                <h2 class="h1 mb-3">Talk to Us</h2>
                <p class="g-line-height-2">If you’d like us to get in touch with you, please fill in the details
                    requested below.<br>A member of our staff will contact you with the information or advice you
                    require.</p>
            </div>

            <form class="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 g-mb-35">
                                <label class="g-color-main g-font-weight-500 mb-3">Your name</label>
                                <input
                                        class="form-control g-color-main g-brd-black-dark-v4 g-brd-primary--focus g-bg-white rounded g-py-13 g-px-15"
                                        type="text" placeholder="John Doe">
                            </div>

                            <div class="col-sm-6 g-mb-35">
                                <label class="g-color-main g-font-weight-500 mb-3">Your email</label>
                                <input
                                        class="form-control g-color-main g-brd-black-light-v4 g-brd-primary--focus g-bg-white rounded g-py-13 g-px-15"
                                        type="email" placeholder="johndoe@gmail.com">
                            </div>

                            <div class="col-sm-6 g-mb-35">
                                <label class="g-color-main g-font-weight-500 mb-3">Phone number</label>
                                <input
                                        class="form-control g-color-main g-brd-black-light-v4 g-brd-primary--focus g-bg-white rounded g-py-13 g-px-15"
                                        type="tel" placeholder="(602) 273-7411">
                            </div>

                            <div class="col-sm-6 g-mb-35">
                                <label class="g-color-main g-font-weight-500 mb-3">Subject</label>
                                <input
                                        class="form-control g-color-main g-brd-black-light-v4 g-brd-primary--focus g-bg-white rounded g-py-13 g-px-15"
                                        type="text" placeholder="Partnership">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="g-color-main g-font-weight-500 mb-3">Your message</label>
                            <textarea
                                    class="form-control g-color-main g-brd-black-light-v4 g-brd-primary--focus g-bg-secondary rounded g-py-13 g-px-15"
                                    rows="8" placeholder="Hi there, I would like to ..."></textarea>
                        </div>

                        <div class="text-right">
                            <button
                                    class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                                    type="submit" role="button">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact Form -->

    <!-- Social Media -->
    <div class="container text-center g-py-100">
        <h2 class="h1 g-mb-60">Social Media</h2>

        <div class="row justify-content-center">
            <div class="col-4 col-md-3">
                <a class="g-text-underline--none--hover" href="#">
                        <span
                                class="u-icon-v2 g-brd-2 g-brd-main g-brd-primary--hover g-color-main g-color-primary--hover g-bg-main--hover rounded-circle mb-4">
                            <i class="fa fa-facebook"></i>
                        </span>
                    <span
                            class="d-block g-color-text g-font-weight-400 g-font-size-13 text-uppercase">Facebook</span>
                </a>
            </div>

            <div class="col-4 col-md-3">
                <a class="g-text-underline--none--hover" href="#">
                        <span
                                class="u-icon-v2 g-brd-2 g-brd-main g-brd-primary--hover g-color-main g-color-primary--hover g-bg-main--hover rounded-circle mb-4">
                            <i class="fa fa-twitter"></i>
                        </span>
                    <span
                            class="d-block g-color-text g-font-weight-400 g-font-size-13 text-uppercase">Twitter</span>
                </a>
            </div>


        </div>
    </div>
    <!-- End Social Media -->
    <!-- End Contact Form -->

@endsection