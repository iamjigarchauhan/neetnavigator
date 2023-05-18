@extends('backend.layouts.app')
@section('title')
    {{ isset($blog) ? 'Import College' : 'Import College' }}
@endsection
@section('content')
<div class="content-wrapper">
    <form class="forms-sample" action="{{ route('admin.college.doimport') }}" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="row"> 
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <a class="btn float-right mr-2" target="_blank" href="{{ asset('collegelist.xlsx') }}"><b>Download Sample File </b></a>
                    <h4 class="card-title">{{ isset($blog) ? 'Import College' : 'Import College' }}</h4>
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-bs-dismiss="alert"></button>
                            <strong> {!! implode('<br/>', $errors->all('<span>:message</span>')) !!} </strong>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="title">Import <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="name" name="importfile" required>
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