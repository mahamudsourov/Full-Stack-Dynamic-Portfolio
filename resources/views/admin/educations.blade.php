@extends('admin.layout')

@push('title')
Manage Educations
@endpush

@section('content')
    <h1>Manage Educations</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/admin/educations" method="POST" style="margin-bottom: 2rem;">
        @csrf

        <input type="text" name="type" placeholder="Type (e.g., Bachelor)" value="{{ old('type') }}" required>
        @error('type')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="name" placeholder="Degree Name" value="{{ old('name') }}" required>
        @error('name')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="institute" placeholder="Institute" value="{{ old('institute') }}" required>
        @error('institute')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="number" name="enrolled_year" placeholder="Enrolled Year" value="{{ old('enrolled_year') }}" required>
        @error('enrolled_year')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="number" name="passing_year" placeholder="Passing Year" value="{{ old('passing_year') }}" required>
        @error('passing_year')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="grade" placeholder="Grade" value="{{ old('grade') }}">
        @error('grade')<div style="color:red;">{{ $message }}</div>@enderror

        <button type="submit">Add Education</button>
    </form>

    <h2>All Educations</h2>
    @if($educations->count() > 0)
        <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Degree Name</th>
                    <th>Institute</th>
                    <th>Enrolled Year</th>
                    <th>Passing Year</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($educations as $edu)
                    <tr>
                        <td>{{ $edu->type }}</td>
                        <td>{{ $edu->name }}</td>
                        <td>{{ $edu->institute }}</td>
                        <td>{{ $edu->enrolled_year }}</td>
                        <td>{{ $edu->passing_year }}</td>
                        <td>{{ $edu->grade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No education records found.</p>
    @endif
@endsection
