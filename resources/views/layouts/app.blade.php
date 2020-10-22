<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Aviato E-Commerce Template" />

        <meta name="author" content="Themefisher.com" />

        <title>@yield('title', 'AZOGUE-SHOP')</title>

        <!-- Mobile Specific Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Favicon -->
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="images/favicon.png"
        />

        <!-- Themefisher Icon font -->
        <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}" />
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />

        <!-- Revolution Slider -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css') }}"
        />

        <!-- REVOLUTION STYLE SHEETS -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('plugins/revolution-slider/revolution/css/settings.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('plugins/revolution-slider/revolution/css/layers.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('plugins/revolution-slider/revolution/css/navigation.css') }}"
        />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>

    <body id="body">
        <!-- Start Top Header Bar -->
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="contact-number">
                            <i class="tf-ion-ios-telephone"></i>
                            <span>666-666-666</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <!-- Site Logo -->
                        <div class="logo text-center">
                            <a href="{{ url('welcome') }}">
                                <!-- replace logo here -->
                                <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                        <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                            <text id="AZOGUE">
                                                <tspan x="108.94" y="325">AZOGUE</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <ul class="top-menu text-right list-inline">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Finalizar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul><!-- / .nav .navbar-nav .navbar-right -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Header Bar -->

        @yield('content')

        <!--
        Essential Scripts
        =====================================-->

        <!-- Main jQuery -->
        <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.1 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Bootstrap Touchpin -->
        <script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
        <!-- Instagram Feed Js -->
        <script src="{{ asset('plugins/instafeed-js/instafeed.min.js') }}"></script>
        <!-- Video Lightbox Plugin -->
        <script src="{{ asset('plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
        <!-- Count Down Js -->
        <script src="{{ asset('plugins/SyoTimer/build/jquery.syotimer.min.js') }}"></script>

        <!-- Revolution Slider -->
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"
        ></script>

        <!-- Revolution Slider -->
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/revolution-slider/assets/warning.js') }}"
        ></script>

        <!-- Google Mapl -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
        <script
            type="text/javascript"
            src="{{ asset('plugins/google-map/gmap.js') }}"
        ></script>

        <!-- Main Js File -->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>



