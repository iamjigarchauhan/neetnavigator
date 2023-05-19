<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\City;
use App\Models\State;
use Str;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use Yajra\Datatables\Datatables;

class CollegeController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = College::latest();
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('checkbox', '<input type="checkbox" name="slider[]" class="sliders" value="{{$id}}" />')
                ->addColumn('created_at', function ($row) {
                    return date('d/m/Y @ h:i',strtotime($row->created_at));
                })
                ->addColumn('address', function ($row) {
                    return ucfirst($row->city->name).', '.ucfirst($row->state->name);
                })
                ->addColumn('state', function ($row) {
                    return ;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="'.route('admin.college.edit', $row->id).'" class="edit text-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= '|<a href="'.route('admin.college.view', $row->id).'" class="btn text-default btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= '|<a href="'.route('admin.college.delete', $row->id).'" class="btn text-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action','checkbox','featured_image'])
                ->make(true);
        }
        return view('backend.colleges.index');
    }
    public function import(Request $request){
        // $categories = BlogCategory::pluck('name','id');
        return view('backend.colleges.import');
    }
    public function doImport(Request $request){
        $users = (new FastExcel)->import($request->file('importfile'), function ($line) {
            $state = State::whereName($line['State'])->first();
            $city = City::whereName($line['CITY'])->first();
            if($city == null){
                $city = DB::table('cities')->insertGetId([
                    'name' => $line['CITY'],
                    'state_id' => $state->id,
                    'status' => 'active'
                ]);
            }
            if($state != null){
                $college = [
                    'name'=>trim($line['Name and Address of Medical College/Medical Institution']),
                    'state_id'=>$state->id,
                    'city_id'=>$city->id ?? $city,
                    'university'=>$line['University Name'],
                    'institution_type'=>$line['Management of College'],
                    'year_inspection'=>$line['Year of Inspection of College'],
                    'annual_seat'=> $line['Annual Intake (Seats)'] != '' && $line['Annual Intake (Seats)'] > 0  ? $line['Annual Intake (Seats)'] : 0,
                    'lop_date'=> !empty($line['Date of LOP']) && $line['Date of LOP'] != 'N/A' ? $line['Date of LOP'] : null,
                    'status'=>'active',
                    'total_fee' => $line['Management of College'] == 'Govt.' ? $line['GOVTFEE'] : $line['MQ_FEE']
                ];
                $isExist = College::where($college)->count();
                if($isExist == 0 || $isExist == null ) {
                    $college = DB::table('colleges')->insertGetId($college);
                    // dd($college);
                    $marks[] = [
                        'year' => 2019,
                        'category'=> 'GENERAL',
                        'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_GENERAL'] ?? '',
                        'min_rank'=> $line['2019_NEETRANK_GENERAL'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2019,
                        'category'=> 'ST',
                        'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_ST'],
                        'min_rank'=> $line['2019_NEET_RANK_ST'],
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2019,
                        'category'=> 'OBC',
                        'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_OBC'] ??'' ,
                        'min_rank'=> $line['2019_NEET_RANK_OBC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2019,
                        'category'=> 'SC',
                        'min_mark'=> $line['2019_NEET_CUT_OFF_SCORE_SC'] ?? '',
                        'min_rank'=> $line['2019_NEETRANK_SC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2020,
                        'category'=> 'GENERAL',
                        'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_GENERAL'] ?? '',
                        'min_rank'=> $line['2020_NEETRANK_GENERAL'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2020,
                        'category'=> 'ST',
                        'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_ST'] ?? '',
                        'min_rank'=> $line['2020_NEET_RANK_ST'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2020,
                        'category'=> 'OBC',
                        'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_OBC'] ?? '',
                        'min_rank'=> $line['2020_NEET_RANK_OBC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2020,
                        'category'=> 'SC',
                        'min_mark'=> $line['2020_NEET_CUT_OFF_SCORE_SC'] ?? '',
                        'min_rank'=> $line['2020_NEETRANK_SC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2021,
                        'category'=> 'GENERAL',
                        'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_GENERAL'] ?? '',
                        'min_rank'=> $line['2021_NEETRANK_GENERAL'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2021,
                        'category'=> 'ST',
                        'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_ST'] ?? '',
                        'min_rank'=> $line['2021_NEET_RANK_ST'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2021,
                        'category'=> 'OBC',
                        'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_OBC'] ?? '',
                        'min_rank'=> $line['2021_NEET_RANK_OBC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    $marks[] = [
                        'year' => 2021,
                        'category'=> 'SC',
                        'min_mark'=> $line['2021_NEET_CUT_OFF_SCORE_SC'] ?? '',
                        'min_rank'=> $line['2021_NEETRANK_SC'] ?? '',
                        'college_id'=>$college,
                        'status'=>'active'
                    ];
                    DB::table('neet_range_rankings')->insert($marks);
                    return true;
                }
            }
        });
        return redirect()->route('admin.colleges');

    }
    public function edit(Request $request, $id){
        $blog = College::find($id);
        $cities = City::pluck('name','id');
        $states = State::pluck('name','id');
        $types = array_filter(College::pluck('institution_type','id')->unique()->toArray());
        // dd($types);
        return view('backend.colleges.edit',compact('blog','states','cities','types'));
    }
    // public function view(Request $request, $id){
    //     $blog = College::find($id);
    //     return view('backend.colleges.view',compact('blog'));
    // }
    // public function store(CreateBlogRequest $request){
    //     $inputs = $request->except('_token');
    //     do {
    //         $slug = Str::slug($request->title);
    //     }while(College::whereSlug($slug)->count() > 0);

    //     $inputs['slug'] = $slug;
    //     $blog = College::create($inputs);
    //     if($request->hasFile('featuredimage')) {
    //         $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
    //         $blog->attachMedia($media,'Featured');
    //     }
    //     return redirect()->route('admin.blogs');
    // }
    public function update(Request $request, $id){
        $inputs = $request->except('_token');
        $blog = College::find($id);
        // dd($inputs);
        // $blog->name = $request->title;
        // $blog->univ = $request->author;
        // $blog->description = $request->description;
        // $blog->content = $request->content;
        // $blog->publish_at = $request->publish_at;
        // $blog->is_featured = $request->is_featured ?? 0;
        $blog->update($inputs);
        return redirect()->route('admin.colleges');
    }
    public function destroy(Request $request, $id){
        $blog = College::find($id);
        $blog->delete();
        return redirect()->route('admin.blogs');
    }
    public function archive(Request $request){
        $events = College::latest()->paginate(12);
        return view('archive',compact('events'));
    }
    public function single(Request $request, $slug){
        $blog = College::whereSlug($slug)->first();
        return view('single-blog',compact('blog'));
    }
    public function massremove(Request $request){
        $sliders = $request->input('id');
        $student = College::whereIn('id', $sliders);
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }
}
