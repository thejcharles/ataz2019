@extends('home.layout.base')
@section('title', 'Donate')

@section('content')

    <!-- Section Content -->
    <section id="yourHelp" class="g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
            <div class="text-center u-heading-v8-1 g-mb-35">
                <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">How you
                    <strong class="g-color-primary">can help</strong></h2>
            </div>

            <p class="h4 mb-0 g-color-gray-dark-v3">Celebrating over 70 Years of Service to the Community!
                Arizona Center for the Blind and Visually Impaired is a certified Arizona Qualifying Charitable Organization.

                As an Arizona resident your donation may be eligible for the tax credit, please contact your tax advisor for more information.

                ACBVI’s assigned QCO Code is 20466.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Article -->
                    <article class="row align-items-stretch text-center g-color-gray-dark-v5 g-bg-black mx-0">
                        <!--Article Content-->
                        <div class="col-sm-6 u-ns-bg-v1-bottom u-ns-bg-v1-right--md g-bg-black g-px-30 g-py-45">
                            <h3 class="text-uppercase g-font-size-20 g-color-white g-mb-25">Become a
                                <strong class="d-block g-font-weight-700 g-color-primary">Volunteer</strong></h3>
                            <p class="g-mb-25 g-color-white">Arizona Center for the Blind and Visually Impaired is always looking for volunteers. Become a volunteer today!</p>
                            <a class="btn btn-block text-uppercase u-btn-primary g-font-size-11 g-font-weight-700 g-brd-none rounded-0 g-px-25 g-py-16" href="#">
                                <i class="fa fa-heart g-font-size-18 g-color-white g-valign-middle g-mr-6"></i>
                                <span class="g-valign-middle">Join us</span>
                            </a>
                        </div>
                        <!-- End Article Content -->

                        <!-- Article Image -->
                        <div class="col-sm-6 px-0 u-bg-overlay g-bg-black-opacity-0_2--after g-bg-img-hero g-min-height-300"
                             data-bg-img-src="/img/acbvi/volunteer.jpg"></div>
                        <!-- End Article Image -->
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-6">
                    <!-- Article -->
                    <article class="row align-items-stretch text-center g-color-gray-dark-v5 g-bg-black mx-0">
                        <!-- Article Image -->
                        <div class="col-sm-6 px-0 u-bg-overlay g-bg-black-opacity-0_2--after g-bg-img-hero g-min-height-300"
                             data-bg-img-src="/img/acbvi/writer.jpg"></div>
                        <!-- End Article Image -->

                        <!--Article Content-->
                        <div class="col-sm-6 u-ns-bg-v1-top u-ns-bg-v1-left--md g-bg-black g-px-30 g-py-45">
                            <h3 class="text-uppercase g-font-size-20 g-color-white g-mb-25">Make a
                                <strong class="d-block g-font-weight-700 g-color-primary">Dontation</strong></h3>
                            <p class="g-mb-25 g-color-white">Over 200,000 individuals in Arizona are Blind or visually impaired.
                                Help support ACBVI's mission to change lives.</p>
                            <a class="btn btn-block text-uppercase u-btn-primary g-font-size-11 g-font-weight-700 g-brd-none rounded-0 g-px-25 g-py-16" href="#">
                                <i class="fa fa-heart g-font-size-18 g-color-white g-valign-middle g-mr-6"></i>
                                <span class="g-valign-middle">Donate Today</span>
                            </a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="ourProjects" class="g-bg-gray-light-v5 g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
            <div class="text-center u-heading-v8-1 g-mb-35">
                <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Make a
                    <strong class="g-color-primary">Pledge</strong></h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <!-- Products Block -->
            <div class="col-md-6 col-lg-4">
                <!-- Article -->
                <article class="u-shadow-v19 g-bg-primary pledge-card">
                    <!-- Article Image -->
{{--                    <img class="w-100" src="/img/acbvi/volunteer.jpg" alt="Image Description">--}}
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="g-py-40 g-px-35">
                        <h3 class="h6 text-uppercase g-font-weight-700 g-mb-15">
                            <span class="d-block g-color-white g-line-height-1_2 g-letter-spacing-minus-2 g-font-size-25">Pledge with Paypal</span>
                        </h3>
                        <p class="g-color-white g-mb-35">Make your secure pledge today using your paypal account or a credit or debit card.</p>
{{--                        <a class="btn btn-block text-uppercase u-btn-black g-font-size-11 g-font-weight-700 g-brd-none rounded-0 g-px-25 g-py-16" href="#">--}}
{{--                            <i class="fa fa-heart g-font-size-18 g-color-primary g-valign-middle g-mr-6"></i>--}}
{{--                            <span class="g-valign-middle">Donate Now</span>--}}
{{--                        </a>--}}
                        <div align="align-center">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="8TFJC7Z9UR83W">
                            <input class ="purple-border" type="image" style="width:16rem" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        </form>
                        </div>
                    </div>
                    <!-- End Article Content -->
                </article>
                <!-- End Article -->
            </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Article -->
                    <article class="u-shadow-v19 g-bg-primary pledge-card">
                        <!-- Article Image -->
{{--                        <img class="w-100" src="/img/acbvi/volunteer.jpg" alt="Image Description">--}}
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-35">
                            <h3 class="h6 text-uppercase g-font-weight-700">
                                <span class="d-block g-color-white g-line-height-1_2 g-letter-spacing-minus-2 g-font-size-25">Shop with Amazon</span>
                            </h3>
                            <p class="g-color-white g-mb-35">Do you shop on Amazon? You can support ACBVI by selecting us as your charity while shopping on Amazon Smile.</p>
                            <a href="https://smile.amazon.com/ch/86-0133392">
{{--                                <i class="fa fa-heart g-font-size-18 g-color-primary g-valign-middle g-mr-6"></i>--}}
{{--                                <span class="g-valign-middle">Donate Now</span>--}}
                                <img src="img/acbvi/amazon.png" height="60" width="180" alt="Shop with Amazon">
                            </a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Article -->
                    <article class="u-shadow-v19 g-bg-primary pledge-card">
                        <!-- Article Image -->
{{--                        <img class="w-100" src="/img/acbvi/volunteer.jpg" alt="Image Description">--}}
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-35">
                            <h3 class="h6 text-uppercase g-font-weight-700 g-mb-15">
                                <span class="d-block g-color-white g-line-height-1_2 g-letter-spacing-minus-2 g-font-size-25">Pledge with Frys Rewards</span>
                            </h3>
                            <p class="g-color-white g-mb-35">
                                Simply sign into your Fry's account, go to "My Account" and select "Account Settings. Enter WQ650 and select ACBVI.

                            </p>
                            <a href="https://www.frysfood.com/topic/new-community-rewards-program">
{{--                                <i class="fa fa-heart g-font-size-18 g-color-primary g-valign-middle g-mr-6"></i>--}}
{{--                                <span class="g-valign-middle">Donate Now</span>--}}
                                <img src="img/acbvi/frys_logo.jpg" alt="Shop with Fry's" height="60" width="180" >
                            </a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
            </div>
            <!-- end of row -->
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->


@endsection();
