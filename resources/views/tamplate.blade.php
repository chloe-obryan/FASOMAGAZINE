<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Magazine+') }}</title>
    
    <!-- Styles -->
   
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="{{asset('vendors/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/custom-icon.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/classy-nav.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/nice-select.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    

                   <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
    
                                <!-- Login Search Area -->
                                <div class="login-search-area d-flex align-items-center">
                                    <!-- Login -->
                                    <div class="login d-flex">
                                        @if (Auth::guest())
                                        <a href="{{ route('login') }}">Se connecter</a>
                                        <a href="{{ route('register') }}">S'abonner</a>
                                        @else
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                           Deconnection
                                                        </a>
                
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="search" name="search" class="form-control" placeholder="Search">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Navbar Area -->
            
        </header>
        @include('menu')
        
        @yield('contenu')
    </div>

    <footer class="footer-area">

            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row">
    
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="footer-widget-area mt-80">
                               
                                <ul class="list">
                                    <li><a href="mailto:contact@notresite.com">contact@notresite.com</a></li>
                                    <li><a href="tel:+25000000">+226 25 00 00 00</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="footer-widget-area mt-80">
                                <!-- Title -->
                                <h4 class="widget-title">Politique</h4>
                                <!-- List -->
                                <ul class="list">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Technologie</a></li>
                                    <li><a href="#">Bourse</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-sm-4 col-lg-2">
                            <div class="footer-widget-area mt-80">
                                <!-- Title -->
                                <h4 class="widget-title">Sport</h4>
                                <!-- List -->
                                <ul class="list">
                                    <li><a href="#">Football</a></li>
                                    <li><a href="#">Golf</a></li>
                                    <li><a href="#">Tennis</a></li>
                                   
                                   
                                </ul>
                            </div>
                        </div>

    
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-sm-4 col-lg-2">
                          
                                <div class="newsletter-widget">
                                    <h4>Newsletter</h4>
                                    <form action="{{ url('newsletters') }}" method="post">
                                        @csrf
                                        <input type="text" name="nom" placeholder="Nom">
                                        <input type="email" name="email" placeholder="Email">
                                        <button type="submit" class="btn w-100">Souscrire</button>
                                    </form>
                                </div>
                            
                        </div>


                    </div>
                </div>
            </div>
    
            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            
    Copyright &copy;<script>document.write(new Date().getFullYear());</script>Tous droits réservé <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Scripts -->
   
     <!-- jQuery-2.2.4 js -->
     <script src="{{asset('vendors/js/jquery/jquery-2.2.4.min.js')}}"></script>
     <!-- Popper js -->
     <script src="{{asset('vendors/js/bootstrap/popper.min.js')}}"></script>
     <!-- Bootstrap js -->
     <script src="{{asset('vendors/js/bootstrap/bootstrap.min.js')}}"></script>
     <!-- All Plugins js -->
     <script src="{{asset('vendors/js/plugins/plugins.js')}}"></script>
     <!-- Active js -->
     <script src="{{ asset('vendors/js/active.js') }}"></script>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


