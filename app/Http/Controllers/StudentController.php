<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\School;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Students/index', [
            'students' => Student::orderBy('id', 'desc')->get()->load('school')->load('grade'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Students/Create',[
            'schools'=> School::all(),
            'grades'=> Grade::all(),
            'sections'=> Section::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'carnet' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'section_id' => 'required|numeric|exists:sections,id',
            'grade_id' => 'required|numeric|exists:grades,id',
            'school_id' => 'required|numeric|exists:schools,id'
        ]);

        Student::create($attributes);

        return back()->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('Students/Edit', [
            'student' => $student,
            'schools'=> School::all(),
            'grades'=> Grade::all(),
            'sections'=> Section::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $attributes = $request->validate([
            'carnet' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'section_id' => 'required|numeric|exists:sections,id',
            'grade_id' => 'required|numeric|exists:grades,id',
            'school_id' => 'required|numeric|exists:schools,id'
        ]);

        $student->fill($attributes);
        $student->save();

        return back()->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success','Borrado Correctamente');
    }
}
