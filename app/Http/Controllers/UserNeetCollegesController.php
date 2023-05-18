<?php

namespace App\Http\Controllers;

use App\DataTables\EstimatedNeetCollegeDataTable;
use App\Http\Requests\CheckUserMark;
use App\Http\Requests\StoreUserNeetInfo;
use App\Models\City;
use App\Models\NeetRangeRanking;
use App\Models\RangeRanking;
use App\Models\State;
use App\Models\College;
use App\Models\UserNeetInfo;
use Http;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserNeetCollegesController extends Controller
{
    public function __construct()
    {
        if (!Auth::check()) {
            return redirect()->route('register-user');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->states = State::allState('active');
        session()->forget('user_mark');
        return view('user_neet_colleges.index2', $this->data);
    }
    // public function new()
    // {
    //     $this->states = State::allState('active');
    //     session()->forget('user_mark');
    //     return view('user_neet_colleges.index', $this->data);
    // }

    /**
     * Display a listing of the resource.
     */
    public function collegeList(EstimatedNeetCollegeDataTable $dataTable)
    {
        $marks = session('user_mark');
        $category = auth()->user()->user_neet_info->state_category;
        $this->markRank = NeetRangeRanking::getRankByMark($marks, $category);
        $collegeQuery = College::whereIn('id',$this->markRank->pluck('college_id'))
                                ->where(function($query){
                                    $states = session('states');
                                    if(!empty($states))
                                    $query->whereIn('state_id',$states);
                                });
        $this->totalcolleges = $collegeQuery->count();
        $this->colleges = $collegeQuery->paginate(12);
        return view('user_neet_colleges.result', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserNeetInfo $request)
    {
        // dd($request);
        UserNeetInfo::updateOrCreate([
            'user_id' => Auth::user()->id,
        ], [
            'state_id_10th' => $request->ssc_state,
            'state_id_12th' => $request->hsc_state,
            'pincode' => $request->pincode,
            'state_by_pincode' => $request->state,
            'city_id' => $request->city,
            'area' => $request->area,
            'neet_category' => $request->neet_category,
            'state_category' => $request->state_category,
            'gender' => $request->gender,
            'physical_handicap' => $request->physical_handicap,
            'armed_force' => $request->armed_force,
            'minority' => $request->minority,
            'eligible_quota' => $request->eligible_quota,
        ]);
        $this->user = UserNeetInfo::with(['city','state_10th','state_12th','user'])->whereUserId(Auth::user()->id)->first();
        if($request->ajax())
        return response()->json($this->data);
        else 
        return redirect()->route('neet-college.profile');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $this->states = State::allState('active');
        return view('user_neet_colleges.profile',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CheckUserMark $request, string $id)
    {
        // dd($request->all());
        if ($request->marks > 0) {
            session()->put('user_mark', $request->marks);
            $category = auth()->user()->user_neet_info->state_category;
            $this->markRank = NeetRangeRanking::getRankByMark($request->marks, $category);
            $rank = NeetRangeRanking::where('min_mark','<=',$request->marks)
            ->where('max_mark','>=',$request->marks)->first();
            $this->min_rank = $rank->max_rank;
            $this->max_rank = $rank->min_rank; 
            $this->marks = $request->marks;
            $collegestates = College::whereIn('id',$this->markRank->pluck('college_id'))->pluck('state_id','id')->toArray();
            $statesids = array_unique(array_values($collegestates));
            $collegeids = array_unique(array_keys($collegestates));
            $this->states = State::getCollegeCountByState($statesids,$collegeids);
            return response()->json($this->data);
            // return redirect()->route('neet-college.mark-rank');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Get state name by pincode
     */
    public function checkPincode(string $pincode)
    {
        $state = '';
        $msg = 'Invalid pincode';
        $cities = [];
        if (strlen($pincode) > 5) {
            $response = Http::get('https://api.postalpincode.in/pincode/' . $pincode);
            $jsonData = $response->json();
            if (!empty($jsonData) && isset($jsonData[0]['Status']) && strtolower($jsonData[0]['Status']) == 'success') {
                $state = $jsonData[0]['PostOffice'][0]['State'];
                $msg = $jsonData[0]['Message'];
                $cities = City::allCity('active', $state);
            }
        }
        return response()->json([
            'status' => 'success',
            'message' => $msg,
            'data' => [
                'state' => $state,
                'cities' => $cities
            ],
        ]);
    }

    public function rankByMark()
    {
        $marks = session('user_mark');
        $this->markRank = NeetRangeRanking::getRankByMark($marks);
        if ($this->markRank != null) {
            $this->marks = $marks;
            $this->states = State::getCollegeCountByState();
            return view('user_neet_colleges.index', $this->data);
        } else {
            return redirect()->route('neet-college.user.index')->withError('Your marks did not match with ranking.');
        }
    }

    public function checkout(Request $request)
    {
        // dd($request->all());
        session()->forget('checkoutSummary');
        $checkoutSummary = [
            'state_id' => $request->state_id,
            'cart_summary' => $request->cart_summary,
        ];
        session()->put('states', $request->state_id);
        session()->put('checkoutSummary', $checkoutSummary);
        return redirect()->route('neet-college.college-list');
    }
}
