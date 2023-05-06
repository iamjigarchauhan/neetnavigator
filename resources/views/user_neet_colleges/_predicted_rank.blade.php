<div class="align_marks_container">
    <div class="align_markds">
        <label class="fw-bold text-muted">{{ __('Marks:') }}</label>
        <span class="fw-bolder fs-6 text-dark predicted-marks">
            @if(isset($marks))
            {{ $marks }}
            @else
            -
            @endif
        </span>
    </div>
    <div class="align_markds">
        <label class="fw-bold text-muted">{{ __('Minimum Rank:') }}</label>
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
            {{ __('Maximum Rank:') }}
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
