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
              <h4 class="card-title">Settings</h4>
              @include('backend._inc.alert')
                <form id="add-user" method="post" action="{{ route('admin.settings.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Site Name</label>
                  <input type="text" class="form-control" value="@if(!empty($setting['name'])){{ $setting['name'] }} @endif" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Background Image</label>
                    <input type="file" class="form-control" name="bg_image" id="bg_image">
                    @if(!empty($setting['bg_image']))
                        <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['bg_image'] }}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Logo</label>
                    <input type="file" class="form-control" name="logo" id="logo">
                    @if(!empty($setting['logo']))
                        <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['logo'] }}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Favicon</label>
                    <input type="file" class="form-control" name="favicon" id="favicon">
                    @if(!empty($setting['favicon']))
                        <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['favicon'] }}">
                    @endif
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
@section('title') Manage Settings @endsection
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
                      <h5 class="m-b-10">Settings</h5>
                    </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.settings')}}">Manage Settings</a></li>
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
                            <h5>Settings</h5>
                        </div>
                        <div class="card-block">
                            @include('backend._inc.alert')
                            <form id="add-user" method="post" action="{{ route('admin.settings.update')}}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Site Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="wewqeqeq" value="@if(!empty($setting['name'])) {{ $setting['name'] }} @endif" name="name" placeholder="Site Name">
                                    <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Background Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-file-control" name="bg_image" id="bg_image" autocomplete="cqewqeq">
                                    <span class="messages"></span>
                                    @if(!empty($setting['bg_image']))
                                      <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['bg_image'] }}">
                                    @endif
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-file-control" name="logo" id="name" placeholder="Enter Name" autocomplete="cqewqeq">
                                        <span class="messages"></span>
                                        @if(!empty($setting['logo']))
                                          <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['logo'] }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Favicon</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-file-control" id="mobile" autocomplete="qweqeqe" name="favicon">
                                        <span class="messages"></span>
                                        @if(!empty($setting['favicon']))
                                          <img height="50" alt="ThemeForest" class="header-mini__logo--themeforest" src="data:image/png;base64,{{ $setting['favicon'] }}">
                                        @endif
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
@endsection --}}