<?php

use App\Task;
use Illuminate\Http\Request;

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

/**
 * 全タスク表示
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * 新タスク追加
 */
Route::post('/task', function (Request $request) {
    $validator = $request->validate([
        'name' => 'required|max:255'
    ]);

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/**
 * 既存タスク削除
 */
Route::delete('/task/{id}', function ($id) {
    //
});