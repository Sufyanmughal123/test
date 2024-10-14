@extends('admin.layout.main')

@section('title')
    Add Splash Pop-Up
@stop

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Splash Pop-Up</h3>
                        <div class="row mt-4 mb-4">
                            <div class="col-12 text-right">
                                <a href="{!! route('admin.splash-pop-ups.index') !!}" class="btn btn-primary btn-sm">
                                    Back
                                </a>
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
                            <form action="{!! route('admin.splash-pop-ups.store') !!}" enctype="multipart/form-data" id="form_validation" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Name</label>
                                            </div>
                                            <input type="text" required class="form-control" name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Image</label>
                                            </div>
                                            <input type="file" class="form-control" name="image" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Description</label>
                                            </div>
                                            <textarea class="form-control summernote" name="description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Status</label>
                                            </div>
                                            <select name="status" class="form-control" required>
                                                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Publish</option>
                                                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Unpublish</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Button Link (URL)</label>
                                            </div>
                                            <input type="text" class="form-control" name="url" value="{{ old('url') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            <a href="{!! route('admin.splash-pop-ups.index') !!}" class="btn btn-sm btn-danger">Cancel</a>
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
    <script src="{{ asset('admin/assets/plugins/summernote-editor/summernote1.js') }}"></script>
    <script src="{{ asset('admin/assets/js/summernote.js') }}"></script>
@endsection
