@extends('home.layout.base')
@section('title') {{$location->name}} @endsection

@section('content')
  <div class="col-md-3">
    <!-- Nav tabs -->
    <ul class="nav flex-column u-nav-v5-1 g-height-100x--md g-brd-right--md g-brd-gray-light-v2"
        role="tablist" data-target="nav-5-1-default-ver-border-right-default-icons"
        data-tabs-mobile-type="slide-up-down"
        data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab"
           href="#nav-5-1-default-ver-border-right-default-icons--1" role="tab">
          <i class="icon-communication-010 u-tab-line-icon-pro g-mr-3"></i>
          general
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#nav-5-1-default-ver-border-right-default-icons--2"
           role="tab">
          <i class="icon-communication-025 u-tab-line-icon-pro g-mr-3"></i>
          Vision
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#nav-5-1-default-ver-border-right-default-icons--3"
           role="tab">
          <i class="icon-communication-017 u-tab-line-icon-pro g-mr-3"></i>
          Omittantur
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#nav-5-1-default-ver-border-right-default-icons--4"
           role="tab">
          <i class="icon-communication-010 u-tab-line-icon-pro g-mr-3"></i>
          Accommodare
        </a>
      </li>
    </ul>
    <!-- End Nav tabs -->
  </div>

  <div class="col-md-9">
    <div class="container g-pt-100 g-pb-20">
      <div class="row justify-content-between">
        <div class="col-lg-9 order-lg-2 g-mb-80">
          <div class="g-pl-20--lg">
            <!-- Tab panes -->
            <div id="nav-5-1-default-ver-border-right-default-icons"
                 class="tab-content g-pt-20 g-pt-0--md">
              <div class="tab-pane fade show active"
                   id="nav-5-1-default-ver-border-right-default-icons--1" role="tabpanel">
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

              <div class="tab-pane fade" id="nav-5-1-default-ver-border-right-default-icons--2"
                   role="tabpanel">
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
              <div class="tab-pane fade" id="nav-5-1-default-ver-border-right-default-icons--3"
                   role="tabpanel">
                @foreach($resources as $resource)
                  @if($resource->category === 'dhh')

                <article class="g-mb-100">
                  <div class="g-mb-30">

                    <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                      <a class="u-link-v5 g-color-black g-color-primary--hover"
                         href="#!"></a>
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
              <div class="tab-pane fade" id="nav-5-1-default-ver-border-right-default-icons--4"
                   role="tabpanel">
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
            </div>
            <!-- End Tab panes -->
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
