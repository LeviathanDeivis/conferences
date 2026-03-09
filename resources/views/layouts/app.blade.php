<!DOCTYPE html>
<html>
<head>
    <title>Conference System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Conference System</span>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>