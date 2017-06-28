<?php

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

// use App\Task;

Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

// Controller => PostsController

// Eloquent Model => Post

// Migration => create_posts_table

// php artisan make:model Post -mc



Route::get('/tasks', 'TasksController@index' );

// Route::get('/tasks', function () {

//     // $tasks = DB::table('tasks')->latest()->get();
//     $tasks = App\Task::all();

//     return view('tasks.index', compact('tasks'));
// });


Route::get('/tasks/{task}', 'TasksController@show' );

// Route::get('/tasks/{id}', function ($id) {

//     // $task = DB::table('tasks')->find($id);
//     $task = App\Task::find($id);

//     // dd($task);
//     return view('tasks.show', compact('task'));
// });


