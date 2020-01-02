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
                                    <a href="/" class="nav-link text-left">Home</a>
                                </li>
                                <li>
                                    <a href="/blogBTD" class="nav-link text-left">Our
                                        Loans</a>
                                </li>
                                <li>
                                    <a href="/contact" class="nav-link text-left">Contact</a>
                                </li>
                                <li>
                                    <a href="/" class="nav-link text-left">Version Française</a>
                                </li>
                                <li>
                                    @if(Auth::user() == null)
                                        <a  href="/register" class="nav-link text-oui">Register</a>
                                        <a  href="/login" class="nav-link text-oui2" >Login</a>
                                    @else
                                        <a class="text-oui2" >You are connected</a>
                                        <a href="/logout" class="nav-link text-oui">Disconnection</a>
                                    @endif
                                </li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/hero_2.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1> The <strong> advice </strong> and <strong> accompaniment </strong> for the success of
                            your environmental projects</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1><strong> Audit </strong> and <strong> analysis</strong> to define your solution
                                sustainable</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section" style="background-image: url('images/hero_3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>The <strong>follow</strong> and the <strong> delegated control </strong> of your sites
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->


    <div class="site-section services-1-wrap">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-5">
                    <h3 class="section-subtitle">Why we exist</h3>
                    <h2 class="section-title mb-4 text-black">Being a <strong> dynamic</strong>  and
                        <Strong> referring</strong> actor to the protection of the " Water " resource in France and to
                        international. </h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">01</span>
                        <div class="service-1-icon">
                            <span class="flaticon-engineer"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">A team of professionals</h3>
                            <p>30 years of experience in the world of water, the constant quest for innovation and
                                the desire to integrate solutions adapted to environmental specificities
                                (pollution, standards, issues,...), architectural (town planning, landscaping,...) and local
                                (noise, smell,...) guarantee efficient and tailor-made services.
                                100% of our solutions are personalized.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">02</span>
                        <div class="service-1-icon">
                            <span class="flaticon-compass"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Economic performance</h3>
                            <p>The values, both entrepreneurial and service oriented, make BTD engineering a structured SME.
                                to provide economically interesting solutions and ensure its notoriety.
                                in the water world.
                                100% of our solutions are optimized.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">03</span>
                        <div class="service-1-icon">
                            <span class="flaticon-oil-platform"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Adapted and personalized assistance</h3>
                            <p>BTD engineering is a local and independent company that intends to build
                                strong relationships with the constant and shared obsession of the whole team to make
                                The success of its customers, partners and service providers in meeting their challenges.
                                100% of our relationships are close and constructive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">04</span>
                        <div class="service-1-icon">
                            <span class="flaticon-crane"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Respect of the process</h3>
                            <p>The quest for "beautiful work" and the respect of our commitments guarantee to our clients
                                and our partners a level of achievement perfectly equivalent to the proposal.
                                100% of our commitments are met.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END services -->

    <div class="site-section">
        <div class="block-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h3 style="color:orangered" class="section-subtitle">Why choose us?</h3>
                        <h2 class="section-title mb-4">With the experience of its men, it assures that its
                            partners a global offer from conception to realization.</h2>
                        <p> BTD engineering company is the result of recognized professional experience and
                             to implement a project that meets the challenges of water treatment and wastewater treatment.
                             sustainable development. Patrick Biron has been working for 30 years in the sector of
                             sewage, rainwater and drinking water treatment...</p>

                        <div class="row my-5">
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">1</h4>
                                    <p class="text-white">Advice and support to ensure the success of your
                                        environmental projects</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">2</h4>
                                    <p class="text-white">Audit and analysis to define your sustainable solution</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center">
                                <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">3</h4>
                                    <p class="text-white">Follow-up and delegated control of your worksites
                                    </p>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END block-2 -->

    <div class="site-section block-3">
        <div class="container">

            <div class="mb-5">
                <h3 style="color:orangered" class="section-subtitle">Our services</h3>
                <h2 class="section-title mb-4">Come and see our recent projects</h2>
            </div>
            <div class="projects-carousel-wrap">
                <div class="owl-carousel owl-slide-3">
                    @foreach($data as $key => $data)
                        <div class="project-item">
                            <div class="project-item-contents">
                                <a href="/blogBTD/post/{{$data -> ID}}">
                                    <span class="project-item-category">{{$data -> Name}}</span>
                                    <h2 class="project-item-title">
                                        {{$data -> Lieu}}
                                    </h2>
                                </a>
                            </div>
                            <img  src="images/{{$data -> Image_1}}" alt="Image"
                                  class="img-fluid img-carr">
                        </div>
                        <div class="project-item">
                            <div class="project-item-contents">
                                <a href="/blogBTD/post/{{$data -> ID}}">
                                    <span class="project-item-category">{{$data -> Name}}</span>
                                    <h2 class="project-item-title">
                                        {{$data -> Lieu}}
                                    </h2>
                                </a>
                            </div>
                            <img  src="images/{{$data -> Image_2}}" alt="Image "
                                  class="img-fluid img-carr">
                        </div>
                        <div class="project-item">
                            <div class="project-item-contents">
                                <a href="/blogBTD/post/{{$data -> ID}}">
                                    <span class="project-item-category">{{$data -> Name}}</span>
                                    <h2 class="project-item-title">
                                        {{$data -> Lieu}}
                                    </h2>
                                </a>
                            </div>
                            <img  src="images/{{$data -> Image_3}}" alt="Image"
                                  class="img-fluid img-carr">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <div class="site-section testimonial-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-5 text-center">
                    <h3 class="section-subtitle">End's Word</h3>
                </div>
            </div>

            <div class="col-md-12 mb-4 mb-md-0">
                <div class="testimonial">
                    <blockquote>
                        <p>&ldquo;Water is at the heart of humanity's challenges, BTD engineering makes the promise to make
                            succeed each of its partners in their projects with the permanent concern to
                            reconciling economy, ecology and social issues.&rdquo;</p>
                    </blockquote>
                    <p class="client-name">P. BIRON, President</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Our company</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/blogBTD">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>

                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Oteaux</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/OTEAUX">Home</a></li>
                        <li><a href="/Assainissement">Sanitation</a></li>
                        <li><a href="/BTP">BTP</a></li>
                        <li><a href="/Climatisation">Air conditioner</a></li>
                        <li><a href="/Plomberie">Plumbing</a></li>
                        <li><a href="/Electricité">Electricity</a></li>
                        <li><a href="/Négociation">Trading</a></li>
                        <li><a href="/Transport">Transport</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Mentions</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="/mentions">Legals Mentions</a></li>
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
