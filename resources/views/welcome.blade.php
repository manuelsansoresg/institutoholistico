<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <?php $lenguaje = session('lang') == null ? 'es' : session('lang'); ?>

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
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicons/favicon.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/img/favicons/favicon.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="index.html"> <img class="me-3 logoheader" src="/img/gallery/logo.png" alt="" /></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_home')" id="menu_home" class="nav-link active" aria-current="page" href="#home"> {!! get_section(8, 'menu_home')->description !!}</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_course')" id="menu_course" class="nav-link" href="#course">{!! get_section(8, 'menu_course')->description !!}</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_therapy')" id="menu_therapy" class="nav-link" href="#therapy">{!! get_section(8, 'menu_therapy')->description !!} </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_workshop')" id="menu_workshop" class="nav-link" href="#workshop">{!! get_section(8, 'menu_workshop')->description !!} </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_book')" id="menu_book" class="nav-link" href="#book">{!! get_section(8, 'menu_book')->description !!} </a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a onclick="linkActivate('menu_contact')" id="menu_contact" onclick="" activate"" class="nav-link" href="#contact">{!! get_section(8, 'menu_contact')->description !!} </a></li>

                    </ul>
                    <form class="ps-lg-5">
                        <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['es']) }}" class="{{ $lenguaje == 'es' ? 'green' : '' }}">ES</a> </li>
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['en']) }}" class="{{ $lenguaje == 'en' ? 'green' : '' }}">EN</a> </li>
                            <li class="nav-item px-2"> <a href="{{ url('lang', ['fr']) }}" class="{{ $lenguaje == 'fr' ? 'green' : '' }}">FR</a> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <?php $image = get_images(1); ?>
            <div class="bg-holder d-none d-md-block" data-aos="fade-in" style="background-image:url({{ asset('img/cabecera/') . '/' . $image->image }});background-position:right bottom;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-block d-md-none" data-aos="fade-in" style="background-image:url({{ asset('img/cabecera/') . '/' . $image->image }});background-position:right top;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-md-75 mt-7">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <div data-aos="fade-up">
                            {!! get_section(1, 'title')->description !!}
                        </div>
                        <p class="mb-5 fs-1 lh-lg" data-aos="fade-up">
                            {!! get_section(1, 'description')->description !!}
                        </p>
                        <a class="btn btn-lg btn-primary hover-top btn-glow" data-aos="fade-up" href="#contact">{!! get_section(8, 'menu_contact')->description !!}
                            <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                </path>
                            </svg></a>
                        <div class="mt-5 mt-xl-6" data-aos="fade-in">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item me-3">
                                    <a class="text-decoration-none" href="https://www.facebook.com/Escuela-de-Medicina-Hol%C3%ADstica-del-Aura-105822991884601" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="https://www.youtube.com/channel/UCGK8jAV5zhFW5xbTIYnyqbw" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <section class="bg-100 py-5" id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3 green" data-aos="fade-up">
                            {!! get_section(2, 'title')->description !!}
                        </h5>
                        <p class="mb-3" data-aos="fade-up">
                            {!! get_section(2, 'description')->description !!}
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

                        <?php $images = get_images(2, false, 1, $lenguaje); ?>
                        @foreach ($images as $image)
                        <div><img src="{{ asset('img/carrusel') . '/' . $image->image }}"></div>
                        @endforeach
                    </div>

                </div>
            </div>

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="course">

            <div class="container">
                <div class="row">

                    <div class="col-12 mx-auto" data-aos="fade-up">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3 text-center green">
                            {!! get_section(3, 'title')->description !!}
                        </h5>

                    </div>

                </div>
                <div class="row mt-3 justify-content-center">
                    <?php $image_cursos = get_images(3, false, 0, $lenguaje); ?>
                    <?php $video = get_section(3, 'video')->description; ?>
                    <?php $formatVideo = 'https://www.youtube.com/embed/' . get_youtube_id_from_url($video); ?>
                    @if ($video !== '' && $video !== '&nbsp;')
                    <div class="col-12 col-md-6 text-center" data-aos="fade-up">

                        <iframe class="youtube" height="315" src="{{ $formatVideo }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                    @endif



                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-12 col-md-6 text-justify" data-aos="fade-up">
                        <p class="">
                            {!! get_section(3, 'description')->description !!}
                        </p>
                    </div>
                    @if ($image_cursos !== null)
                    <div class="col-12 col-md-6" data-aos="fade-in">

                        <img class="img-fluid" src="{{ asset('img/cursos') . '/' . $image_cursos->image }}">
                    </div>

                    @endif


                </div>

            </div>

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="therapy" class="bg-100">

            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto text-justify " data-aos="fade-up">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-4 text-center green">
                            {!! get_section(4, 'title')->description !!}
                        </h5>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $imagenTerapia1 = get_images(4, false, 0, '1-' . $lenguaje); ?>
                    <?php $imagenTerapia2 = get_images(4, false, 0, '2-' . $lenguaje); ?>

                    @if ($imagenTerapia1 !== null)
                    <div class="col-12 col-md-6 text-center" data-aos="fade-in">
                        <img class="img-fluid" src="{{ asset('img/terapias') . '/' . $imagenTerapia1->image }}">
                    </div>

                    @endif
                    @if ($imagenTerapia2 !== null)
                    <div class="col-12 col-md-6 text-center" data-aos="fade-in">
                        <img class="img-fluid" src="{{ asset('img/terapias') . '/' . $imagenTerapia2->image }}">
                    </div>

                    @endif

                </div>
                <div class="row mt-3" data-aos="fade-up">
                    <div class="col-12 text-justify">
                        <p class="mb-3">
                            {!! get_section(4, 'description')->description !!}
                        </p>
                    </div>
                </div>

            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="workshop">

            <div class="container">

                <div class="row">
                    <div class="col-12 mx-auto  mb-4" data-aos="fade-up">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3 text-center green">
                            {!! get_section(5, 'title')->description !!}
                        </h5>

                    </div>
                </div>
                <div class="row justify-content-center" data-aos="fade-up">
                    <?php $imagentaller = get_images(5, false, 0, $lenguaje); ?>
                    @if ($imagentaller !== null)
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="{{ asset('img/talleres') . '/' . $imagentaller->image }}">
                    </div>

                    @endif

                </div>
                <div class="row">
                    <div class="col-12 text-justify" data-aos="fade-up">
                        <p class="mt-3">
                            {!! get_section(5, 'description')->description !!}
                        </p>
                    </div>
                </div>

            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="book" class="bg-100" id="country">

            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-12 mx-auto ">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3  text-center green">
                            {!! get_section(6, 'title')->description !!}
                        </h5>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $imagenLibro1 = get_images(6, false, 0, '1-' . $lenguaje); ?>
                    <?php $imagenLibro2 = get_images(6, false, 0, '2-' . $lenguaje); ?>
                    <div class="
                    col-12 col-md-6">
                        @if ($imagenLibro1 !== null)
                        <img class="
                        img-fluid" data-aos="fade-in" src="{{ asset('img/libros') . '/' . $imagenLibro1->image }}">
                        @endif
                        <p data-aos="fade-up" class="mt-3 text-bold text-black">{!! get_section(6, 'titlelibro1')->description !!}</p>
                        <p data-aos="fade-up" class="mt-3">{!! get_section(6, 'description1')->description !!}</p>
                    </div>
                    <div class="col-12 col-md-6 text-justify">
                        @if ($imagenLibro2 !== null)

                        <img class="img-fluid" data-aos="fade-in" src="{{ asset('img/libros') . '/' . $imagenLibro2->image }}">
                        <p data-aos="fade-up" class="mt-3 text-bold text-black">{!! get_section(6, 'titlelibro2')->description !!}</p>
                        <p data-aos="fade-up" class="mt-3">{!! get_section(6, 'description2')->description !!}</p>

                        @endif
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <p class="mb-3">

                        </p>
                    </div>
                </div>

            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- <section> begin ============================-->
        <section class="bg-100 bg-white" id="contact" data-aos="fade-in">

            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3  text-center green">
                            {!! get_section(7, 'title')->description !!}
                        </h5>
                    </div>
                </div>
                <div class="row mt-4" data-aos="fade-up">
                    <div class="col-12 col-md-6 ">
                        <p>
                            {!! get_section(7, 'description')->description !!}
                        </p>
                        <table>
                            <tr>
                                <td><i class="fas fa-envelope"></i> &nbsp; </td>
                                <td>
                                    <a href="mailto:{{ get_section(7, 'email_contact')->description }}">
                                        {!! get_section(7, 'email_contact')->description !!}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-alt"></i> &nbsp;</td>
                                <td>
                                    <a href="https://wa.me/{{ get_section(7, 'celular_contact')->description }}" target="_blank">
                                        {!! get_section(7, 'celular_contact')->description !!}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td> <i class="fab fa-youtube"></i> &nbsp;</td>
                                <td>
                                    <a href="https://www.youtube.com/channel/UCGK8jAV5zhFW5xbTIYnyqbw" target="_blank">
                                        {!! get_section(7, 'youtube_contact')->description !!}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-facebook"></i></td>
                                <td>
                                    {!! get_section(7, 'pages_facebook_contact')->description !!}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <form id="frm-contact">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'name')->description !!}
                                            </label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'country')->description !!}
                                            </label>
                                            <select name="country" id="" class="form-control">
                                                @foreach (config('enums.pais') as $pais)
                                                <option value="{{ $pais }}"> {{ $pais }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'city')->description !!}
                                            </label>
                                            <input type="text" class="form-control" name="city">
                                        </div>


                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'telephone')->description !!}
                                            </label>

                                            <input type="text" class="form-control" name="telephone">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'email')->description !!}
                                            </label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">
                                                {!! get_section(7, 'comment')->description !!}
                                            </label>
                                            <textarea name="comment" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-end">
                                                <div class="form-group refereshrecapcha">
                                                    {!! captcha_img('flat') !!}
                                                </div>

                                                <a href="javascript:void(0)" onclick="refreshCaptcha()"><i class="fas fa-sync-alt"></i></a>

                                            </div>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="formGroupExampleInput" class="form-label">Captcha</label>
                                            <p><input type="text" name="captcha" class="form-control"></p>
                                            <p class="text-danger text-end" id="contact_captcha"></p>
                                        </div>

                                        <div class="col-12  text-center">
                                            <div class="spinner-contacto" style="display: none">
                                                <div class="col-12 text-center mt-1 pb-5">
                                                    <i class="fas fa-spinner fa-spin text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="alert alert-success" role="alert" style="display: none" id="contact_send">
                                            {!! get_section(8, 'contact_received')->description !!}
                                        </div>

                                        <div class="row">
                                            <div class="col-12 text-end">

                                                <button type="submit" class="btn btn-lg btn-primary ">
                                                    {!! get_section(8, 'send')->description !!}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

                    <div class="col-12 col-md-auto  text-center text-md-left mb-3">
                        <ul class="list-inline mb-md-4 mb-lg-0">
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#home">{!! get_section(8, 'menu_home')->description !!}</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#course"> {!! get_section(8, 'menu_course')->description !!}</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#therapy"> {!! get_section(8, 'menu_therapy')->description !!}</a></li>


                        </ul>
                        <ul class="list-inline mb-md-4 mb-lg-0">
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#workshop"> {!! get_section(8, 'menu_workshop')->description !!}</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#book"> {!! get_section(8, 'menu_book')->description !!}</a></li>
                            <li class="mb-3 list-inline-item"><a class="text-100 fw-light text-decoration-none" href="#contact">{!! get_section(8, 'menu_contact')->description !!}</a></li>

                        </ul>
                    </div>
                    <div class="col-12 col-md-auto mb-3 text-center text-md-left text-white">
                        <p>
                            <a href="https://wa.me/{{ get_section(7, 'celular_contact')->description }}" class="text-white"> <i class="fas fa-phone-alt"></i> &nbsp;
                                {!! get_section(7, 'celular_contact')->description !!}
                            </a>
                        </p>
                        <p>
                            <a href="mailto:{{ get_section(7, 'email_contact')->description }}" class="text-white">
                                <i class="fas fa-envelope"></i> &nbsp; {!! get_section(7, 'email_contact')->description !!}
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-md-auto text-center text-md-left mb-4  align-items-end">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me-3">
                                <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/Escuela-de-Medicina-Hol%C3%ADstica-del-Aura-105822991884601">
                                    <i class="fab fa-facebook text-white fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a href="https://www.youtube.com/channel/UCGK8jAV5zhFW5xbTIYnyqbw" target="_blank">
                                    <i class="fab fa-youtube text-white fa-2x"></i>
                                </a>
                            </li>

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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="/js/landing.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
