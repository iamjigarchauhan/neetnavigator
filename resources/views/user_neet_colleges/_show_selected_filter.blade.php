@php
$filterNames = [
'topFilterFee' => 'Sort By Fees',
'topFilterSearch' => 'Search By',
'collegeType' => 'College Type',
'stateFilter' => 'State',
'cityFilter' => 'City',
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
        @if(is_array(request()->get($fNKey)))
        @foreach(request()->get($fNKey) as $val)
        <div class="border mr-2 mb-0">
            @if($fNKey == 'stateFilter' && isset($filterOptions['stateFilter']['items'][$val]))
            <div class="d-inline-flex p-2 text-nowrap">
                <label class="text-muted mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ $filterOptions['stateFilter']['items'][$val] }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger d-none">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @elseif($fNKey == 'cityFilter' && isset($filterOptions['cityFilter']['items'][$val]))
            <div class="d-inline-flex p-2 text-nowrap">
                <label class="text-muted mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ $filterOptions['cityFilter']['items'][$val] }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger d-none">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @else
            <div class="d-inline-flex p-2 text-nowrap">
                <label class="text-muted mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ $val }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger d-none">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
            @endif
        </div>
        @endforeach
        @elseif($fNKey == 'topFilterFee')
        <div class="border mr-2 mb-0">
            <div class="d-inline-flex p-2 text-nowrap">
                <label class="text-muted mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ (request()->get($fNKey) == 'asc' ? 'Low To High' : 'High To Low') }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger d-none">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
        </div>
        @else
        <div class="border mr-2 mb-0">
            <div class="d-inline-flex p-2 text-nowrap">
                <label class="text-muted mb-0">{{ $fNValue }}:</label>
                <span class="ml-2 d-inline-flex">{{ request()->get($fNKey) }}
                    <a href="{{ route('neet-college.college-list') }}" class="ml-2 text-danger d-none">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </div>
        </div>
        @endif
        @endif
        @endforeach
        @if($isFilter)
        <a href="{{ route('neet-college.college-list') }}" class="btn btn-danger text-white">Clear All</a>
        @endif
    </div>
</div>