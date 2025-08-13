@extends('admin.layout')

@push('title')
Admin Dashboard
@endpush

@section('content')
    <h1>Admin Dashboard</h1>

    <div class="dashboard-summary">
        <div class="summary-card">
            <h3>Total Users</h3>
            <p>{{ $totalUsers }}</p>
        </div>
        <div class="summary-card">
            <h3>Total Projects</h3>
            <p>{{ $totalProjects }}</p>
        </div>
        <div class="summary-card">
            <h3>Total Messages</h3>
            {{-- <p>{{ $totalMessages }}</p> --}}
        </div>
    </div>
@endsection
