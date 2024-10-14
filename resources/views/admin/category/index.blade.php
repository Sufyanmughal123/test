@extends('admin.layout.main')

@section('title')
    Jobs
@stop
@section('content')
    <div class="container-fluid">
        <div class="row w-100 mt-4">
            <h3 class="text-22 text-center text-bold w-100 mb-4">Category</h3>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-12" style="text-align: right">
                <a href="{!! route('admin.categories.create') !!}" class="btn btn-primary btn-sm">Create Category</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row w-100 text-center">
                    <div class="col-12">
                        <table class="table table-striped table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th width="200px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index => $category)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.categories.edit', $category->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" 
                                                onclick="confirmDelete({{ $category->id }})">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <form id="delet_{{ $category->id }}" method="POST"
                                                action="{{ route('admin.categories.destroy', $category->id) }}"
                                                style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this?')) {
                document.getElementById(`delet_${id}`).submit();
            }
        }
    </script>
@endsection
