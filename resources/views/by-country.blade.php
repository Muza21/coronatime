@php
use App\Models\Statistic;
@endphp
<x-navigation>
    <section class="mx-16">
        <div class="mt-10">
            <input type="text" class="border-2 border-gray-100 rounded-lg pl-10 py-3" name="search"
                placeholder="Search by country">
        </div>
        <main class="rounded-md mt-10 border border-gray-200">
            <div class="overflow-y-auto relative overflow-auto max-h-96">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                <div class="flex">
                                    Country
                                    <a class="h-5 w-5 ml-1" {{ $reverse = $sort == 'asc' ? 'desc' : 'asc' }}
                                        href="{{ route('country.view', [$sort == 'asc' ? 'desc' : 'asc']) }}"
                                        class="">
                                        <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                        <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <div class="flex">
                                    New Cases
                                    <a class="h-5 w-5 ml-1" x-data="{ desc: false }" @click="desc = !desc"
                                        href="{{ route('sort.new_cases') }}" class="">
                                        <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                        <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <div class="flex">
                                    Recovered
                                    <a class="h-5 w-5 ml-1" x-data="{ desc: false }" @click="desc = !desc"
                                        href="{{ route('sort.recovered') }}" class="">
                                        <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                        <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                    </a>
                                </div>

                            </th>
                            <th scope="col" class="py-3 px-6">
                                <div class="flex">
                                    Deaths
                                    <a class="h-5 w-5 ml-1" x-data="{ desc: false }" @click="desc = !desc"
                                        href="{{ route('sort.deaths') }}" class="">
                                        <img class="h-5 w-5" src="/images/up-arrow.svg" alt="up">
                                        <img class="h-5 w-5 -mt-5" src="/images/down-arrow.svg" alt="down">
                                    </a>
                                </div>


                            </th>
                            <th scope="col" class="py-3 px-6">
                            </th>
                            <th scope="col" class="py-3 px-6">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Worldwide
                            </th>
                            <td class="py-4 px-6">
                                {{ Statistic::all()->sum('new_cases') }}
                            </td>
                            <td class="py-4 px-6">
                                {{ Statistic::all()->sum('recovered') }}
                            </td>
                            <td class="py-4 px-6">
                                {{ Statistic::all()->sum('deaths') }}
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        @foreach ($countries as $country)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $country->location }}
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
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</x-navigation>
