<!--begin::Stepper-->
<div class="stepper stepper-pills @if(session()->has('user_mark')) last @endif" id="kt_stepper_example_basic">
    <!--begin::Nav-->
    <div class="stepper-nav flex-wrap mb-10 d-none">
        @if(is_null(auth()->user()->user_neet_info))
        <!--begin::Step 1-->
        <div class="stepper-item mx-8 my-4 basic-detail current" data-kt-stepper-element="nav">
            <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">1</span>
                </div>
                <!--end::Icon-->

                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">
                        Step 1
                    </h3>

                    <div class="stepper-desc">
                        Your Domicile & Category
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Line-->
            <div class="stepper-line h-40px"></div>
            <!--end::Line-->
        </div>
        <!--end::Step 1-->
        @endif

        @if(!session()->has('user_mark'))
        <!--begin::Step 2-->
        <div class="stepper-item mx-8 my-4 @if(!is_null(auth()->user()->user_neet_info)) current @endif" data-kt-stepper-element="nav">
            <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">2</span>
                </div>
                <!--begin::Icon-->

                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">
                        Step 2
                    </h3>

                    <div class="stepper-desc">
                        Your Domicile & Marks
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Line-->
            <div class="stepper-line h-40px"></div>
            <!--end::Line-->
        </div>
        <!--end::Step 2-->
        @endif

        @if(session()->has('user_mark'))
        <!--begin::Step 3-->
        <div class="stepper-item mx-8 my-4 @if(session()->has('user_mark')) current @endif" data-kt-stepper-element="nav">
            <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">3</span>
                </div>
                <!--begin::Icon-->

                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">
                        Step 3
                    </h3>

                    <div class="stepper-desc">
                        Predicted Rank & Cart Summary
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Line-->
            <div class="stepper-line h-40px"></div>
            <!--end::Line-->
        </div>
        <!--end::Step 3-->
        @endif

    </div>
    <!--end::Nav-->

    <!--begin::Form-->
    <!--begin::Group-->
    <div class="mb-5">
        @if(is_null(auth()->user()->user_neet_info))
        <!--begin::Step 1-->
        <div class="flex-column current" data-kt-stepper-element="content">
            <div class="w-lg-600px mx-auto">
                <form class="form mx-auto" id="kt_stepper_example_basic_form" method="post" action="{{route('neet-college.user.store')}}">
                    @csrf
                    <!--begin::domicile-->
                    @include('user_neet_colleges._domicile', array('class' => '', 'states' => $states))
                    <!--end::domicile-->

                    <!--begin::category-->
                    @include('user_neet_colleges._category', array('class' => ''))
                    <!--end::category-->
                </form>
                <!--end::Form-->
            </div>
        </div>
        <!--end::Step 1-->
        @endif

        @if(!session()->has('user_mark'))
        <!--begin::Step 1.1-->
        <div class="flex-column @if(!is_null(auth()->user()->user_neet_info)) current @endif" data-kt-stepper-element="content">
            <div class="w-lg-600px mx-auto">
                <!--begin::domicile-->
                @include('user_neet_colleges._domicile_detail_and_mark', array('class' => ''))
                <!--end::domicile-->
            </div>
        </div>
        <!--end::Step 1.1-->
        @endif

        @if(session()->has('user_mark'))
        <!--begin::Step 2-->
        <div class="flex-column @if(session()->has('user_mark')) current @endif" data-kt-stepper-element="content">
            <div class="w-lg-600px mx-auto">
                <form class="form mx-auto" id="kt_stepper_checkout_form" method="post" action="{{route('neet-college.checkout')}}">
                    @csrf
                    <!--begin::Pridicted Rank-->
                    @include('user_neet_colleges._predicted_rank', array('class' => ''))
                    <!--end::Pridicted Rank-->
                    <!--begin::State wise colleges count-->
                    @include('user_neet_colleges._state_wise_college_count', array('class' => ''))
                    <!--end::State wise colleges count-->
                    <!--begin::Cart summary-->
                    @include('user_neet_colleges._cart_summary', array('class' => ''))
                    <!--end::Cart summary-->
                </form>
            </div>
        </div>
        <!--end::Step 2-->
        @endif
    </div>
    <!--end::Group-->

    <!--begin::Actions-->
    <div class="d-flex flex-stack stepper-action justify-content-end">

        <!--begin::Wrapper-->
        <div>
            <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                <span class="indicator-label">
                    Checkout
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>

            @if(!is_null(auth()->user()->user_neet_info))
            <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                Next
            </button>
            @else
            <button type="submit" class="btn btn-primary" id="kt_stepper_example_basic_form_submit">
                Next
            </button>
            @endif
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Actions-->
</div>
<!--end::Stepper-->

@section('scripts')
<script>
    // Stepper lement
    var element = document.querySelector("#kt_stepper_example_basic");

    // Initialize Stepper
    var stepper = new KTStepper(element);

    // Handle next step
    stepper.on("kt.stepper.next", function(stepper) {
        $("#kt_account_profile_details_form").submit();
        return;
        stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function(stepper) {
        stepper.goPrevious(); // go previous step
    });

    // Handle previous step
    // stepper.on("kt.stepper.submit", function(stepper) {
    //     $("#kt_stepper_checkout_form").submit();
    // });

    // submit stepper
    $(document).on('click', 'button[data-kt-stepper-action="submit"]', function() {
        if ($('.all_state:checked').length == 0 || $('input[name=cart_summary]:checked').length == 0) {
            $('.cart-summary-error-msg').removeClass('d-none');
            return;
        }
        $('.cart-summary-error-msg').addClass('d-none');
        $("#kt_stepper_checkout_form").submit();
    })
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
@endsection