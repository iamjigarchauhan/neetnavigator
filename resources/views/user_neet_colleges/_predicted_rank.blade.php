<div class="row">
    <div class="col-md-12">
        <div class="row mb-7">
            <label class="col-lg-8 fw-bold text-muted">{{ __('Marks') }}</label>
            <div class="col-lg-4">
                <span class="fw-bolder fs-6 text-dark predicted-marks">
                    @if(isset($marks))
                    {{ $marks }}
                    @else
                    -
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-7">
            <label class="col-lg-8 fw-bold text-muted">{{ __('Minimum Rank') }}</label>
            <div class="col-lg-4 fv-row">
                <span class="fw-bold fs-6" id="minimum_rank">
                    @if(isset($markRank) && !is_null($markRank))
                    {{ $markRank->min_rank }}
                    @else
                    -
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-8 fw-bold text-muted">
                {{ __('Maximum Rank') }}
            </label>
            <div class="col-lg-4 d-flex align-items-center">
                <span class="fw-bolder fs-6 me-2" id="maximum_rank">
                    @if(isset($markRank) && !is_null($markRank))
                    {{ $markRank->max_rank }}
                    @else
                    -
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>
