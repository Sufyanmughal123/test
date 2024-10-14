@extends('admin.layout.main')
@section('title')
    Brand  Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Brand Edit</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.brands.index') !!}" class="btn btn-primary btn-sm ">
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
                            <form action="{!! route('admin.brands.update',$brand->id) !!}"
                                  enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Name</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                   value="{!! $brand->name !!}"
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
                                                    <option @if($brand->id== $item->id) selected @endif
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
                                            <input type="file" name="logo" class="form-control">
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
                                                          name="section1_heading">{!!  $brand->section1_heading !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-1 Image</label>
                                            </div>
                                            <input type="file"   class="form-control "
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
                                                      name="section1_description">{!!  $brand->section1_description !!}</textarea>

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
                                                          name="section2_heading">{!!  $brand->section2_heading !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-2 Image</label>
                                            </div>
                                            <input type="file"   class="form-control "
                                                   name="section2_image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-2 Short Description</label>
                                            </div>
                                            <input type="text" required class="form-control " value="{!!  $brand->section2_short_description   !!}"
                                                   name="section2_short_description"/>
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
                                                      name="section2_description">{!!  $brand->section2_description !!}</textarea>
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
                                                          name="section3_heading">{!!  $brand->section3_heading !!}</textarea>


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
                                                      name="section3_description">{!!  $brand->section3_description !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" class="form-control" value="{!!  $brand->meta_title !!}"
                                                   name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" value="{!!  $brand->meta_description !!}"
                                                   class="form-control"
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
                                            <input type="text" class="form-control" value="{!! $brand->keywords !!}" name="keywords">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.blogs.index') !!}"
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

    {{--    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">--}}
@endsection
@section('js')

    <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    <script src="{{asset('admin/assets/js/summernote.js')}}"></script>

@endsection
