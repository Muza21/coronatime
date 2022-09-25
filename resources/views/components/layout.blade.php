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
    <section class="relative flex flex-wrap md:h-screen">
        <div class="fixed top-[35%] left-2 z-10">
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
        <div class="w-full px-4 mt-12 md:w-1/2 md:px-8">
            {{ $slot }}
        </div>
        <div
            class="relative max-h-screen overflow-hidden md:flex w-1/2 bg-gradient-to-tr i justify-around items-center hidden">
            <div class="ml-auto">
                <img src="images/covid-19.png" alt="vaccine">
            </div>
        </div>
    </section>
</body>

</html>
