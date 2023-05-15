<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Str;
use Yajra\Datatables\Datatables;
use App\Models\BlogCategory;
use MediaUploader;

class CategoryController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = BlogCategory::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('checkbox', '<input type="checkbox" name="slider[]" class="sliders" value="{{$id}}" />')
                ->addColumn('created_at', function ($row) {
                    return date('d/m/Y @ h:i',strtotime($row->created_at));
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="'.route('admin.category.edit', $row->id).'" class="edit btn text-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= ' | <a href="'.route('admin.category.view', $row->id).'" class="btn text-default btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= ' | <a href="'.route('admin.category.delete', $row->id).'" class="btn text-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action','checkbox','featured_image'])
                ->make(true);
        }
        return view('backend.category.index');
    }
    public function create(Request $request){
        return view('backend.category.edit');
    }
    public function edit(Request $request, $id){
        $blog = BlogCategory::find($id);
        return view('backend.category.edit',compact('blog'));
    }
    public function view(Request $request, $id){
        $blog = BlogCategory::find($id);
        return view('backend.category.view',compact('blog'));
    }
    public function store(Request $request){
        $inputs = $request->except('_token');
        // do {
        //     $slug = Str::slug($request->title);
        // }while(BlogCategory::whereSlug($slug)->count() > 0);

        // $inputs['slug'] = $slug;
        $blog = BlogCategory::create($inputs);
        // if($request->hasFile('featuredimage')) {
        //     $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
        //     $blog->attachMedia($media,'Featured');
        // }
        return redirect()->route('admin.categories');
    }
    public function update(Request $request, $id){
        $inputs = $request->except('_token');
        $blog = BlogCategory::find($id);
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->publish_at = $request->publish_at;
        $blog->is_featured = $request->is_featured ?? 0;
        $blog->update();
        // if($request->hasFile('featuredimage')) {
        //     $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
        //     $blog->syncMedia($media,'Featured');
        // }
        return redirect()->route('admin.categories');
    }
    public function destroy(Request $request, $id){
        $blog = BlogCategory::find($id);
        $blog->delete();
        return redirect()->route('admin.categories');
    }
    public function archive(Request $request){
        $events = BlogCategory::latest()->paginate(12);
        return view('archive',compact('events'));
    }
    public function single(Request $request, $slug){
        $blog = BlogCategory::whereSlug($slug)->first();
        return view('single-blog',compact('blog'));
    }
    public function massremove(Request $request){
        $sliders = $request->input('id');
        $student = Blog::whereIn('id', $sliders);
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }
}
