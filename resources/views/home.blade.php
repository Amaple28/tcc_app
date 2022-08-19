{{-- <button><a href="{{route('login')}}">login</a></button> --}}



<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    @vite('resources/js/app.js')
    <title>Health Care System</title>

    <style>
        body,
        html {
            font-size: 72.5%;
        }

        @media (min-width: 992px) {

            body,
            html {
                font-size: 98.25% !important;
            }
        }

        /***********************************
 3. ESTILOS COLOR PRINCIPAL
 ***********************************/
        .topheader {
            background-color: #00ad75;
        }

        .bg-primary {
            background: #00ad75 !important;
        }

        .text-primary {
            color: #00ad75 !important;
        }

        .btn-primary {
            background-color: #00ad75;
            border: none;
        }

        /***********************************
 4. ESTILOS COLOR SECUNDARIO
 ***********************************/
        .bg-secondary {
            background-color: #35363c !important;
        }

        .text-secondary {
            color: #35363c !important;
        }

        .social i {
            font-size: 24px;
            color: #fff;
            padding: 10px 14px;
            opacity: 0.8;
            transition: all 0.4s ease-in-out;
        }

        .social i:hover {
            opacity: 1;
            transform: scale(1.2) rotate(360deg);
        }

        #navegacion .iconmenu::before {
            font-family: "Font Awesome 5 Free";
            content: "\f0c9";
            font-weight: 900;
            font-size: 30px;
            color: #fff;
        }

        #navegacion .cerraricono::before {
            content: "\f057";
        }

        .navbar-toggler:focus,
        .navbar-toggler {
            outline: none;
        }

        .navbar-dark .navbar-nav .nav-link {
            padding: 15px 15px;
            display: flex;
            justify-content: space-between;
            transition: all 0.2s ease;
            border-radius: 2rem;
            margin-bottom: 0.5rem;
        }

        @media (min-width: 768px) {
            .navbar-dark .navbar-nav .nav-link {
                padding: 1rem 2.5rem !important;
                margin-right: 1rem;
            }
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            background-color: #4d4e57;
        }

        .navbar-dark .navbar-nav .nav-link:hover:after {
            transform: rotateZ(180deg);
        }

        .navbar-dark .navbar-nav .nav-link:after {
            font-family: "Font Awesome 5 free";
            content: "\f105";
            font-weight: 900;
            transition: all 0.2s ease;
        }

        @media (min-width: 768px) {
            .navbar-dark .navbar-nav .nav-link:after {
                content: "";
            }
        }

        .navbar-dark .navbar-nav .active>.nav-link {
            background-color: #00ad75;
        }

        .btn {
            padding: 0.5rem 1.9rem !important;
            border-radius: 5rem !important;
            position: relative;
            overflow: hidden;
            z-index: 100 !important;
        }

        .btn-primary {
            background-color: #00ad75 !important;
            border-color: #00ad75 !important;
        }

        .btn-primary:hover {
            color: #35363c !important;
        }

        .btn-primary:hover:after {
            left: 0.5rem;
            top: 0;
        }

        .btn-primary:hover:before {
            content: "";
            position: absolute;
            width: 140%;
            left: -10px;
            top: 0;
            background-color: #fff;
            height: 100%;
            transform: skew(45deg, 0deg);
            z-index: -100;
        }

        .btn-primary:after {
            font-family: "Font Awesome 5 free";
            content: "\f138";
            font-weight: 900;
            position: relative;
            left: 1rem;
            top: 0;
            transition: all 0.3s ease;
        }

        .btn-primary:before {
            content: "";
            position: absolute;
            width: 0;
            left: 50%;
            top: 0;
            background-color: #fff;
            height: 100%;
            transform: skew(45deg, 0deg);
            z-index: -10;
            transition: all 0.5s ease;
        }

        .btn-primary:active,
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.32) !important;
        }

        .swiper-container {
            height: 74vh;
            color: #fff;
        }

        .swiper-slide {
            background-position: center center;
            background-size: cover;
        }

        .swiper-slide::before {
            content: "";
            position: absolute;
            background-color: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .swiper-button-prev {
            background-image: none !important;
            background-color: rgba(0, 0, 0, 0.5);
            width: 3rem !important;
            height: 3rem !important;
            border-radius: 5rem;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s ease;
        }

        .swiper-button-prev:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .swiper-button-prev:hover::before {
            color: #00ad75;
        }

        .swiper-button-prev::before {
            font-family: "Font Awesome 5 free";
            content: "\f053";
            font-weight: 900;
        }

        .swiper-button-next {
            background-image: none !important;
            background-color: rgba(0, 0, 0, 0.5);
            width: 3rem !important;
            height: 3rem !important;
            border-radius: 5rem;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s ease;
            transform: rotate(180deg);
        }

        .swiper-button-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .swiper-button-next:hover::before {
            color: #00ad75;
        }

        .swiper-button-next::before {
            font-family: "Font Awesome 5 free";
            content: "\f053";
            font-weight: 900;
        }

        .swiper-pagination-bullet {
            width: 1rem !important;
            height: 1rem !important;
            background-color: #00ad75 !important;
            margin-right: 1rem !important;
        }

        .video-contenido::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .video-contenido:hover::after {
            opacity: 1;
        }

        .video-contenido img {
            transition: all 0.5s ease;
        }

        .video-contenido:hover img {
            transform: scale(1.3);
        }

        .video-contenido a {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5.8rem;
            height: 5.8rem;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.9);
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.2rem;
            color: #00ad75;
            background-clip: padding-box;
            transition: all 0.4s ease;
            border: 0rem solid transparent;
            z-index: 100;
        }

        .video-contenido a:hover {
            text-decoration: none;
            color: #fff;
            background-color: rgba(0, 173, 117, 0.9);
            border: solid 0.5rem rgba(0, 0, 0, 0.3);
        }

        #te-ayudamos {
            position: relative;
            margin: 5rem 0rem;
            transform: skew(0, 4deg);
        }

        @media (min-width: 768px) {
            #te-ayudamos {
                transform: skew(0, 2deg);
            }
        }

        #te-ayudamos>.container {
            transform: skew(0, -4deg);
        }

        @media (min-width: 768px) {
            #te-ayudamos>.container {
                transform: skew(0, -2deg);
            }
        }

        #te-ayudamos::after {
            content: "";
            background-color: #00ad75;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #numeros .col-6 i {
            color: #00ad75 !important;
        }

        #numeros .col-12 i {
            color: #00ad75 !important;
        }

        #numeros .col-6:hover .separador {
            background-color: #319c74;
            transform: translatex(-50%) rotate(180deg);
            bottom: 0.8rem;
        }

        #numeros .col-12:hover .separador {
            background-color: #319c74;
            transform: translatex(-50%) rotate(180deg);
            bottom: 0.8rem;
        }

        @media (min-width: 768px) {
            #numeros .col-6:hover .separador {
                bottom: 1rem;
            }
        }

        #numeros .separador {
            position: absolute;
            bottom: 0rem;
            left: 50%;
            width: 4rem;
            height: 0.4rem;
            background-color: #00ad75;
            transform: translatex(-50%);
            transition: all 0.4s ease;
        }

        @media (min-width: 768px) {
            #numeros .separador {
                bottom: 0rem;
            }
        }

        #app::after {
            content: "";
            position: absolute;
            background-color: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .app{
            background-color: #1f2424ab !important;
        }

        #contacto header {
            background-color: #00ad75;
        }

        #contacto header .abajo {
            position: absolute;
            background-color: #00ad75;
            width: 2.5rem;
            height: 2.5rem;
            bottom: 0;
            left: 50%;
            transform: translatex(-50%) translatey(50%) rotate(45deg);
        }

        #pieDepagina {
            background-color: #35363c;
        }

        #pieDepagina .soporte::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: -100%;
            right: -100%;
            background-color: #00ad75;
        }

        @media (min-width: 768px) {
            #pieDepagina .soporte::before {
                right: 0;
                transform: skewX(25deg);
            }
        }

        #pieDepagina .enlaces p {
            margin-bottom: 0;
        }

        #pieDepagina .enlaces li {
            border-bottom: 1px solid #151519;
            box-shadow: 0 1px #8d8e93;
            padding-bottom: 0.6rem;
        }

        #pieDepagina .enlaces a {
            text-decoration: none;
            color: #fff;
            padding: 1.5rem;
            text-transform: uppercase;
        }

        .col-footer{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }
    </style>

</head>

<body id="inicio">
    

    <div class="logoinfo d-none d-md-block">
        <div class="container">
            <div class="row py-4 justify-content-between align-items-center">
                <div class="col-auto">
                    <a href="#"><img
                            src="https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/6/2019/04/0159_t_classic-smiles-logo_10.png"
                            width="100px" alt="logo"></a>
                </div>
                <div class="col-auto ml-auto">
                    <i class="fas fa-phone fa-flip-horizontal fa-2x text-success"> </i>
                    <span class="h5 font-weight-bold text-secondary ml-2">
                        (31) 2254-3052
                    </span>

                </div>
                <div class="col-auto">
                    <i class="fas fa-envelope fa-2x text-success"> </i>
                    <span class="h5 font-weight-bold text-secondary ml-2 ">
                        info@clinicadentill.com.br
                    </span>


                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark navbar-expand-md bg-dark" id="navegacion">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal"
                aria-controls="menuprincipal" aria-expanded="false" aria-label="Toggle navigation">

                <span class="iconmenu"></span>
            </button>
            <a href="#" class="btn btn-primary order-md-1">Entrar</a>
            <div class="collapse navbar-collapse" id="menuprincipal">
                <ul class="navbar-nav  mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bienvenidos">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--   Slider    -->

    <section class="swiper-container" id="animacion">

        <div class="swiper-wrapper">

            <!--  SLIDER 1       -->
            <div class="swiper-slide text-center d-flex align-items-center"
                style="background-image:url('https://media.istockphoto.com/photos/young-female-dentist-communicating-with-patient-before-dental-at-picture-id1314828797?b=1&k=20&m=1314828797&s=170667a&w=0&h=mAMWO8MPlbCO_XSbs83qzy2TEQXL9yiTdMCOv-7BoZk=')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <h2 class="display-5 font-weight-bold mb-3">Atendimento exclusivo e grandes descontos para novos clientes.</h2>
                            <a href="#" class="btn btn-primary">Criar Conta</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fIN DEL SLIDER 1 -->

            <!--  SLIDER 2       -->
            <div class="swiper-slide text-center d-flex align-items-center"
                style="background-image:url('https://media.istockphoto.com/photos/24h-button-picture-id472085243?b=1&k=20&m=472085243&s=170667a&w=0&h=l-sMwOX342Fk9zNca4j5zcqHSxa4AAjxiL0O5M8dB5A=')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <h2 class="display-5 font-weight-bold mb-3">Suporte 24h para tirar dúvidas</h2>
                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fIN DEL SLIDER 2 -->

            <!--  SLIDER 3       -->
            <div class="swiper-slide text-center d-flex align-items-center"
                style="background-image:url('https://media.istockphoto.com/photos/smiling-dentists-standing-with-arms-crossed-picture-id677390484?b=1&k=20&m=677390484&s=170667a&w=0&h=SCpjxUGq_Uq_Z7RnDvyA6zHM2iDoVmTs9pnb9jZxxaw=')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <h2 class="display-5 font-weight-bold mb-3">Profissionais especializados que vão cuidar bem do seu sorriso</h2>
                            <a href="#" class="btn btn-primary">Marcar uma Consulta</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fIN DEL SLIDER 3 -->

        </div>

        <!--BOTÕES DE NAVEGAÇÃO -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- BOTÕES DA PÁGINA -->
        <div class="swiper-pagination"></div>

    </section>

    <!-- SEÇÃO BEM-VINDO COM VÍDEO    -->

    <section id="bienvenidos" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                        <img src="https://cdn.pixabay.com/photo/2017/07/23/10/42/dentist-2530983_960_720.jpg" class="rounded img-thumbnail float-start" width="500px" alt="...">
                </div>
                <div class="col-12 col-md-6 pt-4 text-center">
                    <h2 class="display-5 font-weight-bold">BEM-VINDO À SUA <span class="text-success">CLINICA
                            DENTILL</span></h2>
                    <p>Oferecemos atendimento médico da mais alta qualidade, tratamento individualizado pelos principais especialistas do país e no menor tempo possível.</p>
                    {{-- <a href="#" class="btn btn-primary">Leer mas</a> --}}
                </div>

            </div>
        </div>
    </section>

    <!--   SEÇÃO COMO AJUDÁ-LO   -->

    <section id="te-ayudamos" class="bg-dark text-white text-center " data-type="scroll-opacity">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-12">
                    <h2 class="display-4 font-weight-bold ">
                        COMO PODEMOS TE AJUDAR?
                    </h2>
                    <p>Oferecemos uma ampla gama de procedimentos para ajudá-lo a alcançar o sorriso perfeito.</p>
                    <a href="#" class="btn btn-secondary mt-3">Reserve um horário</a>
                </div>
            </div>
        </div>
    </section>

    <!--  Seção Número de conquistas -->
    <section id="numeros" class="pb-3">
        <div class="container text-center">
            <h2 class="display-4 font-weight-bold">NOSSA CLÍNICA EM NÚMEROS</h2>
            <h6 class="text-black-50 mb-5">ACOMPANHE O NOSSO CRESCIMENTO</h6>
            <div class="row pt-md-5">
                <div class="col-6 col-md-4">
                    <i class="far fa-calendar-check display-4 pb-1"></i>
                    <div class="h3 font-weight-bold mb-0">
                        <span class="counter" data-counterup-time="1000" data-counterup-beginat="0">12</span>
                    </div>
                    <p class="text-secondary mb-4">Consultas Realizadas</p>
                    <div class="separador"></div>
                </div>

                <div class="col-6 col-md-4">
                    <i class="fas fa-users display-4 pb-1"></i>
                    <div class="h3 font-weight-bold mb-0">
                        <span class="counter" data-counterup-time="2000" data-counterup-beginat="0">380</span>
                    </div>
                    <p class="text-secondary mb-4">Clientes Satisfeitos</p>
                    <div class="separador"></div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-md-0">
                    <i class="fas fa-hand-holding-heart display-4 pb-1"></i>
                    <div class="h3 font-weight-bold mb-0">
                        <span class="counter" data-counterup-time="3000" data-counterup-beginat="0">120</span>
                    </div>
                    <p class="text-secondary mb-4">Agradecimentos</p>
                    <div class="separador"></div>
                </div>
            </div>
        </div>
    </section>

    <!--   Baixe nosso aplicativo -->
    <section id="app" class="bg-secondary py-5 app mt-5  position-relative" data-speed="0.2">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <img src="https://cdn.pixabay.com/photo/2017/07/23/10/42/dentist-2530983_960_720.jpg" class="rounded img-thumbnail float-start" width="500px" alt="...">
                </div>

                <div class="col-12 col-md-6 text-center text-md-left">
                    <h2 class="display-5 font-weight-bold text-white">CRIE SUA CONTA E ACESSE DESCONTOS EXCLUSIVOS!</h2>
                    <p class="text-white">Criamos uma plataforma exclusiva para nossos clientes. Onde você pode gerenciar seus exames e consultas com facilidade.</p>
                    <a href="#" class="btn btn-primary mt-3">Criar Conta</a>
                </div>
            </div>
        </div>
    </section>

    <!--  Entre em Contato   -->

    <section id="contacto">
        <header class="py-5 text-center position-relative">
            <h2 class="h1 text-white font-weight-bold">CONTATE-NOS</h2>
            <h6 class="h6 text-white-50">ESTAMOS PRONTOS PARA ATENDÊ-LO</h6>
            <div class="abajo"></div>
        </header>

        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-6">
                    <h3 class="h3 font-weight-bold text-secondary pb-3 text-center">Detalhes de Contato</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center py-4 border-bottom">
                            <i class="fas fa-map-marker-alt fa-3x text-success fa-fw"></i>
                            <div>
                                <h5 class="h5 font-weight-bold text-secondary">Endereço:</h5>
                                <p class="mb-0 text-black-50">Av. Amazonas, 00000 - Centro, Belo Horizonte - MG, 30180-000</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center py-4 border-bottom">
                            <i class="fas fas fa-phone fa-3x text-info fa-fw"></i>
                            <div>
                                <h5 class="h5 font-weight-bold text-secondary">Telefones:</h5>
                                <p class="mb-0 text-black-50">(31) 1388-7813, (31) 2254-3052</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center py-4 border-bottom">
                            <i class="fas fa-envelope fa-3x text-primary fa-fw"></i>
                            <div>
                                <h5 class="h5 font-weight-bold text-secondary">Email:</h5>
                                <p class="mb-0 text-black-50">info@clinicadentill.com.br</p>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-12 col-lg-6">
                    <h3 class="h3 font-weight-bold text-secondary text-center py-4 py-lg-0 pb-lg-4">Registre-se
                    </h3>
                    <form action="#" id="formulario">
                        <!-- Campo Nombre-->
                        <div class="form-group row">
                            <label for="nombre" class="col-12 col-md-3 col-form-label">Nome Completo:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="text" class="form-control" placeholder="Insira seu nome completo"
                                    id="nombre" required>
                            </div>
                        </div>

                        <!-- Campo Email-->
                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-3 col-form-label">Email:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="email" class="form-control" placeholder="Insira seu email"
                                    id="email" required>
                            </div>
                        </div>

                        <!-- Campo Telefono-->
                        <div class="form-group row">
                            <label for="telefono" class="col-12 col-md-3 col-form-label">Telefone:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="tel" class="form-control" placeholder="Insira seu telefone"
                                    id="telefono" required>
                            </div>
                        </div>

                        <!-- Campo Idade-->
                        <div class="form-group row">
                            <label for="idade" class="col-12 col-md-3 col-form-label">Idade:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="number" class="form-control" placeholder="Insira sua idade"
                                    id="idade" required>
                            </div>
                        </div>

                        <!-- Campo Senha-->
                        <div class="form-group row">
                            <label for="senha" class="col-12 col-md-3 col-form-label">Senha:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="password" class="form-control" placeholder="Insira sua senha"
                                    id="senha" required>
                            </div>
                        </div>

                        <!-- Campo Confirmar Senha-->
                        <div class="form-group row">
                            <label for="confirm_senha" class="col-12 col-md-3 col-form-label">Confirmar Senha:</label>
                            <div class="input-group col-12 col-md-9">
                                <input type="password" class="form-control" placeholder="Confirme sua senha"
                                    id="confirm_senha" required>
                            </div>
                        </div>
                       

                        <!-- Campo Boton-->
                        <div class="form-group row">
                            <div class="col-12 col-lg-9 offset-lg-3 mt-2">
                                <button type="submit" class="btn btn-primary btn-block btn-lg"> Registrar </button>
                            </div>

                        </div>


                    </form>

                </div>
            </div>
        </div>
    </section>

    <footer id="pieDepagina" class="text-truncate">
        <div class="container text-white">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-5 py-4">
                    <div class="row  soporte">
                        <div class="col-12 text-center">
                            <h6 class="mb-0"> Clínica Dentill Renovando Sorrisos</h6>
                        </div>
                        {{-- <div class="col-auto text-black-50">
                            <i class="fas fa-medkit fa-3x"></i>
                        </div> --}}
                        <div class="col-auto text-black-50 pl-0 col-footer text-center">
                            <ul class="social mt-2 mb-0 list-unstyled d-inline-flex">
                                <li><a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a></li>
                                <li><a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a></li>
                                <li><a href="#">
                                        <i class="fab fa-google-plus"></i>
                                    </a></li>
        
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-7 text-center text-lg-right text-white py-4 small">
                    <ul class="list-unstyled enlaces d-inline-flex ">
                        <li><a href="#inicio">Início</a></li>
                        <li><a href="#bienvenidos">Sobre</a></li>
                        <li><a href="#contacto">Contato</a></li>
                    </ul>
                    <p class="mb-0">Todos os direitos reservados @2022</p>
                    <p class="mb-0">Site foi feito com <span class="text-success">&hearts;</span> by Alexander 
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

    <script>
        $(function() {

            $('#navegacion .navbar-toggler').click(function() {
                $('.iconmenu').toggleClass('cerraricono');
            });

            $('#navegacion .navbar-nav a').click(function() {
                $('.iconmenu').removeClass('cerraricono');

                $('.navbar-collapse').collapse('hide');
            });

            var swiper = new Swiper('#animacion', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                speed: 400,
                grabCursor: true,

                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                },


                autoplay: {
                    delay: 3000,
                },

            });

            $('.venobox-video').venobox({

                autoplay: true,
                bgcolor: '#fff',
                border: '10px',
                closeColor: '#fff',
                closeBackground: '#00ad75',
                overlayClose: false,
                spinner: 'cube-grid',
                spinColor: '#00ad75',
            });

            $('.counter').counterUp();

        })
    </script>

</body>

</html>
