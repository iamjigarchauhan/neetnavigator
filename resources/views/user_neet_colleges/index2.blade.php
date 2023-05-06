@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="course-page-course-section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5">
      <div class="image-holder">
        <img src="{{ asset('assets/wizard/images/form-wizard.webp')}}" alt="">
      </div>
      </div>
      <div class="col-md-7">
        <form class="form mx-auto" id="kt_stepper_example_basic_form" method="post"
          action="{{route('neet-college.user.store')}}">
          @csrf
          <div id="wizard">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Oops!</strong> {{ session()->get('error') }}
              <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <h4></h4>
              <section>
                {{-- <div class="form-row"> --}}
                  @include('user_neet_colleges._domicile', ['class'=>'','states' => $states])
                {{-- </div> --}}
              </section>
              <h4></h4>
              <section>
                {{-- <div class="form-row"> --}}
                  @include('user_neet_colleges._category', array('class' => ''))
                {{-- </div> --}}
              </section>
            </form>
            <h4></h4>
            <section>
              {{-- <div class="form-row"> --}}
                @include('user_neet_colleges._domicile_detail_and_mark', array('class' => ''))
              {{-- </div> --}}
            </section>
            <h4></h4>
            <section>
            </form>
            {{-- <div class="form-row"> --}}
              <form class="form mx-auto" id="kt_stepper_checkout_form" method="post"
                action="{{route('neet-college.checkout')}}">
                @csrf
                  @include('user_neet_colleges._predicted_rank', array('class' => ''))
                  <!--end::Pridicted Rank-->
                  <!--begin::State wise colleges count-->
                  @include('user_neet_colleges._state_wise_college_count', array('class' => ''))
                  <!--end::State wise colleges count-->
                  <!--begin::Cart summary-->
                  @include('user_neet_colleges._cart_summary', array('class' => ''))
                
              </form>
            {{-- </div> --}}
            </section>
          </div>
        </form>
    </div>
</div>
</section>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script>
$('.multiple').select2();
var form = $("#kt_stepper_example_basic_form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.parent().append(error); }
});

$(function(){$("#wizard").steps({headerTag:"h4",bodyTag:"section",transitionEffect:"fade",enableAllSteps:true,transitionEffectSpeed:500,
onStepChanging:function(event,currentIndex,newIndex){
  form.validate().settings.ignore = ":disabled,:hidden";
    if(form.valid()) {
      if(newIndex===1){
        $('.steps ul').addClass('step-2');
      }
      else{
        $('.steps ul').removeClass('step-2');
      }
      if(newIndex===2){
        var url = $('#kt_stepper_example_basic_form').attr('action');
        var method = $('#kt_stepper_example_basic_form').attr('method');
        var formData = $('#kt_stepper_example_basic_form').serialize();
        $.ajax({
          type: "POST",
          url: url,
          data: formData,
        }).done(function (data) {
            $('.steps ul').addClass('step-3');
        });
        $('.steps ul').addClass('step-3');
      }else{
        $('.steps ul').removeClass('step-3');
      }
      if(newIndex===3){
        //kt_account_profile_details_form
        var url = $('#kt_account_profile_details_form').attr('action');
        var method = $('#kt_account_profile_details_form').attr('method');
        var formData = $('#kt_account_profile_details_form').serialize();
        $.ajax({
          type: "POST",
          url: url,
          data: formData,
        }).done(function (data) {
           if(data.states.length >0 ){
            table = $('table.statelist tbody');
            html = '';
            $.each(data.states,function(index, value){
              html += '<tr><td><input type="checkbox" value="'+value.id+'" name="state_id[]" class="all_state form-check-input" required></td>' +'<td>'+value.name+'</td><td>'+value.colleges_count+'</td></tr>'
            })
            table.html(html);
           $('.predicted-marks').html(data.marks);
          }
        });
        $('.steps ul').addClass('step-4');
        $('.actions ul').addClass('step-last');
      } else { 
        $('.steps ul').removeClass('step-4');$('.actions ul').removeClass('step-last');
      }
      return true;
    }
}, 
onFinished: function (event, currentIndex){
  $('#kt_stepper_checkout_form').submit();
},
labels:{finish:"Save",next:"Next",previous:"Previous"}});
$('.wizard > .steps li a').click(function(){$(this).parent().addClass('checked');$(this).parent().prevAll().addClass('checked');$(this).parent().nextAll().removeClass('checked');});$('.forward').click(function(){$("#wizard").steps('next');})
$('.backward').click(function(){$("#wizard").steps('previous');})
$('.checkbox-circle label').click(function(){$('.checkbox-circle label').removeClass('active');$(this).addClass('active');})
});
</script>
<script>
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
{{-- <script defer
src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
data-cf-beacon='{"rayId":"7c11ceb3ec25f46e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
crossorigin="anonymous"></script> --}}
@endsection