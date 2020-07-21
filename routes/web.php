<?php

use Illuminate\Support\Facades\Route;


Route::get('/tasks', function () {
   // $tasks=DB::table('tasks')->get();
    $tasks=App\Task::all();
    return view('tasks.index',compact('tasks'));
});
Route::get('/tasks/{task}', function ($id) {
   // $task=DB::table('tasks')->find($id);
    $task=App\Task::find($id);
    return view('tasks.show',compact('task'));
});
Route::get('insert','TaskController@insertform');
Route::post('create','TaskController@insert');
