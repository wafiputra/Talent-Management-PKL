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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
    Route::resource('bidang', 'BidangController');
    Route::resource('client', 'ClientController');
    Route::resource('jabatan', 'JabatanController');
    Route::resource('dataProyek', 'DataPController');
    Route::resource('dokumenProyek', 'DokumenPController');
    Route::resource('signProject', 'SignPController');
    Route::resource('targetPembelajaran', 'TargetPController');
    Route::resource('realisasiPembelajaran', 'RealisasiPController');
    Route::resource('dataPendidikan', 'DataPendidikanController');
    Route::resource('dataPersonil', 'DataPersonilController');
    Route::resource('dataSkill', 'DataSkillController');
    Route::resource('dataKontrak', 'DataKontrakController');
    Route::resource('portofolio', 'PortofolioController');
});

Route::post('users', 'UserController@stor')
    ->name('dependent-dropdown.stor');