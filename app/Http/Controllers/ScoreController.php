<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Score;
use App\Models\Section;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techer = Auth::user()->teacher;
        
        return view('Scores/Index',[
            'schools' =>School::all(),
            'students' => Student::where('grade_id', $techer->grade_id)
            ->where('section_id', $techer->section_id)->get(),
            'subjects' => $techer->subject,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
