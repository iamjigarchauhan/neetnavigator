<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\City;
use App\Models\State;
use Str;
use Yajra\Datatables\Datatables;

class CollegeController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = College::latest()->get();
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
    // public function create(Request $request){
    //     $categories = BlogCategory::pluck('name','id');
    //     return view('backend.colleges.edit',compact('categories'));
    // }
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
