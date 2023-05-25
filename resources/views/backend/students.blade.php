@extends('backend.layouts.app')
@section('title')
Dashboard
@endsection
@section('page_css')
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<style>
    .fs-30 {
        font-size: 25px !important;
    }
    .pcoded-header .dropdown .dropdown-menu {
        min-width: max-content;
    }
    .pcoded-header .dropdown .profile-notification .pro-head {
        padding-right:70px;
    }
    .counter-card-1 p { font-size:12px}
    .card-block-big {
    padding: 0.5rem 1rem;
}
h3 { font-size:20px}
</style>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Students</h4>
              {{-- <form method="post" action="#" class="form-inline col-md-6">
                @csrf
                <div class="form-group mb-2">
                    <label for="staticEmail2">From : </label>
                    <input type="date" id="from_date" name="fromDate" value="{{ $request->fromDate ?? '' }}" class="form-control" id="staticEmail2">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2">To : </label>
                    <input type="date" id="to_date" name="toDate" value="{{ $request->toDate ?? '' }}" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <button type="submit" class="filterChart btn btn-primary mb-2" style="border-radius: 5px">Filter</button>
              </form> --}}
              <div class="table-responsive">
                {!! $dataTable->table() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@section('page_js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
{{-- <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"> </script>
{{-- <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"> </script> --}}
{{-- <script src="//cdn.datatables.net/buttons/2.3.6/css/buttons.semanticui.min.css"> </script> --}}
{!! $dataTable->scripts() !!}
@endsection