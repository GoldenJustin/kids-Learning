<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentsController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->middleware('permission:view student', ['only' => ['index']]);
        $this->middleware('permission:create student', ['only' => ['create', 'store']]);
        $this->middleware('permission:update student', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete student', ['only' => ['destroy']]);
    }

    public function index()
    {
       
        return view('student.index', $this->data);
    }

    public function create()
    {
        return view('student.create', $this->data);
    }

    public function validate_student(Request $request)
    {
        return $request->validate([
            'student_name' => 'sometimes|required',
            'gender' => 'sometimes|required',
            'address' => 'sometimes|required',
        ]);
    }

    public function store(Request $request)
    {
        $validate = $this->validate_student($request);

        try {
            DB::beginTransaction();
            $student = new Student();
            $student->fill($validate);
            $student->user_id = auth()->user()->id;
            $student->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('student.index');
    }

    public function edit(Request $request, Student $student)
    {
        $this->data['student'] = $student;
        return view('student.edit', $this->data);
    }

    public function update(Request $request, Student $student)
    {
        $validate = $this->validate_student($request);

        try {
            DB::beginTransaction();
            $student->update($validate);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('student.index');
    }

    public function delete(Request $request, Student $student)
    {
        $this->data['student'] = $student;
        $student->delete();
        return redirect()->route('student.index', $student)->with('success', 'Deleted');
    }
}
