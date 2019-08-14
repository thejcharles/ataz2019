@extends('home.layout.base')
@section('title') {{'resources'}} @endsection

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
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <!-- Nav tabs -->
        <ul class="nav text-center nav-justified u-nav-v1-1 g-mb-20" role="tablist"
            data-target="nav-1-1-accordion-default-hor-left-big-icons" data-tabs-mobile-type="accordion"
            data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#nav-1-1-accordion-default-hor-left-big-icons--1"
               role="tab">
              <i class="fa fa-universal-access d-block g-font-size-25"></i>
              General Awareness
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#nav-1-1-accordion-default-hor-left-big-icons--2" role="tab">
              <i class="fa fa-blind d-block g-font-size-25 u-tab-line-icon-pro"></i>
              Vision Loss
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#nav-1-1-accordion-default-hor-left-big-icons--3" role="tab">
              <i class="fa fa-deaf d-block g-font-size-25"></i>
              Hearling Loss
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#nav-1-1-accordion-default-hor-left-big-icons--4" role="tab">
              <i class="fa fa-wheelchair-alt d-block g-font-size-25 u-tab-line-icon-pro"></i>
              Physical Access
            </a>
          </li>
        </ul>
        <!-- End Nav tabs -->
      </div>
    </div>
    <!-- Tab panes -->
    <div id="nav-1-1-accordion-default-hor-left-big-icons" class="tab-content">
      <div class="tab-pane fade show active" id="nav-1-1-accordion-default-hor-left-big-icons--1" role="tabpanel">
        <!-- Blog Minimal Blocks -->
        
        <!-- Blog Minimal Blocks -->
        @foreach($resources as $resource)
          @if($resource->category === 'general')
            <article class="g-mb-100">
              <div class="g-mb-30">
                
                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover"
                     href="#!">{{$resource->name}}</a>
                </h2>
                <a class="g-font-size-13" href="#!">Read more...</a>
              </div>
              <ul
                class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                      <span class="d-inline-block g-color-gray-dark-v4">
                          <img class="g-g-width-20 g-height-20 rounded-circle mr-2"
                               src="/img-temp/100x100/img7.jpg"
                               alt="Image Description">
                          updated:
                      </span>
                </li>
              
              </ul>
            </article>
          @endif
        @endforeach
      
      </div> <!-- End Blog Minimal Blocks -->
      
      <div class="tab-pane fade" id="nav-1-1-accordion-default-hor-left-big-icons--2" role="tabpanel">
        @foreach($resources as $resource)
          @if($resource->category === 'bvi')
            
            <article class="g-mb-100">
              <div class="g-mb-30">
                
                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover"
                     href="#!">{{$resource->name}}</a>
                </h2>
                <a class="g-font-size-13" href="#!">Read more...</a>
              </div>
              <ul
                class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                                                    <span class="d-inline-block g-color-gray-dark-v4">
                                                        <img class="g-g-width-20 g-height-20 rounded-circle mr-2"
                                                             src="../../assets/img-temp/100x100/img7.jpg"
                                                             alt="Image Description">
                                                        updated:
                                                    </span>
                </li>
              
              </ul>
            </article>
          @endif
        @endforeach
      </div>
      <div class="tab-pane fade" id="nav-1-1-accordion-default-hor-left-big-icons--3" role="tabpanel">
        @foreach($resources as $resource)
          @if($resource->category === 'dhh')
            
            <article class="g-mb-100">
              <div class="g-mb-30">
                
                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover"
                     href="#!">{{$resource->name}}</a>
                </h2>
                <a class="g-font-size-13" href="#!">Read more...</a>
              </div>
              <ul
                class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                                                    <span class="d-inline-block g-color-gray-dark-v4">
{{--                                                        <img class="g-g-width-20 g-height-20 rounded-circle mr-2"--}}
                                                      {{--                                                             src="../../assets/img-temp/100x100/img7.jpg"--}}
                                                      {{--                                                             alt="Image Description">--}}
                                                    </span>
                </li>
              
              </ul>
            </article>
          @endif
        @endforeach
      </div>
      <div class="tab-pane fade" id="nav-1-1-accordion-default-hor-left-big-icons--4" role="tabpanel">
        @foreach($resources as $resource)
          @if($resource->category === 'ergo')
            <article class="g-mb-100">
              <div class="g-mb-30">
                
                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover"
                     href="#!">{{$resource->name}}</a>
                </h2>
                <a class="g-font-size-13" href="#!">Read more...</a>
              </div>
              <ul
                class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                          <span class="d-inline-block g-color-gray-dark-v4">
                              <img class="g-g-width-20 g-height-20 rounded-circle mr-2"
                                   src="/img-temp/100x100/img7.jpg"
                                   alt="Image Description">
                              updated:
                          </span>
                </li>
              
              </ul>
            </article>
          @endif
        @endforeach
      </div>
      
      <!-- End Tab panes -->
    </div>
  </div>
@endsection
