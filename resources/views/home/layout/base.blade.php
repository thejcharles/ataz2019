<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Assistive Technology Arizona | @yield('title')</title>
  
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/ataz/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  
  <link rel="stylesheet" href="/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/vendor/jquery-ui/themes/base/jquery-ui.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- CSS Unify -->
  
  <link rel="stylesheet" href="/css/scss/unify-components.css">
  <link rel="stylesheet" href="/css/scss/unify.css">
  <link rel="stylesheet" href="/css/scss/unify-core.css">
  <link rel="stylesheet" href="/css/scss/unify-globals.css">
  <link rel="stylesheet" href="/css/scss/custom.css">
  <link rel="stylesheet" href="/css/shell.css">
  <link rel="stylesheet" href="/css/icon-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/css/icon-line-pro/style.css">
  
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  
  
  <!-- production version, optimized for size and speed -->
  {{--  <script src="https://cdn.jsdelivr.net/npm/vue"></script>--}}
</head>

<body data-page-id="@yeild('data-page-id)">
<main style="min-height:1000px;">
  
  <!-- Header -->
  <header id="js-header" class="u-header u-header--static u-header--show-hide u-header--change-appearance"
          data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section u-header__section--dark g-bg-black g-transition-0_3 g-py-10"
         data-header-fix-moment-exclude="g-bg-black g-py-10"
         data-header-fix-moment-classes="g-bg-black-opacity-0_7 g-py-0">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Responsive Toggle Button -->
          <button
            class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
            type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
            data-toggle="collapse" data-target="#navBar">
                            <span class="hamburger hamburger--slider">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
          </button>
          <!-- End Responsive Toggle Button -->
          
          <!-- Navigation -->
          <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg"
               id="navBar">
            <ul class="navbar-nav align-items-lg-center mx-auto text-uppercase g-font-weight-600 u-nav-hover-v1"
                data-splitted-breakpoint="992">
              <li class="nav-item g-mx-20--lg">
                <a href="/" class="nav-link px-0">Home
                
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="/wioa-locations" class="nav-link px-0">AZ WIOA Locations
                
                </a>
              </li>
              <li class="nav-item g-mx-20--lg active">
                <a href="/trainings" class="nav-link px-0">Events and Trainings
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <!-- Logo -->
              <li class="nav-logo-item g-mx-40--lg">
                <a href="index" class="navbar-brand mr-0">
                  <img src="/img/logo/atazlogo.gif" alt="Image Description"
                       style="height:4rem; width: auto;">
                </a>
              </li>
              <!-- End Logo -->
              <li class="nav-item g-mx-20--lg">
                <a href="/resources" class="nav-link px-0">Resources
                
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="/contact" class="nav-link px-0">Contact Us
                
                </a>
              </li>
              @if(isAuthenticated())
                <li class="nav-item dropdown g-mx-20--lg">
                  <a href="#!" class="nav-link dropdown-toggle g-px-0" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">Settings </a>
                  <!-- Submenu (Bootstrap) -->
                  <ul
                    class="dropdown-menu rounded-0 g-text-transform-none g-brd-none g-brd-top g-brd-primary g-brd-top-2 g-mt-20 g-mt-10--lg--scrolling"
                    style="background-color:#ff6600; color: rgba(33, 67, 89, 1)">
                    <li class="dropdown-item active" style="color: rgb(33, 67, 89);">
                      <a class="nav-link g-px-0" href="#!">Profile</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link g-px-0" href="/admin"
                         style="color: rgb(33, 67, 89);">Administration</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link g-px-0" href="#!" style="color: rgb(33, 67, 89);">
                        Get Support</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link g-px-0" href="/logout" style="color: rgb(33, 67, 89);">
                        Log Out</a>
                    </li>
                  </ul>
                  <!-- End Submenu (Bootstrap) -->
                </li>
              @else
                
                <li class="nav-item g-mx-20--lg">
                  <a href="/login" class="nav-link px-0">
                    Login
                  </a>
                </li>
              @endif
            
            
            </ul>
          </div>
          <!-- End Navigation -->
        </div>
      </nav>
    </div>
  </header>
  <!-- End Header -->
  <!-- content-->
  <div id="app">
    @{{ message }}
  </div>
  
  @yield('content')
</main>

<div class="shortcode-html">
  <!-- Footer -->
  
  
  <!-- Hero Info -->
  <section class="g-bg-cover g-bg-size-cover g-bg-black-opacity-0_8--after g-py-120 "
           style="background-image: url(/img/ataz/Casa_Grande_Florence_Blvd.jpg); ">
    <div class="container text-center g-color-white g-pos-rel g-z-index-1 ">
      <div class="row justify-content-center ">
        <div class="col-md-8 ">
          <h2 class="g-font-weight-300 g-font-size-45 g-mb-20 ">Learn with
            <span class="g-color-primary g-font-weight-600 ">A.T. Arizona</span>.</h2>
          <p class="lead g-color-white-opacity-0_8 g-font-weight-400 g-mb-50 ">Resources | Hands-on
            training | A.T. experts</p>
          <a class="btn btn-xl u-btn-primary g-font-weight-600 g-font-size-default g-px-35 "
             href="#! ">Contact us!</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Info -->
  
  
  <div id="contacts-section " class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60 ">
    <div class="container ">
      <div class="row ">
        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg ">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20 ">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0 ">About Us</h2>
          </div>
          
          <p>About A.T. Arizona dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero
            tincidunt sodales.</p>
        </div>
        <!-- End Footer Content -->
        
        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg ">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20 ">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0 ">Trainings</h2>
          </div>
          
          <article>
            <h3 class="h6 g-mb-2 ">
              <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">A.T. AZ
                Trainings</a>
            </h3>
          </article>
          
          <hr class="g-brd-white-opacity-0_1 g-my-10 ">
          
          <article>
            <h3 class="h6 g-mb-2 ">
              <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">State-Wide
                Trainings</a>
            </h3>
          </article>
          
          <hr class="g-brd-white-opacity-0_1 g-my-10 ">
          
          <article>
            <h3 class="h6 g-mb-2 ">
              <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">Online
                Trainings</a>
            </h3>
          </article>
        </div>
        <!-- End Footer Content -->
        
        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg ">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20 ">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0 ">Useful Links</h2>
          </div>
          
          <nav class="text-uppercase1 ">
            <ul class="list-unstyled g-mt-minus-10 mb-0 ">
              <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10 ">
                <h4 class="h6 g-pr-20 mb-0 ">
                  <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">A.T.
                    Resources</a>
                  <i class="fa fa-angle-right g-absolute-centered--y g-right-0 "></i>
                </h4>
              </li>
              <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10 ">
                <h4 class="h6 g-pr-20 mb-0 ">
                  <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">Employer
                    Resources</a>
                  <i class="fa fa-angle-right g-absolute-centered--y g-right-0 "></i>
                </h4>
              </li>
              <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10 ">
                <h4 class="h6 g-pr-20 mb-0 ">
                  <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">Employee
                    Resources</a>
                  <i class="fa fa-angle-right g-absolute-centered--y g-right-0 "></i>
                </h4>
              </li>
              <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10 ">
                <h4 class="h6 g-pr-20 mb-0 ">
                  <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">Latest
                    Jobs</a>
                  <i class="fa fa-angle-right g-absolute-centered--y g-right-0 "></i>
                </h4>
              </li>
              <li class="g-pos-rel g-py-10 ">
                <h4 class="h6 g-pr-20 mb-0 ">
                  <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="#! ">Contact
                    Us</a>
                  <i class="fa fa-angle-right g-absolute-centered--y g-right-0 "></i>
                </h4>
              </li>
            </ul>
          </nav>
        </div>
        <!-- End Footer Content -->
        
        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6 ">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20 ">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0 ">Our Contacts</h2>
          </div>
          
          <address class="g-bg-no-repeat g-font-size-12 mb-0 "
                   style="background-image: url(/img/maps/map2.png); ">
            <!-- Location -->
            <div class="d-flex g-mb-20 ">
              <div class="g-mr-10 ">
                                    <span
                                      class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6 ">
                                        <i class="fa fa-map-marker "></i>
                                    </span>
              </div>
              <p class="mb-0 ">3100 East Roosevelt Drive,
                <br> Phoenix, AZ 85008</p>
            </div>
            <!-- End Location -->
            
            <!-- Phone -->
            <div class="d-flex g-mb-20 ">
              <div class="g-mr-10 ">
                                    <span
                                      class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6 ">
                                        <i class="fa fa-phone "></i>
                                    </span>
              </div>
              <p class="mb-0 ">{{getenv(('CENTER_EMAIL'))}}</p>
            </div>
            <!-- End Phone -->
            
            <!-- Email and Website -->
            <div class="d-flex g-mb-20 ">
              <div class="g-mr-10 ">
                                    <span
                                      class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6 ">
                                        <i class="fa fa-globe "></i>
                                    </span>
              </div>
              <p class="mb-0 ">
                <a class="g-color-white-opacity-0_8 g-color-primary--hover "
                   href="mailto:info@atarzona.com ">info@atarizona.com</a>
                <br>
              </p>
            </div>
            <!-- End Email and Website -->
          </address>
        </div>
        <!-- End Footer Content -->
      </div>
    </div>
  </div>
</div>
<!-- End Footer -->

<!-- Copyright Footer -->
<footer class="g-bg-black g-color-white-opacity-0_8 g-py-20">
  <div class="container ">
    <div class="row ">
      <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md ">
        <div class="d-lg-flex">
          <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md ">&copy;{{ date('Y') }} All
            Rights Reserved.
          </small>
          <ul class="u-list-inline ">
            <li class="list-inline-item ">
              <span>|</span>
            </li>
            <li class="list-inline-item ">
              <a class="g-color-white-opacity-0_8 g-color-primary--hover " href="/contact">Support</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

<!-- Go to Top -->
<a
  class="js-go-to u-go-to-v1 g-width-40 g-height-40 g-color-primary g-bg-main-opacity-0_5 g-bg-main--hover g-bg-main--focus g-font-size-12 rounded"
  href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
  <i class="fa fa-chevron-up"></i>
</a>
<!-- End Go to Top -->
<!-- JS Customization -->

<!-- JS Plugins Init. -->


<!-- JS -->


</body>
<script src="/js/shell.js"></script>
<!-- JS Global Compulsory -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/vendor/popper.js/popper.min.js"></script>
<script src="/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/vendor/slick-carousel/slick/slick.js"></script>
<!-- JS ataz -->
<script src="/js/hs.core.js"></script>
<script src="/js/components/hs.header.js"></script>
<script src="/js/helpers/hs.hamburgers.js"></script>
<script src="/js/components/hs.dropdown.js"></script>
<script src="/js/components/hs.popup.js"></script>
<script src="/js/components/hs.carousel.js"></script>
<script src="/js/components/hs.go-to.js"></script>
<script src="/js/components/hs.tabs.js"></script>

<script src="/assets/vendor/appear.js"></script>
<script src="/assets/vendor/custombox/custombox.min.js"></script>

<!-- JS Customization -->
<script src="/js/custom.js"></script>

<script src="//maps.googleapis.com/maps/api/js?key={{getenv('GOOGLE_MAP_KEY')}}&amp;" async="" defer=""></script>
<!-- JS Implementing Plugins -->
<script src="/vendor/gmaps/gmaps.min.js"></script>

<!-- JS Unify -->
<script src="/js/components/gmap/hs.map.js"></script>

<!-- JS Implementing Plugins -->
<script src="/vendor/chosen/chosen.jquery.js"></script>
<script src="/vendor/jquery-ui/ui/widgets/datepicker.js"></script>


<!-- JS Plugins Init. -->
<script>
    M.AutoInit();
    // initialization of google map
    function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
    }
</script>

<script>
    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
        
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });
        
        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });
        
        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
        
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');
        
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
    });
    
    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>

<script>
    const app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
    
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: 'You loaded this page on ' + new Date().toLocaleString()
        }
    });
</script>

<script>
    $(document).on('ready', function () {
        // initialization of autonomous popups
        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
            autonomous: true
        });
    });
</script>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>
