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
                        <li><a href="https://pcylap.com/contacto/" target="_blank">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="info-header" class="py-5">
        <div class="container">
            <h1>
                hacemos tu computadora <span class="color-blue-700">más rápida</span>
            </h1>
            <div class="garantizado">
                servicio garantizado
            </div>

            <div class="row mt-5">
                <div class="col lg-12 col-xl-6">
                    <div class="text-center">
                        <iframe src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col lg-12 col-xl-6">
                    <div class="text-center">
                        <div class="mt-5 mt-lg-0">
                            <span class="h5 font-700">
                                Beneficios de adquirir este servicio
                            </span>
                        </div>
                        <div class="beneficios mt-2">
                            <ul>
                                <li>
                                    <span class="font-weight-bold">*</span> Mayor velocidad de tu computadora desde que
                                    la
                                    prendes
                                </li>
                                <li>
                                    <span class="font-weight-bold">* GARANTÍA</span> del servicio sin riesgo de perder
                                    tu
                                    dinero
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> Mejor rendimiento de toda tu computadora
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> Servicio de recolección y entrega del equipo
                                    hasta
                                    tu domicilio
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> Instalación tu Sistema Windows y de los
                                    programas
                                    de Office(Word, Excel, Power
                                    Point,
                                    etc.), Lectores de PDF Antivirus
                                    GRATUITO
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> 50 GB de respaldo de tus archivos GRATIS
                                </li>
                                <li>
                                    <span class="font-weight-bold">* DESCUENTOS</span> en el servicio de limpieza de tu
                                    computadora
                                </li>
                            </ul>
                            <div class="mt-4">
                                <a class="btn-cta">
                                    <span>
                                        adquirir este servicio
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="py-5 bg-blue-700">
        <div class="container">
            <div class="text-center">
                <div class="adquirir">
                    <h2 class="h3 font-weight-bold text-center text-white">
                        ADQUIRIR ESTE SERVICIO
                    </h2>
                    <div class="text-white text-center h5 font-300">
                        Costos mas IVA
                    </div>
                </div>
            </div>
            <div class="paquetes bg-white mt-5 p-5">
                <h3 class="h4 font-weight-bold text-center">
                    Selecciona el paquete que necesitas para tu computadora
                </h3>
                <p class="mt-5">
                    Todos los paquetes tienen incluido la instalación tu Sistema Windows y los programas de Office(Word,
                    Excel, Power Point, etc.), Lectores de PDF Antivirus GRATUITO, respaldo de 50 GB de información sin
                    costo y servicio de recolección y entrega de tu equipo a domicilio. <span
                        class="font-weight-bold">Tu solo eliges la capacidad de almacenamiento que
                        se adapta a tus necesidades</span>.
                </p>

                <div class="row mt-5">
                    <div class=" col-xl-6">
                        <div class="paquete">
                            <img src="{{ url('images/120.svg') }}">
                            <div class="base font-700 mt-3">
                                PAQUETE PC RÁPIDA
                            </div>
                            <div class="mt-0">
                                $ 1,100 MXN
                            </div>
                            <div>
                                120 GB de almacenamiento,
                                Ideal para aquellos que solo quieren tener una PC más rápida.
                            </div>
                            <div class="mt-3">
                                <a href="#" class="select-paquete base font-300">Quiero este paquete</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6">
                        <div class="paquete">
                            <img src="{{ url('images/240.svg') }}">
                            <div class="base font-700 mt-3">
                                PAQUETE PC PROFESIONAL
                            </div>
                            <div class="mt-0">
                                $ 1,100 MXN
                            </div>
                            <div>
                                240 GB de almacenamiento,
                                Ideal para trabajos de la escuela u oficina.
                            </div>
                            <div class="mt-3">
                                <a href="#" class="select-paquete base font-300">Quiero este paquete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-xl-6">
                        <div class="paquete">
                            <img src="{{ url('images/256.svg') }}">
                            <div class="base font-700 mt-3">
                                PAQUETE PC PLUS
                            </div>
                            <div class="mt-0">
                                $ 1,100 MXN
                            </div>
                            <div>
                                256 GB de almacenamiento.
                                Ideal para quienes necesitan muchas aplicaciones.
                            </div>
                            <div class="mt-3">
                                <a href="#" class="select-paquete base font-300">Quiero este paquete</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6">
                        <div class="paquete">
                            <img src="{{ url('images/512.svg') }}">
                            <div class="base font-700 mt-3">
                                PAQUETE PC VIP
                            </div>
                            <div class="mt-0">
                                $ 1,100 MXN
                            </div>
                            <div>
                                512 GB de almacenamiento,
                                Ideal para el trabajo, video juegos y entretenimiento.
                            </div>
                            <div class="mt-3">
                                <a href="#" class="select-paquete base font-300">Quiero este paquete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>