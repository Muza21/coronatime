<x-layout>

    <header class="mt-10">
        <img src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
        <h3 class="text-xl font-bold">Welcome to Coronatime</h3>
        <p class="text-sm text-gray-400">Please enter required info to sign up</p>
    </header>

    <form method="POST" action="{{ route('registration.store') }}">
        @csrf

        <div class="mb-5">
            <label for="username">username</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="text" name="username" id="username"
                value="{{ old('username') }}" required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email">email</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="email" name="email" id="email"
                value="{{ old('email') }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password">password</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password" id="password"
                required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation">Repeat password</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password_confirmation"
                id="password_confirmation" required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input type="checkbox" name="remember">
            <label for="remember">Remember This Device</label>
        </div>

        <button type="submit"
            class="bg-green-500 text-white text-center uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
            Sign Up
        </button>

        <div class="text-center">
            <p>Already have an account? <a href="{{ route('login.view') }}" class="font-bold">Log In</a></p>
        </div>

    </form>
</x-layout>
