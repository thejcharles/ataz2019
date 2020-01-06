@extends('home.layout.base')
@section('title', 'Home')

@section('content')
  
  
  <!-- Promo Block -->
  <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
           data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_5--after"
         style="height: 140%; background-image: url(img/ataz/ability360.jpg)"></div>
    <!-- End Parallax Image -->
    
    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-py-150">
      <span class="d-block g-font-weight-300 g-font-size-25 mb-3">Assistive Technology Arizona</span>
      <h3 class="h1 text-uppercase mb-0">Using Assistive Technology and Disability Awareness Training to
        overcome disability barriers.</h3>
    </div>
    <!-- image list-->
    <ul class="row list-inline text-center g-pb-60 mb-0">
      <li class="col" data-animation="fadeIn" data-animation-delay="300" data-animation-duration="500">
        <img class="g-width-100 u-block-hover__main" src="/img/ataz/hands_free.jpg" alt="Image Description">
        <p class="text-uppercase mb-5 g-color-white">Trainings</p>
      </li>
      <li class="col" data-animation="fadeIn" data-animation-delay="400" data-animation-duration="600">
        <img class="g-width-100 u-block-hover__main" src="/img/ataz/apache.jpg" alt="Image Description">
        <p class="text-uppercase mb-5 g-color-white">WIOA Locations</p>
      </li>
      <li class="col" data-animation="fadeIn" data-animation-delay="500" data-animation-duration="700">
        <img class="g-width-100 u-block-hover__main" src="/img/ataz/anatomy.png" alt="Image Description">
        <p class="text-uppercase mb-5 g-color-white">Printable Resources</p>
      </li>
      <li class="col" data-animation="fadeIn" data-animation-delay="600" data-animation-duration="800">
        <img class="g-width-100 u-block-hover__main" src="/img/ataz/lgshow.jpg" alt="Image Description">
        <p class="text-uppercase mb-5 g-color-white">State-Wide Events</p>
      </li>
      <li class="col" data-animation="fadeIn" data-animation-delay="700" data-animation-duration="900">
        <img class="g-width-100 u-block-hover__main" src="img/ataz/eye_calibration.jpg" alt="Image Description">
        <p class="text-uppercase mb-5 g-color-white">A.T. Gallery</p>
      </li>
    </ul>
    <!-- end of image list -->
    <!-- Promo Block Content -->
  </section>
  <!-- End Promo Block -->
  
  <section class="container g-pt-100 g-pb-50">
    <div class="row justify-content-center g-mb-60">
      <div class="col-lg-7">
        <!-- Heading -->
        <div class="text-center">
          <h2 class="h3 g-color-black text-uppercase mb-2">We are A.T. Arizona</h2>
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-5">Assistive Technology (A.T.) includes thousands of products that enable
            persons with disabilities to be more productive
            and independent in daily activities. Assistive technology products range from simple to
            complex and can be
            used at home, work, school and in the community to reduce barriers and increase personal
            abilities.
          </p>
        </div>
        <!-- End Heading -->
      </div>
    </div>
  </section>
  <!-- End Promo Block -->
  
  <!-- Icon Blocks -->
  <section class="g-bg-gray-light-v5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 g-py-100 g-px-40--sm">
          <!-- Icon Blocks -->
          <div class="text-center">
                    <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                        <i class="icon-education-087 u-line-icon-pro"></i>
                    </span>
            <h3 class="h5 g-color-black text-uppercase mb-3">Resources and Materials</h3>
            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which
              allows us to keep our clients relevant and ready
              to adapt.</p>
            <a class="waves-effect waves-light btn"
               href="/resources">View Resources</a>
          </div>
          <!-- End Icon Blocks -->
        </div>
        
        <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
          <!-- Icon Blocks -->
          <div class="text-center">
                    <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                        <i class="icon-education-008 u-line-icon-pro"></i>
                    </span>
            <h3 class="h5 g-color-black text-uppercase mb-3">Trainings and Events</h3>
            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which
              allows us to keep our clients relevant and ready
              to adapt.</p>
            <a class="waves-effect waves-light btn"
               href="/trainings">View schedule</a>
          </div>
          <!-- End Icon Blocks -->
        </div>
        
        <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
          <!-- Icon Blocks -->
          <div class="text-center">
                    <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                        <i class="icon-communication-011 u-line-icon-pro"></i>
                    </span>
            <h3 class="h5 g-color-black text-uppercase mb-3">AZ WIOA Locations </h3>
            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which
              allows us to keep our clients relevant and ready
              to adapt.</p>
            <a class="waves-effect waves-light btn"
               href="/wioa-locations">Find a location</a>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Icon Blocks -->
  
  <div class="dzsparallaxer auto-init height-is-based-on-content g-bg-gray-gradient-opacity-v1
        " data-options='{direction: "reverse ", animation_duration: "200 "}'>
    <div class="dzsparallaxer--target " style="width: 100%; height: 130%; ">
    </div>
    <div class="container g-pt-100 ">
      <!-- Masonry -->
      <div class="masonry-grid row mb-5 ">
        <div class="masonry-grid-sizer col-sm-1 "></div>
        <div class="masonry-grid-item col-lg-6 g-mb-100 ">
          <div class="g-pr-40--lg ">
            <!-- Heading -->
            <span class="d-block g-color-primary g-font-size-17 text-uppercase mb-4 ">Counselor Training
                        Day</span>
            <h2 class="h2 g-color-black g-font-weight-600 mb-4 ">A full day of hands-on A.T. training,
              <br> insight, and tips from Arizona's top A.T. trainers</h2>
            <p class="lead mb-5 ">Using Assistive Technology and Disability Awareness Training to
              overcome disability barriers.</p>
            <a class="btn waves-effect waves-light"
               href="/contact"><i class="material-icons right">send</i>Sign Up!</a>
            <!-- End Heading -->
          </div>
        </div>
        <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30 ">
          <div data-parallaxanimation='[{property: "transform ", value:" translate3d(0,px,0) ", initial:"-25 ", mid:"0
        ", final:"25 "}]'>
            <img class="img-fluid w-100 " src="/img/ataz/lgshow.jpg " alt="Image Description ">
          </div>
        </div>
        <div class="masonry-grid-item col-sm-6 col-lg-3 mt-5 g-mb-30 ">
          <div data-parallaxanimation='[{property: "transform ", value:" translate3d(0,px,0) ", initial:"25 ", mid:"0
        ", final:"-25 "}]'>
            <img class="img-fluid w-100 " src="/img/ataz/hands_free.jpg " alt="Image Description ">
          </div>
        </div>
        <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30 ">
          <div data-parallaxanimation='[{property: "transform ", value:" translate3d(0,px,0) ", initial:"-45 ", mid:"0
        ", final:"45 "}]'>
            <img class="img-fluid w-100 " src="/img/ataz/CCTV_mirror.jpg" alt=" Image Description ">
          </div>
        </div>
      </div>
      <!-- End Masonry -->
      
      <!-- Counters -->
      <div class="row text-center g-mb-50 ">
        <div class="col-lg-3 col-sm-6 g-mb-50 ">
          <div class="js-counter g-color-primary g-font-weight-600 g-font-size-60 ">12</div>
          <h4 class="h4 g-color-gray-dark-v2 ">Days to Event</h4>
        </div>
        
        <div class="col-lg-3 col-sm-6 g-mb-50 ">
          <div class="js-counter g-color-primary g-font-weight-600 g-font-size-60 ">33</div>
          <h4 class="h4 g-color-gray-dark-v2 ">Attendees</h4>
        </div>
        
        <div class="col-lg-3 col-sm-6 g-mb-50 ">
          <div class="js-counter g-color-primary g-font-weight-600 g-font-size-60 ">8</div>
          <h4 class="h4 g-color-gray-dark-v2 ">Topics</h4>
        </div>
        
        <div class="col-lg-3 col-sm-6 g-mb-50 ">
          <div class="js-counter g-color-primary g-font-weight-600 g-font-size-60 ">77</div>
          <h4 class="h4 g-color-gray-dark-v2 ">Devices</h4>
        </div>
      </div>
      <!-- End Counters -->
    </div>
  </div>
  
  <!-- Team Blocks -->
  <section class="container g-pt-100 g-pb-70">
    <div class="row justify-content-center g-mb-60">
      <div class="col-lg-7">
        <!-- Heading -->
        <div class="text-center">
          <h2 class="h3 g-color-black text-uppercase mb-2">Meet the A.T. Arizona Team</h2>
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
        </div>
        <!-- End Heading -->
      </div>
    </div>
    
    <div class="row">
      @foreach( $staff as $s)
        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100 staff-img img-fluid" src="/img/ataz/staff/{{$s->photo}}"
                   alt="Image of {{$s->first . ' ' . $s->last}} ">
              <!-- End Figure Image -->
            </figure>
            <!-- End Figure -->
            
            <!-- Figure Info -->
            <em
              class="d-block g-font-style-normal g-font-size-16 text-uppercase g-color-primary g-mb-5">{{$s->title}}</em>
            <h4 class="h5 g-color-black g-mb-5">{{$s->first . '' . $s->last}}</h4>
            <p class="g-font-size-15">{{$s->credentials}}</p>
            <!-- End Figure Info-->
          </div>
        </div>
      @endforeach
    </div>
  </section>
  
  <!-- End Team Blocks -->
@endsection
