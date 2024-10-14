@extends('admin.layout.main')

@section('title')
    Splash Pop-Ups
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100 mt-4">
            <h3 class="text-22 text-center text-bold w-100 mb-4">Splash Pop-Ups</h3>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-12" style="text-align: right">
                <a href="{!! route('admin.splash-pop-ups.create') !!}" class="btn btn-primary btn-sm">Create Splash Pop-Up</a>
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
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($splashPopUps as $index => $splashPopUp)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $splashPopUp->name }}</td>
                                        <td>
                                            <img src="{{ asset($splashPopUp->image) }}" alt="{{ $splashPopUp->name }}" style="width: 50px; height: auto;">

                                        </td>
                                        <td>{{ $splashPopUp->description }}</td>
                                        <td>{{ $splashPopUp->status ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('admin.splash-pop-ups.edit', $splashPopUp->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" onclick="confirmDelete({{ $splashPopUp->id }})">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <form id="delet_{{ $splashPopUp->id }}" method="POST"
                                                  action="{{ route('admin.splash-pop-ups.destroy', $splashPopUp->id) }}"
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
