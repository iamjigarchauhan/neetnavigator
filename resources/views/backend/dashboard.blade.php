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
      {{-- <div class="row mt-5">    
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Transactions</h4>
              <div class="table-responsive">
                <table id="example" class="table display table-striped expandable-table">
                  <thead>
                    <tr>
                      <th>VPA</th>
                      <th>Customer Name</th>
                      <th>Amount</th>
                      <th>Transaction Date</th>
                      <th>Transaction Status</th>
                      <th>Type</th>
                      <th>Reference ID</th>
                      <th>UPI Reference ID</th>
                      <th>Transfer Amount</th>
                      <th>TID</th>
                      <th>SID</th>
                    </tr>
                  </thead>
                  <tbody>
                    @isset($response->data->txnReportList)
                    @foreach ($response->data->txnReportList as $item)
                    <tr>
                        <th>{{ $item->vpa ?? '' }}</th>
                        <th>{{ $item->customerName ?? ''}}</th>
                        <th>{{ $item->amount }}</th>
                        <th>{{ $item->txnDate }}</th>
                        <th>{{ $item->txnStatus }}</th>
                        <th>{{ $item->type }}</th>
                        <th>{{ $item->refId }}</th>
                        <th>{{ $item->upiRefId }}</th>
                        <th>{{ $item->transferAmount }}</th>
                        <th>{{ $item->tid }}</th>
                        <th>{{ $item->sid }}</th>
                    </tr>
                    @endforeach
                    @endisset
                  </tbody>
                </table>
                {{-- <ul class="pagination" style="float: right">
                    @if($page != 1)
                    <li class="paginate_button page-item" id="example_next"><a href="{{ route('partner.dashboard',['page'=>1, 'fromDate'=>$request->has('fromDate') ? date('Y-m-d',strtotime($request->fromDate)) : date('Y-m-d',strtotime('-7 days')),'toDate'=>$request->has('toDate') ? date('Y-m-d',strtotime($request->toDate)) : date('Y-m-d')])}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">First</a></li>
                    @endif
                    <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link"> {{ $page }} </a></li>
                    @isset($response->data->txnReportSize)
                    @if($response->data->txnReportSize >= $page*25)
                    <li class="paginate_button page-item"><a href="{{ route('partner.dashboard',['page'=> $page+1,'fromDate'=>$request->has('fromDate') ? date('Y-m-d',strtotime($request->fromDate)) : date('Y-m-d',strtotime('-7 days')),'toDate'=>$request->has('toDate') ? date('Y-m-d',strtotime($request->toDate)) : date('Y-m-d')])}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link"> Next </a></li>
                    @endif
                    @endisset
                </ul> - -}}
              </div>
            </div>
          </div>
        </div>
      </div> --}}
  </div>
{{-- <div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="page-body">
            <div class="row">
                <!-- counter-card-1 start-->
                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>{{ $response->data->txnReportSummary->txnCountSuccess ?? 0 }}</h3>
                                <p>Success Count </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>{{ $response->data->txnReportSummary->txnCountPending ?? 0 }}</h3>
                                <p>Pending Count </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>{{ $response->data->txnReportSummary->txnCountFailed ?? 0 }}</h3>
                                <p>Failed Count </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>₹ {{ $response->data->txnReportSummary->totalAmountSuccess ?? 0 }}</h3>
                                <p>Success Trans. Amt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>₹ {{ $response->data->txnReportSummary->totalAmountPending ?? 0 }}</h3>
                                <p>Pending Trans Amt </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-2">
                    <div class="card counter-card-1">
                        <div class="card-block-big">
                            <div>
                                <h3>₹ {{ $response->data->txnReportSummary->totalAmountFailed ?? 0 }}</h3>
                                <p>Failed Trans Amt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- counter-card-3 end -->
                <!-- Monthly Growth Chart start-->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Count List </h5>
                            <form method="post" action="{{ route('admin.dashboard')}}" class="form-inline float-right col-md-6">
                                @csrf
                                <div class="form-group mb-2">
                                  <label for="staticEmail2">From : </label>
                                  <input type="date" id="from_date" name="fromDate" class="form-control" id="staticEmail2">
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                  <label for="inputPassword2">To : </label>
                                  <input type="date" id="to_date" name="toDate" class="form-control" id="inputPassword2" placeholder="Password">
                                </div>
                                <button type="submit" class="filterChart btn btn-primary mb-2">Filter</button>
                            </form>
                            <div class="form-inline float-right form-group mb-2 statusFilter">
                                <label for="staticEmail2">Filter : </label>
                                <select class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="card-block">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>VPA</th>
                                        <th>Customer Name</th>
                                        <th>Amount</th>
                                        <th>Transaction Date</th>
                                        <th>Transaction Status</th>
                                        <th>Type</th>
                                        <th>Reference ID</th>
                                        <th>UPI Reference ID</th>
                                        <th>Transfer Amount</th>
                                        <th>TID</th>
                                        <th>SID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($response->data->txnReportList)
                                    @foreach ($response->data->txnReportList as $item)
                                    <tr>
                                        <th>{{ $item->vpa ?? '' }}</th>
                                        <th>{{ $item->customerName ?? ''}}</th>
                                        <th>{{ $item->amount }}</th>
                                        <th>{{ $item->txnDate }}</th>
                                        <th>{{ $item->txnStatus }}</th>
                                        <th>{{ $item->type }}</th>
                                        <th>{{ $item->refId }}</th>
                                        <th>{{ $item->upiRefId }}</th>
                                        <th>{{ $item->transferAmount }}</th>
                                        <th>{{ $item->tid }}</th>
                                        <th>{{ $item->sid }}</th>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>
                            </table>
                            <ul class="pagination" style="float: right">
                                @if($page != 1)
                                <li class="paginate_button page-item" id="example_next"><a href="{{ route('partner.dashboard',['page'=>1, 'fromDate'=>$request->has('fromDate') ? date('Y-m-d',strtotime($request->fromDate)) : date('Y-m-d',strtotime('-7 days')),'toDate'=>$request->has('toDate') ? date('Y-m-d',strtotime($request->toDate)) : date('Y-m-d')])}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">First</a></li>
                                @endif
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link"> {{ $page }} </a></li>
                                @isset($response->data->txnReportSize)
                                @if($response->data->txnReportSize >= $page*25)
                                <li class="paginate_button page-item"><a href="{{ route('partner.dashboard',['page'=> $page+1,'fromDate'=>$request->has('fromDate') ? date('Y-m-d',strtotime($request->fromDate)) : date('Y-m-d',strtotime('-7 days')),'toDate'=>$request->has('toDate') ? date('Y-m-d',strtotime($request->toDate)) : date('Y-m-d')])}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link"> Next </a></li>
                                @endif
                                @endisset
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@section('page_js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable({
        pageLength:10000000,
        paging:false,
        dom: 'Bfrtip',
        "autoWidth": true,
        scrollY: '400px',
        scrollCollapse: true,
        // buttons: [
        //      'csv', 'excel'
        // ],
        initComplete: function () {
            this.api()
                .columns(4)
                .every(function () {
                    var column = this;
                    var select = $('.statusFilter select')
                        // .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
 
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                });
        },
    });
});
</script>
@endsection