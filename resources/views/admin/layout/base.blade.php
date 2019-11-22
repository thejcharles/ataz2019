<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Assistive Technology Arizona | @yield('title')</title>
  
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <link rel="shortcut icon" href="/img/ataz/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/vendor/jquery-ui/themes/base/jquery-ui.min.css">
  
  <!-- CSS Unify -->
  
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/materialize.css">
  <link rel="stylesheet" href="/css/styles.css">
  
  <link rel="stylesheet" href="/css/icon-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/css/icon-line-pro/style.css">
  <!-- admin styles -->
  
  <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="/vendor/icon-hs/style.css">
  
  <link rel="stylesheet" href="/vendor/hs-admin-icons/hs-admin-icons.css">
  
  <link rel="stylesheet" href="/vendor/animate.css">
  <link rel="stylesheet" href="/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  
  <link rel="stylesheet" href="/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap-select/css/bootstrap-select.min.css">
  
  <link rel="stylesheet" href="/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="/vendor/fancybox/jquery.fancybox.min.css">
  
  <link rel="stylesheet" href="/vendor/hamburgers/hamburgers.min.css">
  
  <!-- CSS Unify -->
  <link rel="stylesheet" href="/assets/css/unify-admin.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/materialize.css">
  <link rel="stylesheet" href="/css/styles.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  
  <!-- production version, optimized for size and speed -->
  {{--  <script src="https://cdn.jsdelivr.net/npm/vue"></script>--}}
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top">
  <div class="u-header__section u-header__section--admin-dark g-min-height-65"  style="height:80px;">
    <nav class="navbar no-gutters g-pa-0"  style="height:80px;">
      
      
      <!-- Top Search Bar -->
      <form id="searchMenu" class="u-header--search col-sm g-py-12 g-ml-15--sm g-ml-20--md g-mr-10--sm"
            aria-labelledby="searchInvoker" action="#!">
{{--        <div class="input-group g-max-width-450--sm">--}}
{{--          <input class="form-control h-100 form-control-md g-rounded-4 g-pr-40" type="text"--}}
{{--                 placeholder="Enter search keywords">--}}
{{--          <button type="submit"--}}
{{--                  class="btn u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2">--}}
{{--            <i class="hs-admin-search"></i>--}}
{{--          </button>--}}
{{--        </div>--}}
      </form>
      <!-- End Top Search Bar -->
      
      <!-- Messages/Notifications/Top Search Bar/Top User -->
      <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
        <!-- Top Messages -->
        <div class="g-pos-rel g-hidden-sm-down g-mr-5">
          <a id="messagesInvoker"
             class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
             href="#" aria-controls="messagesMenu" aria-haspopup="true" aria-expanded="false"
             data-dropdown-event="click" data-dropdown-target="#messagesMenu"
             data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn"
             data-dropdown-animation-out="fadeOut">
              <span
                class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">7</span>
            <i class="hs-admin-comment-alt g-absolute-centered"></i>
          </a>
          
          <!-- Top Messages List -->
          <div id="messagesMenu" class="g-absolute-centered--x g-width-340 g-max-width-400 g-mt-17 rounded"
               aria-labelledby="messagesInvoker">
            <div class="media u-header-dropdown-bordered-v1 g-pa-20">
              <h4
                class="d-flex align-self-center text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                3 new messages</h4>
              <div class="media-body align-self-center text-right">
                <a class="g-color-secondary" href="#">View All</a>
              </div>
            </div>
            
            <ul class="p-0 mb-0">
              <!-- Top Messages List Item -->
              <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                <div class="d-flex g-mr-15">
                  <img class="g-width-40 g-height-40 rounded-circle" src="/img/ataz/staff/Jason_R.jpg"
                       alt="Image Description">
                </div>
                
                <div class="media-body">
                  <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Verna Swanson</a></h5>
                  <p class="g-mb-10">Not so many years businesses used to grunt at using</p>
                  
                  <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                    <i class="hs-admin-time icon-clock g-mr-5"></i>
                    <small>5 Min ago</small>
                  </em>
                </div>
                <a class="u-link-v2" href="#">Read</a>
              </li>
              <!-- End Top Messages List Item -->
              
              <!-- Top Messages List Item -->
              <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                <div class="d-flex g-mr-15">
                  <img class="g-width-40 g-height-40 rounded-circle" src="/img/ataz/staff/Jason_R.jpg"
                       alt="Image Description">
                </div>
                
                <div class="media-body">
                  <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Eddie Hayes</a></h5>
                  <p class="g-mb-10">But today and influence of is growing right along illustration</p>
                  
                  <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                    <i class="hs-admin-time icon-clock g-mr-5"></i>
                    <small>22 Min ago</small>
                  </em>
                </div>
                <a class="u-link-v2" href="#">Read</a>
              </li>
              <!-- End Top Messages List Item -->
              
              <!-- Top Messages List Item -->
              <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                <div class="d-flex g-mr-15">
                  <img class="g-width-40 g-height-40 rounded-circle" src="/img/ataz/staff/Jason_R.jpg"
                       alt="Image Description">
                </div>
                
                <div class="media-body">
                  <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Herbert Castro</a></h5>
                  <p class="g-mb-10">But today, the use and influence of illustrations is growing right along</p>
                  
                  <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                    <i class="hs-admin-time icon-clock g-mr-5"></i>
                    <small>15 Min ago</small>
                  </em>
                </div>
                <a class="u-link-v2" href="#">Read</a>
              </li>
              <!-- End Top Messages List Item -->
            </ul>
          </div>
          <!-- End Top Messages List -->
        </div>
        <!-- End Top Messages -->
        
        <!-- Top Notifications -->
        <div class="g-pos-rel g-hidden-sm-down">
          <a id="notificationsInvoker"
             class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
             href="#" aria-controls="notificationsMenu" aria-haspopup="true" aria-expanded="false"
             data-dropdown-event="click"
             data-dropdown-target="#notificationsMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
             data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
            <i class="hs-admin-bell g-absolute-centered"></i>
          </a>
          
          <!-- Top Notifications List -->
          <div id="notificationsMenu"
               class="js-custom-scroll g-absolute-centered--x g-width-340 g-max-width-400 g-height-400 g-mt-17 rounded"
               aria-labelledby="notificationsInvoker">
            <div class="media text-uppercase u-header-dropdown-bordered-v1 g-pa-20">
              <h4 class="d-flex align-self-center g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                Notifications</h4>
            </div>
            
            <ul class="p-0 mb-0">
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-bookmark-alt g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">A Pocket PC is a handheld computer features</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
              
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-blackboard g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">The first is a non technical method which requires</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
              
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-calendar g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">Stu Unger is of the biggest superstarsis</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
              
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-pie-chart g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">Sony laptops are among the most well known laptops</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-bookmark-alt g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">A Pocket PC is a handheld computer features</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
              
              <!-- Top Notifications List Item -->
              <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                <div
                  class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                  <i class="hs-admin-blackboard g-absolute-centered"></i>
                </div>
                
                <div class="media-body align-self-center">
                  <p class="mb-0">The first is a non technical method which requires</p>
                </div>
                
                <a
                  class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                  href="#">
                  <i class="hs-admin-close"></i>
                </a>
              </li>
              <!-- End Top Notifications List Item -->
            </ul>
          </div>
          <!-- End Top Notifications List -->
        </div>
        <!-- End Top Notifications -->
        
        <!-- Top Search Bar (Mobi) -->
        <a id="searchInvoker"
           class="g-hidden-sm-up text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
           href="#" aria-controls="searchMenu" aria-haspopup="true" aria-expanded="false" data-is-mobile-only="true"
           data-dropdown-event="click"
           data-dropdown-target="#searchMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
           data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
          <i class="hs-admin-search g-absolute-centered"></i>
        </a>
        <!-- End Top Search Bar (Mobi) -->
        
        <!-- Top User -->
        <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
          <div class="g-pos-rel g-px-10--lg">
            <a id="profileMenuInvoker" class="d-block" href="#" aria-controls="profileMenu" aria-haspopup="true"
               aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu"
               data-dropdown-type="css-animation" data-dropdown-duration="300"
               data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm"
                     src="/img/ataz/staff/Jason_R.jpg" alt="Image description">
                </span>
              <span class="g-hidden-sm-down">Jason Rogers</span>
              
             
            </a>
            
            <!-- Top User Menu -->
            <ul id="profileMenu"
                class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded"
                aria-labelledby="profileMenuInvoker">
              <li class="g-hidden-sm-up g-mb-10">
                <a class="media g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-pos-rel g-mr-12">
          <span
            class="u-badge-v1 g-top-minus-3 g-right-minus-3 g-width-18 g-height-18 g-bg-secondary g-font-size-10 g-color-white rounded-circle p-0">10</span>
                    <i class="hs-admin-comment-alt"></i>
                    </span>
                  <span class="media-body align-self-center">Unread Messages</span>
                </a>
              </li>
              <li class="g-hidden-sm-up g-mb-10">
                <a class="media g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-bell"></i>
        </span>
                  <span class="media-body align-self-center">Notifications</span>
                </a>
              </li>
              <li class="g-mb-10">
                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-user"></i>
        </span>
                  <span class="media-body align-self-center">My Profile</span>
                </a>
              </li>
              <li class="g-mb-10">
                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-rocket"></i>
        </span>
                  <span class="media-body align-self-center">Upgrade Plan</span>
                </a>
              </li>
              <li class="g-mb-10">
                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-layout-grid-2"></i>
        </span>
                  <span class="media-body align-self-center">Latest Projects</span>
                </a>
              </li>
              <li class="g-mb-10">
                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-headphone-alt"></i>
        </span>
                  <span class="media-body align-self-center">Get Support</span>
                </a>
              </li>
              <li class="mb-0">
                <a class="media g-color-primary--hover g-py-5 g-px-20" href="/logout">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-shift-right"></i>
        </span>
                  <span class="media-body align-self-center">Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Top User Menu -->
          </div>
        </div>
        <!-- End Top User -->
      </div>
      <!-- End Messages/Notifications/Top Search Bar/Top User -->
      
     
    <!-- End Top Activity Panel -->
    </nav>
    
  </div>
</header>
<!-- End Header -->


<main class="container-fluid px-0 g-pt-65">
  <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
    @include('admin/includes/sidebar')
    @yield('content')
  </div>

</main>
<!-- content-->
<script src="/js/shell.js"></script>
<!-- JS Global Compulsory -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

<script src="/vendor/popper.js/popper.min.js"></script>
<script src="/vendor/bootstrap/bootstrap.min.js"></script>

<script src="/vendor/cookiejs/jquery.cookie.js"></script>


<!-- jQuery UI Core -->
<script src="/vendor/jquery-ui/ui/widget.js"></script>
<script src="/vendor/jquery-ui/ui/version.js"></script>
<script src="/vendor/jquery-ui/ui/keycode.js"></script>
<script src="/vendor/jquery-ui/ui/position.js"></script>
<script src="/vendor/jquery-ui/ui/unique-id.js"></script>
<script src="/vendor/jquery-ui/ui/safe-active-element.js"></script>

<!-- jQuery UI Helpers -->
<script src="/vendor/jquery-ui/ui/widgets/menu.js"></script>
<script src="/vendor/jquery-ui/ui/widgets/mouse.js"></script>

<!-- jQuery UI Widgets -->
<script src="/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- JS Plugins Init. -->
<script src="/vendor/appear.js"></script>
<script src="/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
<script src="/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/vendor/chartist-js/chartist.min.js"></script>
<script src="/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
<script src="/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="/js/hs.core.js"></script>
<script src="/assets/js/components/hs.side-nav.js"></script>
<script src="/js/helpers/hs.hamburgers.js"></script>
<script src="/assets/js/components/hs.range-datepicker.js"></script>
<script src="/js/components/hs.datepicker.js"></script>
<script src="/js/components/hs.dropdown.js"></script>
<script src="/js/components/hs.scrollbar.js"></script>
<script src="/assets/js/components/hs.area-chart.js"></script>
<script src="/assets/js/components/hs.donut-chart.js"></script>
<script src="/assets/js/components/hs.bar-chart.js"></script>
<script src="/js/helpers/hs.focus-state.js"></script>
<script src="/js/components/hs.popup.js"></script>

<!-- JS Custom -->


<!-- JS Plugins Init. -->
<script>
    
    $(document).on('ready', function () {
        // initialization of forms
        $(document).ready(function(){
            $('.timepicker').timepicker();
            $('select').formSelect();
            $('.datepicker').datepicker();
        });
    });
    $(document).on('ready', function () {
        // initialization of custom select
        $('.js-select').selectpicker();
        
        // initialization of hamburger
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
        
        // initialization of charts
        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');
        
        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav', {
            afterOpen: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            },
            afterClose: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            }
        });
        
        // initialization of range datepicker
        $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');
        
        // initialization of datepicker
        $.HSCore.components.HSDatepicker.init('#datepicker', {
            dayNamesMin: [
                'MO',
                'TU',
                'WE',
                'TH',
                'FR',
                'SA'
            ]
        });
        
        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});
        
        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
        
        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
<!-- JS Implementing Plugins -->
<script src="/vendor/jquery.maskedinput/src/jquery.maskedinput.js"></script>

<!-- JS Unify -->
<script src="/js/components/hs.masked-input.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of forms
        $.HSCore.components.HSMaskedInput.init('[data-mask]');
    });

</script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

