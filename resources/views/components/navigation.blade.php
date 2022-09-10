<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="border-b border-gray-200 py-6">
        <div class="flex justify-between mx-16">
            <div>
                <x-logo />
            </div>
            <div class="flex">
                <div class="mx-5 text-xl">
                    <a href="{{ route('locale.change', 'en') }}">English</a>
                    <a href="{{ route('locale.change', 'ka') }}">Georgian</a>
                </div>
                <div class="mx-5 text-xl">
                    <h3 class="text-xl font-bold">{{ ucwords(Auth::user()->username) }}</h3>
                </div>
                <form method="POST" action="{{ route('logout.user') }}">
                    @csrf
                    <div class="pl-5 border-l border-gray-200 text-xl">
                        <button type="submit">Log Out</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mx-16 flex py-2 border-b border-gray-200">
        <div>
            <a href="{{ route('dashboard.view') }}">Worldwide</a>
        </div>
        <div class="ml-10">
            <a href="{{ route('country.view') }}">Countries</a>
        </div>
    </div>
    <div>
        {{ $slot }}
    </div>
</body>

</html>
