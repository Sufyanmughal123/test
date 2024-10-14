@extends('admin.layout.main')

@section('title')
    Country
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> Country </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row    mt-2 mb-4 ">
                    <div class="col-12 " style="text-align: right">
                        <a href="{!! route('admin.country.create') !!}" class="btn btn-primary btn-sm ">Create
                            Country</a>
                    </div>
                </div>
                <div class="row w-100 ">
                    <div class="col-12">
                        <table class="table table-striped   table-hover" id="data-table">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Number</th>
                                <th>Date</th>

                                <th width="100px">Action</th>
                            </tr>
                            @foreach ($booking_inquiries as $booking_inquirie)


                                <tr>

                                    <td>{{ $booking_inquirie->name }}</td>
                                    <td>{{ $booking_inquirie->email }}</td>
                                    <td>{{ $booking_inquirie->company }}</td>
                                    <td>{{ $booking_inquirie->number }}</td>
                                    <td>{{ $booking_inquirie->date }}</td>
                                    <td>
                                        <form action="#" method="POST">

                                            <a class="btn btn-info" href="#">Show</a>

                                            <a class="btn btn-primary" href="#">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
    {{--    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">

@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            $('#data-table').DataTable({--}}
{{--                dom: 'Bfrtip',--}}
{{--                buttons: [--}}
{{--                    'copy', 'csv', 'excel', 'pdf', 'print'--}}
{{--                ],--}}
{{--                "processing": true,--}}
{{--                "serverSide": true,--}}
{{--                ajax: {--}}
{{--                    "url": "{{ route('admin.country.getdata') }}",--}}
{{--                    "type": "POST",--}}
{{--                    "data": {_token: "{{csrf_token()}}"}--}}
{{--                },--}}
{{--                "columns": [--}}
{{--                    {data: 'id', name: 'id'},--}}
{{--                    {data: 'country_name', name: 'country_name'},--}}
{{--                    {data: 'action', name: 'action', orderable: false, searchable: false},--}}
{{--                ]--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
