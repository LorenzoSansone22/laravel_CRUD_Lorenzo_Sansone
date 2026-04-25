<nav class="navbar navbar-dark bg-dark shadow mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">LARAVEL 10</a>
        
        <div class="d-flex align-items-center">
            @auth
                <span class="text-info me-3">Utente: {{ Auth::user()->name }}</span>
                <a class="btn btn-outline-light btn-sm me-2" href="/dashboard">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Esci (Logout)</button>
                </form>
            @else
                <a class="btn btn-outline-light btn-sm me-2" href="/login">Accedi</a>
                <a class="btn btn-primary btn-sm" href="/register">Registrati</a>
            @endauth
        </div>
    </div>
</nav>