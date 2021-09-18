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
    return view('index');
});

Auth::routes();

Route::get('/userregister', 'HomeController@showregister');


// アカウント設定
Route::get('/accountsetting','UserController@accountsetting');

// 企業一覧の表示
Route::get('/companyall','UserController@allcompany');
// ユーザー一覧の表示
Route::get('/userall','UserController@alluser');
// ユーザーの新規登録
Route::post('/userregister', 'UserController@create');
// ユーザーの削除
Route::get('/userdestroy', 'UserController@destroy');


// 組織一覧表示
Route::get('/organizations','OrganizationController@show');
// 新しい組織の登録
Route::post('/organizations','OrganizationController@create');

// 副業先一覧の表示
Route::get('/fukugyousakis','FukugyousakiController@show');
// 副業先一覧の登録
Route::post('/fukugyousakis','FukugyousakiController@create');

// 企業アカウントの表示＝管理者のみ
Route::get('/registercompany','HomeController@showcompanyregister');
// 企業アカウントの登録＝管理者のみ
Route::post('/registercompany','UserController@createcompany');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tables','PostController@tables');

// 副業の新規申請画面表示
Route::get('/newpost','PostController@newpost');
// 副業の新規申請
Route::post('/newpost','PostController@store');

// アラート設定画面
Route::get('/showarart','ArartController@newarart');

//アラート新規申請
Route::post('/arart','ArartController@store');

// アラート削除
Route::post('/arartdestroy/{id}','ArartController@destroy');

// 承認
Route::post('/approve/{id}','PostController@approve');
// 差戻し
Route::post('/reject/{id}','PostController@reject');

// ユーザー用のテーブル
Route::get('/usertables','PostController@usertables');

// 投稿の削除
Route::get('/destroy/{id}','PostController@destroy');

// メッセージ画面の表示
Route::get('/showmessege','MessageController@show');

// チャートの表示
Route::get('/showchart','ChartController@showchart');
// 2022チャートの表示
Route::get('/showchart2022','ChartController@showchart2022');
// 2023チャートの表示
Route::get('/showchart2023','ChartController@showchart2023');

