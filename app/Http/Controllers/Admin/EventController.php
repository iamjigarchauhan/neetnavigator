<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBlogRequest;
use Str;
use Yajra\Datatables\Datatables;
use App\Models\Event;
use App\Models\EventCategory;
use MediaUploader;

class EventController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = Event::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('checkbox', '<input type="checkbox" name="slider[]" class="sliders" value="{{$id}}" />')
                ->addColumn('created_at', function ($row) {
                    return date('d/m/Y @ h:i',strtotime($row->created_at));
                })
                ->addColumn('category', function ($row) {
                    return EventCategory::find($row->category_id)->name ?? '';
                })
                ->addColumn('featured_image', function ($row) {
                    return $row->hasMedia('Featured') ? '<img src="'.$row->firstMedia('Featured')->getUrl().'" alt="'.$row->title.'">' : 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="'.route('admin.event.edit', $row->id).'" class="edit btn text-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= ' | <a href="'.route('admin.event.view', $row->id).'" class="btn text-default btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= ' | <a href="'.route('admin.event.delete', $row->id).'" class="btn text-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action','checkbox','featured_image'])
                ->make(true);
        }
        return view('backend.events.index');
    }
    public function create(Request $request){
        $categories = BlogCategory::pluck('name','id');
        return view('backend.events.edit',compact('categories'));
    }
    public function edit(Request $request, $id){
        $blog = Event::find($id);
        return view('backend.events.edit',compact('blog'));
    }
    public function view(Request $request, $id){
        $blog = Event::find($id);
        return view('backend.events.view',compact('blog'));
    }
    public function store(Request $request){
        $inputs = $request->except('_token');
        $inputs['published_at'] = date('Y-m-d',strtotime($request->published_at));
        do {
            $slug = Str::slug($request->title);
        }while(Event::whereSlug($slug)->count() > 0);

        $inputs['slug'] = $slug;
        $blog = Event::create($inputs);
        if($request->hasFile('featuredimage')) {
            $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
            $blog->attachMedia($media,'Featured');
        }
        return redirect()->route('admin.blogs');
    }
    public function update(Request $request, $id){
        $inputs = $request->except('_token','published_at');
        $blog = Event::find($id);
        // $blog->title = $request->title;
        // $blog->author = $request->author;
        // $blog->description = $request->description;
        // $blog->content = $request->content;
        // $blog->is_featured = $request->is_featured ?? 0;
        $blog->update($inputs);
        $blog->published_at = date('Y-m-d',strtotime($request->published_at));
        
        // if($request->hasFile('featuredimage')) {
        //     $media = MediaUploader::fromSource($request->file('featuredimage'))->toDestination('public','blog/thumbs')->upload();
        //     $blog->syncMedia($media,'Featured');
        // }
        return redirect()->route('admin.blogs');
    }
    public function destroy(Request $request, $id){
        $blog = Event::find($id);
        $blog->delete();
        return redirect()->route('admin.blogs');
    }
    public function archive(Request $request){
        $events = Event::latest()->paginate(12);
        return view('archive',compact('events'));
    }
    public function category(Request $request){ 
        $category = EventCategory::whereSlug($request->slug)->first();
        $events = Event::whereCategoryId($category->id)->latest()->paginate(12);
        return view('archive',compact('events'));
    }
    public function single(Request $request, $slug){
        $blog = Event::whereSlug($slug)->first();
        return view('single-blog',compact('blog'));
    }
    public function massremove(Request $request){
        $sliders = $request->input('id');
        $student = Event::whereIn('id', $sliders);
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }
}
