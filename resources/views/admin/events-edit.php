@extends('admin.layout.base')
@section('title', 'Add and Event')
@section('data-page-id', 'adminEvents')

@section('content')

<!-- sign up -->
<section id="auth" class="container g-py-100" style="margin-top:40px; min-height:850px;">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">

        <div class="text-center mb-4">
          <h2 class="h2 g-color-black g-font-weight-600">Create an Event</h2>
          @include('home.includes.message')
        </div>
      </div>
    </div>
  </div>


  <!-- Form -->
  <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="/admin/events" method="post">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="form-group g-mb-30">

          <!-- Location auto complete -->
          <label class="g-mb-10">Location</label>
          <div class="input-group g-brd-primary--focus">
            <input id="autocomplete2"
                   name="location"
                   class="form-control form-control-md rounded-0" type="text"
                   placeholder="Sierra Vista" data-url="../../../assets/include/ajax/autocomplete-data-1.json"
            >
          </div>
        </div>
      </div>
    </div> <!-- end of row -->
    <!-- end auto complete -->

    <div class="row">
      <!--Event Name -->
      <div class="col-lg-6 col-md-12">
        <label class="g-mb-10">Event Name</label>
        <div class="input-group g-brd-primary--focus">
          <select
            id="event"
            name="event"
            class="form-control form-control-md form-control-lg rounded-0 g-mb-25">
            <option>Large select</option>
            <option value="1">Value One</option>
            <option value="3">Value Two</option>
            <option value="3">Value Three</option>
          </select>
        </div>
      </div>
      <!-- end event name -->
      <!-- event description -->
      <div class="col-lg-6 col-md-12">
        <label class="g-mb-10">Event Category</label>
        <div class="input-group g-brd-primary--focus">
          <select
            name="event_type"
            class="form-control form-control-md form-control-lg rounded-0 g-mb-25">
            <option>Large select</option>
            <option value="1">Value One</option>
            <option value="3">Value Two</option>
            <option value="3">Value Three</option>
          </select>
        </div>
      </div>
      <!-- end event description -->
    </div><!-- end of row -->

    <div class="row">
      <!-- Date Picker -->
      <div class="col-lg-4 col-md-12">
        <label class="g-mb-10">Date</label>
        <div class="input-group g-brd-primary--focus">
          <input
            id="datepickerDefault"
            name="dates"
            class="form-control form-control-md u-datepicker-v1 g-brd-right-none rounded-0"
            type="text"
            placeholder="Select a date"
          >
          <div class="input-group-append">
            <span class="input-group-text rounded-0 g-color-gray-dark-v5"><i class="icon-calendar"></i></span>
          </div>
        </div>
      </div>
      <!-- end datepicker -->

      <!-- Time -->
      <div class="col-lg-4 col-md-12">
        <label class="g-mb-10">Start Time</label>
        <div class="input-group g-brd-primary--focus">
          <input
            id="startTime"
            name="startTime"
            class="form-control form-control-md g-brd-right-none rounded-0"
            type="text"
            placeholder="Select start time"
          >
          <div class="input-group-append">
            <span class="input-group-text rounded-0 g-color-gray-dark-v5"><i class="icon-clock"></i></span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <label class="g-mb-10">End Time</label>
        <div class="input-group g-brd-primary--focus">
          <input
            id="endTime"
            name="endTime"
            class="form-control form-control-md u-datepicker-v1 g-brd-right-none rounded-0"
            type="text"
            placeholder="99:99"
            data-mask="99-99-99"
          >
          <div class="input-group-append">
            <span class="input-group-text rounded-0 g-color-gray-dark-v5"><i class="icon-clock"></i></span>
          </div>
        </div>
      </div>
      <!-- end time -->
    </div> <!-- end of row -->

    <div class="row">
      <!-- additional info -->
      <div class="col-lg-12 col-md-12">
        <label class="g-mb-10">Additional Information</label>
        <div class="input-group g-brd-primary--focus">
              <textarea
                id="description"
                name="description"
                class="form-control rounded-0 form-control-md"
                rows="6"></textarea>
        </div>
      </div>
    </div>
    <input type="hidden" name="token" value="{{ App\Classes\CSRFToken::_token() }}">

    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25"
    >Add Event
    </button>
    <button class=" update-event btn btn-md u-btn-primary rounded g-py-13 g-px-25"
    >Update Event
    </button>
  </form>
  <!-- End Form -->
  </div>
</section>
<!-- End Sign up -->
@endsection

