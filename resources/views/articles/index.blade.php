<!DOCTYPE html>
<html>
<head>
    <title>Articoli</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; margin: 0; }
        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }
        .articles-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 25px; }
        .card { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); overflow: hidden; display: flex; flex-direction: column; }
        .card-body { padding: 20px; }
        .card-footer { background: #f8f9fa; padding: 15px; display: flex; gap: 5px; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 0.8rem; border:none; color:white; }
        .btn-show { background: #3498db; flex: 1; text-align: center; }
        .btn-edit { background: #f1c40f; color: black; }
        .btn-delete { background: #e74c3c; cursor:pointer; }
    </style>
</head>
<body>
    <x-navbar />
    <div class="container">
        <h2>Tutti gli Articoli</h2>
        <div class="articles-grid">
            @foreach($articles as $article)
            <div class="card">
                <div class="card-body">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <small>Autore: {{ $article->user->name }}</small>
                </div>
                <div class="card-footer">
                    <a href="{{ route('articles.show', $article) }}" class="btn btn-show">Leggi</a>
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-edit">Modifica</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-delete">X</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>