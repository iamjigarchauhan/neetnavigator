@extends('layouts.app')
@section('content')
<!--begin::Card-->
<div class="card">
    <!--begin::Card body-->
    <div class="card-body pt-6">
        <div class="row">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> {{ session()->get('error') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="col-md-5">
                <!-- Sales Chart --> 
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">638 Number of Medical Colleges in India</h4>
                    </div>
                    <div class="card-body">
                        <div id="morrisBar"></div>
                    </div>
                </div>
                <!-- /Sales Chart -->
            </div>
            <div class="col-md-7">
                @include('user_neet_colleges._form', ['states' => $states])
            </div>
        </div>
    </div>
    <!--end::Card body-->
</div>
<!--emd::Card-->
@endsection