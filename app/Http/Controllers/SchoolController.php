<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\State;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Schools/Index', [
            'schools' => School::all()->load('state'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Schools/Create', [
            'states' => State::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|numeric|exists:states,id'
        ]);

        School::create($attributes);

        return back()->with('success', 'School created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('Schools/Edit', [
            'school' => $school,
            'states' => State::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|numeric|exists:states,id'
        ]);

        $school->fill($attributes);
        $school->save();

        return back()->with('success', 'School updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        //
    }
}
