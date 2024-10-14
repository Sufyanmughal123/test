@extends('admin.layout.main')

@section('title')
    Edit Splash Pop-Up
@stop

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-22 text-bold mb-4">Edit Splash Pop-Up</h3>
                        <form action="{{ route('admin.splash-pop-ups.update', $splashPopUp->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $splashPopUp->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <small>Leave blank to keep the current image.</small>
                                @if ($splashPopUp->image)
                                <img src="{{ asset($splashPopUp->image) }}" alt="{{ $splashPopUp->name }}" style="width: 50px; height: auto;">
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description">{{ old('description', $splashPopUp->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $splashPopUp->status == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="0" {{ $splashPopUp->status == 0 ? 'selected' : '' }}>Unpublished</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Button Link (URL)</label>
                                <input type="url" class="form-control" name="url" value="{{ old('url', $splashPopUp->url) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.splash-pop-ups.index') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
