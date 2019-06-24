@extends('home.layout.base')
@section('title', 'Our Staff')

@section('content')

    <!-- Promo Block -->
    <div class="container g-pt-20">
        <div class="u-shadow-v34 g-brd-around g-brd-12 g-brd-white rounded g-pos-rel g-z-index-1">
            <div class="g-min-height-70vh g-flex-centered g-bg-img-hero rounded" style="background-image: url(img/acbvi/3teach.JPG);">
                <div class="w-100 g-pos-abs g-bottom-0 g-left-0 g-z-index-1">
                    <div class="g-bg-white g-pos-rel g-px-30 g-pt-30 g-pt-0--md g-pb-15">
                        <h1><a class="h1 u-link-v5 g-color-main g-color-primary--hover g-font-size-45--md" href="#">ACBVI Staff</a></h1>
                        <!-- SVG Top Background Shape -->
                        <svg class="w-100 g-hidden-sm-down g-pos-abs g-top-minus-80x g-left-0 g-z-index-minus-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 1200 237" enable-background="new 0 0 1200 237" xml:space="preserve">
                  <polygon fill="#F1F6FA" points="0,45.2 0,132.9 443.4,67.5 "/>
                            <polygon fill="#FFFFFF" points="0,105 0,237 1200,237 1200,105 1200,0 "/>
                </svg>
                        <!-- End SVG Top Background Shape -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Block -->

    <!-- Call to Action -->
    <div class="u-shadow-v35 g-bg-img-hero u-bg-overlay g-bg-black-opacity-0_5--after" style="background-image: url(/img/acbvi/steve_welker_group_picture.jpg); min-height:20rem";>

        </div>
    </div>
    <!-- End Call to Action -->
    <!-- Director -->

    <div class="container g-py-100">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="/img/acbvi/staff/{{$director->photo}}" alt="Image of {{$director->name}}">
            </div>

            <div class="col-md-5 g-mb-50 g-mb-0--md">
                <div class="mb-5">
                    <h2 class="mb-3">{{$director->name}}</h2>
                    <h3 class="g-color-black">{{$director->title}}</h3>
                    <p>{{$director->bio}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Director -->

    <!-- AT Director -->
    <div class="container g-pb-100">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-md-6 order-md-2">
                <img class="img-fluid" src="/img/acbvi/staff/{{$at_director->photo}}" alt="Image of {{$at_director->name}}">
            </div>

            <div class="col-md-5 order-md-1 g-mb-50 g-mb-0--md">
                <div class="mb-5">
                    <h2 class="mb-3">{{$at_director->name}}</h2>
                    <h3 class="g-color-black">{{$at_director->title}}</h3>
                    <p>{{$at_director->bio}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End AT Director -->

    <!-- Staff  -->
    <div class="clearfix g-bg-secondary g-py-100" style="max-height:100%;">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1 mb-3">Our Team</h2>
{{--            <p>Put it all together, and choose your study opportunity at the University of Unify.</p>--}}
        </div>
        <!-- End Heading -->

        <!-- Faculty Professors Carousel -->
        <div class="js-carousel"
             data-infinite="true"
             data-slides-show="3"
             data-slides-scroll="1"
             data-arrows-classes="u-icon-v3 g-width-45 g-height-45 g-absolute-centered--y g-color-white g-color-white--hover g-bg-main g-bg-primary--hover rounded g-pa-12"
             data-arrow-left-classes="fa fa-angle-left g-left-40"
             data-arrow-right-classes="fa fa-angle-right g-right-40"
             data-center-mode="true"
             data-center-padding="100px"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2,
                 "centerPadding": 30
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2,
                 "centerPadding": 30
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1,
                 "centerPadding": 30
               }
             }]'>
        @foreach($staff as $s)
        <!-- Staff  -->
            <div class="js-slide u-block-hover g-pb-10 g-mx-15">
                <div class="g-overflow-hidden">
                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1 g-transition-0_5" src="/img/acbvi/staff/{{$s->photo}}" alt="Image Description">
                </div>
                <div class="u-shadow-v32 g-bg-white g-pa-30">
                    <h3 class="h3 g-font-weight-500 mb-1 g-color-black">{{$s->name}}</h3>
                    <span class="d-block g-color-text-light-v1 g-font-size-16">{{$s->title}}</span>
                </div>
                <a class="u-link-v2" href="staff-profile/{{$s->id}}"></a>
            </div>
            <!-- End Staff  -->
        @endforeach
        </div>
    </div>
    <!-- End Staff  -->
    <div class="container text-center g-pt-100">
        <h3 class="h3 g-mb-40">Boost your career to new heights</h3>
        <div class="row">
            <div class="col-md-4 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">Extraordinary environment</h3>
                    <p class="g-color-text-light-v1 mb-0">In an extraordinary environment that inspires you to new ways of thinking.</p>
                </div>
            </div>
            <div class="col-md-4 g-brd-x g-brd-secondary-light-v2 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">Endless opportunities</h3>
                    <p class="g-color-text-light-v1 mb-0">In a landscape full of dynamic learning opportunities.</p>
                </div>
            </div>
            <div class="col-md-4 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">Dynamically impactful</h3>
                    <p class="g-color-text-light-v1 mb-0">In a community that provides endless opportunities for you to make impact.</p>
                </div>
            </div>
        </div>
        <!-- End Info -->
    </div>
    <!-- End Video Blocks -->

    <!-- Call to Action -->
    <div class="g-pos-rel">
        <div class="container text-center g-pt-100 g-pb-50">
            <!-- Heading -->
            <div class="g-max-width-645 mx-auto g-mb-40">
                <h2 class="h1 mb-3">Join ACBVI Today!</h2>
                <p>Our goal is simple: to create an environment where individuals can thrive!  </p>
            </div>
            <!-- End Heading -->

            <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="careers">View Opportunities</a>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve">
            <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="37" y2="0.5">
                <stop  offset="0" style="stop-color:#f5f6fa"/>
                <stop  offset="1" style="stop-color:#b5b8cb"/>
            </linearGradient>
                <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37" y1="0.5" x2="0" y2="0.5"/>
          </svg>
            <!-- End SVG Shape -->

            <span class="align-middle g-color-primary mx-1">or</span>

            <!-- SVG Shape -->
            <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve">
            <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5" x2="27" y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)">
                <stop  offset="0" style="stop-color:#f5f6fa"/>
                <stop  offset="1" style="stop-color:#b5b8cb"/>
            </linearGradient>
                <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0" y1="0.5" x2="37" y2="0.5"/>
          </svg>
            <!-- End SVG Shape -->

            <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="contact">Contact Us</a>
        </div>

        <!-- SVG Background Shape -->
        <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
          <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 "/>
            <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "/>
        </svg>
        <!-- End SVG Background Shape -->
    </div>
    <!-- End Call to Action -->

    <!-- Video Blocks -->


@endsection;

