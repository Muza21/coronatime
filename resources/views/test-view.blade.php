<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coronatime</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="h-screen md:flex">

        <div class="flex md:w-1/2 md:mx-20 mx-14 py-10  bg-red">

            <form>


                <img src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
                <h3 class="text-xl font-bold mt-10">{{ __('register.welcome_to_coronatime') }}</h3>
                <p class="text-sm text-gray-400 mt-5">{{ __('register.enter_your_details') }}</p>
                <div class="my-5 max-w-sm">
                    <label for="username">{{ __('register.username') }}</label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl" type="text" name="username"
                        id="username" value="{{ old('username') }}"
                        placeholder="{{ __('register.enter_unique_username') }}" required>
                    <label for="username" class="text-gray-400">{{ __('register.username_should_be_unique') }}</label>
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 max-w-sm">
                    <label for="email">{{ __('register.email') }}</label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl" type="email" name="email"
                        id="email" value="{{ old('email') }}" placeholder="{{ __('register.enter_your_email') }}"
                        required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 max-w-sm">
                    <label for="password">{{ __('register.password') }}</label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password"
                        id="password" placeholder="{{ __('register.fill_in_password') }}" required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 max-w-sm">
                    <label for="password_confirmation">{{ __('register.repeat_password') }}</label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl" type="password"
                        name="password_confirmation" id="password_confirmation"
                        placeholder="{{ __('register.repeat_password') }}" required>

                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-green-500 text-white text-center max-w-sm uppercase font-semibold text-lg py-4 w-full rounded-xl hover:bg-green-600">
                    {{ __('register.sign_up') }}
                </button>

                <div class="text-center max-w-sm">
                    <p>{{ __('register.already_have_an_account') }} <a href="{{ route('login.view') }}"
                            class="font-bold">{{ __('register.login') }}</a></p>
                </div>
            </form>
        </div>
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr i justify-around items-center hidden">
            <div class="ml-auto">
                <img src="images/covid-19.png" alt="vaccine">
            </div>
        </div>
    </div>
</body>

</html>