<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\School;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Users/Index',[
            'users' => User::all()->load('role'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Users/Create',[
            'roles' => Role::all(),
            'states' => State::all(),
            'schools' => School::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'dui' => 'required|numeric',
            'password' => 'required|string|max:255',
            'carnet' => 'required|string|max:255',
            'role_id' => 'required|numeric|exists:roles,id',
            'school_id' => 'required|numeric|exists:schools,id',
            'state_id' => 'required|numeric|exists:states,id'
        ]);

        User::create($attributes);

        return back()->with('success', 'School created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('Users/Edit', [
            'user' => $user,
            'roles'=> Role::all(),
            'states' => State::all(),
            'schools' => School::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'dui' => 'required|numeric',
            'carnet' => 'required|string|max:255',
            'role_id' => 'required|numeric|exists:roles,id',
            'school_id' => 'required|numeric|exists:schools,id',
            'state_id' => 'required|numeric|exists:states,id'
        ]);

        $user->fill($attributes);
        $user->save();

        return back()->with('success', 'School updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success','Borrado Correctamente');
    }
}
