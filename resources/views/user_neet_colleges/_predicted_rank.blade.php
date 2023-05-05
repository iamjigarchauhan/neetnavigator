{{-- <!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Your Predicted Rank') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9"> --}}
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Marks') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <span class="fw-bolder fs-6 text-dark">
                            @if(isset($marks))
                            {{ $marks }}
                            @else
                            -
                            @endif
                        </span>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Row-->

            <!--begin::Input group-->
            <div class="col-md-6">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">{{ __('Minimum Rank') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7 fv-row">
                        <span class="fw-bold fs-6">
                            @if(isset($markRank) && !is_null($markRank))
                            {{ $markRank->min_rank }}
                            @else
                            -
                            @endif
                        </span>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="col-md-6">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-5 fw-bold text-muted">
                        {{ __('Maximum Rank') }}
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-7 d-flex align-items-center">
                        <span class="fw-bolder fs-6 me-2">
                            @if(isset($markRank) && !is_null($markRank))
                            {{ $markRank->max_rank }}
                            @else
                            -
                            @endif
                        </span>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
        </div>
        <!--end::Input group-->
{{-- 
    </div>
    <!--end::Card body-->
</div>
<!--end::details View--> --}}