@extends('admin.layout.main')
@section('title')
    Home Page Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Home Page</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right" style="text-align: right">

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
                            <form action="{!! route('admin.home.update') !!}" enctype="multipart/form-data" id="form_validation"
                                autocomplete="off" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Name</label>
                                            </div>

                                            <input readonly type="text" required class="form-control"
                                                value="{!! $data['home']->name !!}" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Section-1 Desktop</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_1_heading_left">{!! $data['home']->section_1_heading_left !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Section-1 Mobile</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_1_image">{!! $data['home']->section_1_image !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Section-2 services</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_1_image_background">{!! $data['home']->section_1_image_background !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2">

                                    <div class="row mb-2 mt-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label> section-3 Slider </label>
                                                </div>
                                                <textarea type="text" required class="form-control summernote" value="" name="section_1_heading_right">{!! $data['home']->section_1_heading_right !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2 mt-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label> section-4 section_1_image</label>
                                                </div>
                                                <textarea type="text" required class="form-control summernote" value="" name="section_1_description_right">{!! $data['home']->section_1_description_right !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> section-5 Description</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_2_servise_logo">{!! $data['home']->section_2_servise_logo !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row mb-2 mt-2"> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label> Section-2 Services </label> --}}
                                {{--                                            </div> --}}

                                {{--                                            @php --}}

                                {{--                                                $servise=json_decode($data['home']->section_2_servise_logo); --}}
                                {{--                                            if(!$servise) --}}
                                {{--                                            { --}}
                                {{--                                                $servise=[]; --}}
                                {{--                                            } --}}
                                {{-- --}}
                                {{--                                            @endphp --}}
                                {{--                                            <select   class="form-control js-example-basic-single" multiple --}}
                                {{--                                                    name="section_2_servise_logo[]"> --}}
                                {{--                                                @foreach ($data['services'] as $item) --}}
                                {{--                                                    <option  @if ($servise) @if (in_array($item->id, $servise))  selected @endif @endif   value="{!! $item->id  !!}">{!! $item->name  !!}</option> --}}
                                {{--                                                @endforeach --}}
                                {{--                                            </select> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            --}}
                                {{--                                            @php --}}

                                {{--                                                $brand=json_decode($data['home']->section_3_brands_logo); --}}
                                {{--                                            if(!$brand) --}}
                                {{--                                            { --}}
                                {{--                                                $brand=[]; --}}
                                {{--                                            } --}}
                                {{-- --}}
                                {{--                                            @endphp --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label> Section-3 Brands </label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <select   class="form-control js-example-basic-single" multiple --}}
                                {{--                                                    name="section_3_brands_logo[]"> --}}
                                {{--                                                @foreach ($data['brands'] as $item) --}}
                                {{--                                                    <option   @if ($brand) @if (in_array($item->id, $brand))  selected @endif @endif   value="{!! $item->id  !!}">{!! $item->name  !!}</option> --}}
                                {{--                                                @endforeach --}}
                                {{--                                            </select> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-6</label>
                                            </div>
                                            <textarea type="text" class="form-control summernote" name="section_3_brands_logo"> {!! $data['home']->section_3_brands_logo !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-7 </label>
                                            </div>

                                            <textarea type="text" class="form-control summernote" name="section_4_title1"> {!! $data['home']->section_4_title1 !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-12"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label> section-4 Description-1 </label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <textarea type="text" required class=" summernote form-control" --}}
                                {{--                                                      name="section_4_description1">{!! $data['home']->section_4_description1 !!}</textarea> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Section-4 Title-2</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <input type="text"   class="form-control" value="{!! $data['home']->section_4_title2 !!}" --}}
                                {{--                                                   name="section_4_title2"/> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Section-4 Image-2</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <input type="file"   class="form-control" value="" --}}
                                {{--                                                   name="section_4_image2"/> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}

                                {{--                                </div> --}}
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-12"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label> section-4 Description-2 </label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <textarea type="text" required class=" summernote form-control" --}}
                                {{--                                                      name="section_4_description2">{!! $data['home']->section_4_description2 !!}</textarea> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Section-4 Title-3</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <input type="text"     class="form-control" value="{!! $data['home']->section_4_title3!!}" --}}
                                {{--                                                   name="section_4_title3"/> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Section-4 Image-3</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <input type="file"   class="form-control" value="" --}}
                                {{--                                                   name="section_4_image3"/> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}

                                {{--                                </div> --}}
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-12"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label> Section-4 Description-3 </label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <textarea type="text" required class=" summernote form-control" --}}
                                {{--                                                      name="section_4_description3">{!! $data['home']->section_4_description3 !!}</textarea> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                                <div class="row"> --}}
                                {{--                                    <div class="col-12"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Section 5 Text</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <textarea type="text" required class=" summernote form-control" --}}
                                {{--                                                      name="section_5_text">{!! $data['home']->section_5_text !!}</textarea> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}


                                {{--                                <div class="row mt-3"> --}}
                                {{--                                    <div class="col-6"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Meta Title</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <input type="text" required class="form-control" value="{!! $data['home']->meta_title !!}" name="meta_title"> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                                <div class="row mt-3"> --}}
                                {{--                                    <div class="col-12"> --}}
                                {{--                                        <div class="form-group"> --}}
                                {{--                                            <div class="input-label"> --}}
                                {{--                                                <label>Meta Description</label> --}}
                                {{--                                            </div> --}}
                                {{--                                            <textarea type="text" required class=" summernote form-control " --}}
                                {{--                                                      name="meta_description">{!! $data['home']->meta_description !!}</textarea> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group text-right" style="text-align: right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.pages.index') !!}" class=" btn btn-sm btn-danger">Cancel </a>
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
    <script src="{{ asset('assets/plugins/summernote-editor/summernote1.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.js') }}"></script>
    <script></script>

@endsection
