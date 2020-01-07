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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ruangan', 'RuanganController@get_all_ruangan');
Route::post('ruangan', 'RuanganController@create_ruangan');

Route::put('ruangan/{id}', 'RuanganController@update_ruangan');
Route::delete('ruangan/{id}', 'RuanganController@delete_ruangan');

Route::get('mahasiswa', 'MahasiswaController@index');
