@extends('home.layout.base')
@section('title') {{$location->name}} @endsection

@section('content')
  
  <!-- Breadcrumb -->
  <section class="g-my-30">
    <div class="container">
      <ul class="u-list-inline">
        <li class="list-inline-item g-mr-7">
          <a class="u-link-v5 g-color-main g-color-primary--hover" href="/">Home</a>
          <i class="fa fa-angle-right g-ml-7"></i>
        </li>
        <li class="list-inline-item g-mr-7">
          <a class="u-link-v5 g-color-main g-color-primary--hover" href="/wioa-locations">All
            Locations</a>
          <i class="fa fa-angle-right g-ml-7"></i>
        </li>
        <li class="list-inline-item g-color-primary">
          <span>{{$location->name}}</span>
        </li>
      </ul>
    </div>
  </section>
  <!-- End Breadcrumb -->
  
  <section class="g-mb-100">
    <div class="container">
      <div class="row">
        <!-- Profile Sidebar -->
        
        
        <!-- Profle Content -->
        <div class="col-lg-9">
          
          <div class="shortcode-html">
            <!-- Article -->
            <article class="row mx-0 g-brd-bottom--md g-brd-bottom-2 g-brd-primary">
              <div class="col-md-6 g-bg-size-cover g-min-height-250"
                   data-bg-img-src="/img/ataz/onestops/{{$location->photo}}"></div>
              
              <div class="col-md-6 g-bg-secondary g-pa-40">
                <!-- Article Header -->
                
                <!-- End Article Header -->
                
                <!-- Article Title -->
                <h3 class="h3 g-mb-20 g-color-main">
                  {{$location->name}}
                </h3>
                <h4 class="g-font-size-14 text-uppercase g-mb-20">
                  <i class="align-middle g-font-size-18 g-mr-7 icon-hotel-restaurant-235"></i>
                  {{$location->address.', '. $location->city. ', '. $location->state . ', '. $location->zip }}
                </h4>
                <!-- End Article Title -->
                
                <p class="g-mb-25">
                
                </p>
                
                
                <!-- Article Footer -->
                <footer class="d-flex justify-content-between">
                  
                  <div class="align-self-center">
                    <a class="btn btn-md u-btn-primary g-font-weight-600 g-font-size-default text-uppercase" href="#">Get
                      Directions</a>
                  </div>
                </footer>
                <!-- End Article Footer -->
              </div>
            </article>
            <!-- End Article -->
          </div>
          
          <!-- Nav tabs -->
          <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20"
              role="tablist" data-target="nav-1-1-default-hor-left-underline"
              data-tabs-mobile-type="slide-up-down"
              data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
            <li class="nav-item">
              <a class="nav-link g-py-10 active" data-toggle="tab"
                 href="#nav-1-1-default-hor-left-underline--1" role="tab">View Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2"
                 role="tab">View Accessibility Accomodations</a>
            </li>
          
          </ul>
          <!-- End Nav tabs -->
          
          <!-- Tab panes -->
          <div id="nav-1-1-default-hor-left-underline" class="tab-content">
            <!-- Edit Profile -->
            <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel"
                 data-parent="#nav-1-1-default-hor-left-underline">
              <h2 class="h4 g-font-weight-300">{{$location->name}}</h2>
              
              <ul class="list-unstyled g-mb-30">
                <!-- Name -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">
                      {{$location->title}}
                    </strong>
                    <span class="align-top">
                                            {{$location->contact}}
                                        </span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Name -->
                
                <!-- Primary Email Address -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">{{$location->title}}
                      email address</strong>
                    <span class="align-top"></span>{{$location->contact_email}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Primary Email Address -->
                
                <!-- Linked Account -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">{{$location->title}}
                      Phone</strong>
                    <span class="align-top">{{$location->phone}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Linked Account -->
                <!-- Name -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                      Contact</strong>
                    <span class="align-top">{{$location->acc_contact}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Name -->
                
                <!-- Primary Email Address -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                      Contact email address</strong>
                    <span class="align-top">{{$location->acc_email}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Primary Email Address -->
                
                <!-- Linked Account -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                      Contact Phone</strong>
                    <span class="align-top">{{$location->acc_phone}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Linked Account -->
                
                <!-- Name -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                      Counselor</strong>
                    <span class="align-top">{{$location->counselor}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Name -->
                
                <!-- Primary Email Address -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                      Counselor email address</strong>
                    <span class="align-top">{{$location->counselor_email}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Primary Email Address -->
                
                <!-- Linked Account -->
                <li
                  class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong
                      class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                      Counselor Phone</strong>
                    <span class="align-top">{{$location->counselor_phone}}</span>
                  </div>
                  <span>
                                        <i
                                          class="fa fa-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                </li>
                <!-- End Linked Account -->
              
              </ul>
              
              <div class="text-sm-right">
                <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
              </div>
            </div>
            
            
            <!-- End Edit Profile -->
            
            <!-- Security Settings -->
            <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel"
                 data-parent="#nav-1-1-default-hor-left-underline">
              <h2 class="h4 g-font-weight-300">View the Assistive Technology available at this
                location</h2>
              <p class="g-mb-25">Select an area below.</p>
              
              
              <div class="shortcode-html">
                <div id="accordion-04" class="u-accordion" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card rounded-0 g-mb-5">
                    <div id="accordion-04-heading-01" class="u-accordion__header" role="tab"
                         style="background-color:yellow;">
                      <h5 class="mb-0 g-font-weight-300">
                        <a class="d-flex u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                           href="#accordion-04-body-01" data-toggle="collapse"
                           data-parent="#accordion-04" aria-expanded="false"
                           aria-controls="accordion-04-body-01">
                          <i class="et-fa fa-map g-font-size-default g-mr-10"></i>
                          VISION
                        </a>
                      </h5>
                    </div>
                    
                    <div id="accordion-04-body-01" class="collapse" role="tabpanel"
                         aria-labelledby="accordion-04-heading-01" data-parent="#accordion-04">
                      <div
                        class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                      </div>
                      <div class="table-responsive g-mb-40">
                        <table class="table u-table--v3--bordered g-color-black">
                          @if(count($at_category['bvi']))
                            <thead>
                            <tr class="success">
                              <th>AT Category</th>
                              <th>Product Make/Model/Ver.</th>
                              <th>Location</th>
                            </tr>
                            </thead>
                            
                            @foreach($at_category['bvi'] as $at)
                              
                              <tbody>
                              
                              <tr>
                                <td>{{html_entity_decode($at->product_name)}}
                                </td>
                                <td>{{html_entity_decode($at->make)}}
                                </td>
                                <td>{{html_entity_decode($at->location) }}
                                </td>
                              </tr>
                              @endforeach
                              @else
                                <h5>
                                  Sorry. There are no items listed at this time. Please call {{$location->phone}}
                                  for more information on what devices are available.
                                </h5>
                              @endif
                              
                              
                              </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- End Card -->
                
                <!-- Card -->
                <div class="card rounded-0 g-mb-5">
                  <div id="accordion-04-heading-02" class="u-accordion__header" role="tab"
                       style="background-color:green;">
                    <h5 class="mb-0 g-font-weight-300">
                      <a class="d-flex collapsed u-link-v5 g-color-white g-color-white--hover g-font-size-16"
                         href="#accordion-04-body-02" data-toggle="collapse"
                         data-parent="#accordion-04" aria-expanded="false"
                         aria-controls="accordion-04-body-02">
                        <i class="et-fa fa-camera g-font-size-default g-mr-10"></i>
                        HEARING
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-04-body-02" class="collapse" role="tabpanel"
                       aria-labelledby="accordion-04-heading-02" data-parent="#accordion-04">
                    <div
                      class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <div class="table-responsive g-mb-40">
                        <table class="table u-table--v3--bordered g-color-black">
                          @if(count($at_category['dhh']))
                            <thead>
                            <tr class="success">
                              <th>AT Category</th>
                              <th>Product Make/Model/Ver.</th>
                              <th>Location</th>
                            </tr>
                            </thead>
                            
                            @foreach($at_category['dhh'] as $at)
                              
                              <tbody>
                              
                              <tr>
                                <td>{{html_entity_decode($at->product_name)}}
                                </td>
                                <td>{{html_entity_decode($at->make)}}
                                </td>
                                <td>{{html_entity_decode($at->location) }}
                                </td>
                              </tr>
                              @endforeach
                              @else
                                <h5>
                                  Sorry. There are no items listed at this time. Please call {{$location->phone}}
                                  for more information on what devices are available.
                                </h5>
                              @endif
                              
                              </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                </div>
                <!-- End Card -->
                
                <!-- Card -->
                <div class="card rounded-0 g-mb-5">
                  <div id="accordion-04-heading-03" class="u-accordion__header" role="tab"
                       style="background-color:pink;">
                    <h5 class="mb-0 g-font-weight-300">
                      <a class="d-flex collapsed u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                         href="#accordion-04-body-03" data-toggle="collapse"
                         data-parent="#accordion-04" aria-expanded="false"
                         aria-controls="accordion-04-body-03">
                        <i class="et-fa fa-bargraph g-font-size-default g-mr-10"></i>
                        PHYSICAL
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-04-body-03" class="collapse" role="tabpanel"
                       aria-labelledby="accordion-04-heading-03" data-parent="#accordion-04">
                    <div
                      class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <div class="table-responsive g-mb-40">
                        <table class="table u-table--v3--bordered g-color-black">
                          @if(count($at_category['ergo']))
                            <thead>
                            <tr class="success">
                              <th>AT Category</th>
                              <th>Product Make/Model/Ver.</th>
                              <th>Location</th>
                            </tr>
                            </thead>
                            
                            @foreach($at_category['ergo'] as $at)
                              
                              <tbody>
                              
                              <tr>
                                <td>{{html_entity_decode($at->product_name)}}
                                </td>
                                <td>{{html_entity_decode($at->make)}}
                                </td>
                                <td>{{html_entity_decode($at->location) }}
                                </td>
                              </tr>
                              @endforeach
                              @else
                                <h5>
                                  Sorry. There are no items listed at this time. Please call {{$location->phone}}
                                  for more information on what devices are available.
                                </h5>
                              @endif
                              
                              </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                
                <!-- Card -->
                <div class="card rounded-0 g-mb-5">
                  <div id="accordion-04-heading-04" class="u-accordion__header" role="tab"
                       style="background-color:skyblue;">
                    <h5 class="mb-0 g-font-weight-300">
                      <a class="d-flex collapsed u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                         href="#accordion-04-body-04" data-toggle="collapse"
                         data-parent="#accordion-04" aria-expanded="false"
                         aria-controls="accordion-04-body-03">
                        <i class="et-fa fa-bargraph g-font-size-default g-mr-10"></i>
                        LEARNING
                      </a>
                    </h5>
                  </div>
                  <div id="accordion-04-body-04" class="collapse" role="tabpanel"
                       aria-labelledby="accordion-04-heading-04" data-parent="#accordion-04">
                    <div
                      class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <div class="table-responsive g-mb-40">
                        <table class="table u-table--v3--bordered g-color-black">
                          @if(count($at_category['ld']))
                            <thead>
                            <tr class="success">
                              <th>AT Category</th>
                              <th>Product Make/Model/Ver.</th>
                              <th>Location</th>
                            </tr>
                            </thead>
                            
                            @foreach($at_category['ld'] as $at)
                              
                              <tbody>
                              
                              <tr>
                                <td>{{html_entity_decode($at->product_name)}}
                                </td>
                                <td>{{html_entity_decode($at->make)}}
                                </td>
                                <td>{{html_entity_decode($at->location) }}
                                </td>
                              </tr>
                              @endforeach
                              @else
                                <h5>
                                  Sorry. There are no items listed at this time. Please call {{$location->phone}}
                                  for more information on what devices are available.
                                </h5>
                              @endif
                              </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
            </div>
            <!-- End Security Settings -->
            
            <!-- Notification Settings -->
            <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4" role="tabpanel"
                 data-parent="#nav-1-1-default-hor-left-underline">
              <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
              <p class="g-mb-25">Below are the notifications you may manage.</p>
              
              <form>
                <!-- Email Notification -->
                <div class="form-group">
                  <label class="d-flex align-items-center justify-content-between">
                    <span>Email notification</span>
                    <div class="u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                             name="emailNotification" type="checkbox" checked>
                      <div class="u-check-fa fa-radio-v7">
                        <i class="d-inline-block"></i>
                      </div>
                    </div>
                  </label>
                </div>
                <!-- End Email Notification -->
                
                <hr class="g-brd-gray-light-v4 g-my-20">
                
                <!-- Comments Notification -->
                <!-- <div class="form-group">
<label class="d-flex align-items-center justify-content-between">
  <span>Send me email notification when a user comments on my blog</span>
  <div class="u-check">
    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
    <div class="u-check-fa fa-radio-v7">
      <i class="d-inline-block"></i>
    </div>
  </div>
</label>
</div> -->
                <!-- End Comments Notification -->
                
                
                <!-- Update Notification -->
                <div class="form-group">
                  <label class="d-flex align-items-center justify-content-between">
                    <span>Send me email notification for the latest update</span>
                    <div class="u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                             name="updateNotification" type="checkbox" checked>
                      <div class="u-check-fa fa-radio-v7">
                        <i class="d-inline-block"></i>
                      </div>
                    </div>
                  </label>
                </div>
                <!-- End Update Notification -->
                
                <hr class="g-brd-gray-light-v4 g-my-25">
                
                <!-- Message Notification -->
                <div class="form-group">
                  <label class="d-flex align-items-center justify-content-between">
                                            <span>Send me email notification when Decadent Desires sends me a
                                                message</span>
                    <div class="u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                             name="messageNotification" type="checkbox" checked>
                      <div class="u-check-fa fa-radio-v7">
                        <i class="d-inline-block"></i>
                      </div>
                    </div>
                  </label>
                </div>
                <!-- End Message Notification -->
                
                <hr class="g-brd-gray-light-v4 g-my-25">
                
                <!-- Newsletter Notification -->
                <div class="form-group">
                  <label class="d-flex align-items-center justify-content-between">
                    <span>Receive updates when new entertainers are added</span>
                    <div class="u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                             name="newsletterNotification" type="checkbox">
                      <div class="u-check-fa fa-radio-v7">
                        <i class="d-inline-block"></i>
                      </div>
                    </div>
                  </label>
                </div>
                <!-- End Newsletter Notification -->
                
                <hr class="g-brd-gray-light-v4 g-my-25">
                
                <div class="text-sm-right">
                  <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"
                     href="#!">Cancel</a>
                  <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save
                    Changes</a>
                </div>
              </form>
            </div>
            <!-- End Notification Settings -->
          </div>
          <!-- End Tab panes -->
        </div>
        <!-- End Profle Content -->
      </div>
    </div>
  </section>

@endsection
