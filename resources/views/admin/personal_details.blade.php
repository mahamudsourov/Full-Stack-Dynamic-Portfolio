@extends('admin.layout')

@push('title')
Manage Personal Details
@endpush

@section('content')
    <h1>Manage Personal Details</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/admin/personal-details" method="POST" style="margin-bottom: 2rem;">
        @csrf

        <textarea name="description" placeholder="Description">{{ old('description') }}</textarea>
        @error('description')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="blood_group" placeholder="Blood Group" value="{{ old('blood_group') }}">
        @error('blood_group')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="department" placeholder="Department" value="{{ old('department') }}">
        @error('department')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="number" name="age" placeholder="Age" value="{{ old('age') }}">
        @error('age')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="date" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}">
        @error('dob')<div style="color:red;">{{ $message }}</div>@enderror

        <textarea name="address" placeholder="Address">{{ old('address') }}</textarea>
        @error('address')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="gender" placeholder="Gender" value="{{ old('gender') }}">
        @error('gender')<div style="color:red;">{{ $message }}</div>@enderror

        <button type="submit">Add Details</button>
    </form>

    <h2>All Personal Details</h2>

    @if($details->count() > 0)
        <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Blood Group</th>
                    <th>Department</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>{{ $detail->description }}</td>
                        <td>{{ $detail->blood_group }}</td>
                        <td>{{ $detail->department }}</td>
                        <td>{{ $detail->age }}</td>
                        <td>{{ $detail->dob }}</td>
                        <td>{{ $detail->address }}</td>
                        <td>{{ $detail->gender }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No personal details found.</p>
    @endif
@endsection
