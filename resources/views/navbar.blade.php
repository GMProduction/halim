<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Bigger | Aplikasi pemesanan kardus</title>
    <!-- Favicon -->
{{--    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">--}}
<!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/DataTables/datatables.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/argon.css?v=1.2.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets/css/footer.css')}}" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body style="background-color: #eeeeee">
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 3px solid #ff390d">
        <a class="navbar-brand text-xl" href="#" style="color: #ff390d; font-weight: bold">BIGGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-sm ml-3 active" href="/">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-sm ml-3" href="/kontak">Kontak Kami</a>
                <a class="nav-item nav-link text-sm ml-3" href="/carapesan">Cara Pesan</a>

                @auth()
                    <a class="nav-item nav-link text-sm text-warning ml-0" style="font-weight: bold" href="/cart">Keranjang</a>
                    <a class="nav-item nav-link text-sm ml-7 btn btn-outline-warning" style="font-weight: bold" href="/user">Dashboard</a>
                    <a class="nav-item nav-link text-sm text-warning ml-0" href="/logout">Logout</a>
                @endauth
                @guest()
                    <a class="nav-item nav-link text-sm ml-5" style="font-weight: bold" href="/login">Login</a>
                @endguest
            </div>
        </div>
    </nav>


    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Pesan Kardus di bigger yuk, bisa custom.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/kontak">Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Halim</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/bigger.adv.9"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/bigger.adv/?hl=af"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
<script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script>
    feather.replace()
</script>
@yield('script')


</body>

</html>
