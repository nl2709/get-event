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

<nav>

        <div class="row">
            <div class="col-2">
                <img  class="img-fluid" src="assets\logo.png">
            </div>
            <div class="col-2"></div>
            <div class="col-1">
                <a class="nav-item nav-link white " href="#">Home</a>
            </div>
            <div class="col-1">
                <a class="nav-item nav-link white " href="#">Termine</a>
            </div>
            <div class="col-1">
                <a class="nav-item nav-link white " href="#">Über uns</a>
            </div>
            <div class="col-1">
                <a class="nav-item nav-link white " href="#">Kontakt</a>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <button type="button" class="booking"><a>Jetzt Buchen</a></button>
            </div>
        </div>




</nav>


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
