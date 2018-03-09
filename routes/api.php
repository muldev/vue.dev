<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * Tasks  Vue.js examples
 */
Route::resource('tasks',
    'Muldev\Cms\Api\TaskController',
    [ 'except' => ['edit', 'show', 'store']
    ]);

Route::get('taskapi', function () {
    return App\Muldev\Cms\Task::paginate(2);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
