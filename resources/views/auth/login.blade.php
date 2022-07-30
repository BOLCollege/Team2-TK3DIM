<style>
    .btn-primary{
        background-color: #313244 !important;
    }
    .btn-primary:hover{
        background-color: #282938 !important;
    }
</style>
<x-guest-layout>
    <x-auth-card>
        <div class="position-relative"></div>
        <div class="container bg-white shadow w-25 p-4"
            style="position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)">
            <x-slot name="logo">
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="d-flex justify-content-center mb-2">
                <h3>Sign In</h3>
            </div>
            <form method="POST" class="row gy-3" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="col-12">
                    <x-label for="email" class="form-label" :value="__('Email')" />

                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="col-12">
                    <x-label for="password" class="form-label" :value="__('Password')" />

                    <x-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg">
                        {{ __('Sign in') }}
                    </button>
                </div>
            </form>
            <p class="text-center"><a href="/register" style="text-decoration: none">Create an Account</a></p>
        </div>
    </x-auth-card>
</x-guest-layout>
