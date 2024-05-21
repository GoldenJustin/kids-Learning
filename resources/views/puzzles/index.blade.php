@extends('daycare.index')
@section('quiz')
    <link rel="stylesheet" href="{{ asset('assets/puzzles/css/styles.css') }}">
@endsection

@section('content')
    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Interractive Puzzles</h4>
                {{-- <h1 class="mb-5 display-3">Thanks To Get Started With Our Platform</h1> --}}
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                <a  class="h4">Lion Puzzle</a>
                                <p class="my-3">Arrange a Lion</p>
                                <a href="{{URL::TO('lion')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Open Puzzle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                <a  class="h4">Rejoin Letters</a>
                                    <p class="my-3">Shaped cartoon letters
                                </p>
                                <a href="{{URL::TO('letter')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Open Puzzle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                <a  class="h4">Monkey In Forest</a>
                                <p class="my-3">Adventure on monkey</p>
                                <a href="{{URL::TO('monkey')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Open Puzzle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                <a  class="h4">Elephant</a>
                                <p class="my-3">King of Forest</p>
                                <a href="{{URL::TO('elephant')}}" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Open Puzzle</a>
                            </div>
                        </div>
                    </div>
                </div>
                
               
                
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
