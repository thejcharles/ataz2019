
@extends('home.layout.base')
@section('title', 'Add and Event')
@section('data-page-id', 'auth')

@section('content')
  
  {{var_dump($events)}}
  <!-- sign up -->
  <section id="auth" class="container g-py-100" style="margin-top:40px; min-height:850px;">
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-9 col-lg-6">
        <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
          <header class="text-center mb-4">
            <h2 class="h2 g-color-black g-font-weight-600">Create an Event</h2>
            @include('home.includes.message')
          </header>
          
          <!-- Form -->
          <form class="g-py-15" action="/events" method="post">
            <div class="row">
              
              <div class="col-xs-12 col-sm-6 mb-4">
                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">
                  Name:</label>
                <input
                  name="event"
                  class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                  type="text" placeholder="john doe"
                  value="{{ App\Classes\Request::old('post', 'event') }}">
              </div>
              
              <div class="col-xs-12 col-sm-6 mb-4">
                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">username
                </label>
                <input
                  name="username"
                  class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                  type="text" placeholder="jdoe"
                  value="{{ App\Classes\Request::old('post', 'username') }}">
              </div>
            </div>
            <div class="mb-4">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>
              <input
                name="email"
                class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                type="email" placeholder="johndoe@gmail.com"
                value="{{ App\Classes\Request::old('post', 'email') }}">
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 mb-4">
                <label
                  class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                <input
                  name="password"
                  class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                  type="password" placeholder="********"
                  value="{{ App\Classes\Request::old('post', 'password') }}">
              </div>
              <div class="col-xs-12 col-sm-6 mb-4">
                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Confirm
                  Password:
                </label>
                <input
                  name="password_again"
                  class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                  type="password" placeholder="Password"
                  value="{{ App\Classes\Request::old('post', 'password_again') }}">
              </div>
              <input type="hidden" name="token" value="{{ App\Classes\CSRFToken::_token() }}">
            </div>
            <div class="row justify-content-between mb-5">
              <div class="col-4 align-self-center text-right">
                <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25"
                >Register
                </button>
              </div>
            </div>
          </form>
          <!-- End Form -->
          
          <footer class="text-center">
          
          </footer>
        </div>
      </div>
    </div>
  </section>
  <!-- End Sign up -->
@endsection
