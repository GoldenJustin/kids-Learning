@extends('dashboard/layouts.main')
@section('content')
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-sm-12">
            <div class="documents-section">
                <!-- Row start -->
                <div class="row no-gutters">

                    <div class="col-lg-10 col-sm-9 col-8">
                        <div class="documents-container">
                            <div class="modal fade" id="addNewDocument" tabindex="-1" role="dialog"
                                aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title" id="addNewDocumentLabel">Add Lesson</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>

                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('lessons.store') }}" class="row gutters">
                                                @csrf
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="lesson_name">Lesson Name</label>
                                                        <input type="text" class="form-control" id="lesson_name"
                                                            name="lesson_name" placeholder="Lesson Name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="addedDate">Created On</label>
                                                        <div class="custom-date-input">
                                                            <label for="addedDate" id="todays-date">Created On</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mb-0">
                                                        <label for="description">Lesson Description</label>
                                                        <textarea class="form-control" id="description" name="description"></textarea>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer custom">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-link danger btn-block"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit" class="btn btn-link success btn-block">Add</button>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="documents-header">

                                <h3>Today <span class="date" id="todays-date"></span></h3>
                                @auth
                                    @if (auth()->user()->hasRole('super-admin'))
                                        <button class="btn btn-primary btn-lg" data-toggle="modal"
                                            data-target="#addNewDocument">Add
                                            Lessons</button>
                                    @endif
                                @endauth
                            </div>

                            {{-- Table for data --}}
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



                                                    @auth
                                                        @if (auth()->user()->hasRole('super-admin'))
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
                                                        @endif
                                                    @endauth


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
    <!-- Row end -->
@endsection
