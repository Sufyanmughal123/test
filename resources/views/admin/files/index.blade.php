@extends('admin.layout.main')

@section('title')
    Files
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> Files </h3>
        </div>
        <div class="row    mt-4 mb-4 ">
            <div class="col-12  " style="text-align: right">
                <a href="{!! route('admin.files.create') !!}" class="btn btn-primary btn-sm ">Create Files</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row w-100 text-center">
                    <div class="col-12">
                        <table class="table table-striped   table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Created At</th>
                                <th width="200px">Action</th>
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
@stop
@section('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#data-table').DataTable({
                "processing": true,
                "serverSide": true,
                ajax: {
                    "url": "{{ route('admin.files.getdata') }}",
                    "type": "POST",
                    "data": {_token: "{{csrf_token()}}"}
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'},
                    {data: 'link', name: 'link'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
