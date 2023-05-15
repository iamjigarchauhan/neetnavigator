@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'Edit Category' : 'Add Category' }}
@endsection
@section('content')
<div class="content-wrapper">
    <form class="forms-sample" action="{{ isset($blog) ? route('admin.category.update',$blog->id) : route('admin.category.save') }}" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="row"> 
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($blog) ? 'Edit Category' : 'Add Category' }}</h4>
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-bs-dismiss="alert"></button>
                            <strong> {!! implode('<br/>', $errors->all('<span>:message</span>')) !!} </strong>
                        </div>
                    @endif
                        <div class="form-group">
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->name ?? old('name') }}" id="name" name="name" placeholder="Name" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="4"> {{ $blog->description ?? old('description') }} </textarea>
                        </div> --}}
                        {{-- <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label" for="featured">
                            <input type="checkbox" class="form-check-input" id="featured" value="1" name="is_featured" {{ isset($blog) && $blog->is_featured == 1 ? 'checked': (old('is_featured') == 1 ? 'checked':'') }}> Is Featured</label>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="file">Featured Image <small>[Recommend 1200 x 500] </small></label>
                            <input type="file" accept="image/*" class="form-control" id="file" name="featuredimage">
                        </div>
                        @isset($blog)
                            {!! $blog->hasMedia('Featured') ? '<img width="300px" src="'.$blog->firstMedia('Featured')->getUrl().'">' : ''; !!}
                        @endisset
                        <div class="form-group" style="display:  none">
                            <label for="author">Author Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ $blog->author ?? auth()->user()->name }}" placeholder="Author Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="file">Event Date<span class="text-danger">*</span></label>
                            <input type="text" value="{{ $blog->publish_at ?? old('publish_at') }}" class="form-control" id="file" name="publish_at">
                        </div> --}}
                        <button type="submit" class="btn btn-primary mr-2">Save and back</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
@section('page_js')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    // CKEDITOR.replace( 'content' );
    // description
</script>
@endsection