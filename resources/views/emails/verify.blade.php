<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
</head>
<style>
    main {
        margin-top: 10%;
    }

    div {
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
        line-height: 18px;
        width: 343px;
    }

    #confirm {
        font-weight: 700;
    }

    a {
        display: inline-block;
        padding: 1em 3em;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        margin: 0 auto;

        background-color: #7ac142;
    }

    #button {
        width: 100%;
        text-align: center;
    }

    p {
        text-align: center;
    }
</style>

<body>
    <main>
        <div>
            <img src="{{ asset('images/Landing (Worldwide) 2.png') }}" alt="coronatime">
            <br><br>
            <p style="text-align: center; font-weight: 700;">{{ __('mailable.confirmation_email') }}</p>
            <p style="text-align: center;">{{ __('mailable.click_this_button_email') }}</p>
        </div>
        <div id="button">
            <a href="{{ route('password.reset', [$data['token'] . '?email=' . $data['email']]) }}">
                {{ __('mailable.confirmation_email') }}
            </a>
        </div>
    </main>
</body>

</html>
