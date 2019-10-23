@extends('home.layout.base')
@section('title', 'Thanks for contacting us!')

@section('content')
  
  <!-- Breadcrumbs -->
  <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
    <div class="container">
      <ul class="u-list-inline">
        <li class="list-inline-item g-mr-5">
          <a class="u-link-v5 g-color-text" href="/">Home</a>
          <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
        </li>
        <li class="list-inline-item g-mr-5">
          <a class="u-link-v5 g-color-text" href="/contact">contact</a>
          <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
        </li>
        <li class="list-inline-item g-color-primary">
          <span>Thank you!</span>
        </li>
      </ul>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  
  <div class="container g-py-100">
    <div
      class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md g-bg-bluegray-opacity-0_5">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">
            <svg width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                 x="0px" y="0px"
                 viewBox="0 0 497.5 497.5" style="enable-background:new 0 0 497.5 497.5;" xml:space="preserve">
              <g>
                <path d="M487.75,78.125c-13-13-33-13-46,0l-272,272l-114-113c-13-13-33-13-46,0s-13,33,0,46l137,136
                  c6,6,15,10,23,10s17-4,23-10l295-294C500.75,112.125,500.75,91.125,487.75,78.125z" fill="#fff"/>
              </g>
            </svg>
          </span>
      
      @include('home.includes.message')
      
      <a class="teal base waves-effect waves-light btn g-color-white" href="/">Go to home page</a>
    </div>
  </div>

@endsection
