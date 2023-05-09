<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Perfil/index',[
            'teachers' => Teacher::whereRelation('user','school_id', Auth::user()->school_id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Perfil/create',[
            'users' => User::where('role_id', 2)
            ->has('teacher','=', 0)
            ->where('school_id', Auth::user()->school_id)
            ->get(),

            'grades'=> Grade::all(),
            'subjects'=> Subject::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'user_id' => 'required|numeric|exists:users,id',
            'grade_id' => 'required|numeric|exists:grades,id',
            'subject_id' => 'required|numeric|exists:subjects,id',
        ]);
        Teacher::create($attributes);
        return back()->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('Perfil/edit',[
            'teacher'=>$teacher,
            'users' => User::all(),
            'grades'=> Grade::all(),
            'subjects'=> Subject::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $attributes = $request->validate([
            'user_id' => 'required|numeric|exists:users,id',
            'grade_id' => 'required|numeric|exists:grades,id',
            'subject_id' => 'required|numeric|exists:subjects,id',
        ]);

        $teacher->fill($attributes);
        $teacher->save();
        return back()->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back()->with('success','Borrado Correctamente');
    }
}
