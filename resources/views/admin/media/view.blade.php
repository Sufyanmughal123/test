@extends('admin.layout.main')
@section('title')
    Media View
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">


                        <h3 class="text-22 text-midnight text-bold mb-4"> View </h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.media.index') !!}" class="btn btn-primary btn-sm ">
                                    Back </a>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="w-100">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>link</label>
                                        </div>
                                        <input disabled type="email" name="email" value="{!! $media->url !!}"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>image</label>
                                        </div>
                                        <img src="{!! asset($media->image) !!}" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')

    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>

@endsection


