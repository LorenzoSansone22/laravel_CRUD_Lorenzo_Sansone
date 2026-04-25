<x-layout>
    <x-slot:title>Lista Articoli</x-slot>

    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <h1>Tutti gli articoli</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Nuovo</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5>{{ $article->title }}</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info text-white">Vedi</a>
                                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Modifica</a>
                                
                                <form action="{{ route('articles.destroy', $article) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>