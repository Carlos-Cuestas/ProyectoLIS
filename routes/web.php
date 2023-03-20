<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StaffController;
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

Route::get('menu', function(){
return view('menu');
})->middleware('auth');

Route::get('menur', function(){
    return view('menu');
    })->name('menur');

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
Route::resource('staff', StaffController::class)->middleware('auth');

