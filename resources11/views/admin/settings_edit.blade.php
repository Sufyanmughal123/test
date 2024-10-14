@extends('admin.layout.main')
@section('title')
    Settings  Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Settings Edit</h3>
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
                            <form action="{!! route('admin.setting.update',$settings->id) !!}"
                                  enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> site_title</label>
                                            </div>
                                            <input type="text" class="form-control"
                                                   value="{{@$settings->site_title}}"
                                                   name="site_title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Markee Tag</label>
                                            </div>
                                            <input type="text" class="form-control"
                                                   value="{{@$settings->markee_tag}}"
                                                   name="markee_tag">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> site_email</label>
                                            </div>
                                            <input type="text"   class="form-control"
                                                   value="{{@$settings->site_email}}"
                                                   name="site_email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> site_logo (Size 136 * 137) </label>
                                            </div>
                                            <input type="file" class="form-control" value="{{@$settings->site_logo}}"
                                                   name="site_logo">
                                        </div>
                                    </div>
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="input-label">--}}
{{--                                                <label> site_reception_no</label>--}}
{{--                                            </div>--}}
{{--                                            <input type="text"   class="form-control"--}}
{{--                                                   value="{{@$settings->site_reception_no}}"--}}
{{--                                                   name="site_reception_no">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> site_mobile_no</label>
                                            </div>
                                            <input type="text"   class="form-control"
                                                   value="{{@$settings->site_mobile_no}}"
                                                   name="site_mobile_no">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> site_icons</label>
                                            </div>
                                            <input type="file" class="form-control" value="{{@$settings->site_icons}}"
                                                   name="site_icons">
                                            </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Address 1 Heading</label>
                                                </div>
                                                <input type="text" class="form-control"
                                                       name="address_one_heading" value="{{@$settings->address_one_heading}}"/>
                                            </div>
                                        </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="input-label">
                                                        <label>Address</label>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           name="head_office" value="{{@$settings->head_office}}"/>
                                                </div>
                                            </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Address 2 Heading</label>
                                                </div>
                                                <input type="text" class="form-control"
                                                       name="address_two_heading" value="{{@$settings->address_two_heading}}"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <div class="input-label">
                                                        <label>Address 2</label>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           name="loc_2" value="{{@$settings->loc_2}}"/>
                                                </div>
                                            </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Address 3 Heading</label>
                                                </div>
                                                <input type="text" class="form-control"
                                                       name="address_three_heading" value="{{@$settings->address_three_heading}}"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <div class="input-label">
                                                        <label>Address 3</label>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           name="loc_3" value="{{@$settings->loc_3}}"/>
                                                </div>
                                            </div>
{{--                                            <div class="col-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <div class="input-label">--}}
{{--                                                        <label> Get In Touch </label>--}}
{{--                                                    </div>--}}
{{--                                                    <textarea class="form-control"--}}
{{--                                                              name="get_in_touch">{{@$settings->get_in_touch}}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-label">--}}
{{--                                                    <label> site_Delivery</label>--}}
{{--                                                </div>--}}
{{--                                                <input type="text"   class="form-control"--}}
{{--                                                       value="{{@$settings->site_Delivery}}"--}}
{{--                                                       name="site_Delivery">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-label">--}}
{{--                                                    <label> site_working_hours</label>--}}
{{--                                                </div>--}}
{{--                                                <input type="text"   class="form-control"--}}
{{--                                                       value="{{@$settings->site_working_hours}}"--}}
{{--                                                       name="site_working_hours">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label> facebook icon</label>
                                                </div>
                                                <input type="text"   class="form-control"
                                                       value="{{@$settings->facebook_icon}}"
                                                       name="facebook_icon">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label> insta icon</label>
                                                </div>
                                                <input type="text"   class="form-control"
                                                       value="{{@$settings->insta_icon}}"
                                                       name="insta_icon">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Twitter icon</label>
                                                </div>
                                                <input type="text"   class="form-control"
                                                       value="{{@$settings->twitter_icon}}"
                                                       name="twitter_icon">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Youtube icon</label>
                                                </div>
                                                <input type="text"   class="form-control"
                                                       value="{{@$settings->linkedin_icon}}"
                                                       name="linkedin_icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-label">
                                                    <label>Whatsapp NUmber</label>
                                                </div>
                                                <input type="text"   class="form-control"
                                                       value="{{@$settings->whatsappnumber}}"
                                                       name="whatsappnumber">
                                            </div>
                                        </div>
{{--                                        <div class="col-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-label">--}}
{{--                                                    <label>Zohoo</label>--}}
{{--                                                </div>--}}
{{--                                                <input type="text"   class="form-control"--}}
{{--                                                       value="{{@$settings->zohoo}}"--}}
{{--                                                       name="zohoo">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
{{--                                    <div class="row">--}}

{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-label">--}}
{{--                                                    <label>Map location</label>--}}
{{--                                                </div>--}}
{{--                                                <textarea class="form-control" name="map">{{@$settings->map}}</textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>

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

    {{--    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">--}}
@endsection
@section('js')

    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>--}}
    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>--}}
    <!-- INTERNAL WYSIWYG Editor JS -->

    <script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    <script src="{{asset('admin/assets/js/summernote.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection

