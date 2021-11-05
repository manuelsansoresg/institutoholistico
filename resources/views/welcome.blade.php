<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicons/favicon.ico">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="/css/theme.css" rel="stylesheet" />
    <link href="/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/css/landing.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3"
                    href="index.html"> <img class="me-3 logoheader" src="/img/gallery/logo.png" alt="" /></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active"
                                aria-current="page" href="index.html">Inicio</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#events">Cursos</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#services">Terapias </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#services">Talleres </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#services">Libros </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#services">Contacto </a></li>
                        {{-- <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#testimonial">Testimonial </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#country">Country </a></li> --}}
                    </ul>
                    <form class="ps-lg-5">
                        <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['es']) }}">ES</a> </li>
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['en']) }}">EN</a> </li>
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['fr']) }}">FR</a> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <?php $image = get_images(1); ?>
            <div class="bg-holder d-none d-md-block"
                style="background-image:url({{ asset('img/cabecera/') . '/' . $image->image }});background-position:right bottom;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-block d-md-none"
                style="background-image:url({{ asset('img/cabecera/') . '/' . $image->image }});background-position:right top;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-md-75 mt-7">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        {!! get_section(1, 'title')->description !!}
                        <p class="mb-5 fs-1 lh-lg">
                            {!! get_section(1, 'description')->description !!}
                        </p>
                        <a class="btn btn-lg btn-primary hover-top btn-glow" href="#">CONTACTO
                            <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                </path>
                            </svg></a>
                        <div class="mt-5 mt-xl-6">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                        <svg class="bi bi-facebook text-facebook" xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                            </path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a href="#!">
                                        <svg class="bi bi-twitter text-twitter" xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                            </path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a href="#!">
                                        <svg class="bi bi-instagram text-instagram text-youtube"
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                            </path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <section class="bg-100 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Cursos</h5>
                        <p class="mb-3">
                            Enterate de nuestros proximos cursos y contenido mas relevante de nuestra academia holística
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section> begin ============================-->
        <section class="bg-100 py-5">

            <div class="col-12">
                <div class="carousel-wrap" id="carousel">
                    <div class="owl-carousel owl-theme">
                        <div><img src="{{ asset('img/banners') . '/1.jpg' }}"></div>
                        <div><img src="{{ asset('img/banners') . '/2.jpg' }}"></div>
                    </div>

                </div>
            </div>

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="services">

            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto mb-4">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3 text-center">CURSOS DE MEDICINA AURICA:</h5>
                        <p class="mb-5">
                            Medicina áurica es un conocimiento que engloba anatomía, fisiología, histología, patología,
                            parasitología, medicamentos, aparatos, instrumentos y técnicas de sanación en el aura. Es un
                            nuevo conocimiento que viene a poner las bases de la medicina alternativa para fomentar una
                            evolución en ella y poder trabajar de la mano con la medicina alopática.
                            <br><br>
                            A lo largo de los cursos aprenderás sobre 20 campos ?uricos, la interfase, conexiones, 20
                            chakras y esferas mentales sobre el aura. Además de medicina germánica, biodescodificación,
                            transgeneracional, registros akashicos, ecología energética, cosmología, exopolítica,
                            merkabas, numerología biolígica, geometría sagrada y más. Por lo completo y práctico del
                            plan de estudios, desde el primer módulo se practican terapias.
                            <br><br>
                            La Escuela de Medicina Holística del Aura surgió como una necesidad de transformar a los
                            terapeutas holísticos en médicos del aura. Al ser médico sabes cómo está estructurado el
                            aura, como funciona, y cómo y porque perdemos la salud; además de cómo usar el conocimiento
                            de las ramas de la medicina alternativa en conjunto para trabajar en pro de la sanación de
                            una persona.
                            <br><br>
                            Se puede impartir cursos de medicina áurica presenciales en tu localidad. Mayores informes
                            ver contacto.
                            <br><br>
                            La que imparte los cursos es la bióloga y terapeuta Julieta Huerta Hernández que es maestra
                            de biología cuántica y medicina áurica. Autora de los libros: "Anatomía y fisiología del
                            aura" y "Mi energía? Mi salud". Imparte cursos alrededor del mundo, llevado este
                            revolucionario conocimiento para la transformación de la humanidad y la elevación de
                            conciencia del planeta.
                        </p>
                    </div>
                </div>

            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-100">

            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto  my-5">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-4 text-center">TERAPIAS</h5>
                        <p class="mb-3">
                            A) Individuales: Se usan varias áreas de la medicina alternativa como biodescodificación,
                            theta healing, terapia floral, medicina germánica, par biomagnético, transgeneracional,
                            registros akashicos, y más; siempre con las bases de la medicina del aura. Es por cita y
                            contactarse por Whatsapp al 52 3311359027. <br><br>
                            B) Grupales on line: En cada sesión se trabaja un tema distinto de la vida, desde la salud
                            física hasta lo mental, emocional y espiritual; como por ejemplo: sistema digestivo,
                            circulatorio, sanando a mamá y papá, ancestros, vidas pasadas, creencias limitantes y que
                            bloquean tu vida, etc. Se inicia con clase y se termina con la terapia grupal. Son una vez
                            cada semana y dura hora y media. Hay horario en la mañana y en la tarde.
                        </p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-xl-9">
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow card-span"><img class="card-img-top"
                                        src="/img/gallery/news-1.png" alt="news" />
                                    <div class="card-body">
                                        <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                            </path>
                                            <path
                                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                            </path>
                                        </svg><span class="fs--1">17 Diciembre 2021</span>
                                        <h5 class="fs-lg-1 my-3">Terapia lectura del aura</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow card-span"><img class="card-img-top"
                                        src="/img/gallery/news-2.png" alt="news" />
                                    <div class="card-body">
                                        <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                            </path>
                                            <path
                                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                            </path>
                                        </svg>
                                        <span class="fs--1">18 Diciembre 2021</span>
                                        <h5 class="fs-lg-1 my-3">Terapia lectura del aura
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow card-span"><img class="card-img-top"
                                        src="/img/gallery/news-3.png" alt="news" />
                                    <div class="card-body">
                                        <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                            </path>
                                            <path
                                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                            </path>
                                        </svg>
                                        <span class="fs--1">18 Diciembre 2021</span>
                                        <h5 class="fs-lg-1 my-3">Terapia lectura del aura
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="events">

            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto  mb-4">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3 text-center">TALLERES</h5>
                        <p class="mb-3">
                            a) Mi energía… Mi salud: Se enseña sobre la energía, aura y chakras, como sentirla y
                            percibirla, sobre bloqueos energéticos y como sanarlos. También se enseña a dar energía de
                            diferentes frecuencias para sanar una zona del cuerpo. Es teórico, práctico y terapias.<br>
                            b) Yo en mi mismo, en la familia y en la sociedad: Se ve la personalidad, los mecanismos de
                            defensa que adoptamos para enfrentar la vida, como vivir desde el observador para sanar y
                            armonizar nuestra vida, el impacto de la familia y la sociedad en la programación de nuestra
                            vida, la dualidad, el holograma de la realidad, transgeneracional y más. Teoría, prácticas y
                            terapia.<br><br>
                            c) Meditación: Se enseña los diferentes tipos de meditación que hay y cuando se usa cada
                            una. Además se darán herramientas para mejorar tu práctica de meditación. Se practicarán
                            cada uno de los tipos de meditación. Taller teórico y práctico.<br>
                            d) Relaciones interpersonales/conexiones energéticas: ¿cómo mejorarlas y sanarlas?: A través
                            de este taller conocerás los aspectos tóxicos de la personalidad y como daña a uno mismo y a
                            los demás. Conocerás como manejar las situaciones en las relaciones no sanas. Se te dará
                            herramientas para armonizar aspectos desequilibrados de tu ser. Hay teoría, prácticas y
                            terapia.<br><br>
                            e) Los cuentos que me cuento: Aprenderás el mecanismo de la mente para crear la realidad y
                            guardar los sucesos de la vida. Aprenderás sobre el ego y cómo manejarlo. Veras que
                            programas tienes en tu inconsciente que te limitan o te bloquean tus proyectos en tu vida.
                            Trabajaras con tu sombra para sacarla, liberarla y sanarla. Es teórico, práctico y hay
                            terapia.<br><br>
                            f) Yo Hombre, Yo Mujer: A través de este taller aprenderás como son las mujeres y los
                            hombres desde el punto de vista emocional, mental y del alma; así como mejorar la relación
                            con uno mismo y con tu pareja. Se te darán las herramientas para mejorar tu relación de
                            pareja; atrévete a volver al amor y al romance. Es un taller teórico, práctico y con
                            terapia.
                        </p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-xl-9">
                        <div class="carousel slide" id="carouselEvents" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 justify-content-center">
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                                                <div class="text-center text-md-start card-hover">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center"><span
                                                                class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span
                                                                    class="fw-medium fs-1 mb-2">23</span><br>DIC</span>
                                                            <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Charla en
                                                                el auditorio </h6>
                                                        </div>
                                                        <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Iste natus rem dolores soluta culpa consequatur.
                                                        </p>
                                                        <div class="d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><a
                                                                    class="btn btn-lg ps-0 text-primary fw-light fs--1"
                                                                    href="#" role="button">Leer mas
                                                                    <svg class="bi bi-arrow-right-short"
                                                                        xmlns="http://www.w3.org/2000/svg" width="25"
                                                                        height="25" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                                        </path>
                                                                    </svg></a></div>
                                                            <div class="d-flex align-items-center">
                                                                <svg class="bi bi-alarm me-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z">
                                                                    </path>
                                                                    <path
                                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z">
                                                                    </path>
                                                                </svg>
                                                                <p class="mb-0 fw-light text-dark fs--1">10:00 AM -
                                                                    2:00 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                                                <div class="text-center text-md-start card-hover">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center"><span
                                                                class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span
                                                                    class="fw-medium fs-1 mb-2">30</span><br>Oct</span>
                                                            <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">
                                                                Charla en la universidad tasco</h6>
                                                        </div>
                                                        <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aut eveniet ipsum, suscipit voluptas eius voluptatem. </p>
                                                        <div class="d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><a
                                                                    class="btn btn-lg ps-0 text-primary fw-light fs--1"
                                                                    href="#" role="button">Leer mas
                                                                    <svg class="bi bi-arrow-right-short"
                                                                        xmlns="http://www.w3.org/2000/svg" width="25"
                                                                        height="25" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                                        </path>
                                                                    </svg></a></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="row mt-3 flex-center">
                                <div class="col-auto position-relative z-index-2">
                                    <ol class="carousel-indicators">
                                        <li class="active mx-2" data-bs-target="#carouselEvents"
                                            data-bs-slide-to="0"></li>
                                        <li class="mx-2" data-bs-target="#carouselEvents"
                                            data-bs-slide-to="1"></li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-100" id="country">

            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto my-5">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3  text-center">LIBROS</h5>
                        <p class="mb-3">
                            a) Anatomía y fisiología del aura: campos, chakras, interfase, esferas mentales y
                            conexiones:
                            A través de las páginas de este libro descubrirás que el aura y los chakras son más de lo
                            que conoces, que están constituidos por células que forman tejidos, órganos y sistemas cuyas
                            partículas subatómicas vibran en una frecuencia mayor a las del cuerpo físico, razón por la
                            cual no los podemos ver ni tocas. Para que el SER pueda tener una experiencia humana se
                            requieren 20 campos áuricos, cuyos procesos están coordinados por las esferas mentales que
                            son parte del cerebro del Alma. <br><br>
                            b) Mi energía,,, mi salud. La respuesta para la sanación de las enfermedades:
                            A lo largo de este libro encontrarás información sobre como es el aura, como funciona y como
                            generamos las enfermedades y eventos positivos como negativos en nuestra vida. Aprenderás
                            como es el lenguaje de tu cuerpo, lo que te quiere decir. También se da consejos,
                            meditaciones y ejercicios para sanar y mejorar tu vida. Hablaré sobre la medicina alopática,
                            alternativa y la nueva medicina del aura que es la base de la medicina alternativa u
                            holística y como combinarlas para una recuperación de la salud.
                        </p>
                    </div>
                </div>

            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- <section> begin ============================-->
        <section class="bg-100 bg-white" id="contact">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3  text-center">CONTACTO</h5>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-md-6">
                        <p>
                            Escribenos tus dudas u comentarios y en breve nos comunicaremos con tigo
                        </p>
                        <table>
                            <tr>
                                <td><i class="fas fa-envelope"></i> &nbsp; </td>
                                <td>julietahuertahernández@gmail.com</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-alt"></i> &nbsp;</td>
                                <td>+52 3311359027</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">País</label>
                            <select name="" id="" class="form-control">
                                @foreach (config('enums.pais') as $pais)
                                    <option value="{{ $pais }}"> {{ $pais }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>


                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Teléfono celular</label>

                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Comentario</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>

                    </div>
                </div>

            </div><!-- end of .container-->

        </section>


        <!-- ============================================-->
        <!-- footer ============================-->
        <section class="py-0 bg-primary">

            <div class="container">
                <div class="row justify-content-between pb-2 pt-8">

                    <div class="col-auto text-center text-md-left mb-3">
                        <ul class="list-inline mb-md-4 mb-lg-0">
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!">Inicio</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!"> Cursos</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!"> Terapias</a></li>


                        </ul>
                        <ul class="list-inline mb-md-4 mb-lg-0">
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!"> Taller</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!"> Libros</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none"
                                    href="#!">Contacto</a></li>

                        </ul>
                    </div>
                    <div class="col-auto mb-3 text-center text-md-left text-white">
                        <p>Telefono: 99999999999</p>
                        <p>Direccion: Calle 44</p>
                    </div>
                    <div class="col-auto text-center text-md-left mb-4 d-flex align-items-end">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="#ffffff" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="#ffffff" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="#ffffff" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <p class="mb-0 fs--1 my-2 text-100">
                            Todos los derechos a Escuela de medicina holística del aura
                        </p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendorjs/@popperjs/popper.min.js"></script>
    <script src="vendorjs/bootstrap/bootstrap.min.js"></script>
    <script src="vendorjs/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="/js/landing.js"></script>
</body>

</html>
