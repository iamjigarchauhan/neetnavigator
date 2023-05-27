@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}
@endsection
@section('page_css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('content')
<div class="content-wrapper">
    <form class="forms-sample" action="{{ isset($blog) ? route('admin.blog.update',$blog->id) : route('admin.blog.save') }}" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="row"> 
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}</h4>
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-bs-dismiss="alert"></button>
                            <strong> {!! implode('<br/>', $errors->all('<span>:message</span>')) !!} </strong>
                        </div>
                    @endif
                    
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->title ?? old('title') }}" id="title" name="title" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Published Date<span class="text-danger">*</span></label>
                            <input type="text" value="{{ $blog->published_at ?? old('published_at') }}" class="form-control" id="datepicker" name="published_at">
                        </div>
                        {{-- <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label" for="featured">
                            <input type="checkbox" class="form-check-input" id="featured" value="1" name="is_featured" {{ isset($blog) && $blog->is_featured == 1 ? 'checked': (old('is_featured') == 1 ? 'checked':'') }}> Is Featured</label>
                        </div> --}}
                        <div class="form-group">
                            <label for="file">Featured Image <small>[Recommend 1200 x 500] </small></label>
                            <input type="file" accept="image/*" class="form-control" id="file" name="featuredimage">
                        </div>
                        @isset($blog)
                            {!! $blog->hasMedia('Featured') ? '<img width="300px" src="'.$blog->firstMedia('Featured')->getUrl().'">' : ''; !!}
                        @endisset
                        @isset($categories)
                        <div class="form-group">
                            <label for="file">Category</label>
                            <select class="form-control" id="file" name="category_id">
                                @foreach($categories as $key => $item)
                                    <option value="{{$key}}">{{ $item }}</option>    
                                @endforeach
                            </select>
                        </div>
                        @endisset
                        <div class="form-group">
                            <label for="file">Status</label>
                            <select class="form-control" id="file" name="status">
                                <option value="active" @isset($blog) {{ $blog->status == 'active' ? 'selected': ''}}@endisset >Active</option>    
                                <option value="inactive" @isset($blog) {{ $blog->status == 'inactive' ? 'selected': ''}} @endisset>Inactive</option>    
                            </select>
                        </div>
                        <div class="form-group" style="display:  none">
                            <label for="author">Author Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ $blog->user_id ?? auth()->user()->id }}" placeholder="Author Name" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Save and back</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </div>
            </div>
        </div>
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="content">Content <span class="text-danger">*</span></label>
                        <textarea required class="form-control ckeditor" rows="10" id="content" name="content" placeholder="Content" rows="4"> {{ $blog->content ?? old('content') }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
@section('page_js')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    CKEDITOR.replace( 'content' );
    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 60,
        // minTime: '10',
        // maxTime: '6:00pm',
        // defaultTime: '11',
        // startTime: '10:00',
        
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });
    $( "#datepicker" ).datepicker({
        minDate: "-1M",
        maxDate: "+1Y"
    });

</script>
@endsection