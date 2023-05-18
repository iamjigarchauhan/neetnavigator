@extends('layouts.app')
@section('content')
<section id="course-page-course" class="course-page-course-section">
  <div class="container mt-5">
    {{-- <div class="card">
      <div class="card-body">
        <form id="kt_account_profile_details_form" class="form" method="POST" action="http://localhost/keytech/jigar/neetnavigator-master/public/neet-college/user/19" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="LtIR6zMaDvnlr7e7DfGNAzHG9xoApJ5rCmscuJBi">        <input type="hidden" name="_method" value="PUT">        <!--begin::Card body-->
          
              <!--begin::Input group-->
              <div class="row mb-6">
                  <div class="col-lg-12 fv-row">
                      <div class="form-floating">
                      <label for="floatingMarks">Enter Your Marks</label>
                      <input name="marks" type="number" max="999" step="1" class="form-control mb-3 mb-lg-0" id="floatingMarks" placeholder="" value="" required="">
                      </div>
                  </div>
              </div>
      </form>
      </div>
    </div> --}}
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{ route('neet-college.user.store')}}">
          @csrf
          <div class="card-title pt-1">
            <h4 class="bold">Profile</h4>
          </div>
          @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Oops!</strong> {{ session()->get('error') }}
              <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          <div class="row"> 
            <div class="col-lg-6 p-3">
              <div class="form-floating">
                <label for="full_name">Full Name *</label>
                <input id="full_name" type="text" class="form-control" name="full_name" readonly disabled placeholder="" autofocus="" value="{{ auth()->user()->name }}" required="" value="">
              </div>
              <div class="row mb-6">
                <div class="col-lg-6 fv-row">
                  <div class="form-floating">
                    <label for="email">Email ID *</label>
                    <input placeholder="" id="email" name="email" type="email" readonly disabled value="{{ auth()->user()->email }}" class="form-control" required="" value="">
                  </div>
                </div>
                <div class="col-lg-6 fv-row">
                   <div class="form-floating">
                    <label for="mobile_no">Mobile Number *</label>
                <input placeholder="" id="mobile_no" type="text" maxlength="10" readonly disabled value="{{ auth()->user()->mobile_no }}" class="form-control" name="mobile_no"
                  required="" value="">
                  </div>
                </div>
              </div>
              <div class="form-floating">
                  <label for="floatingSscState">10th Passing State *</label>
                  <select name="ssc_state" class="form-select js-example-basic-single" id="floatingSscState" aria-label="{{ __('10th Passing State') }}" data-control="select2" data-placeholder="{{ __('10th Passing State') }}" required>
                    <option value="">{{ __('Select 10th Passing State') }}</option>
                    @foreach($states as $value)
                    <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}" {{ $value['id'] == (auth()->user()->user_neet_info->state_id_10th ?? '') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('ssc_state'))
                  <span class="text-danger">{{ $errors->first('ssc_state') }}</span>
                  @endif
              </div>
              <div class="form-floating">
                  <label for="floatingHscState" class="mt-2">12th Passing State *</label>
                  <select name="hsc_state" class="form-select" id="floatingHscState" aria-label="{{ __('12th Passing State') }}" data-control="select2" data-placeholder="{{ __('12th Passing State') }}" required>
                      <option value="">{{ __('Select 12th Passing State') }}</option>
                      @foreach($states as $value)
                      <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}" {{ $value['id'] == (auth()->user()->user_neet_info->state_id_12th ?? '') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('hsc_state'))
                  <span class="text-danger">{{ $errors->first('hsc_state') }}</span>
                  @endif
              </div>
              <div class="form-floating">
                  <label for="floatingPincode">{{ __('Pincodes Based on Aadhaar *') }}</label>
                  <input name="pincode" type="number" minlength="6" maxlength="6" class="form-control" id="floatingPincode" placeholder="Enter Pincode" value="{{ (auth()->user()->user_neet_info->pincode ?? '') }}" required />
                  @if ($errors->has('pincode'))
                  <span class="text-danger">{{ $errors->first('pincode') }}</span>
                  @endif
              </div>
              <div class="row mb-6">
              <div class="col-lg-6 fv-row">
                  <div class="form-floating">
                      <label for="floatingState">{{ __('State *') }}</label>
                      <input name="state" type="text" class="form-control mb-3 mb-lg-0" id="floatingState" placeholder="Enter State" value="{{ (auth()->user()->user_neet_info->state_by_pincode ?? '') }}" required />
                      @if ($errors->has('state'))
                      <span class="text-danger">{{ $errors->first('state') }}</span>
                      @endif
                  </div>
              </div>
                  <div class="col-lg-6 fv-row">
                      <div class="form-floating">
                      <label for="floatingCity">City *</label>
                      <select name="city" class="form-select" id="floatingCity" aria-label="{{ __('City based on area pincode') }}" data-control="select2" data-placeholder="{{ __('City based on area pincode') }}" required>
                          <option value="0">{{ __('Select City') }}</option>
                      </select>
                      @if ($errors->has('city'))
                      <span class="text-danger">{{ $errors->first('city') }}</span>
                      @endif
                  </div>
              </div>
              </div>
            </div>
            <div class="col-lg-6 p-3">
              <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-6 fv-row">
                    <div class="form-floating">
                    <label for="floatingNeetCategory">NEET Category *</label>
                        <select name="neet_category" id="floatingNeetCategory" aria-label="{{ __('NEET Category') }}" data-control="select2" data-placeholder="{{ __('NEET Category') }}" class="form-select" required>
                            <option value="">{{ __('Select NEET Category') }}</option>
                            @foreach(App\Models\CategoryRoundCutoffCollege::NEET_CATEGORY as $key => $value)
                            <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == (auth()->user()->user_neet_info->neet_category ?? '') ? 'selected' :'' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('neet_category'))
                        <span class="text-danger">{{ $errors->first('neet_category') }}</span>
                        @endif
                    </div>
                </div>
                <!--begin::Col-->
                <div class="col-lg-6 fv-row">
                    <div class="form-floating">
                        <label for="floatingStateCategory">State Category *</label>
                        <select name="state_category" id="floatingStateCategory" aria-label="{{ __('State Category') }}" data-control="select2" data-placeholder="{{ __('State Category') }}" class="form-select" required>
                            <option value="">{{ __('Select State Category') }}</option>
                            @foreach(App\Models\CategoryRoundCutoffCollege::STATE_CATEGORY as $key => $value)
                            <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == (auth()->user()->user_neet_info->state_category ?? '') ? 'selected' :'' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('state_category'))
                        <span class="text-danger">{{ $errors->first('state_category') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <!-- <div class="row mb-6">
            </div> -->
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                        <label for="floatingGender">Gender *</label>
                        <select name="gender" id="floatingGender" aria-label="{{ __('Select Gender') }}" data-control="select2" data-placeholder="{{ __('Select Gender') }}" class="form-select" required>
                            <option value="">{{ __('Select Gender') }}</option>
                            <option {{ 'male' == (auth()->user()->user_neet_info->gender ?? '') ? 'selected' :'' }} value="male">Male</option>
                            <option {{ 'female' == (auth()->user()->user_neet_info->gender ?? '') ? 'selected' :'' }} value="female">Female</option>
                        </select>
                        @if ($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                        <label for="floatingPhysicalHandicap">Whether Physically Handicapped Candidate? *</label>
                        <select name="physical_handicap" id="floatingPhysicalHandicap" aria-label="{{ __('Whether Physically Handicapped Candidate?') }}" data-control="select2" data-placeholder="{{ __('Whether Physically Handicapped Candidate?') }}" class="form-select" required>
                            <option value="">{{ __('Select Candidate') }}</option>
                            <option {{ 'yes' == (auth()->user()->user_neet_info->physical_handicap ?? '') ? 'selected' :'' }} value="yes">Yes</option>
                            <option {{ 'no' == (auth()->user()->user_neet_info->physical_handicap ?? '') ? 'selected' :'' }} value="no">No</option>
                        </select>
                        @if ($errors->has('physical_handicap'))
                        <span class="text-danger">{{ $errors->first('physical_handicap') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                        <label for="floatingArmedForce">Whether Belongs To Armed Force? *</label>
                        <select name="armed_force" id="floatingArmedForce" aria-label="{{ __('Whether Belongs To Armed Force?') }}" data-control="select2" data-placeholder="{{ __('Whether Belongs To Armed Force?') }}" class="form-select" required>
                            <option value="">{{ __('Select Armed Force') }}</option>
                            <option {{ 'yes' == (auth()->user()->user_neet_info->armed_force ?? '') ? 'selected' :'' }} value="yes">Yes</option>
                            <option {{ 'no' == (auth()->user()->user_neet_info->armed_force ?? '') ? 'selected' :'' }} value="no">No</option>
                        </select>
                        @if ($errors->has('armed_force'))
                        <span class="text-danger">{{ $errors->first('armed_force') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                        <label for="floatingMinority">Whether Belongs To Minority? *</label>
                        <select name="minority" id="floatingMinority" aria-label="{{ __('Whether Belongs To Minority?') }}" data-control="select2" data-placeholder="{{ __('Whether Belongs To Minority?') }}" class="form-select" required>
                            <option value="">{{ __('Select Minority') }}</option>
                            <option {{ 'yes' == (auth()->user()->user_neet_info->minority ?? '') ? 'selected' :'' }} value="yes">Yes</option>
                            <option {{ 'no' == (auth()->user()->user_neet_info->minority ?? '') ? 'selected' :'' }} value="no">No</option>
                        </select>
                        @if ($errors->has('minority'))
                        <span class="text-danger">{{ $errors->first('minority') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Col-->
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                        <label for="floatingEligibleQuota">Whether You Are Eligible For Any Quota? *</label>
                        <select name="eligible_quota" id="floatingEligibleQuota" aria-label="{{ __('Whether You Are Eligible For Any Quota?') }}" data-control="select2" data-placeholder="{{ __('Whether You Are Eligible For Any Quota?') }}" class="form-select" required>
                            <option value="">{{ __('Select Quota') }}</option>
                            <option {{ 'yes' == (auth()->user()->user_neet_info->eligible_quota ?? '') ? 'selected' :'' }} value="yes">Yes</option>
                            <option {{ 'no' == (auth()->user()->user_neet_info->eligible_quota ?? '') ? 'selected' :'' }} value="no">No</option>
                        </select>
                        @if ($errors->has('eligible_quota'))
                        <span class="text-danger">{{ $errors->first('eligible_quota') }}</span>
                        @endif
                    </div>
                </div>
                <!--end::Col-->
            </div>            
            </div>

          </div>
          <div class="row mb-6 d-none" >
              <div class="form-floating mb-1">
                  <label for="floatingArea">Area *</label>
                  <select name="area" class="form-select" id="floatingArea" aria-label="{{ __('Area') }}" data-control="select2" data-placeholder="{{ __('Area') }}" required>
                      <option value="">{{ __('Select Area') }}</option>
                      <option {{ 'Surat' == old('area') ? 'selected' :'' }} value="Surat">Surat</option>
                      <option {{ 'Ahmedabad' == old('area') ? 'selected' :'' }} value="Ahmedabad">Ahmedabad</option>
                      <option {{ 'None' == old('area') ? 'selected' :'selected' }} value="None">None</option>
                  </select>
                  @if ($errors->has('area'))
                  <span class="text-danger">{{ $errors->first('area') }}</span>
                  @endif
              </div>
          </div>
          </div>
            {{-- </div> --}}
          {{-- </div> --}}
          <div class="card-title col-3">
            <button class="btn btn-primary login-btn" type="submit">Update Profile</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
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
</script>
@endsection