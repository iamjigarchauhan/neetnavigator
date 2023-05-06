<div class="row mb-6">
    <div class="col-lg-12 fv-row">
        <div class="form-floating">
        <label for="floatingSscState">10th Passing State *</label>
            <select name="ssc_state" class="form-select js-example-basic-single" id="floatingSscState" aria-label="{{ __('10th Passing State') }}" data-control="select2" data-placeholder="{{ __('10th Passing State') }}" required>
                <option value="">{{ __('Select 10th Passing State') }}</option>
                @foreach($states as $value)
                <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}" {{ $value['id'] == old('ssc_state') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                @endforeach
                </select>
            @if ($errors->has('ssc_state'))
            <span class="text-danger">{{ $errors->first('ssc_state') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row mb-6">
    <div class="col-lg-12 fv-row">
        <div class="form-floating">
            <label for="floatingHscState">12th Passing State *</label>
            <select name="hsc_state" class="form-select" id="floatingHscState" aria-label="{{ __('12th Passing State') }}" data-control="select2" data-placeholder="{{ __('12th Passing State') }}" required>
                <option value="">{{ __('Select 12th Passing State') }}</option>
                @foreach($states as $value)
                <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}" {{ $value['id'] == old('hsc_state') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                @endforeach
            </select>
            @if ($errors->has('hsc_state'))
            <span class="text-danger">{{ $errors->first('hsc_state') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row mb-6">
    <div class="col-lg-12 fv-row">
    <div class="form-floating">
        <label for="floatingPincode">{{ __('Pincode Based on Aadhaar *') }}</label>
        <input name="pincode" type="number" maxlength="6" class="form-control" id="floatingPincode" placeholder="Enter Pincode" value="{{ old('pincode') }}" required />
        @if ($errors->has('pincode'))
        <span class="text-danger">{{ $errors->first('pincode') }}</span>
        @endif
    </div>
    </div>
</div>
<div class="row mb-6">
    <div class="col-lg-6 fv-row">
        <div class="form-floating">
            <label for="floatingState">{{ __('State *') }}</label>
            <input name="state" type="text" class="form-control mb-3 mb-lg-0" id="floatingState" placeholder="Enter State" value="{{ old('state') }}" required />
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
<div class="row mb-6">
    <div class="col-lg-12 fv-row">
        <div class="form-floating">
            <label for="floatingArea">Area *</label>
            <select name="area" class="form-select" id="floatingArea" aria-label="{{ __('Area') }}" data-control="select2" data-placeholder="{{ __('Area') }}" required>
                <option value="">{{ __('Select Area') }}</option>
                <option {{ 'Surat' == old('area') ? 'selected' :'' }} value="Surat">Surat</option>
                <option {{ 'Ahmedabad' == old('area') ? 'selected' :'' }} value="Ahmedabad">Ahmedabad</option>
                <option {{ 'None' == old('area') ? 'selected' :'' }} value="None">None</option>
            </select>
            @if ($errors->has('area'))
            <span class="text-danger">{{ $errors->first('area') }}</span>
            @endif
        </div>
    </div>
</div>
        