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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//メンバー一覧ページ
//Route::get('/webprof.jp/{company_id}', 'MemberController@index')->name('member');
Route::get('/{company_id}', 'MemberController@index')->name('member');

//メンバー登録ページ
Route::get('/obfall/memberRegister', 'MemberController@memberRegister')->name('memberRegister');           //この行を追加
//メンバー登録
Route::post('/obfall/memberStore', 'MemberController@memberStore')->name('memberStore');            //この行を追加
//管理画面の表示
//Route::get('/webprof.jp/{company_id}/admin', 'MemberController@admin')->name('admin')->middleware('auth');
Route::get('/{company_id}/admin', 'MemberController@admin')->name('admin')->middleware('auth');

//詳細画面
//Route::get('/webprof.jp/{company_id}/{id}', 'MemberController@show')->name('member.show');
Route::get('/{company_id}/{id}', 'MemberController@show')->name('member.show');

//管理画面でのメンバーの削除
Route::delete('/delete/{id}', 'MemberController@memberDelete')->name('delete');
//編集画面
Route::get('/edit/{company_id}/{id}', 'MemberController@edit')->name('member.edit');
Route::put('/update/{company_id}/{id}', 'MemberController@update')->name('member.update');
//プライバシーポリシー
Route::get('/obfall/privacy/policy', 'MemberController@privacy')->name('privacy.policy');
