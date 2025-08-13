@extends('admin.layout')

@push('title')
Manage Projects
@endpush

@section('content')
    <h1>Manage Projects</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/admin/projects" method="POST" style="margin-bottom: 2rem;">
        @csrf

        <input type="text" name="name" placeholder="Project Name" value="{{ old('name') }}" required>
        @error('name')<div style="color:red;">{{ $message }}</div>@enderror

        <textarea name="description" placeholder="Description" required>{{ old('description') }}</textarea>
        @error('description')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="url" name="github_url" placeholder="GitHub URL" value="{{ old('github_url') }}">
        @error('github_url')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="url" name="demo_url" placeholder="Demo URL" value="{{ old('demo_url') }}">
        @error('demo_url')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="images" placeholder="Images (comma-separated URLs)" value="{{ old('images') }}">
        @error('images')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="type" placeholder="Type" value="{{ old('type') }}">
        @error('type')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="reference" placeholder="Reference" value="{{ old('reference') }}">
        @error('reference')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="tools" placeholder="Tools (comma-separated)" value="{{ old('tools') }}">
        @error('tools')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="keywords" placeholder="Keywords (comma-separated)" value="{{ old('keywords') }}">
        @error('keywords')<div style="color:red;">{{ $message }}</div>@enderror

        <input type="text" name="status" placeholder="Status" value="{{ old('status') }}">
        @error('status')<div style="color:red;">{{ $message }}</div>@enderror

        <button type="submit">Add Project</button>
    </form>

    <h2>All Projects</h2>

    @if($projects->count() > 0)
        <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>GitHub URL</th>
                    <th>Demo URL</th>
                    <th>Images</th>
                    <th>Type</th>
                    <th>Reference</th>
                    <th>Tools</th>
                    <th>Keywords</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($project->description, 50) }}</td>
                        <td><a href="{{ $project->github_url }}" target="_blank">{{ $project->github_url }}</a></td>
                        <td><a href="{{ $project->demo_url }}" target="_blank">{{ $project->demo_url }}</a></td>
                        <td>
                            @if($project->images)
                                @foreach(explode(',', $project->images) as $img)
                                    <img src="{{ trim($img) }}" alt="project image" style="width:50px; height:50px; object-fit:cover; margin-right: 5px;">
                                @endforeach
                            @endif
                        </td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->reference }}</td>
                        <td>{{ $project->tools }}</td>
                        <td>{{ $project->keywords }}</td>
                        <td>{{ $project->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No projects found.</p>
    @endif
@endsection
