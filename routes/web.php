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
//String
Route::get('coba', function () {
    return "halo :D";
});
//Array Json
Route::get('coba1', function () {
    return ['rafa', 'rafi', 'rafo'];
});
//array json(key value)
Route::get('coba2', function () {
    return [
        'Nama' => 'Rafi Amrullah Al-Baihaqi',
        'NIS' => 3103120180,
        'Kelas' => 'XII RPL 6'
    ];
});

Route::get('coba3', function () {
    return response()->json(
        [
            'Nama' => 'Rafi Amrullah Al-Baihaqi',
            'NIS' => 3103120180,
            'Kelas' => 'XII RPL 6'
        ], 201
    );
});