<style>
    .align_marks_container{padding-right: 20px !important;}
    .align_markds {display: grid !important; gap: 0px !important;}
    .table-responsive{}
</style>

<div class="align_marks_container text-center d-flex justify-content-between">
    <div class="align_markds">
        <label class="fw-bold text-muted">{{ __('Marks') }}</label>
        <span class="fw-bolder fs-6 text-dark predicted-marks">
            @if(isset($marks))
            {{ $marks }}
            @else
            -
            @endif
        </span>
    </div>
    <div class="align_markds">
        <label class="fw-bold text-muted">{{ __('Min. Rank') }}</label>
        <span class="fw-bold fs-6" id="minimum_rank">
            @if(isset($markRank) && !is_null($markRank))
            {{ $markRank->min_rank }}
            @else
            -
            @endif
        </span>
    </div>
    <div class="align_markds">
        <label class="fw-bold text-muted">
            {{ __('Max. Rank') }}
        </label>
        <span class="fw-bolder fs-6 me-2" id="maximum_rank">
            @if(isset($markRank) && !is_null($markRank))
            {{ $markRank->max_rank }}
            @else
            -
            @endif
        </span>
    </div>
</div>
<p class="m-0">&nbsp;</p>