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
    <div class="flex justify-between mt-5">
        <x-logo />
        <div class="flex">
            <div>
                <a href="{{ route('locale.change', 'en') }}">English</a>
                <a href="{{ route('locale.change', 'ka') }}">Georgian</a>
            </div>
            <div>
                <h3 class="text-xl font-bold">Takeshi k.</h3>
            </div>
            <div>
                <button>Log Out</button>
            </div>
        </div>
    </div>
    <div>
        {{ $slot }}
    </div>
</body>

</html>
