<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Rutas para los profesionales*/
Route::group(['prefix' => 'professionals'], function () {
    //Route::group(['middleware' => 'auth:api'], function () {
        
        //Ruta para obtener un profesional segun el id, relación con la tabla academicFormations
        Route::get('/{id}', 'JobBoard\ProfessionalController@show');
    //});
});
/**********************************************************************************************************************/

/* Rutas para obtener todos los profesionales y ofertas*/
Route::group(['prefix' => 'postulants'], function () {

    // Ruta para gestionar los datos personales
    Route::get('', 'JobBoard\ProfessionalController@getProfessionals');
    
    //Método para aplicar a una empresa
    Route::post('/apply', 'JobBoard\CompanyController@applyPostulant');

    //Método para validar aplicación de un profesional a una empresa
    Route::get('/validateAppliedPostulant', 'JobBoard\ProfessionalController@validateAppliedPostulant');
});

// ????????????
Route::get('/total', function () {
    $now = Carbon::now();
    $totalCompanies = \App\Models\JobBoard\Company::where('state_id', 1)->count();
    $totalProfessionals = \App\Models\JobBoard\Professional::where('state_id', 1)->count();
    $totalOffers = \App\Models\JobBoard\Offer::where('state_id', 1)
        ->where('finish_date', '>=', $now->format('Y-m-d'))
        ->where('start_date', '<=', $now->format('Y-m-d'))
        ->count();
    return response()->json(['totalCompanies' => $totalCompanies, 'totalOffers' => $totalOffers, 'totalProfessionals' => $totalProfessionals ], 200);
});

/**********************************************************************************************************************/

/* Rutas para filtrar a los profesionales y ofertas*/

//Ruta que ingresar el filtro para realizar la consulta
Route::post('/postulants/filter', 'JobBoard\ProfessionalController@filterPostulants');

//Ruta que obtiene la busqueda que se realiza   
Route::get('/postulants/filter', 'JobBoard\ProfessionalController@filterPostulantsFields');
/**********************************************************************************************************************/
