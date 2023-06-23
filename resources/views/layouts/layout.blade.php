<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet"> --}}
</head>
<script>
    function showdiv(){
        document.getElementById('divT').style.visibility="visible";
    }
    setTimeout("showdiv()",3000);
    function hidediv(){
        document.getElementById('divT').style.visibility="hidden";
    }
    setTimeout("hidediv()",4000);
</script>

<body>

    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 " >
                    @auth
                    <a href="/apply/applier" class="nav-item nav-link    @yield('applieracitve')">Applicants</a>
                    <a href="/postjob/manage" class="nav-item nav-link  @yield('manageactive')">Manage Jobs</a>
                    <a href="/postjob/create" class="nav-item nav-link @yield('postactive')" >Post Job<i
                        class="fa fa-arrow-right ms-3"></i></a>

                    @else


                    <a href="/" class="nav-item nav-link  @yield('homeactive')">Home</a>
                    <a href="/joblist" class="nav-item nav-link @yield('listactive')">Jobs</a>
                    <a href="/about" class="nav-item nav-link @yield('aboutactive') ">About</a>
                    <a href="/contact" class="nav-item nav-link @yield('contactactive') ">Contact</a>
                    @endauth
                </div>
                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-primary rounded-0 py-4 px-lg-5  d-lg-block " type="submit">LogOut</button>

                    </form>
                    @else
                    <a href="/postjob/create" class="btn btn-primary rounded-0 py-4 px-lg-5  d-lg-block">Post Job<i
                        class="fa fa-arrow-right ms-3"></i></a>
                @endauth

            </div>

        </nav>
        <!-- Navbar End -->

        @yield('content')




        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-2" style="max-width: 400px;">
                            @auth

                            @else
                            <button type="button"
                            class="btn btn-primary py-2 position-absolute mt-2 me-2"><a class="text-white " href="/login" >Login</a></button>
                            <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><a class="text-white" href="/register">Register</a></button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">JobEntry</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
 <!-- Footer Start -->




    </div>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js1/bootstrap.bundle.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
