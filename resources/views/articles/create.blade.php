<x-layout>
    <x-slot:title>Crea Articolo</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4 text-center">Nuovo Articolo</h1>

            <form action="{{ route('articles.store') }}" method="POST" class="card p-4 shadow border-0">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Sottotitolo</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Inserisci il sottotitolo">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Contenuto</label>
                    <textarea name="body" rows="5" class="form-control" placeholder="Scrivi qui l'articolo"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 shadow-sm">Salva Articolo</button>
            </form>
        </div>
    </div>
</x-layout>