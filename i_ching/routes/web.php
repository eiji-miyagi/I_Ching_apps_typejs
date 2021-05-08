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

Route::get('/', function () {
    return view('welcome');
});

// インデックへのルート作成,/i_chingでコントローラーのindexの処理に渡す、laravelバージョン８以上により位置を詳細に指定
Route::get('/i_ching', 'App\Http\Controllers\i_chingController@index');


// HTTPS接続でアセット(CSSや画像など)を読み込むための処理
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 