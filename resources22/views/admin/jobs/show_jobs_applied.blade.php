@extends('admin.layout.main')

@section('title')
    Jobs applications
@stop

@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="input-label">
                        <label> Name</label>
                    </div>
                    <input type="text" required class="form-control" value="{{$data->name}}"
                           name="name" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="input-label">
                        <label> Email</label>
                    </div>
                    <input type="text" class="form-control" value="{{$data->email}}"
                           name="description" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="input-label">
                        <label><a target="_blank" href="/{!! $data->cv !!}"> Download CV </a>
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
