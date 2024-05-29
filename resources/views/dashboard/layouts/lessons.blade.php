@extends('dashboard/layouts.main')
@section('content')
<div class="table-container">
    <div class="table-responsive">
        <table class="table custom-table m-0">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Lesson Name</th>
                    <th>Description</th>

                   @auth
                   @if (auth()->user()->hasRole('super-admin'))
                   <th>Actions</th>   
                   @endif
                   @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($lessons as $lesson)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td id="todays-date">{{ $lesson->lesson_name }}</td>
                        <td id="todays-date">{{ $lesson->description }}</td>


                        <td>
                            <div class="td-actions">
                               

                                <a href="#" class="icon red" data-toggle="tooltip"
                                    data-placement="top" title="Delete Lesson"
                                    onclick="event.preventDefault(); document.getElementById('deleteLessonForm').submit();">
                                    <i class="icon-delete"></i>
                                </a>

                                <form id="deleteLessonForm"
                                    action="{{ route('lessons.delete', $lesson->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>



                               

                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection