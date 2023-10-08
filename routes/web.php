<?php

use Illuminate\Support\Facades\Route;
use app\Models\surveyNedamco;

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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/', function () {

    $surveys = new surveys();
    $surveys->name = Request('name');
    $surveys->first = Request('question1');
    $surveys->second = Request('question2');
    $surveys->third = Request('question3');
    $surveys->forth = Request('question4');
    $surveys->fifth = Request('question5');
    $surveys->save();
});