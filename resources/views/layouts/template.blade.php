<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="La tulipe Food Côte d'Ivoire">
    <meta name="keywords" content="La tulipe Food Côte d'Ivoire">
    <meta name="author" content="Aman Angui Roland Fulgence Hanyrold">
    <link rel="apple-touch-icon" href="{{ asset('images/logo_tulpe.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_tulpe.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/megamenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


    @livewireStyles
{{--
    <div id="trad">
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>--}}
</head>
<body>
<!--page start-->
<div class="page">


    <!--header start-->
    <header id="masthead" class="header ttm-header-style-03">

        <div class="widget_header_wrapper">
            <div class="container">
                <div class="row">

                  {{--  <div class="col-xl-2 col-sm-2 col-lg-2">
                        <div class="site-branding ">
                            <a class="home-link" href="{{url('/')}}" title="Tulipe Food SA" rel="home">
                                <img id="logo-img" height="50" width="100" class="img-fluid auto_size" src="{{asset('images/logo_tulpe.png')}}" alt="logo-img">
                            </a>
                        </div>
                    </div>--}}

                    <div class="col-xl-12 col-sm-12 col-lg-12">

                        <!-- ttm-widget-header -->
                        <div class="ttm-widget_header d-flex flex-row align-items-center justify-content-end">
                            <!-- widget-info -->
                            <img src="{{asset('images/baaaaa.jpg')}}" style="width: 100%;   height: 300px;margin-bottom: 20px;" alt=""><!-- widget-info end -->
                            <!-- widget-info end -->
                           <!-- widget-info end -->
                        </div><!-- ttm-widget-header end -->
                    </div>
                </div>
            </div>
        </div>
        <div id="site-header-menu" class="site-header-menu">
            <div class="site-header-menu-inner ttm-stickable-header ttm-bgcolor-skincolor">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="site-navigation-content ttm-bgcolor-skincolor d-flex flex-row">
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                    </div>
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item active">
                                                <a href="{{url('/')}}">Accueil</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{url('/notre-societe')}}">Notre entreprise </a>
                                            </li>
                                          {{--  <li class="mega-menu-item">
                                                <a href="#" class="mega-menu-link">Notre activité</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/notre-societe')}}">Qui sommes-nous</a></li>
                                                    <li><a href="{{url('/notre-presence')}}">Notre présence</a></li>
                                                    <li><a href="{{url('/volume-et-tendance')}}">Volume & tendance</a></li>
                                                    <li><a href="{{url('/notre-equipe')}}">Notre équipe</a></li>
                                                </ul>
                                            </li>--}}
                                            <li class="mega-menu-item">
                                                <a href="{{url('nos-produits')}}" class="mega-menu-link">Nos produits</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/poissons')}}">Poissons</a></li>
                                                    <li class="mega-menu-item"><a href="#" class="mega-menu-link">Viandes</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="{{url('/boeufs')}}">Boeuf & Veaux </a></li>
                                                            {{--<li><a href="{{url('/veaux')}}">Veau </a></li>--}}
                                                            <li><a href="{{url('/agneaux')}}">Mouton </a></li>
                                                            {{--<li><a href="{{url('/chevres')}}">Chèvre</a></li>--}}
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{url('/notre-galerie')}}">Notre galerie</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{url('/notre-actualite')}}">Notre actualité</a>
                                            </li>

                                            <li class="mega-menu-item">
                                                <a href="{{url('/contactez-nous')}}">Nos Contacts</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    {{--<div class="header_extra d-flex flex-row align-items-center ml-auto">
                                        <a href="{{url('/commande')}}" class="ttm-btn ttm-btn-size-md ttm-btn-style-fill ttm-btn-shape-rounded ttm-btn-color-dark">Passez votre commande!</a>
                                    </div>--}}
                                </div>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--header end-->

    <!--site-main start-->
    <div class="site-main">
        @yield('content')

    </div><!--site-main end-->


    <!--footer start-->
    <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-fluid auto_size" height="36" width="160" src="{{asset('images/logo_tulipe.jpg')}}" alt="image">
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Liens utiles</h3>
                            <ul id="menu-footer-quick-links" class="menu">
                                {{--<li><a href="{{url('notre-societe')}}">A propos</a></li>
                                <li><a href="{{url('notre-equipe')}}">Notre équipe</a></li>--}}
                                <li><a href="{{url('notre-societe')}}">Notre entreprise </a></li>
                                <li><a href="{{url('poissons')}}">Nos produits</a></li>
                                <li><a href="{{url('notre-galerie')}}">Notre galerie</a></li>
                                <li><a href="{{url('contactez-nous')}}">Nos contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_img_gellary clearfix">
                            <h3 class="widget-title">Nos produits</h3>
                            <ul>
                                <li><a href="{{asset('images/qdb.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px" src="{{asset('images/qdb.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="{{asset('images/poitrine.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px"  src="{{asset('images/poitrine.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="{{asset('images/tilapia.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px"  src="{{asset('images/tilapia.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="{{asset('images/vdn.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px"  src="{{asset('images/vdn.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="{{asset('images/maquerau.jpg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px"  src="{{asset('images/maquerau.jpg')}}" alt=""></a>
                                </li>
                                <li><a href="{{asset('images/pangasus.jpg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                        <img class="img-fluid" style="width: 100%; height: 80px"  src="{{asset('images/pangasus.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                        <div class="widget widget_cta clearfix">
                            <h3 class="widget-title">Contact</h3>
                            <p>Si vous avez des questions</p>
                            <div class="d-flex">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs margin_right15 margin_bottom15 ">
                                    <i class="flaticon flaticon-call"></i>
                                </div>
                                <h4>+225 27 21 59 03 10</h4>
                            </div>
                            <p>Vridy, ZI Bvd de Petit Bassam - Côte d'Ivoire.</p>
                            <div class="d-inline-table align-items-center justify-content-between">
                                <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor margin_right40 margin_bottom5" href="#">Suivez-nous <i class="fa fa-chevron-right"></i></a>
                                <div class="social-icons d-inline-block margin_top10 margin_bottom10">
                                    <ul class="social-icons list-inline">
                                        <li><a class="tooltip-top" target="_blank" href="https://www.linkedin.com/company/la-tulipe-food/" rel="noopener" aria-label="linkedin" data-tooltip="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-md-flex justify-content-between">
                            <span class="cpy-text">Copyright © 2023 <a href="{{url('/')}}" class="ttm-textcolor-skincolor font-weight-500">La Tulipe Food SA</a> Tous droits réservés. Développé par <a href="http://technologie.groupebethanie.com.com">BETHANIE TECHNOLOGIE</a> </span>
                            <ul class="footer-nav-menu">
                                <li><a href="#">Politique qualité</a></li>
                                <li><a href="#">Conditions de vente</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->


    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


<!-- BEGIN: Theme JS-->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/jquery-validate.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/numinate.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/jquery-isotope.js') }}"></script>
<script src="{{ asset('js/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
