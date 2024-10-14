@extends('admin.layout.main')
@section('title')
    City View
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> View </h3>
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
                            <form action="" enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Name</label>
                                            </div>
                                            <input type="text" required class="form-control" value="{{$city->name}}"
                                                   name="name" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Description</label>
                                            </div>
                                            <input type="text" required class="form-control" value="{{$city->description}}"
                                                   name="description" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Country </label>
                                            </div>

                                            <select name="country_id" class="form-control" disabled>
                                                <option>Select Country</option>

                                                @foreach($countries as $key=> $country)
                                                    <option value="{{$key}}" @if($key==@$city->country_id) selected @endif>{{$country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" required class="form-control" value="{{@$city->meta_title}}" name="meta_title" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                   name="meta_description" value="{{@$city->meta_description}}" readonly>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="row mt-3">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="input-label">--}}
{{--                                                <label>Image</label>--}}
{{--                                            </div>--}}
{{--                                            <input type="file" name="banner" required id="banner" class="form-control">--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-12">
                                    <div class="form-group text-right">
{{--                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>--}}
                                        <a href="{!! route('admin.city.index') !!}"
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

    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')

    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>--}}
    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>--}}
    <!-- INTERNAL WYSIWYG Editor JS -->

    <script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
{{--            <script src="{{asset('admin/assets/js/summernote.js')}}"></script>--}}

    <script>



        $('#popular_cities').summernote('disable');
        $('#top_universities').summernote('disable');
        $('#top_career').summernote('disable');
        $('#working_hours').summernote('disable');
        $('#living_expense').summernote('disable');
        $('#visa_process').summernote('disable');
        $('#cost_to_study').summernote('disable');
        $('#admission_criteria').summernote('disable');
        $('#why_study').summernote('disable');
        $('#about').summernote('disable');





        // disable Summernote
    </script>

@endsection

