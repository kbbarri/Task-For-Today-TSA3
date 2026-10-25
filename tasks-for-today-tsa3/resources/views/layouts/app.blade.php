<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasks for Today')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="brand">
                Tasks for Today
            </a>

            <nav>
                <a href="{{ route('home') }}">Welcome</a>
                <a href="{{ route('tasks') }}">Task List</a>
                <a href="{{ route('profile') }}">Profile</a>
                <a href="{{ route('about') }}">About</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>Tasks for Today Management System</p>
    </footer>

</body>
</html>