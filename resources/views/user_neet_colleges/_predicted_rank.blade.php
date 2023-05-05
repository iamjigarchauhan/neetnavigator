<div class="row">
<div class="col-md-6">
    <div class="row mb-7">
        <label class="col-lg-5 fw-bold text-muted">{{ __('Marks') }}</label>
        <div class="col-lg-7">
            <span class="fw-bolder fs-6 text-dark predicted-marks">
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
