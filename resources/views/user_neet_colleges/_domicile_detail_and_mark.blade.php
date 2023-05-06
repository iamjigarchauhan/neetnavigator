{{-- <!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Your Domicile') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9 pb-0"> --}}
        <!--begin::Row-->
        @auth
        <div class="row">
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Name') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <span class="fw-bolder fs-6 text-dark">
                            {{ ucwords(auth()->user()->name) }}
                        </span>
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('12th Passign State') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7 fv-row">
                        <span class="fw-bold fs-6">
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
                    <!--end::Col-->
                </div>
            </div>

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">
                        {{ __('10th Passing State') }}
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7 d-flex align-items-center">
                        <span class="fw-bolder fs-6 me-2">
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
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Domicile State') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <a href="#" class="fw-bold fs-6 text-dark text-hover-primary">
                            @if(!is_null(auth()->user()->user_neet_info))
                            @if(!is_null(auth()->user()->user_neet_info->state_by_pincode))
                            {{ auth()->user()->user_neet_info->state_by_pincode }}
                            @else
                            N/A
                            @endif
                            @else
                            N/A
                            @endif
                        </a>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">
                        {{ __('NEET Category') }}
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <span class="fw-bolder fs-6 text-dark">
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
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('State Category') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <span class="fw-bolder fs-6 text-dark">
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
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-10">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Minority') }}</label>
                    <!--begin::Label-->

                    <!--begin::Label-->
                    <div class="col-lg-7">
                        <span class="fw-bold fs-6">
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
                    <!--begin::Label-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-12">
                <div class="row mb-10">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Quota') }}</label>
                    <!--begin::Label-->

                    <!--begin::Label-->
                    <div class="col-lg-7">
                        <span class="fw-bold fs-6">
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
                    <!--begin::Label-->
                </div>
            </div>
        </div>
        @endauth
        <!--end::Input group-->

    {{-- </div>
    <!--end::Card body-->
</div> --}}
<!--end::details View-->

<!--begin::Basic info-->
{{-- <div class="card {{ $class }}">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Enter your Marks') }}</h3>
        </div>
        <!--end::Card title-->
    </div> --}}
    <!--begin::Card header-->

    <!--begin::Content-->
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
                        <input name="marks" type="number" max="999" step="1" class="form-control mb-3 mb-lg-0" id="floatingMarks" placeholder="" value="{{ old('marks') }}" required />
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