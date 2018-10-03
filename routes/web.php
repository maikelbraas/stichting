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
Auth::routes();

Route::get('/pagina/{slug}', ['as' => 'templates.stichting', 'uses' => 'PageGenerator@generatePage'])->where('slug', '[\w\d\-\_]+');


Route::get('/', ['uses' => 'PageGenerator@index', 'as' => 'templates.StichtingHomepage']);

Route::prefix('admin')->group(function () {

    Route::post('pages/create', 'admin\PageController@store');


    Route::get('/', 'admin\DashboardController@index')->name('dashboard');
    Route::get('/instellingen', 'admin\SettingsController@index')->name('settings');

    Route::resource('pages', 'admin\PageController');
});

