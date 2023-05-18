<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RangeRanking;
use Yajra\Datatables\Datatables;


class RankingController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = RangeRanking::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('checkbox', '<input type="checkbox" name="slider[]" class="sliders" value="{{$id}}" />')
                ->addColumn('created_at', function ($row) {
                    return date('d/m/Y @ h:i',strtotime($row->created_at));
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="'.route('admin.ranking.edit', $row->id).'" class="edit btn text-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= ' | <a href="'.route('admin.ranking.view', $row->id).'" class="btn text-default btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= ' | <a href="'.route('admin.ranking.delete', $row->id).'" class="btn text-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action','checkbox','featured_image'])
                ->make(true);
        }
        return view('backend.ranking.index');
    }
    public function create(Request $request){
        $categories = BlogCategory::pluck('name','id');
        return view('backend.ranking.edit',compact('categories'));
    }
    public function edit(Request $request, $id){
        $blog = RangeRanking::find($id);
        return view('backend.ranking.edit',compact('blog'));
    }
    public function view(Request $request, $id){
        $blog = RangeRanking::find($id);
        return view('backend.ranking.view',compact('blog'));
    }
    public function store(CreateBlogRequest $request){
        $inputs = $request->except('_token');
        do {
            $slug = Str::slug($request->title);
        }while(RangeRanking::whereSlug($slug)->count() > 0);

        $inputs['slug'] = $slug;
        $blog = RangeRanking::create($inputs);
        if($request->hasFile('featuredimage')) {
            $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
            $blog->attachMedia($media,'Featured');
        }
        return redirect()->route('admin.rankings');
    }
    public function update(Request $request, $id){
        $inputs = $request->except('_token');
        $blog = RangeRanking::find($id);
        // dd($inputs);
        // $blog->name = $request->title;
        // $blog->univ = $request->author;
        // $blog->description = $request->description;
        // $blog->content = $request->content;
        // $blog->publish_at = $request->publish_at;
        // $blog->is_featured = $request->is_featured ?? 0;
        $blog->update($inputs);
        return redirect()->route('admin.rankings');
    }
    public function destroy(Request $request, $id){
        $blog = RangeRanking::find($id);
        $blog->delete();
        return redirect()->route('admin.rankings');
    }
    public function archive(Request $request){
        $events = RangeRanking::latest()->paginate(12);
        return view('archive',compact('events'));
    }
    public function single(Request $request, $slug){
        $blog = RangeRanking::whereSlug($slug)->first();
        return view('single-blog',compact('blog'));
    }
    public function massremove(Request $request){
        $sliders = $request->input('id');
        $student = RangeRanking::whereIn('id', $sliders);
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }
}
