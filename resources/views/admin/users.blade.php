@extends('admin.layout')

@push('title')
Manage Users
@endpush

@section('content')
    <h1>Manage Users</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/admin/users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Add User</button>
    </form>

    <h2>All Users</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
@endsection
