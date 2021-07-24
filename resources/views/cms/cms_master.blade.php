<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Optimized | Admin Panel</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/template/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/template/vendor/linear-icons/css/linear-icons.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800"
        rel="stylesheet" type="text/css">

    <!-- SummerNote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms_style.css') }}">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script>
        var BASE_URL = "{{ url('') }}/";

    </script>


</head>

<body>

    <nav class="navbar navbar-dark fixed-top bg-dark-3 flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 p-3" href="{{ url('cms/dashboard') }}">Optimized Admin Panel</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ url('user/logout') }}">
                    <i class="fas fa-sign-out-alt text-white"></i>
                    Log Out
                </a>
            </li>
        </ul>
    </nav>



    <div class="container-fluid">
        <div class="row sidebar-row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">

                <div class="sidebar-sticky bg-dark-3">
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item  mb-2">
                            <a class="nav-link active text-white" href="{{ url('cms/dashboard') }}">
                                <i class="fas fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link active text-white" href="{{ url('cms/menus') }}">
                                <i class="far fa-list-alt"></i>
                                Menus
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link active text-white" href="{{ url('cms/contents') }}">
                                <i class="fas fa-book"></i>
                                Content
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link active text-white" href="{{ url('cms/categories') }}">
                                <i class="fas fa-layer-group"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link active text-white" href="{{ url('cms/products') }}">
                                <i class="fab fa-product-hunt"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ url('cms/orders') }}">
                                <i class="fas fa-shopping-basket"></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link active text-white" href="{{ url('') }}">
                                <hr class="bg-primary">
                                <i class="lnr lnr-exit text-primary"></i>
                                Back to Site
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('cms_content')
            </main>
        </div>
    </div>

</html>









<!-- Bootstrap JS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- SummerNote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

<!-- My Scripts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/cms_script.js') }}"></script>
@if(Session::has('sm'))
<script>
    toastr.options.positionClass = 'toast-bottom-center'
    toastr.success('', "{{ Session::get('sm') }}")

</script>
@endif
