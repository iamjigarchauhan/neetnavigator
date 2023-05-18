<form action="{{ $fullCurrentUrl }}" method="get" id="sidebarFilterForm">
    <div class="course-details-widget">
        @foreach($filterOptions as $fKey => $fValue)
        <div class="course-widget-wrap">
            <div class="cd-course-news-widget yl-headline">
                <h3 class="cd-widget-title">{{ $fValue['label'] }}:</h3>
                <div class="cd-course-news-item">
                    @isset($fValue['items'])
                    @foreach($fValue['items'] as $fItemKey => $fItem)
                    <div class="cd-course-news-img-text border-0 pb-0">
                        <div class="cd-comment-input-field float-left">
                            @if($fValue['valueType'] == 'value')
                            <input value="{{ $fItem }}" type="checkbox" name="{{ $fKey.'['.$fItemKey.']' }}" id="chkFilter_{{ $fKey . $fItemKey }}" onchange="$('#sidebarFilterForm').submit();" @if(isset(request()->get($fKey)[$fItemKey]) && request()->get($fKey)[$fItemKey]) == $fItem) checked @endif>
                            @else
                            <input value="{{ $fItemKey }}" type="checkbox" name="{{ $fKey.'['.$fItemKey.']' }}" id="chkFilter_{{ $fKey . $fItemKey }}" onchange="$('#sidebarFilterForm').submit();" @if(isset(request()->get($fKey)[$fItemKey]) && request()->get($fKey)[$fItemKey]) == fItemKey) checked @endif>
                            @endif
                        </div>
                        <div class="cd-course-news-text ml-4">
                            <label for="chkFilter_{{ $fKey . $fItemKey }}">{{ $fItem }}</label>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>
        @endforeach
    </div>
</form>