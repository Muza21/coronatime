<x-password-reset-layout>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mt-14 mb-10">
            <label for="email">email</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="email" name="email" id="email"
                value="{{ old('email') }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="bg-green-500 text-white text-center uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
            Reset Password
        </button>

    </form>
</x-password-reset-layout>
