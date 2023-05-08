@extends('backend.layouts.app')
@section('title') Edit user | Manage Users @endsection
@section('page_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('content')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Profile</h4>
              @include('backend._inc.alert')
              <form class="forms-sample" action="{{ route('admin.master.user.save')}}" method="post">
                @csrf()
                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" value="@if(!empty($user->name)){{ $user->name }}@endif" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" value="@if(!empty($user->email)){{ $user->email }}@endif" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" value="@if(!empty($user->mobile_no)){{ $user->mobile_no }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Merchant Code</label>
                    <input type="text" class="form-control" value="@if(!empty($user->merchant_code)){{ $user->merchant_code }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hash</label>
                    <input type="text" class="form-control" value="@if(!empty($user->merchant_hash)){{ $user->merchant_hash }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
{{-- <div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Users</h5>
                    </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.master.users')}}">Manage Merchant</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <div class="page-body">
              <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Edit
                               User</h5>
                        </div>
                        <div class="card-block">
                            @include('backend._inc.alert')
                            <form id="add-user" method="post" action="{{ route('admin.master.user.update',$user->id)}}">
                            @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $user->name ?? old('name')}}" class="form-control" name="name" id="name" placeholder="Enter Name" autocomplete="cqewqeq">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mobile No.</label>
                                    <div class="col-sm-10">
                                        <input type="number" maxlength="12" value="{{ $user->mobile_no ?? old('mobile_no')}}" class="form-control" id="mobile" autocomplete="qweqeqe" name="mobile_no" placeholder="Enter Mobile No">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="{{ $user->email ?? old('email')}}" autocomplete="wewqeqeq" id="email" name="email" placeholder="Enter E-mail address">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Merchant Code</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $user->merchant_code ?? '' }}" class="form-control" id="clientid" autocomplete="qweqeqe" name="merchant_code" placeholder="Enter Merchat Code">
                                        {{-- <i title="Copy Client ID" class="far fa-copy copy" onclick="return copyText(this)" data-id="clientid"></i>
                                        <span class="messages"></span> - -}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Hash</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" value="{{ $user->merchant_hash ?? '' }}" autocomplete="wewqeqeqweqweq" id="merchant_hash" name="merchant_hash" placeholder="Enter Hash">
                                        {{-- <i class="far fa-eye" id="togglePassword"></i>
                                        <i title="Copy Secret" class="far fa-copy copy" onclick="copyText(this)" data-id="secret"></i>
                                        <span class="messages"></span> - -}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary m-b-0">Update User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@section('page_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    $(document).ready(function(){
      $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy',
      });
      $("#add-user").validate({
          errorClass:"text-danger",
          rules:{
            "email":{required:!0,email:!0},
            "name":{required:!0,minlength:3},
            "dob":{required:!0},
            "mobile_no":{required:!0,minlength:10},
            "address_line_1":{minlength:10},
            "address_line_2":{minlength:10}
          },
          submitHandler:function(e){
            e.submit()
          }
        }); 
    });
</script>
@endsection