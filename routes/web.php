<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('funcion', function () {
    return view('pesta');
});

Route::get('login', function(){
    return redirect('/');
})->name('login');


Route::get('/menu', function(){
    return view('menu');
    })->middleware('auth')->name('menu');

Route::get('scho', function(){
    return redirect('schools');
})->name('scho');
/*----------------------------*/

Route::post('login', function() {
    $attributes = request()->validate([
        'dui' => 'required|numeric',
        'password' => 'required|string|max:255'
    ]);

    if (!auth()->attempt($attributes, false)) {

        throw ValidationException::withMessages([
            'dui' => 'Credentials are incorrect',
        ]);
    }

    session()->regenerate();
    return redirect('menu')->with('success', 'Logged in successfully');
})->middleware('guest')->name('session.login');


/*---------------------*/

Route::post('logout', function() {
    auth()->logout();
    return redirect('/')->with('success', 'Logged out successfully');
})->middleware('auth')->name('session.logout');

Route::resource('schools', SchoolController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('roles', RoleController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
Route::get('scores', [ScoreController::class, 'index'])->middleware('auth');
Route::post('scores', [ScoreController::class, 'update'])->name('scores.update')->middleware('auth');
Route::resource('teachers', TeacherController::class)->middleware('auth');
Route::resource('sections', SectionController::class)->middleware('auth');
Route::resource('subjects', SubjectController::class)->middleware('auth');
Route::resource('grades', GradeController::class)->middleware('auth');
Route::resource('states', StateController::class)->middleware('auth');
