@extends('home.layout.base')
@section('title', 'Board of Directors')

@section('content')
  
  <!-- Promo Banner -->
  <div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80"
       style="background-image: url(img/acbvi/eye_sim_tint.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <h1 class="g-color-primary g-font-size-60--lg mb-0">ACBVI Leaders</h1>
    </div>
  </div>
  <!-- End Promo Banner -->
  
  
  
  <!-- board members -->
  <div class="container g-pt-100 g-pb-40">
    <!-- board members - Heading -->
    <div class="row justify-content-end align-items-center g-mb-40--lg">
      <div class="col-sm-6 g-mb-30 g-mb-0--lg">
        <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">ACBVI Board of Directors</span>
        <h2 class="mb-4">Our Leaders</h2>
      </div>
    </div>
    <!-- End board members - Heading -->
    
    <!-- board members - Content -->
    <div class="row">
      @foreach($leaders as $l)
        <div class="col-lg-6 g-mb-60">
          <!-- Accordion -->
          <div id="accordion-12-1" class="u-accordion u-accordion-color-primary" role="tablist"
               aria-multiselectable="true">
            <!-- Card -->
            <div class="card g-brd-none rounded-0 leadership-cards">
              <div class="row">
                <div class="col-md-5">
                  <!-- board members Info -->
                  <div class="g-bg-secondary text-center g-pa-20">
                    <div
                      class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                      <img class="img-fluid rounded-circle" src="/img/acbvi/board/{{$l->photo}}"
                           alt="Image of {{$l->name}}">
                    </div>
                    <h3 class="h4 mb-3">{{$l->name}}</h3>
                    <span class="d-block g-font-size-16 g-color-text">{{$l->title}}</span>
                  </div>
                  <!-- End board members Info -->
                </div>
                
                <div class="col-md-7">
                  <!-- board members Content -->
                  <p class="">
                    {{$l->bio}}
                  </p>
                  <!-- End board members Content -->
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Accordion -->
        </div>
      @endforeach
    </div>
    <!-- End board members -->
  </div>
  <!-- Promo Banner -->
  <div class="g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-bg-cover g-bg-white-gradient-opacity-v5--after"
       style="background-image: url(/img/acbvi/counseling.JPG);">
    <div class="container g-pos-rel g-z-index-1">
      <div class="row justify-content-between">
        <div class="col-md-5 g-py-100">
          <div class="mb-5">
            <span
              class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">Be Brave</span>
            <h2 class="mb-4">Volunteer Today</h2>
            <p class="g-font-size-16 ">
              Have you or someone you know had their life changed by sudden vision loss or impairment? Are you looking
              for an opportunity to give of your time or talents? ACBVI welcomes you. We have a variety of opportunities
              to volunteer at the center in the lunch program, with office work, in our social recreation programs, or
              through donations. As a nonprofit organization, we are committed to offering s services to our clients
              free or with minimal cost but we need your help.
            </p>
          </div>
          <span class="d-inline-block g-font-weight-600 text-uppercase mr-4">Call Us</span>
          <a
            class="btn u-btn-outline-primary g-brd-2 g-color-main g-color-white--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13"
            href="tel:1-602-273-7411">
            (602) 273-7411
            <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  </main>
  <!-- End Promo Banner -->

@endsection
