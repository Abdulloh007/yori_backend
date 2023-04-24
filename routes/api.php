<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OsonSMSController;
use App\Http\Middleware\AccessControl;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\SubcategoriesController;
use App\Http\Controllers\API\TarifController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\WorkExamplesController;
use App\Http\Middleware\HasTarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::post('register', [ RegisterController::class, 'register' ]);

Route::post('user', [UsersController::class, 'store']);
Route::post('user-auth', [UsersController::class, 'auth']);
Route::post('users/phone', [UsersController::class,'recover']);

// Route::get('view-data/{data}', function($data){
//     echo $data;
//  })->name('view-data');

Route::get('accessdenied', function(){return response()->json(['data'=>['status' => 'Access Denied ! ']],403);})->name('accessdenied');
Route::get('hasnttarif', function(){return response()->json(['data'=>['status' => 'Your Tarif Expired ! ']],403);})->name('tarif_expire');
Route::resource('categories', CategoriesController::class);
Route::resource('subcategories', SubcategoriesController::class);
Route::resource('task', TaskController::class);

Route::middleware('auth:api')->group( function () {

    Route::middleware([AccessControl::class])->group(function () {
        
        
        Route::post('categories/{id}', [CategoriesController::class,'update']);
        
        
        Route::post('subcategories/{id}', [SubcategoriesController::class,'update']);
        Route::get('subcategories/category/{id}', [SubcategoriesController::class,'showbycategories']);

        Route::resource('users', UsersController::class);
        Route::post('users/{id}', [UsersController::class,'update']);
        Route::get('users/role/{role}', [UsersController::class,'byrole']);
        Route::resource('review', ReviewController::class);
        Route::post('review/{id}', [ReviewController::class,'update']);
        Route::get('review/task/{id}', [ReviewController::class,'showbytask']);
        Route::get('review/user/{id}', [ReviewController::class,'showbyuser']);

        
        Route::post('task/{id}', [TaskController::class,'update']);
        Route::get('task/bycategory/{category}/{subcategory?}', [TaskController::class,'showbycategories']);
        Route::get('task/bycustomer/{customer}', [TaskController::class,'showbycustomer']);
    
        Route::post('response',[ResponseController::class, 'store'])->middleware([HasTarif::class]);
        Route::get('response', [ResponseController::class, 'index']);
        Route::get('response/{id}', [ResponseController::class, 'show']);
        Route::post('response/{id}', [ResponseController::class,'update']);
        Route::get('response/task/{id}', [ResponseController::class,'showbytask']);
        Route::get('response/user/{id}', [ResponseController::class,'showbyuser']);

        Route::resource('tarif', TarifController::class);
        Route::post('tarif/{id}', [TarifController::class,'update']);

        Route::resource('workexamples', WorkExamplesController::class);
        Route::post('workexamples/{id}', [WorkExamplesController::class,'update']);
        Route::get('workexamples/user/{id}', [WorkExamplesController::class,'showbyuser']);

        Route::resource('roles', WorkExamplesController::class);
        Route::post('roles/{id}', [WorkExamplesController::class,'update']);

        Route::get('chat/{user}', [ChatController::class, 'show']);
        Route::post('chat',[ChatController::class, 'store']);

        Route::get('message/{chat}', [MessageController::class, 'show']);
        Route::post('message',[MessageController::class, 'store']);

    });
});

    Route::post('send_sms', [ OsonSMSController::class, 'sendsms' ]);
