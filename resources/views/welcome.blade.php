<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    @vite('resources/css/app.css')
</head>

<body class="flex">

    <div class="mx-auto">
        <form method="POST" action="" class="mt-10">
            @csrf

            <div class="mb-5">
                <label for="username">username</label>

                <input class="border border-gray-400 p-2 w-full rounded-xl" type="name" name="username"
                    id="username" value="{{ old('email') }}" required>

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password">password</label>

                <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password"
                    id="password" required>

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password">password</label>

                <input class="border border-gray-400 p-2 w-full rounded-xl" type="password" name="password"
                    id="password" required>

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="bg-green-500 text-white uppercase font-semibold text-xs py-2 px-6 rounded-xl hover:bg-green-600">
                {{ __('texts.log_in') }}
            </button>

        </form>
    </div>
    <div class="max-w-xl max-h-screen ml-auto ">
        <img src="images/covid-19.png" alt="vaccine">
    </div>
</body>

</html>
