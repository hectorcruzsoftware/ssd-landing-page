<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('images/ico.ico') }}">

    <meta name="description" content="Servicio efectivo y con garantía para hacer tu computadora más rápida.">
    <meta name="keywords" content="PcyLap Mazatlán, Hacer computadora más rápida, Disco SSD">
    <meta property="og:url" content="{{ url('images/ico.ico') }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Quiero mi PC más rápida | PcyLap Mazatlán">
    <meta property="og:description" content="Servicio efectivo y con garantía para hacer tu computadora más rápida.">
    <title>Quiero mi PC más rápida | PcyLap Mazatlán</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
</head>

<body>
    <header id="header-nav" class="bg-primary-color py-4">
        <div class="container">
            <div class="menu-header">
                <nav>
                    <ul>
                        <li>
                            <a href="#paquetes" class="btn-cta-header">
                                <span>
                                    quiero este servicio
                                </span>
                            </a>
                        </li>
                        <li><a href="#servicio">¿qué incluye?</a></li>
                        <li><a href="#terminos-garantia">VER GARANTÍA</a></li>
                        <li><a href="https://pcylap.com/contacto/" target="_blank">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="servicio" class="py-5">
        <div class="container">
            <h1>
                hacemos tu computadora <span class="primary-color">más rápida</span>
            </h1>
            <div class="garantizado">
                servicio garantizado
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 col-xl-6">
                    <div class="text-center">
                        <img src="{{ url('images/svg.svg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="text-center">
                        <div class="mt-5 mt-xl-0">
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
                                    <span class="font-weight-bold">* GARANTÍA</span> de que si tu computadora no se hace
                                    más rápida no pagas por la revisión.
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> Mejor rendimiento de toda tu computadora
                                </li>

                                <!-- <li>
                                    <span class="font-weight-bold">*</span> Recolección y entrega del equipo
                                    hasta tu domicilio <span class="font-weight-bold">GRATIS</span>
                                </li>
                            -->

                                <li>
                                    <span class="font-weight-bold">*</span> Instalación de Windows, Word, Excel, Power
                                    Point, lector de PDF y Antivirus <strong>GRATUITO</strong>
                                </li>
                                <li>
                                    <span class="font-weight-bold">*</span> 50 GB de respaldo de tus archivos <span
                                        class="font-weight-bold">GRATIS</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold">* DESCUENTOS</span> en el servicio de limpieza de tu
                                    computadora
                                </li>
                            </ul>
                            <div class="mt-4">
                                <a class="btn-cta" href="#paquetes">
                                    <span>
                                        quiero este servicio
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="paquetes" class="py-5 bg-primary-color">
        <div class="container">
            <div class="text-center">
                <div class="adquirir">
                    <h2 class="h3 font-weight-bold text-center text-white">
                        ADQUIRIR ESTE SERVICIO
                    </h2>
                    <div class="text-white text-center h5 font-300">
                        Costos más IVA
                    </div>
                </div>
            </div>
            <div class="paquetes-list bg-white mt-5 p-5">
                <h3 class="h4 font-weight-bold text-center">
                    Selecciona el paquete que necesitas
                </h3>
                <p class="mt-5">
                    Todos los paquetes incluyen Windows, Word, Excel, Power Point, lectores de PDF y Antivirus GRATUITO,
                    respaldo
                    de 50 GB de información sin costo extra. <span class="font-weight-bold">Tu solo dinos que capacidad
                        de
                        almacenamiento se adapta a tu trabajo</span>.
                </p>

                <div class="row mt-5">
                    <div class=" col-xl-6">
                        <div class="paquete">
                            <img src="{{ url('images/120.svg') }}">
                            <div class="base font-700 mt-3">
                                PAQUETE PC RÁPIDA
                            </div>
                            <div class="mt-0">
                                $ 1,100.00 MXN
                            </div>
                            <div>
                                120 GB de almacenamiento,
                                Ideal para aquellos que solo quieren tener una PC más rápida.
                            </div>
                            <div class="mt-3">
                                <a href="https://api.whatsapp.com/send?phone=+526691349443&text=Qu%C3%A9%20tal,%20me%20interesa%20el%20PAQUETE%20PC%20R%C3%81PIDA%20para%20mi%20computadora%20."
                                    class="select-paquete base font-300" target="_blank">Quiero este paquete</a>
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
                                $ 1,350.00 MXN
                            </div>
                            <div>
                                240 GB de almacenamiento,
                                Ideal para trabajos de la escuela u oficina.
                            </div>
                            <div class="mt-3">
                                <a href="https://api.whatsapp.com/send?phone=+526691349443&text=Qu%C3%A9%20tal,%20me%20interesa%20el%20PAQUETE%20PC%20PROFESIONAL%20para%20mi%20computadora%20."
                                    class="select-paquete base font-300" target="_blank">Quiero este paquete</a>
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
                                $ 1,450.00 MXN
                            </div>
                            <div>
                                256 GB de almacenamiento.
                                Ideal para quienes necesitan muchas aplicaciones.
                            </div>
                            <div class="mt-3">
                                <a href="https://api.whatsapp.com/send?phone=+526691349443&text=Qu%C3%A9%20tal,%20me%20interesa%20el%20PAQUETE%20PC%20PLUS%20para%20mi%20computadora%20."
                                    class="select-paquete base font-300" target="_blank">Quiero este paquete</a>
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
                                $ 1,950.00 MXN
                            </div>
                            <div>
                                512 GB de almacenamiento,
                                Ideal para el trabajo, video juegos y entretenimiento.
                            </div>
                            <div class="mt-3">
                                <a href="https://api.whatsapp.com/send?phone=+526691349443&text=Qu%C3%A9%20tal,%20me%20interesa%20el%20PAQUETE%20PC%20VIP%20para%20mi%20computadora%20."
                                    class="select-paquete base font-300" target="_blank">Quiero este paquete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="terminos-garantia" class="py-5 bg-gray">
        <div class="container">
            <div class="">
                <h2 class="h3 font-weight-bold text-center">
                    GARANTÍA Y TÉRMINOS DEL SERVICIO
                </h2>
                <div class="mt-5 text-center">
                    <ul>
                        <li>
                            <span class="font-weight-bold">*</span> Una vez recibido el servicio el cliente tiene 24 hrs
                            para comprobar si este servicio aumentó la velocidad de su
                            computadora. De no ser así tiene derecho a pedir su reembolso del 100% sobre el servicio
                            (costo del componente y
                            configuración) sin riesgo de perder tu dinero si no funciona, la garantía no
                            aplica para costos de otros
                            servicios que haya solicitado como parte del mismo, como limpiezas, compra de otros
                            componentes diferentes a la
                            unidad de estado sólido, programas o aplicaciones extras a este servicio.
                        </li>
                        <li>
                            <span class="font-weight-bold">*</span> El servicio se lleva cabo en las instalaciones de
                            PcyLap, ubicado en Local #22 Plaza Las Torres, Av. Las Torres y Paseo
                            de los Olivos, C.P 82124 Mazatlán, Sin.
                        </li>
                        <li>
                            <span class="font-weight-bold">*</span> El tiempo aproximado del servicio requiere de 3 a 6
                            horas hábiles, se puede extender según la cantidad de respaldo y las
                            condiciones de su equipo.
                        </li>
                        <li>
                            <span class="font-weight-bold">*</span> Todo servicio extra a la instalación y configuración
                            de la unidad SSD que incluye este servicio tales como, reparación
                            de algún componente, carcasa, respaldo extra, instalación y configuración de programas
                            especiales(Photoshop, Autocad,
                            Corel Draw, Illustrator, etc.) tiene un costo extra.
                        </li>
                        <li>
                            <span class="font-weight-bold">*</span> En caso de requerir factura, el costo total del
                            servicio es más IVA.
                        </li>
                        <li>
                            <span class="font-weight-bold">*</span> El servicio no incluye configurar ni instalar
                            impresoras con las que operaba la computadora antes
                            de llevar a cabo el servicio. Si requiere de dicho servicio se cotiza como servicio extra.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="formas-de-pago" class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="h3 font-weight-bold text-center">
                    FORMAS DE PAGO
                </h2>
                <div class="mt-5">
                    <img src="{{ url('images/formas-de-pago.svg') }}">
                </div>
            </div>
        </div>
    </section>

    <footer id="copyright" class="bg-primary-color py-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-lg-6  text-white font-300 text-center text-lg-left">
                    <div>
                        * Copyright PcyLap Tecnologías @ Todos los derechos reservados
                    </div>
                    <div>
                        * Local #22 Plaza Las Torres, Av. Las Torres y Paseo de los Olivos, C.P 82124 Mazatlán, Sin.
                    </div>
                    <div>
                        * pcylap.com / servicios@pcylap.com
                    </div>
                </div>
                <div class="col-xs-12  col-lg-6 text-center text-lg-right">
                    <a href="https://pcylap.com" target="_blank"> <img
                            src="{{ url('images/logo-pcylap-fondo-obscuro.svg') }}" class="mt-5 mt-lg-0"></a>

                </div>
            </div>
        </div>
    </footer>
    <a href="https://api.whatsapp.com/send?phone=+526691349443&text=Qu%C3%A9%20tal,%20me%20interesa%20el%20servicio%20para%20hacer%20mi%20computadora%20m%C3%A1s%20r%C3%A1pida."
        target="_blank">
        <img id="whatsapp" src="{{ url('images/whatsapp.svg') }}" class="d-none d-md-block">

        <img id="whatsapp-movil" src="{{ url('images/whatsapp-movil.svg') }}" class="d-md-none d-block">
    </a>


</body>

</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R19KL6H19S"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-R19KL6H19S');
</script>


<script>
    window.onscroll = function() {
        myFunction()
    };
    // Get the header
    var header = document.getElementById("header-nav");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
