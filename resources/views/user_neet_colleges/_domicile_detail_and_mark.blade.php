@auth
<div class="row">
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">{{ __('Name') }}</label>
            <div class="col-lg-7">
                <span class="fw-bolder fs-6 text-dark">
                    {{ ucwords(auth()->user()->name) }}
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">{{ __('12th Passign State') }}</label>
            <div class="col-lg-7 fv-row">
                <span class="fw-bold fs-6" id="hsc_marks">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->state_12th))
                    {{ auth()->user()->user_neet_info->state_12th->name }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">
                {{ __('10th Passing State') }}
            </label>
            <div class="col-lg-7 d-flex align-items-center">
                <span class="fw-bolder fs-6 me-2" id="ssc_marks">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->state_10th))
                    {{ auth()->user()->user_neet_info->state_10th->name }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">{{ __('Domicile State') }}</label>
            <div class="col-lg-7">
                <span class="fw-bolder fs-6 text-dark" id="domicile_state">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->neet_category))
                    {{ auth()->user()->user_neet_info->neet_category }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">
                {{ __('NEET Category') }}
            </label>
            <div class="col-lg-7">
                <span class="fw-bolder fs-6 text-dark" id="neet_category">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->neet_category))
                    {{ auth()->user()->user_neet_info->neet_category }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-5 fw-bold text-muted">{{ __('State Category') }}</label>
            <div class="col-lg-7">
                <span class="fw-bolder fs-6 text-dark" id="state_category">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->state_category))
                    {{ auth()->user()->user_neet_info->state_category }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-10">
            <label class="col-lg-5 fw-bold text-muted">{{ __('Minority') }}</label>
            <div class="col-lg-7">
                <span class="fw-bold fs-6" id="minority">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->minority))
                    {{ ucfirst(auth()->user()->user_neet_info->minority) }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row mb-10">
            <label class="col-lg-5 fw-bold text-muted">{{ __('Quota') }}</label>
            <div class="col-lg-7">
                <span class="fw-bold fs-6" id="quota">
                    @if(!is_null(auth()->user()->user_neet_info))
                    @if(!is_null(auth()->user()->user_neet_info->eligible_quota))
                    {{ ucfirst(auth()->user()->user_neet_info->eligible_quota) }}
                    @else
                    N/A
                    @endif
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>
@endauth
@auth
<div id="kt_account_profile_details" class="collapse show">
    <!--begin::Form-->
    <form id="kt_account_profile_details_form" class="form" method="POST" action="{{ route('neet-college.user.update', [auth()->user()->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
        {{-- <div class="card-body border-top p-9"> --}}
            <!--begin::Input group-->
            <div class="row mb-6">
                <div class="col-lg-12 fv-row">
                    <div class="form-floating">
                    <label for="floatingMarks">{{ __('Enter Your Marks') }}</label>
                    <input name="marks" type="number" max="720" step="1" class="form-control mb-3 mb-lg-0" id="floatingMarks" placeholder="" value="{{ old('marks') }}" required />
                    @if ($errors->has('marks'))
                    <span class="text-danger">{{ $errors->first('marks') }}</span>
                    @endif
                </div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Input group-->
        {{-- </div> --}}
        <!--end::Card body-->
    </form>
    <!--end::Form-->
</div>
@endauth
    <!--end::Content-->
{{-- </div> --}}
<!--end::Basic info-->