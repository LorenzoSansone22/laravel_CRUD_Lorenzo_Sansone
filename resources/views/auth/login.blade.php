<x-layout>
    <x-slot:title>Login</x-slot>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center">Accedi</h1>

            <form action="/login" method="POST" class="p-4 shadow border rounded bg-light">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark w-100">Entra</button>
            </form>
        </div>
    </div>
</x-layout>