@php
use App\Models\Country;
@endphp
<x-navigation>
    <section class="mx-auto">
        <div class="mx-10 mt-14">

            <div class="lg:grid lg:grid-cols-3 mt-20">
                <div class='bg-blue-50 hover:bg-blue-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div class="h-14">
                                <img src="/images/Group 1797.svg" alt="chart" class="rounded-xl">
                                {{-- <x-line-chart /> --}}
                            </div>


                            <div class="text-xl mt-4">
                                New Cases
                            </div>

                            <div>
                                <h5 class="font-bold text-4xl text-blue-700 items-center mt-8">
                                    {{ Country::all()->sum('new_cases') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='bg-green-50 hover:bg-green-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div class="h-14">
                                <img src="/images/Group 1799.svg" alt="chart" class="">
                            </div>


                            <div class="text-xl mt-4">
                                Recovered
                            </div>

                            <div>
                                <h5 class="font-bold text-4xl text-green-600 items-center mt-8">
                                    {{ Country::all()->sum('recovered') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='bg-yellow-50 hover:bg-yellow-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div class="h-14">
                                <img src="/images/Group 1798.svg" alt="chart" class="rounded-xl">
                            </div>


                            <div class="text-xl mt-4">
                                Deaths
                            </div>

                            <div>
                                <h5 class="font-bold text-4xl text-yellow-300 items-center mt-8">
                                    {{ Country::all()->sum('deaths') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-navigation>
