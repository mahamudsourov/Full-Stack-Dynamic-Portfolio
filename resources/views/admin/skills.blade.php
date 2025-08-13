@extends('admin.layout')

@push('title')
Manage Skills
@endpush

@section('content')
    <h1>Manage Skills</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/admin/skills" method="POST" style="margin-bottom: 2rem;">
        @csrf

        <input type="text" name="name" placeholder="Skill Name" value="{{ old('name') }}" required>
        @error('name')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="type" placeholder="Type (e.g., Programming, Soft Skill)" value="{{ old('type') }}">
        @error('type')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="level" placeholder="Level (e.g., Beginner, Expert)" value="{{ old('level') }}">
        @error('level')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="logo" placeholder="Logo URL" value="{{ old('logo') }}">
        @error('logo')<div style="color:red;">{{ $message }}</div>@enderror

        <button type="submit">Add Skill</button>
    </form>

    <h2>All Skills</h2>

    @if($skills->count() > 0)
        <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Level</th>
                    <th>Logo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->type }}</td>
                        <td>{{ $skill->level }}</td>
                        <td>
                            @if($skill->logo)
                                <img src="{{ $skill->logo }}" alt="{{ $skill->name }}" style="width:40px; height:40px; object-fit:contain;">
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No skills found.</p>
    @endif
@endsection
