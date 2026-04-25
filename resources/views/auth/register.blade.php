<x-layout>
    <x-slot:title>Registrazione</x-slot>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center">Crea account</h1>

            <form action="/register" method="POST" class="p-4 shadow border rounded bg-light">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark w-100">Registrati</button>
            </form>
        </div>
    </div>
</x-layout>