<div class="row mb-6">
    <!--begin::Col-->
    <div class="col-lg-6 fv-row">
        <div class="form-floating">
        <label for="floatingNeetCategory">NEET Category *</label>
            <select name="neet_category" id="floatingNeetCategory" aria-label="{{ __('NEET Category') }}" data-control="select2" data-placeholder="{{ __('NEET Category') }}" class="form-select" required>
                <option value="">{{ __('Select NEET Category') }}</option>
                @foreach(App\Models\CategoryRoundCutoffCollege::NEET_CATEGORY as $key => $value)
                <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == old('neet_category') ? 'selected' :'' }}>{{ $value }}</option>
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
                <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == old('state_category') ? 'selected' :'' }}>{{ $value }}</option>
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
                <option {{ 'male' == old('hsc_state') ? 'selected' :'' }} value="male">Male</option>
                <option {{ 'female' == old('hsc_state') ? 'selected' :'' }} value="female">Female</option>
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
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
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
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
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
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
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
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
            </select>
            @if ($errors->has('eligible_quota'))
            <span class="text-danger">{{ $errors->first('eligible_quota') }}</span>
            @endif
        </div>
    </div>
    <!--end::Col-->
</div>
