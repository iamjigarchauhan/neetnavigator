@extends('backend.layouts.app')
@section('title') Manage profile @endsection
@section('page_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
  #togglePassword{
      margin-top: -30px;
      cursor: pointer;
      float: right;
      margin-right: 45px;
  }
  .copy{
      margin-top: -30px;
      cursor: pointer;
      float: right;
      margin-right: 15px;
  }
</style>
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
              <form class="forms-sample" action="{{ route('admin.profile.update')}}" method="post">
                @csrf()
                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" value="@if(!empty($user->name)){{ $user->name }}@endif" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" value="@if(!empty($user->email)){{ $user->email }}@endif" id="exampleInputEmail1" placeholder="Email">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" value="@if(!empty($user->mobile_no)){{ $user->mobile_no }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Merchant Code</label>
                    <input type="text" class="form-control" disabled readonly value="@if(!empty($user->merchant_code)){{ $user->merchant_code }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hash</label>
                    <input type="text" class="form-control" disabled readonly value="@if(!empty($user->merchant_hash)){{ $user->merchant_hash }}@endif" id="exampleInputPassword1" placeholder="Password">
                </div> --}}
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
                      <h5 class="m-b-10">Profile</h5>
                    </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile')}}">Manage Profile</a></li>
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
                            <h5>Profile</h5>
                        </div>
                        <div class="card-block">
                            @include('backend._inc.alert')
                            <form id="add-user" method="post" action="{{ route('partner.profile.update')}}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($user->name)){{ $user->name }}@endif" name="name" placeholder="Name">
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($user->email)) {{ $user->email }} @endif" name="email" placeholder="Email">
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="mobile_no" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($user->mobile_no)) {{ $user->mobile_no }} @endif" name="email" placeholder="Email">
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Merchant Code</label>
                                <div class="col-sm-10">
                                    <input readonly value="{{ $user->merchant_code }}" class="form-control" id="clientid" autocomplete="qweqeqe" name="id" placeholder="Enter Mobile No">
                                    <i title="Copy Client ID" class="far fa-copy copy" onclick="return copyText(this)" data-id="clientid"></i>
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Merchant Hash</label>
                                  <div class="col-sm-10">
                                      <input type="password" class="form-control" value="{{ $user->merchant_hash }}" autocomplete="wewqeqeq" id="secret" name="secret" placeholder="Enter E-mail address">
                                      <i class="far fa-eye" id="togglePassword"></i>
                                      <i title="Copy Secret" class="far fa-copy copy" onclick="copyText(this)" data-id="secret"></i>
                                      <span class="messages"></span>
                                  </div>
                              </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary m-b-0">Settings</button>
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
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#secret');
      togglePassword.addEventListener('click', function (e) {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          // toggle the eye slash icon
          this.classList.toggle('fa-eye-slash');
      });

  });
  function copyText(obj){
      let elem = $(obj).attr('data-id');    
      let textToCopy = document.querySelector('#'+elem).value
      obj.addEventListener('click' , function(){
          navigator.clipboard.writeText(textToCopy).then(
              function() {
              /* clipboard successfully set */
              window.alert('Success! The text was copied to your clipboard') 
              }, 
              function() {
              /* clipboard write failed */
              window.alert('Opps! Your browser does not support the Clipboard API')
              }
          )
      });
  } 
</script>

@endsection
{{-- @extends('backend.layouts.app')
@section('title') Manage profile @endsection
@section('page_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Profile</h5>
                    </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile')}}">Manage Profile</a></li>
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
                            <h5>Profile</h5>
                        </div>
                        <div class="card-block">
                            @include('backend._inc.alert')
                            <form id="add-user" method="post" action="{{ route('admin.profile.update')}}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($user->name)){{ $user->name }}@endif" name="name" placeholder="Name">
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($user->email)) {{ $user->email }} @endif" name="email" placeholder="Email">
                                    <span class="messages"></span>
                                </div>
                              </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary m-b-0">Settings</button>
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
</div>
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
           },
          submitHandler:function(e){
            e.submit()
          }
        }); 
    });
</script>
@endsection --}}