<?php

use App\Http\Controllers\BoardController;
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

// ■Laravel8以降のコントローラーのルート情報記述についてLaravel8以降では、web.phpなどにコントローラーのルート情報を記述する際、クラス名だけでは検索されなくなりました。例えば、P.42のリスト2-8でHelloControllerのルート情報をweb.phpに記述する際は、以下のようにuse文を用意する必要があります。

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;
// 追記
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// HelloControllerの利用
Route::get('hello', [HelloController::class, 'index']);

Route::post('hello', [HelloController::class, 'post']);

Route::get('hello/add', [HelloController::class, 'add']);

Route::post('hello/add', [HelloController::class, 'create']);

Route::get('/hello/edit', [HelloController::class, 'edit']);

Route::post('/hello/edit', [HelloController::class, 'update']);

Route::get('/hello/del', [HelloController::class, 'del']);

Route::post('/hello/del', [HelloController::class, 'remove']);

// PersonControllerの利用
Route::get('person', [PersonController::class, 'index']);

Route::get('person/find', [PersonController::class, 'find']);

Route::post('person/find', [PersonController::class, 'search']);

Route::get('person/add', [PersonController::class, 'add']);

Route::post('person/add', [PersonController::class, 'create']);

Route::get('person/edit', [PersonController::class, 'edit']);

Route::post('person/edit', [PersonController::class, 'update']);

Route::get('person/del', [PersonController::class, 'delete']);

Route::post('person/del', [PersonController::class, 'remove']);

//  BoardControllerの利用
Route::get('board', [BoardController::class, 'index']);

Route::get('board/add', [BoardController::class, 'add']);
Route::post('board/add', [BoardController::class, 'create']);