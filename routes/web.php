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

// ■Laravel8以降のコントローラーのルート情報記述についてLaravel8以降では、web.phpなどにコントローラーのルート情報を記述する際、クラス名だけでは検索されなくなりました。例えば、P.42のリスト2-8でHelloControllerのルート情報をweb.phpに記述する際は、以下のようにuse文を用意する必要があります。

use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index'] );

