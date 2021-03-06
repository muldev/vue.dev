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

Route::get('/', function () {
    return view('landing');
});

Route::get('/overview', function() {
    return view('pages.overview');
});

Route::resource('/tasks', 'Muldev\Cms\TaskController');

Route::get('/cms', 'Muldev\Cms\PostController@home');

Route::resource('/posts','Muldev\Cms\PostController');


/*
 * Tasks Examples
 */
Route::get('tasklist', function() {
    return view('tasks.task_list',
        ['tasks' => App\Muldev\Cms\Task::paginate(4)]);
});




