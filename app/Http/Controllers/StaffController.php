<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Role;
use App\Models\School;
use App\Models\Staff;
use App\Models\State;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Staff/index', [
            'allstaff' => Staff::all()->load('teacher'),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Staff/Create', [
            'roles'=> Role::all(),
            'states'=> State::all(),
            'schools'=> School::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $attributes = $request->validate([
            'state_id' => 'required|numeric|exists:states,id',
            'school_id' => 'required|numeric|exists:schools,id',
            'role_id' => 'required|numeric|exists:roles,id',
            'dui' => 'required|numeric',
            'name' => 'required|string|max:255',
        ]);

        Staff::create($attributes);

        return back()->with('success', 'Staff created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('Staff/Edit', [
            'staff' => $staff,
            'roles'=> Role::all(),
            'states'=> State::all(),
            'schools'=> School::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $attributes = $request->validate([
            'state_id' => 'required|numeric|exists:states,id',
            'school_id' => 'required|numeric|exists:schools,id',
            'role_id' => 'required|numeric|exists:roles,id',
            'dui' => 'required|numeric',
            'name' => 'required|string|max:255',
        ]);

        $staff->fill($attributes);
        $staff->save();

        return back()->with('success', 'Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
