<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="border-b border-gray-200 py-6">
        <div class="flex justify-between mx-16">
            <div>
                <img src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
            </div>
            <div class="flex">
                <div class="mx-5 text-xl flex">

                    <div x-data="{ show: false }" @click.away="show = false" class="relative">
                        <div @click="show = !show">
                            <button class="pl-3 pr-6 w-full lg:w-28 text-left flex lg:inline-flex">

                                {{ 'en' === app()->currentLocale() ? __('dashboard.english') : __('dashboard.georgian') }}

                                <x-icon name="down-arrow" class="absolute pointer-events-none"
                                    style="right: 0px; top:4px" />
                            </button>
                        </div>

                        <div x-show="show"
                            class="py-2 absolute bg-gray-100 w-full rounded-xl z-50 overflow-auto max-h-52"
                            style="display: none">
                            <x-dropdown-item href="{{ route('locale.change', 'en') }}">
                                {{ __('dashboard.english') }}
                            </x-dropdown-item>
                            <x-dropdown-item href="{{ route('locale.change', 'ka') }}">
                                {{ __('dashboard.georgian') }}
                            </x-dropdown-item>
                        </div>
                    </div>
                </div>
                <div class="mx-5 text-xl">
                    <h3 class="text-xl font-bold">{{ ucwords(auth()->user()->username) }}</h3>
                </div>
                <form method="POST" action="{{ route('logout.user') }}">
                    @csrf
                    <div class="pl-5 border-l border-gray-200 text-xl">
                        <button type="submit">{{ __('dashboard.log_out') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{ $slot }}
</body>

</html>
