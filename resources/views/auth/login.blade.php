<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4">
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg space-y-6">
            @csrf

            <h2 class="text-2xl font-bold text-center text-gray-800">Anmelden</h2>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <x-text-input id="email" class="mt-1 w-full rounded-xl" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Passwort</label>
                <x-text-input id="password" class="mt-1 w-full rounded-xl" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                <label for="remember_me" class="ml-2 block text-sm text-gray-700">Angemeldet bleiben</label>
            </div>

            <!-- Buttons & Links -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Passwort vergessen?</a>
                @endif
                <x-primary-button class="ml-2 rounded-xl px-4 py-2 bg-blue-600 hover:bg-blue-700">
                    {{ __('Anmelden') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
