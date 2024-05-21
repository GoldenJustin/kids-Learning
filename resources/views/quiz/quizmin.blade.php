@extends('daycare.index')
@section('quiz')
    <link href="{{ asset('assets/css/quiz.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                     Quiz <span id="questionNumber"></span> - Subtraction</h4>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div id="quiz" style="display: none;">
                        <form id="quizForm" method="POST" action="{{ route('store.quiz.result') }}">
                            @csrf
                            <p>Question <span id="questionNumber"></span>:</p>
                            <p id="question"></p>
                            <label>
                                <input type="radio" name="userAnswer" value="0"> <span id="choice0"></span>
                            </label><br>
                            <label>
                                <input type="radio" name="userAnswer" value="1"> <span id="choice1"></span>
                            </label><br>
                            <label>
                                <input type="radio" name="userAnswer" value="2"> <span id="choice2"></span>
                            </label><br>
                            <label>
                                <input type="radio" name="userAnswer" value="3"> <span id="choice3"></span>
                            </label><br>
                            <!-- Hidden input field to store the quiz score -->
                            <input type="hidden" name="quiz_score" id="quizScore">
                            <button type="submit">Submit</button>
                        </form>
                    </div>

                    <div id="result" style="display: none;">
                        <h2>Quiz Results</h2>
                        <ul id="scoreList"></ul>
                        <p>Total Score: <span id="totalScore"></span>/10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('quizpart')
    <script src="{{ asset('assets/js/quizmin.js') }}"></script>
@endsection
@endsection
