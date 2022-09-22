<x-navigation>
    <div class="mx-16">{{ __('dashboard.statistics_by_country') }}</div>
    <div class="mx-16 flex border-b border-gray-200 mt-10">
        <div class="border-b-2 pb-2 border-black ">
            <a href="{{ route('dashboard.view') }}">{{ __('dashboard.worldwide') }}</a>
        </div>
        <div class="border-b-2 pb-2 border-black ml-10">
            <a href="{{ route('sort.columns', ['name', 'asc']) }}">{{ __('dashboard.countries') }}</a>
        </div>
    </div>
    <div>
        <section class="mx-16">
            <div class="mt-10">
                <form method="GET" action="#">
                    <div class="relative">
                        <div class="flex absolute items-center mt-4 ml-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" class="block border-2 border-gray-100 rounded-lg pl-10 py-3"
                            name="search" placeholder="Search by country" value="{{ request('search') }}">
                    </div>
                </form>
            </div>
            <main class="rounded-md mt-10 border border-gray-200">
                <div class="overflow-y-auto relative overflow-auto max-h-96">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    <div class="flex">
                                        {{ __('dashboard.countries') }}
                                        <a class="h-5 w-5 ml-1"
                                            href="{{ route('sort.columns', ['name', $sort == 'asc' ? 'desc' : 'asc']) }}"
                                            class="">
                                            <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                            <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <div class="flex">
                                        {{ __('dashboard.new_cases') }}
                                        <a class="h-5 w-5 ml-1"
                                            href="{{ route('sort.columns', ['new_cases', $sort == 'asc' ? 'desc' : 'asc']) }}"
                                            class="">
                                            <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                            <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <div class="flex">
                                        {{ __('dashboard.recovered') }}
                                        <a class="h-5 w-5 ml-1"
                                            href="{{ route('sort.columns', ['recovered', $sort == 'asc' ? 'desc' : 'asc']) }}"
                                            class="">
                                            <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                            <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <div class="flex">
                                        {{ __('dashboard.deaths') }}
                                        <a class="h-5 w-5 ml-1"
                                            href="{{ route('sort.columns', ['deaths', $sort == 'asc' ? 'desc' : 'asc']) }}"
                                            class="">
                                            <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                            <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ __('dashboard.worldwide') }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $new_cases }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $recovered }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $deaths }}
                                </td>
                            </tr>
                            @foreach ($countries as $country)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $country->name }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $country->new_cases }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $country->recovered }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $country->deaths }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </section>
    </div>
</x-navigation>
