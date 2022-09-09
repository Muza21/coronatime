<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    @vite('resources/css/app.css')
</head>

<body class="flex">

    <div class="mx-auto">
        {{ $slot }}
    </div>
    <div class="max-w-xl max-h-screen ml-auto ">
        <img src="images/covid-19.png" alt="vaccine">
    </div>
</body>

</html>
