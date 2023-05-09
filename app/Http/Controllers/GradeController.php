<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Grades/index',[
            'grades'=>Grade::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Grades/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes=$request->validate(['name'=>'required|string|max:255']);
        Grade::create($attributes);
        return back()->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('Grades/edit',[
            'grade'=>$grade,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $attributes=$request->validate(['name'=>'required|string|max:255']);
        $grade->fill($attributes);
        $grade->save();
        return back()->with('success','Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return back()->with('success','Borrado Correctamente');
    }
}
