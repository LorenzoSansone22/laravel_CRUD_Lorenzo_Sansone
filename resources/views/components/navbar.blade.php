<nav class="navbar">
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="{{ route('articles.index') }}">Articoli</a>
    </div>
    <div class="nav-actions">
        <a href="{{ route('articles.create') }}" class="btn-create">Nuovo Articolo</a>
    </div>
</nav>

<style>
    .navbar { 
        background: #2c3e50; 
        color: white; 
        padding: 0 50px; 
        height: 70px; 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', sans-serif;
    }
    .nav-links a { 
        color: white; 
        text-decoration: none; 
        margin-right: 25px; 
        font-weight: 500; 
    }
    .nav-links a:hover { color: #3498db; }
    .btn-create { 
        background: #3498db; 
        color: white; 
        padding: 10px 20px; 
        border-radius: 6px; 
        text-decoration: none; 
        font-weight: bold;
    }
</style>