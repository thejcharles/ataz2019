@extends('admin.layout.base')
@section('title', 'Add and Event')
@section('data-page-id', 'adminEvents')

@section('content')
  
  
  <section id="auth" class="container g-py-100" style="margin-top:40px; min-height:850px;">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
        
        
        </div>
      </div>
    </div>
    
    
    <!-- Form -->
    <form class="card-body white darken-5" action="/admin/events" method="post">
      <div class="text-center mb-4 card-panel teal lighten-2">
        <h2 class="h2 g-color-white g-font-weight-600">Create an Event</h2>
        @include('home.includes.message')
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="event" name="event" type="text" class="validate">
          <label for="event">Event Name</label>
        </div>
        <div class="input-field col s6">
          <input id="location" name="location" type="text" class="validate">
          <label for="location">Event Location</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select id="event_type" name="event_type" required>
            <option value="" disabled selected></option>
            <option value="rsa">RSA</option>
            <option value="wioa">WIOA</option>
            <option value="public">PUBLIC</option>
          </select>
          <label for="event_type">Event Type</label>
        </div>
        <div class="input-field col s6">
          <input class="datepicker" id="dates" name="dates" type="text" required/>
          <label for="dates">Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="contact" name="contact" type="text" class="validate">
          <label for="contact">Contact Name</label>
        </div>
        <div class="input-field col s6">
          <input id="contact_email" name="contact_email" type="email" class="validate">
          <label for="contact_email">Contact Email</label>
          <span class="helper-text" data-error="Please enter a valid email"
                data-success="Thanks"></span>
        </div>
      </div>
      <div class="row">
        <div class=" input-field col s6">
          <input class="timepicker" id="start" name="start" type="text" required>
          <label for="start">Start time</label>
          <span class="helper-text" data-error="Please enter a valid email"
                data-success="Thanks"></span>
        </div>
        <div class="input-field col s6">
          <input class="timepicker" id="end" name="end" type="text" required>
          <label for="end">End Time</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea" data-length="800"></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <input type="hidden" name="token" value="{{ App\Classes\CSRFToken::_token() }}">
      <button class="btn waves-effect waves-light" >Submit
        <i class="material-icons right">send</i>
      </button>
    </form>
    
    
    <!-- end auto complete -->
    <!-- End Form -->
  </section>
  <!-- End Sign up -->
@endsection
