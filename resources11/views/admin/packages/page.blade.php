@extends('admin.layout.main')
@section('title')
    Page  Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Package Page Edit</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right" style="text-align: right">
                                <a href="{!! route('admin.pages.index') !!}" class="btn btn-primary btn-sm ">
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
                            <form action="{!! route('admin.package.update',$data->id) !!}"
                                  enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Name</label>
                                            </div>
                                            <input type="text" required class="form-control" value="{{@$data->name}}"
                                                   name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Heading</label>
                                            </div>
                                            <textarea type="text" required class=" summernote form-control"
                                                      name="heros_ection">{{@$data->heros_ection}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Left Text</label>
                                            </div>
                                            <textarea type="text" required class=" summernote form-control"
                                                      name="form_section">{{@$data->form_section}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Right Text</label>
                                            </div>

                                            <textarea type="text" required class=" summernote form-control"
                                                      name="service_page">{{@$data->service_page}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" class="form-control" value="{{@$data->meta_title}}"
                                                   name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" class="form-control" value="{{@$data->meta_description}}"
                                                   name="meta_description">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group text-right" style="text-align: right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.pages.index') !!}"
                                           class=" btn btn-sm btn-danger">Cancel </a>
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

