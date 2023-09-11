<?php

use Illuminate\Support\Facades\Route;


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


Route::get('/task', function () {
    $data = App\Models\task::all();
    return view('task')->with('task',$data);


});

Route::POST('/savetask', 'App\Http\controllers\TaskControllar@store');
Route::get('/markascompleted/{id}', 'App\Http\controllers\TaskControllar@completed');
Route::get('/markasnotcompleted/{id}', 'App\Http\controllers\TaskControllar@Notcompleted');
Route::get('/removetask/{id}', 'App\Http\controllers\TaskControllar@remove');
Route::get('/update/{id}', 'App\Http\controllers\TaskControllar@updatetaskview');
Route::get('/updatetasks','App\Http\controllers\TaskControllar@updatetask');
// Route::post('/savetask', 'App\Http\controllers\TaskControlla@store')->name('store');