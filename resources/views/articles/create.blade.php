<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Articolo</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; margin: 0; }
        .form-card { background: white; padding: 30px; border-radius: 10px; max-width: 600px; margin: 50px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { background: #3498db; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <x-navbar />
    <div class="form-card">
        <h2>Nuovo Articolo</h2>
       <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Titolo" required>
    <textarea name="content" rows="5" placeholder="Contenuto" required></textarea>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Pubblica</button>
</form>
    </div>
</body>
</html>