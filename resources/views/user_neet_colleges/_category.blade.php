<div class="row mb-6">
    <!--begin::Col-->
    <div class="col-lg-12 fv-row">
        <div class="form-floating">
            <select name="neet_category" id="floatingNeetCategory" aria-label="{{ __('NEET Category') }}" data-control="select2" data-placeholder="{{ __('NEET Category') }}" class="form-select" required>
                <option value="">{{ __('NEET Category') }}</option>
                @foreach(App\Models\CategoryRoundCutoffCollege::NEET_CATEGORY as $key => $value)
                <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == old('neet_category') ? 'selected' :'' }}>{{ $value }}</option>
                @endforeach
            </select>
            <label for="floatingNeetCategory">NEET Category *</label>
            @if ($errors->has('neet_category'))
            <span class="text-danger">{{ $errors->first('neet_category') }}</span>
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
            <select name="state_category" id="floatingStateCategory" aria-label="{{ __('State Category') }}" data-control="select2" data-placeholder="{{ __('State Category') }}" class="form-select" required>
                <option value="">{{ __('State Category') }}</option>
                @foreach(App\Models\CategoryRoundCutoffCollege::STATE_CATEGORY as $key => $value)
                <option data-kt-flag="{{ $value }}" value="{{ $value }}" {{ $value == old('state_category') ? 'selected' :'' }}>{{ $value }}</option>
                @endforeach
            </select>
            <label for="floatingStateCategory">State Category *</label>
            @if ($errors->has('state_category'))
            <span class="text-danger">{{ $errors->first('state_category') }}</span>
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
            <select name="gender" id="floatingGender" aria-label="{{ __('Gender') }}" data-control="select2" data-placeholder="{{ __('Gender') }}" class="form-select" required>
                <option value="">{{ __('Gender') }}</option>
                <option {{ 'male' == old('hsc_state') ? 'selected' :'' }} value="male">Male</option>
                <option {{ 'female' == old('hsc_state') ? 'selected' :'' }} value="female">Female</option>
            </select>
            <label for="floatingGender">Gender *</label>
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
            <select name="physical_handicap" id="floatingPhysicalHandicap" aria-label="{{ __('Whether Physically Handicapped Candidate?') }}" data-control="select2" data-placeholder="{{ __('Whether Physically Handicapped Candidate?') }}" class="form-select" required>
                <option value="">{{ __('Whether Physically Handicapped Candidate?') }}</option>
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
            </select>
            <label for="floatingPhysicalHandicap">Whether Physically Handicapped Candidate? *</label>
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
            <select name="armed_force" id="floatingArmedForce" aria-label="{{ __('Whether Belongs To Armed Force?') }}" data-control="select2" data-placeholder="{{ __('Whether Belongs To Armed Force?') }}" class="form-select" required>
                <option value="">{{ __('Whether Belongs To Armed Force?') }}</option>
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
            </select>
            <label for="floatingArmedForce">Whether Belongs To Armed Force? *</label>
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
            <select name="minority" id="floatingMinority" aria-label="{{ __('Whether Belongs To Minority?') }}" data-control="select2" data-placeholder="{{ __('Whether Belongs To Minority?') }}" class="form-select" required>
                <option value="">{{ __('Whether Belongs To Minority?') }}</option>
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
            </select>
            <label for="floatingMinority">Whether Belongs To Minority? *</label>
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
            <select name="eligible_quota" id="floatingEligibleQuota" aria-label="{{ __('Whether You Are Eligible For Any Quota?') }}" data-control="select2" data-placeholder="{{ __('Whether You Are Eligible For Any Quota?') }}" class="form-select" required>
                <option value="">{{ __('Whether You Are Eligible For Any Quota?') }}</option>
                <option {{ 'yes' == old('hsc_state') ? 'selected' :'' }} value="yes">Yes</option>
                <option {{ 'no' == old('hsc_state') ? 'selected' :'' }} value="no">No</option>
            </select>
            <label for="floatingEligibleQuota">Whether You Are Eligible For Any Quota? *</label>
            @if ($errors->has('eligible_quota'))
            <span class="text-danger">{{ $errors->first('eligible_quota') }}</span>
            @endif
        </div>
    </div>
    <!--end::Col-->
</div>
