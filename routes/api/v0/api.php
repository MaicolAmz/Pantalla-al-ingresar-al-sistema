<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
/*
Route::get('passwords', function () {
    $users = \App\User::orderBy('id')->get();
    $passwords = array();
    $users2 = array();
    foreach ($users as $user) {
        $passwords[] = \Illuminate\Support\Facades\Hash::make($user->identification);
        $users2[] = $user->first_lastname;
    }
    return response()->json(['users' => $users2, 'passwords' => $passwords]);
});

// Users
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'v0\AuthController@login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'v0\AuthController@logout');
        Route::get('user', 'v0\AuthController@user');
        Route::put('users', 'v0\AuthController@updateUser');
        Route::put('password', 'v0\AuthController@changePassword');
        Route::post('users/avatar', 'v0\AuthController@uploadAvatarUri');
    });
});

Route::group(['prefix' => 'catalogues'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('', 'v0\CatalogueController@filter');
    });
});

Route::group(['prefix' => 'workdays'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('all', 'v0\WorkdayController@all');
        Route::get('current_day', 'v0\WorkdayController@getCurrenDate');
        Route::post('', 'v0\WorkdayController@store');
        Route::put('', 'v0\WorkdayController@update');
        Route::delete('{id}', 'v0\WorkdayController@destroy');
    });
});

Route::group(['prefix' => 'tasks'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('all', 'v0\TaskController@all');
        Route::get('catalogues', 'v0\TaskController@allCatalogues');
        Route::get('current_day', 'v0\TaskController@getCurrenDate');
        Route::get('history', 'v0\TaskController@getHistory');
        Route::post('', 'v0\TaskController@store');
        Route::put('', 'v0\TaskController@update');
        Route::delete('{id}', 'v0\TaskController@destroy');
    });
});

Route::group(['prefix' => 'attendances'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('summary', 'v0\AttendanceController@summary');
        Route::get('detail', 'v0\AttendanceController@detail');
        Route::get('{id}', 'v0\AttendanceController@show');
        Route::post('', 'v0\AttendanceController@store');
        Route::put('', 'v0\AttendanceController@update');
        Route::delete('{id}', 'v0\AttendanceController@destroy');
    });
});

Route::group(['prefix' => 'institutions'], function () {

    Route::group(['middleware' => 'auth:api'], function () {

    });
});

Route::apiResource('institutions', 'v0\InstitutionController');
*/

// ********************************************************

/* Rutas para los usuarios
Route::group(['prefix' => 'users'], function () {
    //Route::group(['middleware' => 'auth:api'], function () {
        Route::get('', 'UserController@getAllUsers');
        Route::get('/{id}', 'UserController@showUser');
        Route::post('/filter', 'UserController@filterUsers');
        Route::put('', 'UserController@updateUser');
        Route::delete('', 'UserController@deleteUser');
        Route::put('/password', 'UserController@updatePassword');
        Route::get('/validateUserName/{id}', 'UserController@validateUserName');
    //});
});
/**********************************************************************************************************************/

/* Rutas para las ofertas*/
Route::group(['prefix' => 'offers'], function () {
    //Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/professionals', 'OfferController@getAppliedProfessionals');
        Route::post('/professionals', 'OfferController@createProfessional');
        Route::post('', 'OfferController@createOffer');
        Route::put('', 'OfferController@updateOffer');
        Route::delete('', 'OfferController@deleteOffer');
        Route::delete('/finish', 'OfferController@finishOffer');
    //});
});
/**********************************************************************************************************************/

/* Rutas para los profesionales*/
Route::group(['prefix' => 'professionals'], function () {
    //Route::group(['middleware' => 'auth:api'], function () {
       Route::get('/abilities', 'ProfessionalController@getAbilities');
       Route::get('/academicFormations', 'ProfessionalController@getAcademicFormations');
       Route::get('/courses', 'ProfessionalController@getCourses');
       Route::get('/languages', 'ProfessionalController@getLanguages');
       Route::get('/professionalExperiences', 'ProfessionalController@getProfessionalExperiences');
       Route::get('/professionalReferences', 'ProfessionalController@getProfessionalReferences');
       Route::get('/offers', 'ProfessionalController@getAppliedOffers');
       Route::post('/offers/filter', 'ProfessionalController@filterOffers');
       Route::post('/offers', 'ProfessionalController@createOffer');
       Route::get('/companies', 'ProfessionalController@getAppliedCompanies');
       Route::get('/{id}', 'ProfessionalController@showProfessional');
       Route::post('', 'ProfessionalController@createProfessional');
       Route::put('', 'ProfessionalController@updateProfessional');
       Route::delete('', 'ProfessionalController@deleteProfessional');
    //});
});
/**********************************************************************************************************************/

/* Rutas para los Formacion Academica*/
Route::apiResource('academicFormations', 'v0\AcademicFormationController');
/**********************************************************************************************************************/

/* Rutas para los idiomas*/
Route::apiResource('languages', 'v0\LanguageController');
/**********************************************************************************************************************/

/* Rutas para las fortalezas*/
Route::apiResource('abilities', 'v0\AbilityController');
/**********************************************************************************************************************/

/* Rutas para los cursos*/
Route::apiResource('courses', 'v0\CourseController');
/**********************************************************************************************************************/

/* Rutas para las experiencias pofesionales*/
Route::apiResource('professionalExperiences', 'v0\ProfessionalExperienceController');
/**********************************************************************************************************************/

/* Rutas para las referencias pofesionales*/
Route::apiResource('professionalReferences', 'v0\ProfessionalReferenceController');
/**********************************************************************************************************************/

/* Rutas para las empresas*/
Route::group(['prefix' => 'companies'], function () {
    //Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/professionals', 'CompanyController@getAppliedProfessionals');
        Route::get('/offers', 'CompanyController@getOffers');
        Route::post('/offers', 'CompanyController@createOffer');
        Route::put('/offers', 'CompanyController@updateOffer');
        Route::post('/offers/filter', 'CompanyController@filterOffers');
        Route::get('', 'CompanyController@getAllCompanies');
        Route::get('/{id}', 'CompanyController@showCompany');
        Route::put('', 'CompanyController@updateCompany');
        Route::delete('', 'CompanyController@deleteCompany');
    //});
});

/* Rutas publicas*/
/*
Route::group(['prefix' => 'companies'], function () {
    /* Rutas para login y logout
    Route::post('/login', 'UserController@login');
    Route::post('/logout', 'UserController@logout');
});
*/
/**********************************************************************************************************************/

/* Rutas para registar usuarios (Profesionales y Empresas)
Route::group(['prefix' => 'users'], function () {
    /* Rutas para login y logout
    Route::post('/createCompanyUser', 'UserController@createCompanyUser');
    Route::post('/createProfessionalUser', 'UserController@createProfessionalUser');
});
*/
/**********************************************************************************************************************/

/* Rutas para obtener todos los profesionales y ofertas*/
Route::group(['prefix' => 'postulants'], function () {
    Route::get('', 'ProfessionalController@getProfessionals');
    Route::post('/apply', 'CompanyController@applyPostulant');
    Route::post('/detachCompany', 'ProfessionalController@detachCompany');
    Route::get('/validateAppliedPostulant', 'ProfessionalController@validateAppliedPostulant');
});

Route::group(['prefix' => 'oportunities'], function () {
    Route::get('', 'OfferController@getOffers');
    Route::get('/validateAppliedOffer', 'OfferController@validateAppliedOffer');
    Route::post('/apply', 'OfferController@applyOffer');
});

Route::post('/companies/detachPostulant', 'CompanyController@detachPostulant');

Route::get('/totalCompanies', function () {
    $totalCompanies = \App\Company::where('state', 'ACTIVE')->count();
    return response()->json(['totalCompanies' => $totalCompanies], 200);
});

Route::get('/totalOffers', function () {
    $now = Carbon::now();
    $totalOffers = \App\Offer::where('state', 'ACTIVE')
        ->where('finish_date', '>=', $now->format('Y-m-d'))
        ->where('start_date', '<=', $now->format('Y-m-d'))
        ->count();
    return response()->json(['totalOffers' => $totalOffers], 200);
});

Route::get('/totalProfessionals', function () {
    $totalProfessionals = \App\Professional::where('state', 'ACTIVE')->count();
    return response()->json(['totalProfessionals' => $totalProfessionals], 200);
});

Route::get('/offers', 'OfferController@getAllOffers');
/**********************************************************************************************************************/

/* Rutas para filtrar a los profesionales y ofertas*/
Route::post('/offers/filter', 'OfferController@filterOffers');
Route::get('/oportunities/filter', 'OfferController@filterOffersFields');
Route::post('/postulants/filter', 'ProfessionalController@filterPostulants');
Route::get('/postulants/filter', 'ProfessionalController@filterPostulantsFields');
/**********************************************************************************************************************/
Route::get('/professionals', 'ProfessionalController@getAllProfessionals');

Route::get('/validate_cedula', 'UserController@validateCedula');


