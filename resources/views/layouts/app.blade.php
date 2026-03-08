<!DOCTYPE html>
<html>
<head>
    <title>Conference System</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Conference System</span>

    <div class="text-white">
        John Doe
        <button class="btn btn-secondary btn-sm" disabled>Logout</button>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>