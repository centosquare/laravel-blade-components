<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('web')->group(function () {
    Route::get('/', function () {
        return view('laravel-blade-components::examples.index');
    })->name('example.index');
    Route::get('card', function () {
        return view('laravel-blade-components::examples.card');
    })->name('card');


    Route::post('cardPost', function (\Illuminate\Http\Request $request) {
        $request->validate([
            'test_label' => 'required',
        ]);

        return response()->json(1);
        //  return view('laravel-blade-components::examples.card');
    })->name('cardPost');
});

