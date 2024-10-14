@extends('admin.layout.main')

@section('title')
    Files Downloads
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> File Downloads </h3>
        </div>
        <div class="row    mt-4 mb-4 ">
            <div class="col-12  " style="text-align: right">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{!! $file->id !!}</td>
                                    <td>{!! $file->name !!}</td>
                                    <td>{!! $file->email !!}</td>
                                    <td>{!! $file->mobile_no !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

@endsection
@section('js')

@endsection
