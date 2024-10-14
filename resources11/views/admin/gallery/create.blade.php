@extends('admin.layout.main')
@section('title')
    Gallery  Create
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Create Gallery</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.gallery.index') !!}" class="btn btn-primary btn-sm ">
                                    Back </a>
                            </div>
                        </div>
                        {{--                        @dd($roles)--}}
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
                            <form action="{!! route('admin.gallery.store') !!}" enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Image</label>
                                            </div>
                                            <input multiple type="file" name="image[]" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 mb-3">
                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            <a href="{!! route('admin.gallery.index') !!}"
                                               class=" btn btn-sm btn-danger">Cancel </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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

