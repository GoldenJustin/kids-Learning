@extends('dashboard/layouts.main')
@section('content')


    <!-- Main container start -->
    <div class="main-container">


        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-3 col-sm-4 col-6">
                <div class="info-tiles">
                    <div class="info-icon">
                        <i class="icon-account_circle"></i>
                    </div>
                    <div class="stats-detail">
                        <h3>{{ $totalStudent }}</h3>
                        <p>students</p>
                    </div>
                </div>
            </div>
            @auth
            @if (auth()->user()->hasRole('super-admin'))
                <div class="col-xl-3 col-sm-4 col-6">
                    <div class="info-tiles">
                        <div class="info-icon">
                            <i class="icon-watch_later"></i>
                        </div>
                        <div class="stats-detail">
                            <h3>{{ $totalquiz }}</h3>
                            <p>Attempts</p>
                        </div>
                    </div>
                </div>
                    
                @endif
            @endauth

            {{-- <div class="col-xl-3 col-sm-4 col-6">
                <div class="info-tiles">
                    <div class="info-icon">
                        <i class="icon-visibility"></i>
                    </div>
                    <div class="stats-detail">
                        <h3>0</h3>
                        <p>Quizes</p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-3 col-sm-4 col-6">
                <div class="info-tiles">
                    <div class="info-icon">
                        <i class="icon-shopping_basket"></i>
                    </div>
                    <div class="stats-detail">
                        <h3>0</h3>
                        <p>Sales</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-3 col-sm-4 col-6">
                <div class="info-tiles">
                    <div class="info-icon secondary">
                        <i class="icon-check_circle"></i>
                    </div>
                    <div class="stats-detail">
                        <h3>{{ $totalLesson }}</h3>
                        <p>Total Lessons</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row ends -->

    </div>
    <!-- Main container end -->
@section('results')
    {{-- <script>
        // Make AJAX request to fetch quiz results data
        fetch('/admin/quiz-results')
            .then(response => response.json())
            .then(data => {
                // Update the HTML elements with the fetched data
                document.querySelector('.stats-detail:nth-of-type(2) h3').textContent = data.totalAttempts;
                document.querySelector('.stats-detail:nth-of-type(3) h3').textContent = data.totalQuizzes;
                console.log(data); // Log the data to console for debugging
            })
            .catch(error => {
                console.error('Error fetching quiz results:', error);
            });
    </script> --}}
@endsection
@endsection
