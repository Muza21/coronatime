@php
use App\Models\Statistic;
@endphp
<x-navigation>
    <main class="mx-16 rounded-md mt-10 border border-gray-200">
        <div class="overflow-y-auto relative overflow-auto max-h-96">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Country
                        </th>
                        <th scope="col" class="py-3 px-6">
                            New Cases
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Recovered
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Deaths
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
                    @foreach (Statistic::all() as $country)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $country->country }}
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

</x-navigation>
