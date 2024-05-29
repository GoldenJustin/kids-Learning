@extends('dashboard/layouts.main')
@section('content')


    <!-- Main container start -->
    <div class="main-container">


        <div class="row gutters">
            <div class="col-sm-12">

                @if(count($viewData['student_results'])>0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Scores</th>
                                        <th>Percentage</th>
                                        <th>Date Done</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewData['student_results'] as $student)
                                    <tr>
                                        <td>{{$student->users->name}}</td>
                                        <td>{{$student->quiz_score}}</td>
                                        <td>{{($student->quiz_score /10)* 100}}%</td>
                                        <td>{{$student->created_at->format('d-m-Y')}}</td>                                        <td>1106</td>
                                    </tr>   
                                    @endforeach
                                    
                                   
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>

    </div>
    <!-- Main container end -->

@endsection
