<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['lessons'] = Lesson::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layouts.create-lesson', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['lessons'] = Lesson::all();
        return view('dashboard.layouts.create-lesson', $this->data);
    }

    public function validate_lesson(Request $request)
    {
        return $request->validate([
            'lesson_name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    }

    public function store(Request $request)
    {
        $validate = $this->validate_lesson($request);

        try {
            DB::beginTransaction();
            $lesson = new Lesson();
            $lesson->fill($validate);
            // dd($lesson);
            $lesson->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('lessons.create')->with('success', 'Lesson created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
    public function delete(Request $request, Lesson $lesson)
    {
        $this->data['lesson'] = $lesson;
        $lesson->delete();
        return redirect()->route('lessons.create', $lesson)->with('success', 'Deleted');
    }
}
