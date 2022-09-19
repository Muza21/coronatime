<x-password-reset-layout>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="mt-14 mb-6">
            <label for="password" class="font-bold">New password</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password" id="password"
                required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-10">
            <label for="password_confirmation" class="font-bold">Repeat password</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password_confirmation"
                id="password_confirmation" required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input class="hidden" type="email" name="email" id="email" value="{{ $email }}" required>
            <input class="hidden" type="token" name="token" id="token" value="{{ $token }}" required>
        </div>

        <button type="submit"
            class="bg-green-500 text-white text-center uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
            Save Changes
        </button>

    </form>
</x-password-reset-layout>
