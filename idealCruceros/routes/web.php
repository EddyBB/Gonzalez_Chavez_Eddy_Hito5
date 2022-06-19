<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SendEmailController;

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
//Página principal, usuarios no logados y logados.
Route::get('/', 'App\Http\Controllers\CruceroController@ofertas')->name('web.index');

//Vista reservas de usuario
Route::get('web.reservas/{id}', 'App\Http\Controllers\ReservaController@indexReserva')->name('web.reservas');

//Email
Route::post('/subscripcion', 'App\Http\Controllers\SendEmailController@index');

// Parte usuario no logado y usuario cliente
Route::group(['middleware' => ['auth']], function () {
    //Perfil usuario
    Route::get('perfilUsuario/{id}', 'App\Http\Controllers\UserProfileController@profileUser')->name('web.perfilUsuario');
    Route::post('perfilUsuario/{id}', 'App\Http\Controllers\UserProfileController@updateUser')->name('user.updateUser');

    //Vista reservas de usuario
    Route::get('web.reservas/{id}', 'App\Http\Controllers\ReservaController@indexReserva')->name('web.reservas');
    Route::post('deleteReserva/{id}', 'App\Http\Controllers\ReservaController@deleteReserva')->name('deleteReserva');
    //Route::get('web.reservaShow/{id}', 'App\Http\Controllers\ReservaController@reservaShow')->name('web.reservaShow');
    //Route::post('perfilUsuario/{id}', 'App\Http\Controllers\UserProfileController@updateUser')->name('user.updateUser');
});

// Parte administrador
Route::group(['middleware' => ['admin']], function () {

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('cruceros', App\Http\Controllers\CruceroController::class);
    Route::resource('tripulacion', App\Http\Controllers\TripulacionController::class);
    Route::resource('reservas', App\Http\Controllers\ReservaController::class);
    Route::resource('actividades', App\Http\Controllers\ActividadeController::class);

    //Dashboard
    Route::get('/home', 'App\Http\Controllers\UserController@indexDashboard')->name('users.indexDashboard');

    //Perfil administrador
    Route::get('user/profile/{id}', 'App\Http\Controllers\UserProfileController@profile')->name('user.profile');
    Route::post('user/profile/{id}', 'App\Http\Controllers\UserProfileController@update')->name('user.update');
});

// Parte tripulante
Route::group(['middleware' => ['tripulante']], function () {

    //Perfil Tripulante acceder nada mas loguear
    Route::get('perfilTripulante/{id}', 'App\Http\Controllers\UserProfileController@profileTripulante')->name('web.perfilTripulante');
    Route::post('perfilTripulante/{id}', 'App\Http\Controllers\UserProfileController@updateTripulante')->name('user.updateTripulante');

    // Viajes programados para tripulante
    Route::get('web.tripulante/{id}', 'App\Http\Controllers\TripulacionController@indexTripulante')->name('web.tripulante');
});
