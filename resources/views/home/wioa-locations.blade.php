@extends('home.layout.base')
@section('title', 'Wioa Locations')

@section('content')

  <style>
    .location-image {
      max-height: 10rem;
      width: 100%
    }
    .location-title {
      min-height: 10rem;
      width: 100%
    }
  </style>
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
      <div class="row">


        <!-- Search Results -->
        <div class="col-lg-9">
          <!-- Search Info -->
          <div class="d-md-flex justify-content-between g-mb-30">
            <h3 class="h6 text-uppercase g-mb-10 g-mb--lg"><span
                class="g-color-gray-dark-v1">{{count($locations)}}</span>
              results</h3>
            <ul class="list-inline">
              <li class="list-inline-item g-mr-30">
                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                  <i class="icon-grid g-pos-rel g-top-1 g-mr-5"></i> List View
                </a>
              </li>
              <li class="list-inline-item">
                <a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover" href="#!">
                  <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Grid View
                </a>
              </li>
            </ul>
          </div>
          <!-- End Search Info -->
          <div class="row" id="locations">
          @foreach($locations as $location)
            <!-- Location Card -->
              <div class="col-lg-4 g-mb-50 g-mb-0--lg">
                <!-- location Image -->
                <div class="u-block-hover g-pos-rel g-brd-around g-brd-main rounded-0">
                  <figure>
                    <img style="height:18rem;" class="img-fluid w-100 u-block-hover__main--zoom-v1"
                         src="/img/ataz/onestops/{{$location->photo}}" alt="Image of {{$location->name}}">
                  </figure>
                  <ul class="list-inline d-flex justify-content-between g-mb-0">
                    <!-- figure Caption -->
                    <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                      <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                        <!-- Figure Social Icons -->
                        <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                          <li class="list-inline-item align-middle g-mx-7">
                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                              <i class="icon-note u-line-icon-pro"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-middle g-mx-7">
                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                              <i class="icon-notebook u-line-icon-pro"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-middle g-mx-7">
                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                              <i class="icon-settings u-line-icon-pro"></i>
                            </a>
                          </li>
                        </ul>
                        <!-- End Figure Social Icons -->
                      </div>
                    </figcaption>
                  </ul>
                    <!-- End Figure Caption -->

                    <!-- location Info -->
                    <span class="g-pos-abs g-top-20 g-left-20 location-title">
                      <a class="btn btn-sm u-btn-primary rounded-0" href="/wioa-center/{{$location->id}}">{{$location->name}}</a>
                      <small class="d-block g-bg-black g-color-white g-pa-5">Project Manager</small>
                    </span>
                    <!-- End location Info -->
                </div>
                <!-- location Image -->
              </div>
              <!-- End location card -->
              {{--                    <div class="col-lg-4 g-mb-30">--}}

              {{--                        <!-- Search Result -->--}}
              {{--                        <article class="g-pa-25 u-shadow-v11 rounded" style="height:18rem;">--}}
              {{--                            <div style="height:40px;">--}}

              {{--                                <a class=" g-color-gray-dark-v1 g-color-primary--hover"--}}
              {{--                                    href="/wioa-center/{{$location->id}}">{{$location->name}}</a>--}}
              {{--                            </div>--}}

              {{--                            <!-- Search Info -->--}}
              {{--                            <ul class="list-inline d-flex justify-content-between ">--}}
              {{--                                <li class="list-inline-item">--}}

              {{--                                </li>--}}
              {{--                            </ul>--}}

              {{--                            <!-- End Search Info -->--}}

              {{--                            <img class="img-fluid g-brd-around g-brd-gray-light-v2 location-image"--}}
              {{--                                src="/img/ataz/onestops/{{$location->photo}}" alt="Image Description">--}}


              {{--                            <!-- address -->--}}
              {{--                            <ul class="list-inline d-flex justify-content-between g-mb-20">--}}
              {{--                                <li class="list-inline-item">--}}
              {{--                                    <i class="icon-office g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>--}}
              {{--                                    {{$location->address}} - {{$location->city}}--}}
              {{--                                </li>--}}
              {{--                            </ul>--}}
              {{--                            <!-- end address -->--}}
              {{--                        </article>--}}
              {{--                        <!-- End Search Result -->--}}
              {{--                    </div>--}}
            @endforeach


          </div>

          <hr class="g-brd-gray-light-v4 g-mt-10 g-mb-40">

          <!-- Pagination -->
          <nav class="g-mb-50" aria-label="Page Navigation">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#!"
                   aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="list-inline-item g-hidden-sm-down">
                <a class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11"
                   href="#!">1</a>
              </li>
              <li class="list-inline-item g-hidden-sm-down">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">2</a>
              </li>
              <li class="list-inline-item g-hidden-sm-down">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">3</a>
              </li>
              <li class="list-inline-item g-hidden-sm-down">
                <span class="g-pa-4-11">...</span>
              </li>
              <li class="list-inline-item g-hidden-sm-down">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">80</a>
              </li>
              <li class="list-inline-item">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#!"
                   aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
              <li class="list-inline-item float-right">
                <span class="u-pagination-v1__item-info g-pa-4-11">Page 1 of 10</span>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
        <!-- End Search Results -->
      </div>
    </div>
  </section>
@endsection


