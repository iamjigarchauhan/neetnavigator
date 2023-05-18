@extends('backend.layouts.app')
@section('title')
    Colleges
@endsection
@section('page_css')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
<style>
table.table-bordered.dataTable tbody tr td:nth-child(2) {
    width: 30%;
    max-width: 400px;
    word-break: break-word;
    vertical-align: top;
    overflow: hidden;
}
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Colleges
                        {{-- <a href="{{  route('admin.college.create') }}" class="btn btn-sm btn-primary float-right">Add Event</a> --}}
                    </h4>
                    <hr>
                    {{-- <div class="form-group d-inline-flex">
                        <input class="deleteSelected btn btn-primary form-control" type="button" value="Delete Selected" /> 
                    </div> --}}
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th> # </th>     --}}
                                    <th> No </th>
                                    <th style="max-width: 100px;"> Name </th>
                                    {{-- <th> University </th> --}}
                                    <th> Address </th>
                                    <th> Type </th>
                                    <th> Seats </th>
                                    <th> Status </th>
                                    {{-- <th> Created At </th> --}}
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
@section('page_js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(function () {
var table = $('.table-bordered').DataTable({
    processing: true, "ordering": false, serverSide: true,
    pageLength: 50,
    autoWidth: false,
    "columnDefs": [
        {"width": "20%", "targets": 2},
        {"width": "20%", "targets": 3},
        {"orderable": false, "targets": [0,1]} // Can't order
    ],
    ajax: "{{ route('admin.colleges') }}",
        columns: [
            // {data: 'checkbox', name: 'checkbox'},
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            // {data: 'university', name: 'university'},
            {data: 'address', name: 'address'},
            // {data: 'state', name: 'state'},
            {data: 'institution_type', name: 'institution_type'},
            {data: 'annual_seat', name: 'annual_seat'},
            // {data: 'state', name: 'state'},
            {data: 'status', name: 'status'},
            // {data: 'created_at', name: 'created_at'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    $(document).on('click', '.deleteSelected', function(){
        if($('.sliders:checked').length > 0) {
        var id = [];
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $('.sliders:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0)
            {
                $.ajax({
                    url:"{{ route('admin.college.massremove')}}",
                    method:"post",
                    data:{
                        _token:"{{ csrf_token() }}",
                        id:id
                    },
                    success:function(data)
                    {
                        alert(data);
                        window.location.reload();
                    }
                });
            }
            else
            {
                alert("Please select atleast one checkbox");
            }
        }
        } else {
            alert('Select at least one record to delete')
        }
    });
});
</script>
@endsection
{{-- 
// $(function () {
//     $('body').on('click','a.edit',function(){
//         $('#modal-form').attr('action', "{{ route('admin.update.service') }}");
//         $('.modal-title').html('Edit Service');
//         $('#submit').html('Update Service');
//         $('#title').val($(this).attr('data-name'));
//         $('#id').val($(this).attr('data-id'));
//         $('#exampleModal').modal();
//     });
// });
// jQuery('.add-service').on('click',function(){
//     $('#exampleModal').modal('show'); --}}
