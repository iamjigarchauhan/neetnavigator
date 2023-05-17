<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public static function getCollegeCount($collegeIds = [], $stateIds = []) {

        // filters
        $topFilterSearch = (request()->get('topFilterSearch'));
        $collegeType = request()->get('collegeType');
        $stateFilter = request()->get('stateFilter');
        if (!empty($stateFilter)) {
            $stateIds = $stateFilter;
        }

        return self::when(!empty($collegeIds), function($q) use($collegeIds){
            $q->whereIn('id', array_unique($collegeIds));
        })
        ->when(!empty($stateIds), function($q) use($stateIds){
            $q->whereIn('state_id',array_unique($stateIds));
        })
        ->where('status', 'active')
        ->when(!empty($topFilterSearch), function($q) use($topFilterSearch) {
            $q->where('name', 'like', '%'.$topFilterSearch.'%');
        })
        ->when(!empty($collegeType), function($q) use($collegeType) {
            $q->whereIn('institution_type', $collegeType);
        })
        ->count();
    }

    public static function getPaginateColleges($limit = 12, $collegeIds = [], $stateIds = []) {
        // filters
        $topFilterFee = strtolower(request()->get('topFilterFee'));
        $topFilterSearch = (request()->get('topFilterSearch'));
        $collegeType = request()->get('collegeType');
        $stateFilter = request()->get('stateFilter');
        if (!empty($stateFilter)) {
            $stateIds = $stateFilter;
        }

        return self::when(!empty($collegeIds), function($q) use($collegeIds){
            $q->whereIn('id',array_unique($collegeIds));
        })
        ->when(!empty($stateIds), function($q) use($stateIds){
            $q->whereIn('state_id',array_unique($stateIds));
        })
        ->where('status', 'active')
        ->when(!empty($topFilterSearch), function($q) use($topFilterSearch) {
            $q->where('name', 'like', '%'.$topFilterSearch.'%');
        })
        ->when(!empty($collegeType), function($q) use($collegeType) {
            $q->whereIn('institution_type', $collegeType);
        })
        ->when(in_array($topFilterFee, ['asc', 'desc']), function($q) use($topFilterFee) {
            $q->orderBy('total_fee', $topFilterFee);
        })
        ->paginate($limit);
    }

    public static function getCollegeAndStateIds($collegeIds = []) {
        $collegeStates = self::when(!empty($collegeIds), function($q) use($collegeIds){
            $q->whereIn('id',$collegeIds);
        })
        ->where('status', 'active')
        ->pluck('state_id','id')
        ->toArray();

        $stateIds = array_unique(array_values($collegeStates));
        $collegeIds = array_unique(array_keys($collegeStates));

        return [
            'stateIds' => $stateIds,
            'collegeIds' => $collegeIds,
        ];
    }

    public static function getCollegeInstitutionType($collegeIds = [], $stateIds = [])
    {
        // filters
        $topFilterSearch = (request()->get('topFilterSearch'));
        $collegeType = request()->get('collegeType');
        $stateFilter = request()->get('stateFilter');
        if (!empty($stateFilter)) {
            $stateIds = $stateFilter;
        }

        return self::when(!empty($collegeIds), function($q) use($collegeIds){
            $q->whereIn('id',array_unique($collegeIds));
        })
        ->when(!empty($stateIds), function($q) use($stateIds){
            $q->whereIn('state_id',array_unique($stateIds));
        })
        ->when(!empty($topFilterSearch), function($q) use($topFilterSearch) {
            $q->where('name', 'like', '%'.$topFilterSearch.'%');
        })
        ->when(!empty($collegeType), function($q) use($collegeType) {
            $q->whereIn('institution_type', $collegeType);
        })
        ->whereNotNull('institution_type')
        ->where('institution_type', '!=', '')
        ->select('institution_type')
        ->groupBy('institution_type')
        ->orderBy('institution_type', 'asc')
        ->pluck('institution_type')
        ->toArray();
    }
}
