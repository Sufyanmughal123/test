@extends('admin.layout.main')
@section('title')
    Service Edit
@stop
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Service Edit</h3>
                        <div class="row    mt-4 mb-4 ">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.services.index') !!}" class="btn btn-primary btn-sm ">
                                    Back </a>
                            </div>
                        </div>
                        {{--                        @dd($roles) --}}
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
                            <form action="{!! route('admin.services.update', $service->id) !!}" enctype="multipart/form-data" id="form_validation"
                                autocomplete="off" method="post">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Name</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                value="{!! $service->name !!}" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Slug(unique)</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                value="{!! $service->slug !!}" name="slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label for="category">Category</label>
                                            </div>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" disabled>Please select a category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->name }}" @selected($category->name == $service->category)>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Title</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                value="{!! $service->meta_title !!}" name="meta_title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Meta Description</label>
                                            </div>
                                            <input type="text" required class="form-control"
                                                value="{!! $service->meta_description !!}" name="meta_description">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Short Descrition </label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="short_descrition">  {!! $service->short_descrition !!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-1 Service </label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_1">
                                           {!! $service->section_1 !!} </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-2 Service</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_2">
                                              {!! $service->section_2 !!}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group mb-2 ">
                                            <div class="input-label">
                                                <label class="row">
                                                    <div class="col-md-10 "> Section-3 Service</div>
                                                    <div class="col-md-2 text-right"></div>
                                                </label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_3">
                                           {!! $service->section_3 !!}   </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-4 Service</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_4">
                                             {!! $service->section_4 !!} </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-5 Service</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_5">
                                              {!! $service->section_5 !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-6 Service</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_6">
                                            {!! $service->section_6 !!}  </textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-7 Service</label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_7">
                                            {!! $service->section_7 !!}  </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-8 Service </label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_8">
                                            {!! $service->section_8 !!}  </textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Section-9 Service </label>
                                            </div>
                                            <textarea type="text" required class="form-control summernote" value="" name="section_9">
                                             {!! $service->section_9 !!} </textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            <a href="{!! route('admin.blogs.index') !!}" class=" btn btn-sm btn-danger">Cancel </a>
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

    {{--    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}"> --}}
@endsection
@section('js')

    <script src="{{ asset('admin/assets/plugins/summernote-editor/summernote1.js') }}"></script>
    <script src="{{ asset('admin/assets/js/summernote.js') }}"></script>

@endsection
