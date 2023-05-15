@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'View Blog' : 'Add Blog' }}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row"> 
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($blog) ? 'View Blog' : 'Add Blog' }}</h4>
                        <div class="form-group">
                            <label for="title">Title</label> <br/>
                            <label><b> {{ $blog->name }}</b> <label>
                        </div>
                        <div class="form-group">
                            <label for="title">Status</label> <br/>
                            <label><b> {{ ucfirst($blog->status) }}</b> <label>
                        </div>
                        
                        {{-- <div class="form-group">
                            <label for="title">Published At</label> <br/>
                            <label><b> {{ date('d-m-Y',strtotime($blog->publish_at)) }}</b> <label>
                        </div>
                        <div class="form-group">
                            <label for="title">Content</label> <br/>
                            <label><b> {{ $blog->content }}</b> <label>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Description" rows="4"> {{ $blog->description ?? old('description') }} </textarea>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label" for="featured">
                            <input type="checkbox" class="form-check-input" id="featured" {{ isset($blog) && $blog->is_featured == 1 ? 'checked': old('is_featured') == 1 ? 'checked':'' }}> Is Featured</label>
                        </div>
                        <div class="form-group">
                            <label for="file">Featured Image <small>[Recommend 1200 x 500] </small></label>
                            <input type="file" accept="image/*" class="form-control" id="file" name="featuredimage">
                        </div>
                        <div class="form-group">
                            <label for="author">Author Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ $blog->author ?? old('author') }}" placeholder="Author Name" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="content" name="content" placeholder="Content" rows="4"> {{ $blog->content ?? old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Published At <span class="text-danger">*</span></label>
                            <input type="date" value="{{ $blog->publish_at ?? old('publish_at') }}" class="form-control" id="file" name="publish_at">
                        </div> --}}
                        <a href="{{ url()->previous() }}" class="btn btn-light">Back </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
