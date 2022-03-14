<!DOCTYPE html>
<html
    data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#2a2a2a', 'colorSecondary': '#e36159', 'colorTertiary': '#2baab1', 'colorQuaternary': '#383f48'}">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> EA-C | @yield('title')</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COverpass:200,400,600,700,800,900%7CPT+Serif&amp;display=swap"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">
    <link rel="stylesheet" href="css/demos/demo-architecture-2.css">
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-architecture-2.css">

    <link rel="stylesheet" href="css/custom.css">

    <script src="vendor/modernizr/modernizr.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SEP1T05Z5V');
    </script>
</head>

<body class="loading-overlay-showing" data-loading-overlay data-plugin-page-transition>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="body">
        <header  style="background-color: #6d4a5e" id="header" class="header-transparent header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyHeaderContainerHeight': 80, 'stickyStartAt': 50, 'stickyChangeLogo': false}">
            <div class="header-body border-top-0 bg-primary appear-animation" data-appear-animation="fadeInUpShorterPlus"
                data-appear-animation-delay="2000" data-plugin-options="{'forceAnimation': true}">
                <div class="header-container container-fluid">
                    <div class="header-row">
                        <div class="header-column align-items-start justify-content-center">
                            <div class="header-logo z-index-2 col-lg-2 px-0">
                                <a href="demo-architecture-2.html">
                                    <img alt="Porto" width="123" height="32" style="height: 10%" src="img/eac_logo.jpeg">
                                </a>
                            </div>
                        </div>
                        <div class="header-column flex-row justify-content-end justify-content-lg-center">
                            <div
                                class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 header-nav-dropdowns-dark header-nav-light-text justify-content-end">
                                <div
                                    class="header-nav-main header-nav-main-arrows header-nav-main-mobile-dark header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li><a href="{{url('/')}}" class=" {{ Request::is('/') ? 'active' : '' }} nav-link ">Accueil</a></li>
                                            <li><a href="{{route('about')}}"
                                                    class=" {{ Request::is('about') ? 'active' : '' }} nav-link">A propos</a></li>
                                            <li><a href="{{route('our_project')}}"
                                                    class=" {{ Request::is('our_project') ? 'active' : '' }} nav-link">Nos projets</a></li>
                                            <li class="dropdown">
                                                <a href="demo-architecture-2-services.html"
                                                    class=" {{ Request::is('architechture') ? 'active' : '' }}
                                                    {{ Request::is('big') ? 'active' : '' }}
                                                    {{ Request::is('decoration') ? 'active' : '' }}
                                                    {{ Request::is('road') ? 'active' : '' }}
                                                    {{ Request::is('auther_services') ? 'active' : '' }}
                                                    nav-link dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{route('architechture')}}"
                                                            class="dropdown-item">Architechture</a></li>
                                                    <li><a href="{{route('big')}}"
                                                            class="dropdown-item">Gros oeuvres</a></li>
                                                    <li><a href="{{route('decoration')}}"
                                                            class="dropdown-item">Décoration intérieure</a></li>
                                                    <li><a href="{{route('road')}}"
                                                            class="dropdown-item">Contruction des routes</a></li>
                                                    <li><a href="{{route('auther_services')}}"
                                                            class="dropdown-item">Autres</a></li>
                                                </ul>
                                            </li>
                                            </li>
                                            <li><a href="{{route('contact')}}"
                                                    class="{{ Request::is('contact') ? 'active' : '' }} nav-link">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-nav-features pl-0 ml-3">
                                <div class="header-nav-features-search-reveal-container">
                                    <div
                                        class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                        <a href="#"
                                            class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i
                                                class="icons icon-magnifier header-nav-top-icon text-color-light text-4 font-weight-bold position-relative top-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="btn header-btn-collapse-nav bg-transparent border-0 text-4 position-relative top-2 p-0 ml-4"
                                data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-column align-items-end justify-content-center d-none d-lg-flex">
                            <ul
                                class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-medium custom-social-icons-divider">
                                <li class="social-icons-facebook">
                                    <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="https://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-features header-nav-features-no-border p-static">
                <div
                    class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                    <div class="container">
                        <div class="row h-100 d-flex">
                            <div class="col h-100 d-flex">
                                <form role="search" class="d-flex h-100 w-100"
                                    action="https://www.okler.net/previews/porto/8.3.0/page-search-results.html"
                                    method="get">
                                    <div class="big-search-header input-group">
                                        <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                            value="" placeholder="Type and hit enter...">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('main')
        <footer id="footer" class="bg-primary border-0">
            <div class="container container-lg-custom pt-5 pb-3">
                <div class="row py-5">
                    <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <h4 class="font-weight-extra-bold text-5 ls-0">Address</h4>
                        <ul class="list list-unstyled">
                            <li class="mb-1">
                                A 50m de l'école internationale mariam.
                            </li>
                            <li class="mb-1">
                                Agoé-cacaveli
                            </li>
                            <li>

                        Lomé-Togo                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <h4 class="font-weight-extra-bold text-5 ls-0">Contacts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span class="d-block line-height-2 mb-1">OFFICE</span>
                                <a href="tel:+1234567890"
                                    class="text-color-light text-3 text-lg-2 text-xl-6 font-weight-bold">90-11-82-69</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-lg-2 mb-4 mb-md-0">

                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 mb-md-0">
                        <h4 class="font-weight-extra-bold text-5 ls-0">Services</h4>
                        <ul class="list-unstyled">
                            <li><a href="demo-architecture-2-services.html"
                                class="dropdown-item">Architechture</a></li>
                        <li><a href="demo-architecture-2-services-detail.html"
                                class="dropdown-item">Gros oeuvres</a></li>
                        <li><a href="demo-architecture-2-services-detail.html"
                                class="dropdown-item">Décoration intérieure</a></li>
                        <li><a href="demo-architecture-2-services-detail.html"
                                class="dropdown-item">Contruction des routes</a></li>
                        <li><a href="demo-architecture-2-services-detail.html"
                                class="dropdown-item">Autres</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-lg-2 mb-4 mb-md-0">

                    </div>
                    <div class="col-md-4 col-lg-2">
                        <h4 class="font-weight-extra-bold text-5 ls-0">Suivez-nous sur </h4>
                        <ul class="social-icons social-icons-clean social-icons-icon-light">
                            <li>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright bg-primary">
                <div class="container container-lg-custom pb-4">
                    <div class="row">
                        <div class="col">
                            <hr class="my-0 bg-color-light opacity-1">
                        </div>
                    </div>
                    <div class="row py-5 my-3">
                        <div class="col text-center">
                            <a href="demo-architecture-2.html" class="d-inline-block mb-3">
                                <img alt="Porto" width="115" height="30" style="height: 10%" src="img/eac_logo.jpeg">
                            </a>
                            <p class="text-3 mb-0">NHN Technology © {{date('Y')}}. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    <script src="js/theme.js"></script>
      <script src="js/demos/demo-architecture-2.js"></script>

    <script src="js/theme.init.js"></script>
</body>

<!-- Mirrored from www.okler.net/previews/porto/8.3.0/demo-architecture-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Mar 2021 21:42:33 GMT -->

</html>
