@php
$filterNames = [
'topFilterFee' => 'Sort By Fees',
'topFilterSearch' => 'Search By',
'collegeType' => 'College Type',
'stateFilter' => 'State',
];
$isFilter = 0;
@endphp
<div class="col-md-12">
    <div class="d-flex">
        @foreach($filterNames as $fNKey => $fNValue)
        @if(request()->get($fNKey) !== null && !empty(request()->get($fNKey)))
        @php
        $isFilter=1;
        @endphp
        <div class="border mr-2 mb-0">
            @if(is_array(request()->get($fNKey)))
            @foreach(request()->get($fNKey) as $val)
            @if($fNKey == 'stateFilter')
            <div class="d-inline-flex p-2">
                <label class="fw-bolder mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ $filterOptions['stateFilter']['items'][$val] }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @else
            <div class="d-inline-flex p-2">
                <label class="fw-bolder mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ $val }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @endif
            @endforeach
            @elseif($fNKey == 'topFilterFee')
            <div class="d-inline-flex p-2">
                <label class="fw-bolder mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ (request()->get($fNKey) == 'asc' ? 'Low To High' : 'High To Low') }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @else
            <div class="d-inline-flex p-2">
                <label class="fw-bolder mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ request()->get($fNKey) }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @endif
        </div>
        @endif
        @endforeach
        @if($isFilter)
        <a href="{{ route('neet-college.college-list') }}" class="btn btn-danger">Clear All</a>
        @endif
    </div>
</div>