@extends('admin.layout.main')
@section('title')
    Brand  Create
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-md-12">
                                <h3 class="text-22 text-center text-bold mb-4"> Brand Create</h3>
                            </div>
                            <div class="col-md-12 text-right"><a href="{!! route('admin.brands.index') !!}"
                                                                 class="btn btn-primary  ">
                                    Back </a></div>
                        </div>
                    </div>
                    <div class="card-body">

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
                            <form action="{!! route('admin.brands.store') !!}" enctype="multipart/form-data"
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Origin </label>
                                            </div>
                                            <select required name="country_id" class="form-control">
                                                <option value=""> Select Origin</option>
                                                @foreach($country as $item)
                                                    <option
                                                        value="{!! $item->id !!}"> {!! $item->country_name !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Logo</label>
                                            </div>
                                            <input type="file" name="logo" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Section-1 Heading</label>
                                            </div>
                                                  <textarea required class="form-control summernote" value=""
                                                      name="section1_heading"></textarea>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-1 Image</label>
                                            </div>
                                            <input type="file" required class="form-control " value=""
                                                   name="section1_image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-1 Description</label>
                                            </div>
                                            <textarea required class="form-control summernote" value=""
                                                      name="section1_description"></textarea>

                                        </div>
                                    </div>
                                </div>
                                {{--                                section 2--}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-2 Heading</label>
                                            </div>

                                                    <textarea required class="form-control summernote" value=""
                                                      name="section2_heading"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Section-2 Short Description</label>
                                                </div>
                                                <input type="text" required class="form-control " value=""
                                                       name="section2_short_description"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Section-2 Image</label>
                                                </div>
                                                <input type="file" required class="form-control " value=""
                                                       name="section2_image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Section-2 Description</label>
                                                </div>
                                                <textarea type="text" required class="form-control summernote" value=""
                                                          name="section2_description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{--                                section 3--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label> Section-3 Heading</label>
                                                </div>

                                                        <textarea required class="form-control summernote" value=""
                                                      name="section3_heading"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Section-3 Description</label>
                                                </div>
                                                <textarea required class="form-control summernote" value=""
                                                          name="section3_description"></textarea>
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
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Keywords</label>
                                                </div>
                                                <input type="text" class="form-control" value="" name="keywords">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn   btn-primary">Save</button>
                                            <a href="{!! route('admin.blogs.index') !!}"
                                               class=" btn   btn-danger">Cancel </a>
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

    {{--    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">--}}
@endsection
@section('js')

        <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    <script src="{{asset('admin/assets/js/summernote.js')}}"></script>

@endsection

