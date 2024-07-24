<?php

use App\Http\Controllers\API\CityController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OsonSMSController;
use App\Http\Middleware\AccessControl;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\SubcategoriesController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\TransactionsController;
use App\Http\Controllers\API\WorkExamplesController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Middleware\HasTarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\TaskPromptsController;

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
Route::post('users/phone', [UsersController::class, 'recover']);

// Route::get('view-data/{data}', function($data){
//     echo $data;
//  })->name('view-data');

Route::get('accessdenied', function () {
    return response()->json(['error' => ['status' => 'Access Denied ! ']], 403);
})->name('accessdenied');

Route::get('hasnttarif/{status}', function ($status) {
    return response()->json(['error' => $status], 403);
})->name('tarif_expire');

Route::get('hasnttarif', function () {
    return response()->json(['error' => 'Ваш тариф просрочен или у вас не осталось бесплатных попыток!'], 402);
})->name('tarif_expire2');

Route::resource('categories', CategoriesController::class);
Route::resource('subcategories', SubcategoriesController::class);
Route::resource('task', TaskController::class);

Route::get('cities', [CityController::class, 'index']);
Route::get('review/user/{id}', [ReviewController::class, 'showbyuser']);
Route::get('task_prompts', [TaskPromptsController::class, 'index']);
Route::get('task_prompts/{text}', [TaskPromptsController::class, 'search']);
Route::get('task_prompts/sub/{id}', [TaskPromptsController::class, 'indexBySubcat']);

Route::middleware('auth:api')->group(function () {

    Route::middleware([AccessControl::class])->group(function () {


        Route::post('categories/{id}', [CategoriesController::class, 'update']);

        Route::post('subcategories/{id}', [SubcategoriesController::class, 'update']);
        Route::get('subcategories/category/{id}', [SubcategoriesController::class, 'showbycategories']);

        Route::resource('users', UsersController::class);
        Route::post('users/{id}', [UsersController::class, 'update']);
        Route::get('users/role/{role}', [UsersController::class, 'byrole']);
        Route::resource('review', ReviewController::class);
        Route::post('review/{id}', [ReviewController::class, 'update']);
        Route::get('review/task/{id}', [ReviewController::class, 'showbytask']);

        Route::post('task/{id}', [TaskController::class, 'update']);
        Route::get('task/bycategory/{category}/{subcategory?}', [TaskController::class, 'showbycategories']);
        Route::get('task/bycustomer/{customer}', [TaskController::class, 'showbycustomer']);
        Route::get('task/byperfomer/{perfomer}', [TaskController::class, 'showbyperfomer']);

        Route::post('response', [ResponseController::class, 'store'])->middleware([HasTarif::class]);
        Route::get('response', [ResponseController::class, 'index']);
        Route::get('response/{id}', [ResponseController::class, 'show']);
        Route::post('response/{id}', [ResponseController::class, 'update']);
        Route::get('response/task/{id}', [ResponseController::class, 'showbytask']);
        Route::get('response/user/{id}', [ResponseController::class, 'showbyuser']);

        Route::resource('workexamples', WorkExamplesController::class);
        Route::post('workexamples/{id}', [WorkExamplesController::class, 'update']);
        Route::get('workexamples/user/{id}', [WorkExamplesController::class, 'showbyuser']);

        Route::resource('roles', WorkExamplesController::class);
        Route::post('roles/{id}', [WorkExamplesController::class, 'update']);

        Route::get('chat/{user}', [ChatController::class, 'show']);
        Route::post('chat', [ChatController::class, 'store']);

        Route::get('message/{chat}', [MessageController::class, 'show']);
        Route::post('message', [MessageController::class, 'store']);
        Route::post('message/{id}', [MessageController::class, 'update']);

        Route::get('notifications/{user}', [NotificationController::class, 'show']);
        Route::post('notifications', [NotificationController::class, 'store']);
        Route::post('notifications/{id}', [NotificationController::class, 'update']);
        Route::post('push_notify', [NotificationController::class, 'notyPush']);

        Route::get('transactions', [TransactionsController::class, 'index']);
        Route::post('transactions', [TransactionsController::class, 'store']);
        Route::get('transactions/{id}', [TransactionsController::class, 'show']);

        Route::post('cities', [CityController::class, 'store']);
        Route::get('cities/{id}', [CityController::class, 'show']);
    });
});

Route::post('send_sms', [OsonSMSController::class, 'sendsms']);

Route::any('{url}', function () {
    return response()->json(['error' => 'Not found'], 404);
})->where('url', '.*');
