@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Achievements</h2>

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Add Achievement Form --}}
    <div class="card mb-4">
        <div class="card-header">Add Achievement</div>
        <div class="card-body">
            <form method="POST" action="{{ route('achievements.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Certification</label>
                        <input type="text" name="certification" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Organization</label>
                        <input type="text" name="organization" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Images (URL)</label>
                        <input type="text" name="images" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Achievement</button>
            </form>
        </div>
    </div>

    {{-- Achievements List --}}
    <div class="card">
        <div class="card-header">All Achievements</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Certification</th>
                        <th>Organization</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($achievements as $achievement)
                        <tr>
                            <td>{{ $achievement->name }}</td>
                            <td>{{ $achievement->type }}</td>
                            <td>{{ $achievement->certification }}</td>
                            <td>{{ $achievement->organization }}</td>
                            <td>{{ $achievement->date }}</td>
                            <td>{{ $achievement->category }}</td>
                            <td>
                                @if($achievement->images)
                                    <img src="{{ $achievement->images }}" alt="Achievement" width="60">
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('achievements.destroy', $achievement->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="text-center">No achievements found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
