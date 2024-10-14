@extends('admin.layout.main')
@section('title')
    Country Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Edit </h3>
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
                            <form action="{!! route('admin.country.update',$country->id) !!}"
                                  enctype="multipart/form-data"
                                  id="form_validation" autocomplete="off" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Country Name</label>
                                            </div>
                                            <input readonly type="text" required class="form-control"
                                                   value="{!! $country->country_name!!}"
                                                   name="country_name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Country Description</label>
                                            </div>
                                            <input readonly type="text" required class="form-control"
                                                   value="{!! $country->country_description!!}"
                                                   name="country_description">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input readonly type="text" required class="form-control"
                                                   value="{!! $country->meta_title!!}" name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input readonly type="text" required class="form-control"
                                                   value="{!! $country->meta_description !!}"
                                                   name="meta_description">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>About</label>
                                            </div>
                                            <textarea disabled="" id="summernote" type="text" required
                                                      class="  form-control" value=""
                                                      name="about">{!! $country->about !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Banner Image</label>
                                            </div>
                                            <input readonly type="file" name="b_images" id=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Mobile Banner Image</label>
                                            </div>
                                            <input type="file"  name="mb_b_image" id=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Banner Text</label>
                                            </div>
                                            <textarea disabled id="summernote" type="text" required
                                                      class="  form-control" value=""
                                                      name="why_study">{!! $country->banner_text !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Amazing Facts</label>
                                            </div>
                                            <textarea disabled id="summernote" type="text" required
                                                      class="  form-control" value=""
                                                      name="why_study">{!! $country->why_study !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Cost To Study</label>
                                            </div>
                                            <textarea disabled id="summernote" type="text" required
                                                      class="  form-control" value=""
                                                      name="cost_to_study">{!! $country->cost_to_study !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Quick Study</label>
                                            </div>
                                            <textarea disabled id="quick_study" type="text" required
                                                      class="  form-control" value=""
                                                      name="quick_study">{!! $country->quick_study !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Important Links</label>
                                            </div>
                                            <textarea disabled id="important_links" type="text" required
                                                      class="  form-control" value=""
                                                      name="important_links">{!! $country->important_links !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>FAQS</label>
                                            </div>
                                            <textarea disabled id="faqs" type="text" required
                                                      class="  form-control" value=""
                                                      name="faqs">{!! $country->faqs !!}</textarea>
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

    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')

    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>--}}
    {{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>--}}
    <!-- INTERNAL WYSIWYG Editor JS -->

    <script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/summernote-editor/summernote1.js')}}"></script>
    <script src="{{asset('admin/assets/js/summernote.js')}}"></script>



@endsection

