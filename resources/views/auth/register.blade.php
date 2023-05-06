@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<section class="course-page-course-section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5">
            <div class="image-holder">
                <img src="{{ asset('assets/wizard/images/form-wizard.webp')}}" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <div id="wizard">
                <h4 class="bold">Register</h4>
                <p>&nbsp;</p>
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> {{ session()->get('error') }}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <section>
                    <form method="POST" action="{{ route('register.custom') }}">
                    @csrf
                    <div class="form-floating  mb-2">
                        <input id="full_name" type="text" class="form-control" name="full_name" placeholder="Full Name" autofocus="" required value="{{ old('full_name') }}">
                        <label for="full_name">Full Name *</label>
                        @if ($errors->has('full_name'))
                        <span class="text-danger">{{ $errors->first('full_name') }}</span>
                        @endif
                    </div>
                    <div class="form-floating  mb-2">
                        <input placeholder="Email ID" id="email" name="email" type="email" class="form-control" required value="{{ old('email') }}">
                        <label for="email">Email ID *</label>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-floating  mb-2">
                        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                        <label for="password">Password *</label>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-floating  mb-2">
                        <input placeholder="Mobile Number" id="mobile_no" type="text" maxlength="10" class="form-control" name="mobile_no" required value="{{ old('mobile_no') }}">
                        <label for="mobile_no">Mobile Number *</label>
                        @if ($errors->has('mobile_no'))
                        <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                        @endif
                    </div>
                    <div class="form-floating  mb-3">
                        <div class="form-check form-check-xs custom-checkbox pl-0">
                            <input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user" required>
                            <label for="agree_checkbox_user" class="text-primary">Agree to Terms & Conditions</label>
                        </div>
                    </div>
                    <button class="btn btn-primary login-btn" type="submit">Create Account</button>
                    <div class="account-footer mt-4">
                        Already have an account? <a class="forgot-link mb-0" href="{{route('login')}}">Login</a>
                    </div>
                    </form>
                </section>
            </div>
        </div>
      </div>
    </div>
</section>
@include('auth.terms_and_condition_modal')
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).on('change', '#agree_checkbox_user', function() {
    if ($(this).prop('checked') == true) {
        $('#terms_and_condition').removeClass('d-none');
        $('#terms_and_condition').modal('show');
    } else {
        $('#terms_and_condition').addClass('d-none');
    }
})
$('.multiple').select2();
$(document).on('click', '#kt_stepper_example_basic_form_submit', function() {
    $('#kt_stepper_example_basic_form').submit();
})
  $(document).on('blur', '#floatingPincode', function() {
      let pincode = $(this).val();
      if (pincode.length > 5) {
          $.ajax({
              url: "{{route('neet-college.check-pincode')}}/" + pincode,
              method: 'GET',
              dataType: 'json',
              success: function(res) {
                  var cityOptions = '<option value="">City based on area pincode</option>';
                  if (res.status == 'success') {
                      $("#floatingState").val(res.data.state);
                      res.data.cities.forEach(ele => {
                          cityOptions += `<option value="${ele.id}">${ele.name}</option>`;
                      });
                      $("#floatingCity").html(cityOptions).trigger('change');
                  } else {
                      $("#floatingState").val('');
                      $("#floatingCity").html(cityOptions).trigger('change');
                  }
              }
          })
      }
  });

  $(document).on('change', '#all_state', function() {
      if ($(this).prop('checked') == true) {
          $(".all_state").prop('checked', true);
      } else {
          $(".all_state").prop('checked', false);
      }

      let selectedStateAll = $('.all_state:checked').length;
      cartSummaryRadioDisableOrNot(selectedStateAll);
  })
  $(document).on('change', '.all_state', function() {
      let selectedState = $('.all_state:checked').length;
      if (selectedState == $('.all_state').length) {
          $("#all_state").prop('checked', true);
      } else {
          $("#all_state").prop('checked', false);
      }
      cartSummaryRadioDisableOrNot(selectedState);
  })
  $(document).on('change', '.cart-radio', function() {
      $('.cart-summary-error-msg').addClass('d-none');
  });

  function cartSummaryRadioDisableOrNot(selectedState) {
      $(".cart-radio").prop('checked', false);
      if (selectedState == 1) {
          $(".cart-radio[data-state-attempt='1-1']").prop('disabled', false);
          $(".cart-radio[data-state-attempt='2-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-2']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-4']").prop('disabled', true);
      } else if (selectedState == 2) {
          $(".cart-radio[data-state-attempt='1-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='2-1']").prop('disabled', false);
          $(".cart-radio[data-state-attempt='all-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-2']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-4']").prop('disabled', true);
      } else if (selectedState > 2) {
          $(".cart-radio[data-state-attempt='1-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='2-1']").prop('disabled', true);
          $(".cart-radio[data-state-attempt='all-1']").prop('disabled', false);
          $(".cart-radio[data-state-attempt='all-2']").prop('disabled', false);
          $(".cart-radio[data-state-attempt='all-4']").prop('disabled', false);
      } else {
          $(".cart-radio").prop('disabled', true);
      }

  }
</script>
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> --}}
{{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
data-cf-beacon='{"rayId":"7c11ceb3ec25f46e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
crossorigin="anonymous"></script> --}}
@endsection
