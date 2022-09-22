<x-layout>

    <header class="mt-10">
        <img src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
        <h3 class="text-xl font-bold">{{ __('login.welcome_back') }}</h3>
        <p class="text-sm text-gray-400">{{ __('login.enter_your_details') }}</p>
    </header>

    <form method="POST" action="{{ route('login.user') }}">
        @csrf

        <div class="mb-5">
            <label for="username">{{ __('login.username') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="text" name="username" id="username"
                value="{{ old('username') }}" placeholder="{{ __('login.enter_unique_username_or_email') }}" required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password">{{ __('login.password') }}</label>

            <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password" id="password"
                placeholder="{{ __('login.fill_in_password') }}" required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 flex justify-between">
            <div>
                <input type="checkbox" name="remember">
                <label for="remember">{{ __('login.remember_this_device') }}</label>
            </div>
            <div>
                <a href="{{ route('password.request') }}">{{ __('login.forgot_password') }}</a>
            </div>
        </div>

        <button type="submit"
            class="bg-green-500 text-white text-center uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
            {{ __('login.login') }}
        </button>

        <div class="text-center">
            <p>{{ __('login.dont_have_an_account') }} <a href="{{ route('register.view') }}"
                    class="font-bold">{{ __('login.sign_up_for_free') }}</a></p>
        </div>

    </form>
</x-layout>
