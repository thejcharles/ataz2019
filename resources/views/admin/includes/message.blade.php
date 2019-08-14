<div class="row">
  <div class="col-lg-12">
  @if(isset($errors) || \App\Classes\Session::has('error'))

    <!-- Danger Alert -->
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="h5">
          <i class="fa fa-minus-circle"></i>
          Oh snap!
        </h4>
        <p>Change a few things up and try submitting again.</p>
        @if(\App\Classes\Session::has('error'))
          {{ \App\Classes\Session::flash('error') }}
        @else
          @foreach($errors as $error_array)
            @foreach($error_array as $error_item)
              <div class="media">
                  <span class="media-body align-self-center">
           {{ $error_item }}
        </span>
              </div>
            
            @endforeach
          @endforeach
        @endif
        <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <!-- End Red Alert -->
        @endif
        
        @if(isset($success) || \App\Classes\Session::has('success'))
        
        <!-- Teal Alert -->
          <div class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
            <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            @if(isset($success))
              
              <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">
          <i class="icon-check g-font-size-25"></i>
        </span>
                <span class="media-body align-self-center">
          <strong>Well done!</strong> {{ $success }}
        </span>
                @elseif(\App\Classes\Session::has('success'))
                  {{ \App\Classes\Session::flash('success') }}
                @endif
              </div>
          </div>
          <!-- End Teal Alert -->
        @endif
      </div>
  </div>
</div>
