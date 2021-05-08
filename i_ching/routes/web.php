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


// 以下ページごとにルート設定しないと表示されない。解決まで暫定処置。問題なければそのまま
Route::get('/result', 'App\Http\Controllers\i_chingController@result');


Route::get('/history', 'App\Http\Controllers\i_chingController@history');

// HTTPS接続でアセット(CSSや画像など)を読み込むための処理
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 