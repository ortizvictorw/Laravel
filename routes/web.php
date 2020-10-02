
<?php

use Illuminate\Support\Facades\Route;

/* ==================RUTAS======================== */


/* Home */

Route::view('/','home')->name('home');
/* ========================================== */

/* Quiene somos */
Route::view('/quienes-somos','about')->name('about');


/* ================7 RUTAS REST Route resourse========================== */

/* Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio'=>'project']);*/

/* ================7 RUTAS REST========================== */
Route::get('/portafolio','ProjectController@index')->name ('projects.index');
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

Route::get('/portafolio/{id}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

Route::post('/portafolio','ProjectController@store')->name('projects.store');
Route::get('/portafolio/{id}','ProjectController@show')->name ('projects.show');

Route::delete('/portafolio/{project}','ProjectController@destroy')->name ('projects.destroy');

/* ========================================== */

/* CONTACTO */
Route::view('/contacto','contact')->name('contact');
Route::post('/contact','MessageController@store')->name('messeges.store');

Auth::routes(['register'=>false]);



