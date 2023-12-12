<?php

use Illuminate\Support\Facades\Route;
use App\Models\level;



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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('Niveau')->group(function (){
        route::get('/' , 'App\Http\Controllers\NiveauController@index')->name('niveau');
        route::get('/create_niveaux' , 'App\Http\Controllers\LevelController@create_level')->name('create_niveau');
        route::get('/Modifier_niveau/{level}' , 'App\Http\Controllers\LevelController@modif_level')->name('modifier_niveau');
    });
    Route::prefix('classe')->group(function (){
        route::get('/' , 'App\Http\Controllers\ClasseController@index')->name('classe');
        route::get('/create_classe' , 'App\Http\Controllers\ClasseController@create_classe')->name('create_classe');
        // route::get('/Modifier_niveau/{level}' , 'App\Http\Controllers\LevelController@modif_level')->name('modifier_niveau');
    });
    Route::prefix('settings')->group(function (){
        route::get('/' , 'App\Http\Controllers\SchoolYearController@index')->name('settings');
        route::get('/create_school_year' , 'App\Http\Controllers\SchoolYearController@create_school_year')->name('create_school_year');    
    });
    
});
