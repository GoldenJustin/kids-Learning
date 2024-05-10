@extends('daycare.index')
@section('content')
    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Learn beyond Scope</h4>
                <h1 class="mb-5 display-3">Here you can learn different Subjects</h1>
            </div>
            <div class="row g-5">
                {{-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Study & Game</a>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                    officiis animi Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-sort-alpha-down fa-6x text-primary"></i></div>
                                <a href="#" class="h4">A to Z Programs</a>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                    officiis animi Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</p>
                                <a href="{{ URL::TO ('subtract')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                                <a href="#" class="h4">subtraction</a>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                    officiis animi Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</p>
                                <a href="{{ URL::TO ('subtract')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-user-nurse fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Addition</a>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                    officiis animi Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</p>
                                <a href="{{ URL::TO ('addition')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
