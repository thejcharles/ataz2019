@extends('home.layout.base')
@section('title'){{$staff->name}}@endsection

@section('content')
    <!-- Director -->
    <div class="container g-py-100">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="/img/acbvi/staff/{{$staff->photo}}" alt="Image of {{$staff->name}}">
            </div>

            <div class="col-md-5 g-mb-50 g-mb-0--md">
                <div class="mb-5">
                    <h2 class="mb-3">{{$staff->name}}</h2>
                    <h3 class="g-color-black">{{$staff->title}}</h3>
                    <p>{{$staff->bio}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Director -->

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
                <p>Our strategy is simple: to create an environment where individuals can thrive!  </p>
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

@endsection
