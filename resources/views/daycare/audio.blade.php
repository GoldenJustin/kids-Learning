@extends('daycare.index')
@section('content')
    <!-- Blog Start-->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Audio lessons</h4>
                <h1 class="mb-5 display-3">Learn through listening</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img id="play-pause-image-1" src="{{ asset('assets/img/play.png') }}"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt="Image"
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">ABC</h6>
                                <p class="text-muted">Kids song for Learning</p>
                            </div>
                        </div>
                        <audio id="audio-1" src="{{ asset('assets/audio/ABC.mp3') }}"></audio>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img id="play-pause-image-2" src="{{ asset('assets/img/play.png') }}"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt="Image"
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">1 - 10</h6>
                                <p class="text-muted">Counting One to ten</p>
                            </div>
                        </div>
                        <audio id="audio-2" src="{{ asset('assets/audio/onetoten.mp3') }}"></audio>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img id="play-pause-image-3" src="{{ asset('assets/img/play.png') }}"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt="Image"
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">SPELLING</h6>
                                <p class="text-muted">Spell different Animals</p>
                            </div>
                        </div>
                        <audio id="audio-3" src="{{ asset('assets/audio/spelling.mp3') }}"></audio>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <!-- Blog End-->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
    const pairs = [
        { imageId: 'play-pause-image-1', audioId: 'audio-1' },
        { imageId: 'play-pause-image-2', audioId: 'audio-2' },
        { imageId: 'play-pause-image-3', audioId: 'audio-3' },
    ];

    pairs.forEach(pair => {
        const playPauseImage = document.getElementById(pair.imageId);
        const audio = document.getElementById(pair.audioId);

        playPauseImage.addEventListener('click', () => {
            if (audio.paused) {
                // Pause all other audios
                pairs.forEach(p => {
                    if (p.audioId !== pair.audioId) {
                        document.getElementById(p.audioId).pause();
                        document.getElementById(p.imageId).src = "{{ asset('assets/img/play.png') }}";
                    }
                });
                audio.play();
                playPauseImage.src = "{{ asset('assets/img/pause.png') }}";
            } else {
                audio.pause();
                playPauseImage.src = "{{ asset('assets/img/play.png') }}";
            }
        });

        audio.addEventListener('ended', () => {
            playPauseImage.src = "{{ asset('assets/img/play.png') }}";
        });
    });
});

    </script>
@endsection
