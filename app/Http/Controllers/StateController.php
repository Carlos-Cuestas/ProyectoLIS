<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('States/index',[
        'states'=> State::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('States/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes=$request->validate(['name'=>'required|string|max:255']);
        State::create($attributes);
        return back()->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        return view('States/edit',[
            'state'=> $state,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $attributes=$request->validate(['name'=>'required|string|max:255']);
        $state->fill($attributes);
        $state->save();
        return back()->with('success','Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();
        return back()->with('success','Eliminado Correctamente');
    }
}
