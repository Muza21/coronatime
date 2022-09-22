@vite('resources/css/app.css')
<div class="max-w-sm m-auto">
    <header class="mt-6">
        <img class="m-auto" src="{{ asset('images/Group 1.svg') }}" alt="coronatime">
        <h3 class="mt-28 text-xl text-center font-bold">{{ __('login.reset_password') }}</h3>
    </header>
    {{ $slot }}
</div>
