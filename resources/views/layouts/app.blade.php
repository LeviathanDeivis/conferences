<!DOCTYPE html>
<html>
<head>
    <title>{{ __('messages.conference_system') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            {{ __('messages.conference_system') }}
        </a>

        <div class="ms-auto text-white">

            Deividas Margis PIT-23-NL

            <button class="btn btn-secondary btn-sm ms-3" disabled>
                {{ __('messages.logout') }}
            </button>

        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>