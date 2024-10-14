@extends('admin.layout.main')
@section('title')
    Add Packages
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Packages create</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.packages.index') !!}" class="btn btn-primary btn-sm ">
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
                            <form action="{!! route('admin.packages.store') !!}" enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Name</label>
                                            </div>
                                            <input type="text" required class="form-control" value=""
                                                   name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Details</label>
                                            </div>
                                            <textarea required class="form-control summernote"
                                                      name="details"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Price</label>
                                            </div>
                                            <input name="price" class="form-control" type="number" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Discount Price</label>
                                            </div>
                                          <input name="discount_price" class="form-control" type="number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" class="form-control" value="" name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" class="form-control"
                                                   name="meta_description">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            <a href="{!! route('admin.packages.index') !!}"
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

    <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    <script src="{{asset('admin/assets/js/summernote.js')}}"></script>

@endsection
