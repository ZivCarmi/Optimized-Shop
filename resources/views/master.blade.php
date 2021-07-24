<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script>
        var BASE_URL = "{{ url('') }}/";

    </script>
    <title>{{ $page_title ?? '' }}</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="EZY - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/linear-icons/css/linear-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('lib/template/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/css/theme-elements.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('lib/template/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('lib/template/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('lib/template/vendor/modernizr/modernizr.min.js') }}"></script>

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="body">

        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}"
            style="min-height: 141px;">
            <div class="header-body" style="top: 0px; position: fixed;">
                <div class="header-top header-top-dark" style="height: 41px; overflow: visible;">
                    <div class="header-top-container container">
                        <div class="header-row">
                            <div class="header-column justify-content-start">
                                @if(!Session::has('user_id'))
                                <span class="align-items-center">
                                    <strong>Hey!</strong>&nbsp; New to Optimized?&nbsp;&nbsp;<a
                                        class="text-decoration-underline" href="{{ url('user/signup') }}">SIGN UP</a>
                                </span>
                                <div class="header-column justify-content-end">
                                    <span class=" align-items-center">
                                        ALREADY A MEMBER?&nbsp;&nbsp;
                                        <a class="text-decoration-underline" href="{{ url('user/login') }}">SIGN IN</a>
                                    </span>
                                </div>
                                @else
                                <span class="d-none d-sm-flex align-items-center">
                                    Welcome,&nbsp; <a class="text-decoration-underline"
                                        href="{{ url('user/profile') }}">{{ Session::get('user_name') }}</a>
                                    !</span>
                                <div class="header-column justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item d-xl-none">
                                            <a href="{{url('user/profile')}}" class="nav-link">MY ACCOUNT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('') }}" class="nav-link">DAILY DEAL</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('') }}" class="nav-link">MY WISHLIST</a>
                                        </li>
                                        <li class="nav-item d-none d-sm-block">
                                            <a href="{{ url('') }}" class="nav-link">BLOG</a>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-container container p-0" style="height: 100px; min-height: 0px;">
                    <div class="header-row">
                        <div class="header-column justify-content-start">
                            <div class="header-logo">
                                <a href="{{ url('') }}">
                                    <img class="mt-4" width="220px" src="{{ asset('images/optimizedlogo.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-nav justify-content-start">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse nav-padding">
                                        <ul class="nav flex-column flex-lg-row" id="mainNav">
                                            <li>
                                                <a href="{{ url('') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('about') }}">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('contact') }}">
                                                    Contact
                                                </a>
                                            </li>

                                            @if(!empty($menu))
                                            @foreach($menu as $menu_item)
                                            <li>
                                                <a href="{{ url($menu_item['url'])  }}">
                                                    {{ $menu_item['link'] }}
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{ url('shop') }}">
                                                    Shop
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @if($all_categories ?? '')
                                                    @foreach($all_categories as $one_category)
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('shop/' . $one_category['curl']) }}">
                                                            {{ $one_category['ctitle'] }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </li>

                                            @if(!Session::has('user_id'))
                                            <li
                                                class="list-unstyled dropdown dropdown-mega dropdown-mega-signin signin logged ml-lg-3 mr-1">
                                                <a class="dropdown-item pl-lg-4" href="{{ url('user/login') }}">Sign
                                                    In</a>
                                            </li>
                                            @else
                                            <li class="d-none d-xl-flex list-unstyled dropdown dropdown-mega dropdown-mega-signin signin logged ml-lg-3 mr-1"
                                                id="headerAccount">
                                                <a class="dropdown-item pl-lg-4" href="{{ url('user/profile') }}">My
                                                    Account</a>
                                                <ul class="dropdown-menu profile-ul shadow-lg">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row align-items-center mb-4">
                                                                        <div class="col">
                                                                            <span
                                                                                class="top-sub-title text-color-light-3">SIGNED
                                                                                IN AS</span>
                                                                            @if(Session::has('is_admin'))
                                                                            <h2 class="font-weight-bold text-4 mb-0">
                                                                                {{ Session::get('user_name') }} (Admin)
                                                                            </h2>
                                                                            @else
                                                                            <h2 class="font-weight-bold text-4 mb-0">
                                                                                {{ Session::get('user_name') }}</h2>
                                                                            @endif
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <img src="{{ asset('lib/template/img/logged-user.jpg') }}"
                                                                                class="img-fluid rounded-circle" alt=""
                                                                                width="48">
                                                                        </div>
                                                                    </div>

                                                                    <ul class="nav flex-column">
                                                                        @if(Session::has('is_admin'))
                                                                        <li class="nav-item">
                                                                            <a href="{{ url('cms/dashboard') }}"
                                                                                class="nav-link">Admin Control Panel</a>
                                                                        </li>
                                                                        @endif
                                                                        <li class="nav-item">
                                                                            <a href="{{ url('user/profile') }}"
                                                                                class="nav-link">Your
                                                                                Profile</a>
                                                                        </li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li class="nav-item">
                                                                            <a href="{{ url('user/logout') }}"
                                                                                class="nav-link">Log
                                                                                Out</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>

                                <div class="shopping-cart-li ml-auto">
                                    <div class="my-auto mini-cart order-4">
                                        <a href="{{ url('shop/cart') }}">
                                            <span class="font-weight-bold font-primary">Cart /
                                                <span class="cart-total">${{ Cart::getTotal() }}</span>
                                            </span>
                                        </a>
                                        <div class="mini-cart-icon">
                                            <img src="{{ asset('lib/template/img/icons/cart-bag.svg') }}"
                                                class="img-fluid" alt="">
                                            @if( !Cart::isEmpty() )
                                            <span
                                                class="badge badge-primary rounded-circle">{{ Cart::getTotalQuantity()}}</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <button class="header-btn-collapse-nav ml-3" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                    <span class="hamburguer">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="close">
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <main>
        @yield('main_content')
    </main>

    <footer id="footer" class="footer-hover-links-light mt-0" data-plugin-image-background
        data-plugin-options="{'imageUrl': {{ asset('lib/template/img/footer/background-1.png') }}, 'bgPosition': 'center 100%'}">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <a href="{{ url('') }}" class="logo">
                        <img class="mb-3 logo" src="{{ asset('images/optimizedlogo.png') }}" alt="Optimized logo">
                    </a>
                    <p>
                        Optimized Co. specialized in all products that touch with technology.<br>
                        We provide the best service in order to satisfy and give the best products that fits the
                        customer.
                    </p>
                    <ul class="list list-icon list-unstyled">
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span
                                class="text-color-light">Address:</span> Bilu 21, Ra'anana</li>
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span
                                class="text-color-light">Phone:</span> <a href="tel:+525599778">(978)
                                52-5599778</a>
                        </li>
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span
                                class="text-color-light">Email:</span> <a href="mailto:carmi.ziv@gmail.com"
                                class="link-underline-light">carmi.ziv@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <h2 class="text-3 mb-3">SITE MAP</h2>
                    <ul class="list list-icon list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-angle-right mr-2 ml-1"></i>
                            <a href="{{ url('about') }}">About
                                Us
                            </a>
                        </li>
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a
                                href="{{ url('contact') }}">Contact</a></li>
                        @if(!empty($menu))
                        @foreach($menu as $menu_item)
                        <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a
                                href="{{ url($menu_item['url']) }}">{{ $menu_item['link'] }}</a></li>
                        @endforeach
                        @endif

                    </ul>
                </div>
                <div class="col-lg-3">
                    @if(!Session::has('user_id'))
                    <div class="mb-4">
                        <h2 class="text-3 mb-3">Sign In</h2>
                        <h2 class="text-3 mb-3">
                            <p class="mb-1">
                                <a href="{{ url('user/login') }}" class="d-block">Sign
                                    in to Your Account
                                </a>
                            </p>
                        </h2>
                    </div>
                    <div>
                        <h2 class="text-3 mb-3">Not a Member?</h2>
                        <h2 class="text-3">
                            <p class="mb-1">
                                <a href="{{ url('user/signup') }}" class="d-block">
                                    Register Now!
                                </a>
                            </p>
                        </h2>
                    </div>
                    @else
                    <div class="mb-4">
                        <h2 class="text-3 mb-2">MY ACCOUNT</h2>
                        <p class="lead font-italic">Welcome, {{ Session::get('user_name') }}</p>
                        <ul class="list list-style-1">
                            @if(Session::has('is_admin'))
                            <li>
                                <p class="mb-1">
                                    <a href="{{ url('cms/dashboard') }}" class="d-block">
                                        Admin Control Panel
                                    </a>
                                </p>
                            </li>
                            @endif
                            <li>
                                <p class="mb-1">
                                    <a href="{{ url('user/profile') }}" class="d-block">
                                        My Profile
                                    </a>
                                </p>
                            </li>
                            <hr class="bg-white my-3">
                            <li>
                                <p class="mb-1">
                                    <a href="{{ url('user/logout') }}" class="d-block">
                                        Log Out
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row text-center text-md-left align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                    title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
                                    title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <p class="text-md-right pb-0 mb-0">Optimized &copy; {{ date('Y') }} All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- Vendor -->
    <script src="{{ asset('lib/template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('lib/template/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/common/common.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/jquery.validation/jquery.validation.min.js') }}">
    </script>
    <script src="{{ asset('lib/template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}">
    </script>
    <script src="{{ asset('lib/template/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/magnific-popup/jquery.magnific-popup.min.js') }}">
    </script>
    <script src="{{ asset('lib/template/vendor/vide/vide.min.js') }}"></script>
    <script src="{{ asset('lib/template/vendor/vivus/vivus.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('lib/template/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('lib/template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script src="{{ asset('lib/template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
    </script>

    <!-- Theme Custom -->
    <script src="{{ asset('lib/template/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('lib/template/js/theme.init.js') }}"></script>

    <!-- My Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @if(Session::has('sm'))
    <script>
        toastr.options.positionClass = 'toast-bottom-center'
        toastr.success('', "{{ Session::get('sm') }}")

    </script>
    @endif

</body>

</html>
