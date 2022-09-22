{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    @vite('resources/css/app.css')
</head>

<body class="flex">

    <div class="mx-auto max-w-sm">
        {{ $slot }}
    </div>
    <div class="max-w-xl max-h-screen ml-auto ">
        <img src="images/covid-19.png" alt="vaccine">
    </div>
</body>

</html> --}}
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
        <div class="fixed top-[35%] left-2">
            <div>
                <x-active-item class="bg-gray-200" href="{{ route('locale.change', 'en') }}" :active="'en' === app()->currentLocale()">
                    en
                </x-active-item>
            </div>

            <div class="mt-8">
                <x-active-item class="bg-gray-200" href="{{ route('locale.change', 'ka') }}" :active="'ka' === app()->currentLocale()">
                    ka
                </x-active-item>
            </div>
        </div>
        <div class="flex md:w-1/2 md:mx-20 mx-14 py-10  bg-red">
            {{ $slot }}
        </div>
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr i justify-around items-center hidden">
            <div class="ml-auto">
                <img src="images/covid-19.png" alt="vaccine">
            </div>
        </div>
    </div>
</body>

</html>
