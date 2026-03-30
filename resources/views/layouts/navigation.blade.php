<nav class="bg-light border-bottom py-2">

    <div class="container-fluid d-flex justify-content-between align-items-center px-4">

        <!-- LEFT -->
        <div class="d-flex align-items-center">
            @auth
    @if(Auth::user()->hasRole('admin'))
        <a href="/admin" class="navbar-brand fw-bold me-4">Conference System</a>
        <a href="/admin/conferences" class="nav-link me-3">Conferences</a>

    @elseif(Auth::user()->hasRole('employee'))
        <a href="/employee/conferences" class="navbar-brand fw-bold me-4">Conference System</a>
        <a href="/employee/conferences" class="nav-link me-3">Employee Conferences</a>

    @else
        <a href="/client/conferences" class="navbar-brand fw-bold me-4">Conference System</a>
        <a href="/client/conferences" class="nav-link me-3">Conferences</a>
    @endif
    @endauth
        </div>

        

        <!-- RIGHT -->
        <div class="d-flex align-items-center">

            @auth
                <span class="me-3">{{ Auth::user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            @endauth

            @guest
                <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            @endguest

        </div>

    </div>

</nav>