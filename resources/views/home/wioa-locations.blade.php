@extends('home.layout.base')
@section('title', 'Wioa Locations')

@section('content')
  <!-- Page Title -->
  <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
           data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_5--after"
         style="height: 140%; background-image: url(/img/ataz/Casa_Grande_Florence_Blvd.jpg);"></div>
    <!-- End Parallax Image -->
    
    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-py-150">
      <span class="d-block g-font-weight-300 g-font-size-25 mb-3">Assistive Technology Arizona</span>
      <h3 class="h1 text-uppercase mb-0">Using Assistive Technology and Disability Awareness Training to
        overcome disability barriers.</h3>
    </div>
    <!-- End Button Group -->
  </section>
  <!-- Page Title -->
  
  <section class="g-pt-50 g-pb-90">
    <div class="container">
      <!-- End Search Info -->
      <div class="row" id="locations">
      @foreach($locations as $location)
        <!-- Location Card -->
          <div class="col-lg-3 col-sm-6 g-mb-30 u-shadow-v1-3">
            <!-- Figure -->
            <figure class="g-color-gray-dark-v2">
              <!-- Figure Image -->
              <img class="w-100 g-mb-30" src="/img/ataz/onestops/{{$location->photo}}"
                   alt="Image of {{$location->name}}">
              <!-- End Figure Image -->
              
              <!-- Figure Info -->
              <em
                class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">{{$location->city}}</em>
              <h4 class="h5 g-color-black-light-v3 g-mb-5">{{$location->name}}</h4>
              <p class="g-font-size-16 g-color-gray-dark-v4">{{$location->address}}</p>
              <p class="g-font-size-16 g-color-gray-dark-v4">{{$location->zip}}</p>
              <!-- End Info -->
              
              <hr class="g-brd-gray-light-v4 g-my-15">
              
              <!-- Contact Info -->
              <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
                <li class="g-mb-5">
                  <i class="fa fa-phone-square g-mr-10"></i>
                  {{$location->phone}}
                </li>
              </ul>
              <!-- End Contact Info -->
            </figure>
            <!-- End Figure -->
          </div>
          <!-- End location card -->
        @endforeach
      </div>
      <hr class="g-brd-gray-light-v4 g-mt-10 g-mb-40">
    </div>
  </section>
@endsection


