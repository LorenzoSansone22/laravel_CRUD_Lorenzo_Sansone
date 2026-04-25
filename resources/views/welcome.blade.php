<x-layout>
    <x-slot:title>Home Page</x-slot>

    <div class="p-5 mb-4 bg-light rounded-3 border">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Gestore Articoli CRUD</h1>
            <p class="col-md-12 fs-4">
                gestire  contenuti.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg px-4 gap-3">Visualizza Articoli</a>
                <a href="{{ route('articles.create') }}" class="btn btn-outline-secondary btn-lg px-4">Crea Nuovo</a>
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Database</h2>
                <p> articoli nel database MySQL  migrazioni di Laravel.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Funzioni</h2>
                <p>Puoi creare, leggere, modificare e cancellare articoli.</p>
            </div>
        </div>
    </div>
</x-layout>