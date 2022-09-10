@php
use App\Models\Statistic;
@endphp
<x-navigation>
    <section class="mx-auto">
        <div class="mx-10 mt-14">

            <div class="lg:grid lg:grid-cols-3 mt-20">
                <div class=' hover:bg-gray-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div>
                                <img src="#" alt="chart" class="rounded-xl">
                            </div>


                            <div class="text-xl mt-4">
                                New Cases
                            </div>

                            <div>
                                <h5 class="font-bold items-center mt-8">
                                    {{ Statistic::all()->sum('new_cases') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=' hover:bg-gray-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div>
                                <img src="#" alt="chart" class="rounded-xl">
                            </div>


                            <div class="text-xl mt-4">
                                Recovered
                            </div>

                            <div>
                                <h5 class="font-bold items-center mt-8">
                                    {{ Statistic::all()->sum('recovered') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=' hover:bg-gray-100 border rounded-xl mx-5'>
                    <div class="py-6 px-5">
                        <div class="mt-8 flex flex-col items-center justify-between">
                            <div>
                                <img src="#" alt="chart" class="rounded-xl">
                            </div>


                            <div class="text-xl mt-4">
                                Deaths
                            </div>

                            <div>
                                <h5 class="font-bold items-center mt-8">
                                    {{ Statistic::all()->sum('deaths') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-navigation>
