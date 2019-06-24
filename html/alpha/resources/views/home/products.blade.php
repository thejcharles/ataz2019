@extends('home.layout.base')
@section('title', 'Products')

@section('content')

    <!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-50">
        <div class="container">
            <div class="d-sm-flex text-center">
                <div class="align-self-center">
                    <h1 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md" style="margin-top:200px;">Our Products
                    </h1>
                </div>


            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Section -->
    <section class="container g-pt-100 g-pb-40">
        <div class="row">
            <div class="col-lg-8 g-mb-60">
                <div class="mb-3">
                    <h2 class="h3 text-uppercase mb-3">Our Products & Free Apps</h2>
                    <p>Download our free App from Google Apps or iTunes store today! You do not need the App to use
                        the product below.</p>
                    <a href="#" style="margin-left:60px"><img src="../assets/img/med-alert/google.jpg" width="85"
                                                              height="80"  alt="Google Play store logo" /></a>
                    <a href="#" style="margin-left:80px;"><img src="../assets/img/med-alert/itunes.png" width="80"
                                                               height="90"  alt="iTunes store logo"/></a>
                </div>
                <div class="mb-5">

                    <img src="../assets/img/med-alert/products.jpg" width="730" height="350"
                         alt="Image of Medical Red Alert ID Product" />
                    <p>Two 3X3 Stickers as well as a wallet card ant 2 Key Tags with the ability to have your basic
                        emergency medical information easily accessible for first responders along with additional
                        server space to store more detailed medical information as desired.
                        One time purchase price of $99.99USD with a maintenance fee of $49.99USD billed annually.
                    </p>
                </div>

            </div>


        </div>

    </section>
    <!-- End Section -->

    <!-- Call to action -->
    <div class="shortcode-html">
        <section class="g-brd-around g-brd-gray-light-v4 g-py-40 g-px-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 align-self-lg-center">
                        <img class="img-fluid w-100 g-mb-30 g-mb-0--lg"
                             src="../assets/img/med-alert/promo-blocks/1484861888880_81079.jpg"
                             alt="Emergency medicl information logo"/>
                    </div>

                    <div class="col-lg-7 align-self-lg-center">
                        <h2 class="text-uppercase">Welcome to the Revolution!</h2>
                        <p class="lead g-mb-20 g-mb-0--lg">Medical Red Alert ID is the future of human safety that
                            not only applies to the workplace but in all aspects of our lives. Join the Revolution
                            now!
                        </p>
                    </div>

                    <div class="col-lg-2 align-self-lg-center">
                        <a class="btn u-btn-primary rounded-0 g-py-12 g-px-30" href="register">Sign Up Now!</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Call to action -->

@endsection