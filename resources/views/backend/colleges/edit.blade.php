@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'Edit College' : 'Add College' }}
@endsection
@section('content')
<div class="content-wrapper">
    <form class="forms-sample" action="{{ isset($blog) ? route('admin.college.update',$blog->id) : route('admin.college.save') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="title">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->name ?? old('title') }}" id="name" name="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="title">University <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->university ?? old('university') }}" id="university" name="university" placeholder="University" required>
                        </div>
                        <div class="form-group">
                            <label for="title">State <span class="text-danger">*</span></label>
                            <select class="form-control" name="state_id">
                                @foreach ($states as $key => $item)
                                    @empty(!$item)
                                    <option value="{{ $key }}" @if($blog->state_id == $key) selected @endif>{{ ucfirst($item)}}</option> 
                                    @endempty
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" value="{{ $blog->name ?? old('title') }}" id="title" name="title" placeholder="Title" required> --}}
                        </div>
                        <div class="form-group">
                            <label for="title">City <span class="text-danger">*</span></label>
                            <select class="form-control" name="city_id">
                                @foreach ($cities as $key => $item)
                                    @empty(!$item)
                                    <option value="{{ $key }}" @if($blog->city_id == $key) selected @endif>{{ ucfirst($item)}}</option> 
                                    @endempty
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Type <span class="text-danger">*</span></label>
                            <select class="form-control" name="type">
                                @foreach ($types as $key => $item)
                                    @empty(!$item)
                                    <option value="{{ $key }}" @if($blog->institution_type == $key) selected @endif>{{ ucfirst($item)}}</option> 
                                    @endempty
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" value="{{ $blog->name ?? old('title') }}" id="title" name="title" placeholder="Title" required> --}}
                        </div>
                        <div class="form-group">
                            <label for="title">Annual Seats <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->annual_seat ?? old('annual_seat') }}" id="annual_seat" name="annual_seat" placeholder="Annual Seats" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Fees<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $blog->total_fee ?? old('total_fee') }}" id="total_fee" name="total_fee" placeholder="Annual Seats" required>
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