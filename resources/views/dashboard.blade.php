<x-layout>
    <x-slot:title>Dashboard</x-slot>

    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4">Area Riservata</h1>
            <div class="alert alert-success mt-4">
                Benvenuto, <strong>{{ Auth::user()->name }}</strong>! Solo tu puoi vedere questa pagina.
            </div>
        </div>
    </div>
</x-layout>