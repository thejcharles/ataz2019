@extends('home.layout.base')
@section('title'){{$staff->name}}

@section('content')
  <div class="text-center g-flex-centered-item g-position-rel">
    <div
      class="g-font-size-180 g-font-size-240--sm g-font-size-420--lg g-line-height-1 g-font-weight-200 g-color-gray-dark-v2">
      404
    </div>
    
    <div class="g-absolute-centered">
      <h1 class="g-font-weight-200 g-mb-20">Page&nbsp;Not&nbsp;Found</h1>
      <p class="g-color-white-opacity-0_6 g-font-size-18">Oops! Looks like you followed a&nbsp;bad&nbsp;link.</p>
      <p class="g-color-white-opacity-0_6 g-font-size-18">If you think this is a problem with us, please&nbsp;<a
          href="#!" class="g-color-white g-color-primary--hover g-text-no-underline--hover">tell us</a>.</p>
      <p class="g-color-white-opacity-0_6 g-font-size-18 mb-0">Here is a link to the <a href="#!"
                                                                                        class="g-color-white g-color-primary--hover g-text-no-underline--hover">home
          page</a>.</p>
    </div>
  </div>
@endsection
