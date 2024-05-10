<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BabyCare - Daycare Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset ('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        @yield('quiz')
    

        <!-- Template Stylesheet -->
        <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet">

        



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
    </head>
    <body class="antialiased">
           

          

                <!-- Spinner Start -->
                <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
                    <div class="spinner-grow text-primary" role="status"></div>
                </div>
                <!-- Spinner End -->
        
        
                <!-- Navbar start -->
                <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
                    <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
                        <div class="d-flex justify-content-between">
                            <div class="top-info ps-2">
                                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, New York</a></small>
                                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
                            </div>
                            <div class="top-link pe-2">
                                <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-twitter text-secondary"></i></a>
                                <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                                <button href="" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    
                                    @if (Route::has('login'))
                                    <div>
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    
                                           
                                        @endauth
                                    </div>
                                @endif
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container px-0">
                        <nav class="navbar navbar-light navbar-expand-xl py-3">
                            <a href="{{ url ('/')}}" class="navbar-brand"><h1 class="text-primary display-6">Baby<span class="text-secondary">Learn</span></h1></a>
                            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars text-primary"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-auto">
                                    <a href="{{ url ('/')}}" class="nav-item nav-link active">Home</a>
                                    <a href="{{ url ('video')}}" class="nav-item nav-link">Video</a>
                                    <a href="{{ url ('audio')}}" class="nav-item nav-link">Audio</a>
                                    <a href="{{ url ('puzzle')}}" class="nav-item nav-link">Puzzles</a>

                                    @if (Route::has('login'))
                                    
                                        @auth
                                        <a href="{{ url ('learn')}}" class="nav-item nav-link">Lesson & Quiz</a>
                                        {{-- <a href="{{ url ('contact')}}" class="nav-item nav-link"></a>                                        @else --}}
                    
                                           
                                        @endauth
                                   
                                @endif
                                <a href="{{ url ('puzzle')}}" class="nav-item nav-link">History</a>




                                   
                                </div>
                                <div class="d-flex me-4">
                                    <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                                        <a href="" class="position-relative wow tada" data-wow-delay=".9s" >
                                            <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column pe-3 border-end border-primary">
                                        <span class="text-primary">Have any questions?</span>
                                        <a href="#"><span class="text-secondary">Free: + 0123 456 7890</span></a>
                                    </div>
                                </div>
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-white"></i></button>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Navbar End -->
        
        
                 
        
        @yield('content')
        
        
                
        
        
                <!-- Copyright Start -->
                <div class="container-fluid copyright bg-dark py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BabyLearn</a>, All right reserved.</span>
                            </div>
                            <div class="col-md-6 my-auto text-center text-md-end text-white">
                               Designed By <a class="border-bottom" href="https://justinmsengi.com">K . O . D . A</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright End -->
        
        
                <!-- Back to Top -->
                <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
                
            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset ('assets/lib/wow/wow.min.js')}}"></script>
            <script src="{{ asset ('assets/lib/easing/easing.min.js')}}"></script>
            <script src="{{ asset ('assets/lib/waypoints/waypoints.min.js')}}"></script>
            <script src="{{ asset ('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
            <script src="{{ asset ('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        
            <!-- Template Javascript -->
            <script src="{{ asset ('assets/js/main.js')}}"></script>
            @yield('quizpart')
            </body>
</html>
