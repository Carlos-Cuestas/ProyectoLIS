<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\School;
use App\Models\Score;
use App\Models\Section;
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
        $section = Section::where('id', \request('seccion') ?? 1)->first();
        $ciclo = \request('ciclo') ?? 1;
        $teacher = Auth::user()->teacher;
        $students = Student::where('grade_id', $teacher->grade_id)
            ->where('section_id', $section->id)
            ->where('school_id', Auth::user()->school_id)->with(['scores'])->get();

        foreach ($students as $student) {
            if ($student->scores()->where('subject_id', $teacher->subject->id)->where('cycle_id', $ciclo)->first() == null) {
                Score::create([
                    'student_id' => $student->id,
                    'note' => 0,
                    'subject_id' => $teacher->subject->id,
                    'cycle_id' => $ciclo
                ]);
            }
        }

        return view('Scores/Index',[
            'students' => $students,
            'teacher' => $teacher,
            'ciclo' => $ciclo,
            'ciclos' => Cycle::all(),
            'seccion' => $section,
            'secciones' => Section::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $scores = collect([]);

        //dd($request->post());
        foreach ($request->post() as $scoreID => $score) {
            if ($scoreID == '_token') {
                continue;
            }
            $scores->push([
                'id' => $scoreID,
                'note' => $score,
                'student_id' => 0,
                'subject_id' => 0,
                'cycle_id' => 0,
            ]);
        }

        Score::upsert($scores->toArray(), ['id'], ['note']);

        return back();
    }
}
