@extends('admin.layout')

@push('title')
Manage Experiences
@endpush

@section('content')
    <h1>Manage Experiences</h1>

    @if(session('success'))
        <p style="color: green; margin-bottom: 12px;">{{ session('success') }}</p>
    @endif

    {{-- Add Experience --}}
    <form action="{{ url('/admin/experiences') }}" method="POST" style="margin-bottom: 24px;">
        @csrf
        {{-- If you want to bind to the logged-in user, replace with: auth()->id() --}}
        <input type="hidden" name="user_id" value="{{ old('user_id') }}">

        <input type="text" name="type" placeholder="Type (e.g. Job, Internship)" value="{{ old('type') }}" required>
        @error('type') <div style="color:red">{{ $message }}</div> @enderror

        <input type="text" name="designation" placeholder="Designation" value="{{ old('designation') }}" required>
        @error('designation') <div style="color:red">{{ $message }}</div> @enderror

        <input type="text" name="organization" placeholder="Organization" value="{{ old('organization') }}" required>
        @error('organization') <div style="color:red">{{ $message }}</div> @enderror

        <input type="date" name="from_date" value="{{ old('from_date') }}" required>
        @error('from_date') <div style="color:red">{{ $message }}</div> @enderror

        <input type="date" name="to_date" value="{{ old('to_date') }}">
        @error('to_date') <div style="color:red">{{ $message }}</div> @enderror

        <button type="submit">Add Experience</button>
    </form>

    {{-- List --}}
    <h2>All Experiences</h2>
    @if($experiences->count())
        <table border="1" cellpadding="6" cellspacing="0" style="width:100%; border-collapse:collapse;">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>From</th>
                    <th>To</th>
                    <th style="width:120px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experiences as $exp)
                    <tr>
                        <td>{{ $exp->type }}</td>
                        <td>{{ $exp->designation }}</td>
                        <td>{{ $exp->organization }}</td>
                        <td>{{ $exp->from_date }}</td>
                        <td>{{ $exp->to_date ?? 'Present' }}</td>
                        <td>
                            <form action="{{ url('/admin/experiences/'.$exp->id) }}" method="POST" onsubmit="return confirm('Delete this experience?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color:#b00020;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No experiences found.</p>
    @endif
@endsection
