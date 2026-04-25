<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; margin: 0; }
        .navbar { background: #2c3e50; color: white; padding: 0 50px; height: 70px; display: flex; align-items: center; }
        .navbar a { color: white; text-decoration: none; margin-right: 20px; }
        .post-container { max-width: 800px; margin: 50px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; font-size: 2.5rem; }
        .meta { color: #95a5a6; margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .content { line-height: 1.8; color: #34495e; font-size: 1.1rem; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="{{ route('articles.index') }}">← Torna agli articoli</a>
    </nav>
    <div class="post-container">
        <h1>{{ $article->title }}</h1>
        <div class="meta">Scritto da: <strong>{{ $article->user ? $article->user->name : 'Anonimo' }}</strong></div>
        <div class="content">
            {{ $article->content }}
        </div>
    </div>
</body>
</html>