<form action="{{ $fullCurrentUrl }}" method="get" id="topFilterForm">
    <div class="row">
        <div class="col-md-5">
            <div class="course-grid-top-bar">
                <div class="course-grid-showing-result">
                    <div class="yl-course-grid-list float-left">
                        <a href="#"><i class="fas fa-th"></i></a>
                        <a href="#"><i class="fas fa-list"></i></a>
                    </div>
                    <span class="show-result-text">Showing {{ $colleges->firstItem() }} - {{ $totalcolleges > $colleges->perPage() ?  $colleges->currentPage() * $colleges->perPage() : $totalcolleges }} of {{ $totalcolleges }} results</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="course-grid-top-bar">
                <div class="yl-course-search position-relative">
                    <select name="topFilterFee" class="form-select js-example-basic-single border-0" id="topFilterFee" aria-label="{{ __('Sort By Fees') }}" data-control="select2" data-placeholder="{{ __('Sort By Fees') }}" onchange="$('#topFilterForm').submit();">
                        <option value="">{{ __('Sort By Fees') }}</option>
                        <option value="desc" @if(request()->get('topFilterFee') == 'desc') selected @endif>High To Low</option>
                        <option value="asc" @if(request()->get('topFilterFee') == 'asc') selected @endif>Low To High</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="course-grid-top-bar">
                <div class="yl-course-search position-relative">
                    <input type="text" placeholder="Enter your course" name="topFilterSearch">
                    <button class="btn btn-icon">
                        Search
                    </button>
                </div>
            </div>
        </div>
</form>