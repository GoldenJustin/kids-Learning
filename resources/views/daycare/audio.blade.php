@extends('daycare.index')
@section('content')
    <!-- Blog Start-->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Audio lessons</h4>
                <h1 class="mb-5 display-3">Learn through listening</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        {{-- <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="{{ asset('assets/img/blog-1.jpg')}}" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                        </div> --}}
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ asset('assets/img/play.png')}}" class="img-fluid rounded-circle p-2 rounded-top" alt="Image" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">How to pay attention to your child?</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item rounded-bottom">
                        
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ asset('assets/img/play.png')}}" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">Play outdoor sports with your child</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item rounded-bottom">
                      
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ asset('assets/img/play.png')}}" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">How to make time for your kids?</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End-->
@endsection