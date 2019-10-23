@extends('home.layout.base')
@section('title', 'Training Schedule')

@section('content')
  
  
  <!-- Blog Minimal Blocks -->
  <div class="container g-pt-100 g-pb-20 bg-secondary">
    <div class="row justify-content-between">
      <div class="col-lg-9 order-lg-2 g-mb-80 bg-white">
        <div class="g-pl-20--lg">
          <!-- Blog Minimal Blocks -->
          <h1>Event Schedule</h1>
          <hr class="g-brd-teal g-brd-5 g-my-50">
          @foreach($trainings as $training)
            <article class="g-mb-100">
              <div class="g-mb-30">
                        <span class="d-block g-color-primary g-font-weight-700 g-font-size-18 text-uppercase mb-2">
                          <i class="material-icons">date_range</i>
                          {{ date('l F jS, Y', strtotime($training->dates))}}</span>
                <li class="list-inline-item g-color-gray-dark-v4">
                  <i class="material-icons">access_time</i>
                  {{ date('g:i A', strtotime($training->start))}}
                  -
                  {{date('g:i A', strtotime($training->end))}}
  
                </li>
                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover"
                     href="#!">{{$training->event}}</a>
                </h2>
                <h5>Location: {{ $training->location }} </h5>
                <p>{{$training->description }}
                </p>
                
                <!-- <a class="g-font-size-13" href="#!">Read more...</a> -->
              </div>
              
              <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                            <span class="d-inline-block g-color-gray-dark-v4">
                               Call or email {{$training->contact}} for details
                            </span>
                </li>
                <li class="list-inline-item g-color-gray-dark-v4">
                  <a
                    class="d-inline-block teal base waves-effect waves-light btn g-color-white"
                    href='tel:{{$training->contact_phone}}'>
                  <i class="g-font-size-default mr-1 material-icons">local_phone</i>
                  
                  {{$training->contact_phone}}
                    </a>
                  ||
                    <a
                      class="d-inline-block teal base waves-effect waves-light btn g-color-white"
                      href='mailto:{{$training->contact_email}}'>
                      <i class="g-font-size-default mr-1 material-icons">email</i>
                  {{$training->contact_email}}
                  </a>
                
                </li>
              </ul>
            </article>
        @endforeach
        <!-- End Blog Minimal Blocks -->
          
          
          <!-- Pagination -->
          <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
            <ul class="list-inline">
              <li class="list-inline-item float-left g-hidden-xs-down">
                <a
                  class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                  href="#!" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-left g-mr-5"></i> Previous
                                </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                   href="#!">1</a>
              </li>
              <li class="list-inline-item">
                <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">2</a>
              </li>
              <li class="list-inline-item float-right g-hidden-xs-down">
                <a
                  class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                  href="#!" aria-label="Next">
                                <span aria-hidden="true">
                                    Next <i class="fa fa-angle-right g-ml-5"></i>
                                </span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
      </div>
      
      <div class="col-lg-3 order-lg-1 g-brd-right--lg g-brd-gray-light-v4 g-mb-80 bg-white">
        <div class="g-pr-20--lg">
          
          <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-50"
               data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
            <!-- Publications -->
            <div class="g-mb-50">
              <h3 class="h5 g-color-black g-font-weight-600 mb-4">Distance Learning</h3>
              <ul class="list-unstyled g-font-size-13 mb-0">
                <li>
                  <article class="media g-mb-35">
                    <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                         src="../../assets/img/ataz/lgshow.jpg" alt="Image Description">
                    <div class="media-body">
                      <h4 class="h6 g-color-black g-font-weight-600">Vision</h4>
                      <p class="g-color-gray-dark-v4">We will pu a brief description here.</p>
                      <a class="teal base waves-effect waves-light btn g-color-white" href="/contact">Get
                        started</a>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
            <!-- End Publications -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Minimal Blocks -->





@endsection()
