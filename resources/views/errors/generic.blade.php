@extends('home.layout.base')
@section('title', 'Whoops. Something went wrong')

@section('content')
  <div class="text-center g-flex-centered-item g-position-rel">
    <div class="alert g-bg-black-opacity-0_5 fade show" role="alert">
      <h1>
        <i class="fa fa-minus-circle"></i>
        Whoops!
      </h1>
      <p class="h2 g-color-white">
        Looks like something went wrong
      </p>
      <a href="/" class="btn u-btn-outline-bluegray btn-xl g-brd-2 rounded-0 g-color-white">
        <i class="fa fa-check-circle g-mr-2"></i>
        Go back to the home page
      </a>
      <a href="/contact" class="btn u-btn-outline-lightred btn-xl g-brd-2 rounded-0 g-color-white">
        <i class="fa fa-minus-circle g-mr-2"></i>
        Report an issue
      </a>
    </div>
    <!-- Danger Alert -->
  </div>
@endsection
