@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'Edit College' : 'Add College' }}
@endsection
@section('content')
<div class="content-wrapper">
    <form class="forms-sample" action="{{ isset($blog) ? route('admin.ranking.update',$blog->id) : route('admin.ranking.save') }}" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="row"> 
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($blog) ? 'Edit College' : 'Add College' }}</h4>
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-bs-dismiss="alert"></button>
                            <strong> {!! implode('<br/>', $errors->all('<span>:message</span>')) !!} </strong>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="title">Min Mark <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->min_mark ?? old('min_mark') }}" id="min_mark" name="min_mark" placeholder="min_mark" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Max Mark <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->max_mark ?? old('max_mark') }}" id="max_mark" name="max_mark" placeholder="Max mark" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Min Rank <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->min_rank ?? old('min_rank') }}" id="min_rank" name="min_rank" placeholder="Min Rank" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Max Rank <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->max_rank ?? old('title') }}" id="max_rank" max_rank="max_rank" placeholder="max_rank" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status">
                                <option value="active" @if($blog->status == 'active') 'selected' @endif>Active</option> 
                                <option value="inactive" @if($blog->status == 'inactive') 'selected' @endif>Inactive</option> 
                            </select>
                        </div>
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