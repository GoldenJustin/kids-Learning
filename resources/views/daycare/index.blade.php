<!DOCTYPE html>
<html lang="en">

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

        

    </head>

    <body>

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
                        <a href="" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-secondary"></i></a>
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