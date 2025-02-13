<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    <div class="ht-left">
                        <div class="mail-service">
                            <i class=" fa fa-envelope"></i>
                            hello.colorlib@gmail.com
                        </div>
                        <div class="phone-service">
                            <i class=" fa fa-phone"></i>
                            +65 11.188.888
                        </div>
                    </div>
                    <div class="ht-right">
                        @guest
                            <a href="{{ route('login') }}" class="login-panel">
                                <i class="fa fa-user"></i>
                                {{ __('Login') }}
                            </a>
                        @else
                        <div class="login-panel dropdown" style="cursor: pointer">
                            <div class="">
                                <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    {{ Auth::user()->Fname }}
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('profile') }}" >Dashboard </a>
                                    {{--  --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                        @endguest
                        <div class="lan-selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                <option value='yt' data-image="{{ asset('img/flag-1.jpg')}}" data-imagecss="flag yt"
                                    data-title="English">English</option>
                                <option value='yu' data-image="{{ asset('img/flag-2.jpg')}}" data-imagecss="flag yu"
                                    data-title="Bangladesh">German </option>
                            </select>
                        </div>
                        <div class="top-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="inner-header">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="./index.html">
                                    <img src="{{ asset('img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group">
                                    <input type="text" placeholder="What do you need?">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 text-right col-md-3">
                            <ul class="nav-right">
                                <li class="heart-icon">
                                    <a href="#">
                                        <i class="icon_heart_alt"></i>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="cart-icon">
                                    <a href="#">
                                        <i class="icon_bag_alt"></i>
                                        <span>3</span>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="si-pic"><img src="{{ asset('img/select-product-1.jpg')}}" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="si-pic"><img src="{{ asset('img/select-product-2.jpg')}}" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>$120.00</h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                            <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-price">$150.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <div class="container">
                    <div class="nav-depart">
                        <div class="depart-btn">
                            <i class="ti-menu"></i>
                            <span>All departments</span>
                            <ul class="depart-hover">
                                <li class="active"><a href="#">Women’s Clothing</a></li>
                                <li><a href="#">Men’s Clothing</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">Kid's Clothing</a></li>
                                <li><a href="#">Brand Fashion</a></li>
                                <li><a href="#">Accessories/Shoes</a></li>
                                <li><a href="#">Luxury Brands</a></li>
                                <li><a href="#">Brand Outdoor Apparel</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Collection</a>
                                <ul class="dropdown">
                                    <li><a href="#">Men's</a></li>
                                    <li><a href="#">Women's</a></li>
                                    <li><a href="#">Kid's</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('posts')}}">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./check-out.html">Checkout</a></li>
                                    <li><a href="./faq.html">Faq</a></li>
                                    <li><a href="./register.html">Register</a></li>
                                    <li><a href="./login.html">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </header>
        <!-- Header End -->
            <!-- Breadcrumb Section Begin -->
            <div class="breacrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text">
                                <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                                @yield('more-links')
                                <span>@yield('current-page')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Section Begin -->
        <div id="app">
            @yield('content')
        </div>

        <!-- Partner Logo Section Begin -->
        <div class="partner-logo">
            <div class="container">
                <div class="logo-carousel owl-carousel">
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="{{asset('img/logo-carousel/logo-1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="{{asset('img/logo-carousel/logo-2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="{{asset('img/logo-carousel/logo-3.png')}}" alt="">
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="{{asset('img/logo-carousel/logo-4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="{{asset('img/logo-carousel/logo-5.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Logo Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('img/footer-logo.png')}}" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: hello.colorlib@gmail.com</li>
                            </ul>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer-widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Serivius</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Enter Your Mail">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                Copyright &copy;
                                {{date('Y')}}
                                All rights reserved | This template is made with 
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </div>
                            <div class="payment-pic">
                                <img src="{{asset('img/payment-method.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
