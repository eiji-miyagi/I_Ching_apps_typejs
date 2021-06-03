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
    return view('welcome');
});
// インデックへのルート作成,/i_chingでコントローラーのindexの処理に渡す
Route::get('/i_ching', 'i_chingController@index');


Route::post('/result/{oracle?}', 'i_chingController@result');

Route::get('/history', 'i_chingController@history');

// HTTPS接続でアセット(CSSや画像など)を読み込むための処理「https」だとcss,画像ファイル読めない。使用サーバー由来と思われるが、デプロイ時に問題になる可能性あり
if (env('APP_ENV') === 'local') {
     URL::forceScheme('http');
}
