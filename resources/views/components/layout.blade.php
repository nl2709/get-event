<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brücker Manufraktur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="assets/shortcut_icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body>



    <div class="row">
        <div class="col-12 bg-beige">

            {{ $slot  }}

        </div>
    </div>
</main>

<x-footer>

</x-footer>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
