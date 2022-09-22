<x-layout>

    <header class="mt-10">
        <img src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
        <h3 class="text-xl font-bold">{{ __('register.welcome_to_coronatime') }}</h3>
        <p class="text-sm text-gray-400">{{ __('register.enter_your_details') }}</p>
    </header>

    <form method="POST" action="{{ route('registration.store') }}">
        @csrf

        <div class="mb-5">
            <label for="username">{{ __('register.username') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="text" name="username" id="username"
                value="{{ old('username') }}" placeholder="{{ __('register.enter_unique_username') }}" required>
            <label for="username" class="text-gray-400">{{ __('register.username_should_be_unique') }}</label>
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email">{{ __('register.email') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="email" name="email" id="email"
                value="{{ old('email') }}" placeholder="{{ __('register.enter_your_email') }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password">{{ __('register.password') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password" id="password"
                placeholder="{{ __('register.fill_in_password') }}" required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation">{{ __('register.repeat_password') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password_confirmation"
                id="password_confirmation" placeholder="{{ __('register.repeat_password') }}" required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="bg-green-500 text-white text-center uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
            {{ __('register.sign_up') }}
        </button>

        <div class="text-center">
            <p>{{ __('register.already_have_an_account') }} <a href="{{ route('login.view') }}"
                    class="font-bold">{{ __('register.login') }}</a></p>
        </div>

    </form>
</x-layout>
