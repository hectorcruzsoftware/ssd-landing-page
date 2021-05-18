<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>

</head>

<body>
    <header class="bg-blue-700 py-4">
        <div class="container">
            <div class="menu-header">
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="btn-cta-header">
                                <span>
                                    adquirir este servicio
                                </span>
                            </a>
                        </li>
                        <li><a href="#">EN QÚE CONSISTE ESTE SERVICIO</a></li>
                        <li><a href="#">VER GARANTÍA</a></li>
                        <li><a href="#">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="info-header">
        <div class="container">
            <h1>
                hacemos tu computadora <span class="color-blue-700">más rápida</span>
            </h1>
            <div class="garantizado">
                servicio garantizado
            </div>

            <div class="row text-center">
                <div class="col-6">
                    <iframe src="https://www.youtube.com/watch?v=HRV1MSfMh58" width="560" height="315" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>
    </section>
</body>

</html>