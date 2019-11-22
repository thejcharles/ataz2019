@extends('home.layout.base')
@section('title', 'Wioa Locations')

@section('content')


<section class="g-pt-50 g-pb-90">
    <div class="container">
        <h1 class="text-center g-mb-50">Arizona WIOA Locations</h1>
      <div class="row-fluid">
        <div class="col s6">
{{--          <div class="row">--}}
{{--            <div class="input-field col s6">--}}
{{--              <i class="material-icons prefix"></i>--}}
{{--              <input type="text" id="autocomplete-input" class="autocomplete">--}}
{{--              <label for="autocomplete-input">Search for a location</label>--}}
{{--            </div>--}}
{{--          </div>--}}
        </div>
      </div>
        <!-- End Search Info -->
        @foreach($counties as $county)
        <div class="row g-mt-40 g-mb-10">
            <div class="col-lg-12">
                <h3>{{$county->name}} County</h3>
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

{{--<script>$(document).ready(function(){--}}
{{--        $('input.autocomplete').autocomplete({--}}
{{--            data: {--}}
{{--                @foreach($locations as $location )--}}
{{--                "{{$location->name}}": null,--}}
{{--                @endforeach--}}
{{--            },--}}
{{--            minLength: 2--}}
{{--        });--}}
{{--    });</script>--}}

@endsection
