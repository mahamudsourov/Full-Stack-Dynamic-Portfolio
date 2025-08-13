<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@stack('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}" />
    @stack('style')
</head>
<body>
    <div class="admin-wrapper">
        @include('admin.components.sidebar')

        <main class="admin-main">
            @yield('content')
        </main>
    </div>

    @include('admin.components.footer')
</body>
</html>
