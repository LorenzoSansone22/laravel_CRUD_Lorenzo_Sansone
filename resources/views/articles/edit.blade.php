<x-layout>
    <x-slot:title>Modifica Articolo</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('articles.update', $article) }}" method="POST" class="card p-5 shadow">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Sottotitolo</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $article->subtitle }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contenuto</label>
                    <textarea name="body" class="form-control" rows="5">{{ $article->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Aggiorna Articolo</button>
            </form>
        </div>
    </div>
</x-layout>