<!DOCTYPE html>
<html lang="fr">

<head>
    <title>BTD Ingénierie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('/images/logoBTD.ico') }}"/>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="/">
                        <img src="{{ asset('/images/logo.png') }}" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">

                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-placeholder text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">20, Le grand bar sauvage</span>
                            <span class="caption-text">44690 Château Thébaud </span>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-email text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">pbiron.btdingenierie@gmail.com</span>
                            <span class="caption-text">E-MAIL</span>
                        </div>
                    </div>
                </div>


                    <div class="col-6 col-lg-3">
                        <a href="/OTEAUX">
                            <img src="{{ asset('/images/Capture.png') }}" alt="Image" class="img-fluid">
                        </a>
                    </div>

                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>




        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="active">
                                    <a href="/" class="nav-link text-left">Accueil</a>
                                </li>
                                <li>
                                    <a href="/blogBTD" class="nav-link text-left">Nos Prestations</a>
                                </li>
                                <li>
                                    <a href="/contact" class="nav-link text-left">Contact</a>
                                </li>
                                <li>
                                    <a href="/indexEN" class="nav-link text-left">English Version</a>
                                </li>
                                        <li>
                                            @if(Auth::user() == null)
                                                <a  href="/register" class="nav-link text-oui">S'enregistrer</a>
                                                <a  href="/login" class="nav-link text-oui2" >Se Connecter</a>
                                            @else
                                                <a class="text-oui2" >Vous êtes connecté</a>
                                                <a href="/logout" class="nav-link text-oui">Se Deconnecter</a>
                                            @endif
                                        </li>
                                    </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>
@yield('content')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>BTD</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/blogBTD">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>

                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Oteaux</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/OTEAUX">Accueil</a></li>
                        <li><a href="/Assainissement">Assainissement</a></li>
                        <li><a href="/BTP">BTP</a></li>
                        <li><a href="/Climatisation">Climatisation</a></li>
                        <li><a href="/Plomberie">Plomberie</a></li>
                        <li><a href="/Electricité">Electricité</a></li>
                        <li><a href="/Négociation">Négoce</a></li>
                        <li><a href="/Transport">Transport</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Mentions</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/mentions">Mentions légales</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <br>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> © 2019 BTD INGÉNIERIE. | Edited by Fransosiche
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
</body>
