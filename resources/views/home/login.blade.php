@extends('home.layout.base')
@section('title', 'Log In')

@section('data-page-id', 'auth')

@section('content')
  
  <!-- Login -->
  <section id="auth" class="container g-py-100" style="margin-top:40px; min-height:850px;">
    <div class="row justify-content-center">
      <div class="col-sm-8 col-lg-5">
        <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
          <header class="text-center mb-4">
            <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
            @include('home.includes.message')
          </header>
          <!-- Form -->
          <form class="g-py-15" action="/login" method="post">
            <div class="mb-4">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Username or Email:</label>
              <input
                name="username"
                class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                type="text" placeholder=""
                value="{{ App\Classes\Request::old('post', 'username') }}"
              >
            </div>
            
            <div class="g-mb-35">
              <div class="row justify-content-between">
                <div class="col align-self-center">
                  <label
                    class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13"
                  >
                    Password:
                  </label>
                </div>
                <div class="col align-self-center text-right">
                  <a class="d-inline-block g-font-size-12 mb-2" href="#">Forgot password?</a>
                </div>
              </div>
              <input
                name="password"
                class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3"
                type="password" placeholder="Password"
                value="{{ App\Classes\Request::old('post', 'password') }}"
              >
              
              <input type="hidden" name="token" value="{{ App\Classes\CSRFToken::_token() }}">
              <div class="row justify-content-between">
                <div class="col-8 align-self-center">
                  <label
                    class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    Keep signed in
                  </label>
                </div>
                <div class="col-4 align-self-center text-right">
                  <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25"
                  >Login
                  </button>
                </div>
              </div>
            </div>
          </form>
          <!-- End Form -->
          
          <footer class="text-center">
            <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a
                class="g-font-weight-600" href="/register">signup</a>
            </p>
          </footer>
        </div>
      </div>
    </div>
  </section>
  <!-- End Login -->
@endsection
