@extends('admin.layout.main')
@section('title')
    Service  Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Service View</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.services.index') !!}" class="btn btn-primary btn-sm ">
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
                            <form action="{!! route('admin.services.update',$service->id) !!}"
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
                                            <input type="text" readonly class="form-control" value="{{@$service->name}}" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Description</label>
                                            </div>
                                            <textarea type="text" disabled class="form-control summernote" value=""
                                                      name="description">{{@$service->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label> Long Description</label>
                                            </div>
                                            <textarea type="text" disabled class="form-control summernote" value=""
                                                      name="points">{{@$service->points}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" readonly class="form-control" value="{{@$service->meta_title}}" name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" readonly class="form-control"
                                                   name="meta_description" value="{{@$service->meta_description}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Keywords</label>
                                            </div>
                                            <input type="text" readonly class="form-control"
                                                   name="keywords" value="{{@$service->keywords}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Keypoints</label>
                                            </div>
                                            <input type="text" disabled class="form-control"
                                                   name="keypoints" value="{{@$service->keypoints}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <!-- <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Image</label>
                                            </div>
                                            <input type="file" name="image"  id="banner" class="form-control">
                                        </div>
                                    </div> -->
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Status</label>
                                            </div>
                                            <select name="status" disabled class="form-control">
                                                <option>Select Option</option>
                                                <option @if($service->status == '1') selected @endif value="1">Active</option>
                                                <option @if($service->status == '0') selected @endif value="0">Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.services.index') !!}"
                                           class=" btn btn-sm btn-danger">Cancel </a>
                                    </div>
                                </div> -->

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

