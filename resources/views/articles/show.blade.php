<x-layout>
    <x-slot:title>Dettaglio Articolo</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0 p-5">
                <h1 class="display-4">{{ $article->title }}</h1>
                <p class="text-muted italic">{{ $article->subtitle }}</p>
                <hr>
                <p class="lead">{{ $article->body }}</p>
                
                <div class="mt-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary">Torna alla lista</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>