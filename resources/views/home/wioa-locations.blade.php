@extends('home.layout.base')
@section('title', 'Wioa Locations')

@section('content')
<!-- Page Title -->
{{--<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"--}}
{{--    data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>--}}
{{--    <!-- Parallax Image -->--}}
{{--    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_5--after"--}}
{{--        style="height: 140%; background-image: url(/img/ataz/Casa_Grande_Florence_Blvd.jpg);"></div>--}}
{{--    <!-- End Parallax Image -->--}}
{{--  --}}
{{--    <!-- Promo Block Content -->--}}
{{--    <div class="container g-color-white text-center g-py-150">--}}
{{--        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">Assistive Technology Arizona</span>--}}
{{--        <h3 class="h1 text-uppercase mb-0">Using Assistive Technology and Disability Awareness Training to--}}
{{--            overcome disability barriers.</h3>--}}
{{--    </div>--}}
{{--  --}}
{{-- --}}
{{--    <!-- End Button Group -->--}}
{{--</section>--}}
<!-- Page Title -->

<section class="g-pt-50 g-pb-90">
    <div class="container">
        <h2 class="text-center g-mb-50">Arizona WIOA Locations</h2>
      <div class="row-fluid">
        <div class="col s6">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix"></i>
              <input type="text" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">Search for a location</label>
            </div>
          </div>
        </div>
      </div>
        <!-- End Search Info -->
        @foreach($counties as $county)
        <div class="row g-mt-40 g-mb-10">
            <div class="col-lg-12">
                <h2>{{$county->name}}</h2>
            </div>
        </div>
        <div class="row" style="border-bottom: 1px solid orange">
            @foreach($locations as $location)
            @if($location->county === $county->name)
            <div class="col-4">

                <strong>
                    <p class="g-mb-20"><a class="g-color-darkblue"
                            href="/wioa-center/{{$location->id}}">{{$location->name}}</a></p>
                </strong>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
</section>

<script>$(document).ready(function(){
        $('input.autocomplete').autocomplete({
            data: {
                @foreach($locations as $location )
                "{{$location->name}}": null,
                @endforeach
            },
            minLength: 2
        });
    });</script>

@endsection
