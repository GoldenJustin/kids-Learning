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
    

        <!-- Template Stylesheet -->
        <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet">

        



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> --}}
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
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
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
                                    <a href="{{ url ('contact')}}" class="nav-item nav-link">Quiz</a>
                                    {{-- <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                            <a href="blog.html" class="dropdown-item">Our Blog</a>
                                            <a href="team.html" class="dropdown-item">Our Team</a>
                                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                            <a href="404.html" class="dropdown-item">404 Page</a>
                                        </div>
                                    </div> --}}
                                    <a href="{{ url ('contact-us')}}" class="nav-item nav-link">Contact</a>
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
        
        
                <!-- Team Start-->
                {{-- <div class="container-fluid team py-5">
                    <div class="container py-5">
                        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Team</h4>
                            <h1 class="mb-5 display-3">Meet With Our Expert Teacher</h1>
                        </div>
                        <div class="row g-5 justify-content-center">
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                                <div class="team-item border border-primary img-border-radius overflow-hidden">
                                    <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-content text-center py-3">
                                        <h4 class="text-primary">Linda Carlson</h4>
                                        <p class="text-muted mb-2">English Teacher</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                                <div class="team-item border border-primary img-border-radius overflow-hidden">
                                    <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-content text-center py-3">
                                        <h4 class="text-primary">Linda Carlson</h4>
                                        <p class="text-muted mb-2">English Teacher</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="team-item border border-primary img-border-radius overflow-hidden">
                                    <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-content text-center py-3">
                                        <h4 class="text-primary">Linda Carlson</h4>
                                        <p class="text-muted mb-2">English Teacher</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                                <div class="team-item border border-primary img-border-radius overflow-hidden">
                                    <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-content text-center py-3">
                                        <h4 class="text-primary">Linda Carlson</h4>
                                        <p class="text-muted mb-2">English Teacher</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Team End-->
        
        
                <!-- Testimonial Start -->
                {{-- <div class="container-fluid testimonial py-5">
                    <div class="container py-5">
                        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Testimonials</h4>
                            <h1 class="mb-5 display-3">Parents Say About Us</h1>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                            <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                                <div class="p-4 position-relative">
                                    <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                                    <div class="d-flex align-items-center">
                                        <div class="border border-primary bg-white rounded-circle">
                                            <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                        </div>
                                        <div class="ms-4">
                                            <h4 class="text-dark">Client Name</h4>
                                            <p class="m-0 pb-3">Profession</p>
                                            <div class="d-flex pe-5">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-primary mt-4 pt-3">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                                <div class="p-4 position-relative">
                                    <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                                    <div class="d-flex align-items-center">
                                        <div class="border border-primary bg-white rounded-circle">
                                            <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                        </div>
                                        <div class="ms-4">
                                            <h4 class="text-dark">Client Name</h4>
                                            <p class="m-0 pb-3">Profession</p>
                                            <div class="d-flex pe-5">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-primary mt-4 pt-3">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                                <div class="p-4 position-relative">
                                    <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                                    <div class="d-flex align-items-center">
                                        <div class="border border-primary bg-white rounded-circle">
                                            <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                        </div>
                                        <div class="ms-4">
                                            <h4 class="text-dark">Client Name</h4>
                                            <p class="m-0 pb-3">Profession</p>
                                            <div class="d-flex pe-5">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-primary mt-4 pt-3">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Testimonial End -->
        
        
                <!-- Footer Start -->
                {{-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="footer-item">
                                    <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Baby</span><span class="text-secondary">Care</span></h2>
                                    <p class="mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                                    <div class="border border-primary p-3 rounded bg-light">
                                        <h5 class="mb-3">Newsletter</h5>
                                        <div class="position-relative mx-auto border border-primary rounded" style="max-width: 400px;">
                                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white">SignUp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="footer-item">
                                    <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary" 
                                    style="border-radius: 50% 20% / 10% 40%;">
                                        <p>Monday: 8am to 5pm</p>
                                        <p>Tuesday: 8am to 5pm</p>
                                        <p>Wednes: 8am to 5pm</p>
                                        <p>Thursday: 8am to 5pm</p>
                                        <p>Friday: 8am to 5pm</p>
                                        <p>Saturday: 8am to 5pm</p>
                                        <p class="mb-0">Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="footer-item">
                                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
                                    <div class="d-flex flex-column align-items-start">
                                        <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> 104 North tower New York, USA</a>
                                        <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</a>
                                        <a href="" class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> exampleemail@gmail.com</a>
                                        <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</a>
                                        <div class="footer-icon d-flex">
                                            <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href=""><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square rounded-circle text-white"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="footer-item">
                                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">OUR GALLARY</h4>
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-1.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                       <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-2.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                        <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-3.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                        <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-4.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                        <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-5.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                        <div class="col-4">
                                            <div class="footer-galary-img rounded-circle border border-primary">
                                                <img src="img/galary-6.jpg" class="img-fluid rounded-circle p-2" alt="">
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Footer End -->
        
        
                <!-- Copyright Start -->
                <div class="container-fluid copyright bg-dark py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BabyLearn</a>, All right reserved.</span>
                            </div>
                            <div class="col-md-6 my-auto text-center text-md-end text-white">
                                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
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
            </body>
</html>
