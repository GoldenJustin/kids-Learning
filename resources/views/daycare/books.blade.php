@extends('daycare.index')
@section('content')
<!-- About Start -->
<div class="container-fluid py-5 about bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center mt-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">Alphabet</h5>
                        <p class="text-dark mb-4">Discover the world of ABCs with vibrant pictures and exciting illustrations, making learning fun!</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-src="assets/pdf/Alphabet.pdf" data-bs-target="#pdfModal">
                            Read Book
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">Animal Sound</h5>
                        <p class="text-dark mb-4">"Explore animal sounds with colorful illustrations and interactive here you will learn with their good pictures!"</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-src="assets/pdf/Animal-Sounds.pdf" data-bs-target="#pdfModal">
                            Read Book
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center mt-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">People at Work</h5>
                        <p class="text-dark mb-4">Hey, Kids! Let's explore together and have fun at work with this interactive activity, know Daddy's work!</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-src="assets/pdf/People-working.pdf" data-bs-target="#pdfModal">
                            Read Book
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">The Lion the Mouse</h5>
                        <p class="text-dark mb-4">Join the adventure of Lion and Mouse. Let's read and discover, with the art of good picture to learn together with mouse storries</p>
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-src="assets/pdf/Lion-Mouse.pdf" data-bs-target="#pdfModal">
                            Read Book
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal PDF -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Read Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- PDF aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="pdf" allowfullscreen allowscriptaccess="always"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

<!-- JavaScript to handle modals -->
<script>
    // When the PDF modal is shown, populate the iframe with the correct PDF
    document.getElementById('pdfModal').addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var pdfSrc = button.getAttribute('data-src');
        var pdfIframe = document.getElementById('pdf');
        pdfIframe.src = pdfSrc;
    });

    // Clear the PDF src when the modal is hidden
    document.getElementById('pdfModal').addEventListener('hidden.bs.modal', function () {
        var pdfIframe = document.getElementById('pdf');
        pdfIframe.src = '';
    });
</script>

@endsection