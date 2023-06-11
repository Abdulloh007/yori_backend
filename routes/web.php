<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ResponseController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SubcategoriesController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TarifController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Middleware\Admin\AccessControl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('https://yori.tj');
});

Route::get('/404', function(){
    return view('page404');
})->name('404');


// Route::get('home/{data}', function($data) {
//     echo $data;
// })->name('home1');
 
Route::get('/yoriadminpanel',[DashboardController::class, 'index'])->name('home');
Route::get('/login',[DashboardController::class, 'create'])->name('login');
Route::post('/sign-in',[DashboardController::class, 'store'])->name('dashboard.login');

Route::middleware([AccessControl::class])->group(function () {
    
    Route::get('/yoriadminpanel/main/dashboard',[DashboardController::class, 'show'])->name('index');
    
    
    Route::get('/yoriadminpanel/main/categories',[CategoriesController::class, 'index'])->name('categories');
    
    Route::get('/yoriadminpanel/main/categories/add',[CategoriesController::class, 'create'])->name('categories-create');
    Route::post('/yoriadminpanel/main/categories/store',[CategoriesController::class, 'store'])->name('categories-store');

    Route::get('/yoriadminpanel/main/categories/edit/{id}',[CategoriesController::class, 'edit'])->name('categories-edit');
    Route::post('/yoriadminpanel/main/categories/update/{id}',[CategoriesController::class, 'update'])->name('categories-update');

    Route::get('/yoriadminpanel/main/categories/delete/{id}',[CategoriesController::class, 'destroy'])->name('categories-delete')->middleware(AccessControl::class);


    Route::get('/yoriadminpanel/main/subcategories',[SubcategoriesController::class, 'index'])->name('subcategories');

    Route::get('/yoriadminpanel/main/subcategories/add',[SubcategoriesController::class, 'create'])->name('subcategories-create');
    Route::post('/yoriadminpanel/main/subcategories/store',[SubcategoriesController::class, 'store'])->name('subcategories-store');

    Route::get('/yoriadminpanel/main/subcategories/edit/{id}',[SubcategoriesController::class, 'edit'])->name('subcategories-edit');
    Route::post('/yoriadminpanel/main/subcategories/update/{id}',[SubcategoriesController::class, 'update'])->name('subcategories-update');

    Route::get('/yoriadminpanel/main/subcategories/delete/{id}',[SubcategoriesController::class, 'destroy'])->name('subcategories-delete')->middleware(AccessControl::class);


    Route::get('/yoriadminpanel/main/roles',[RolesController::class, 'index'])->name('roles');

    Route::get('/yoriadminpanel/main/roles/add',[RolesController::class, 'create'])->name('roles-create');
    Route::post('/yoriadminpanel/main/roles/store',[RolesController::class, 'store'])->name('roles-store');

    Route::get('/yoriadminpanel/main/roles/edit/{id}',[RolesController::class, 'edit'])->name('roles-edit');
    Route::post('/yoriadminpanel/main/roles/update/{id}',[RolesController::class, 'update'])->name('roles-update');

    Route::get('/yoriadminpanel/main/roles/delete/{id}',[RolesController::class, 'destroy'])->name('roles-delete')->middleware(AccessControl::class);


    Route::get('/yoriadminpanel/main/tarif',[TarifController::class, 'index'])->name('tarif');

    Route::get('/yoriadminpanel/main/tarif/add',[TarifController::class, 'create'])->name('tarif-create');
    Route::post('/yoriadminpanel/main/tarif/store',[TarifController::class, 'store'])->name('tarif-store');

    Route::get('/yoriadminpanel/main/tarif/edit/{id}',[TarifController::class, 'edit'])->name('tarif-edit');
    Route::post('/yoriadminpanel/main/tarif/update/{id}',[TarifController::class, 'update'])->name('tarif-update');

    Route::get('/yoriadminpanel/main/tarif/delete/{id}',[TarifController::class, 'destroy'])->name('tarif-delete')->middleware(AccessControl::class);


    Route::get('/yoriadminpanel/main/users',[UsersController::class, 'index'])->name('users');

    Route::get('/yoriadminpanel/main/users/add',[UsersController::class, 'create'])->name('users-create');
    Route::post('/yoriadminpanel/main/users/store',[UsersController::class, 'store'])->name('users-store');

    Route::get('/yoriadminpanel/main/users/show/{id}',[UsersController::class, 'show'])->name('users-show');

    Route::get('/yoriadminpanel/main/users/edit/{id}',[UsersController::class, 'edit'])->name('users-edit');
    Route::post('/yoriadminpanel/main/users/update/{id}',[UsersController::class, 'update'])->name('users-update');

    Route::get('/yoriadminpanel/main/users/delete/{id}',[UsersController::class, 'destroy'])->name('users-delete')->middleware(AccessControl::class);

    Route::get('/yoriadminpanel/main/permission/{status?}',[PermissionController::class, 'index'])->name('permission');
    Route::get('/yoriadminpanel/main/permission/edit/{id}',[PermissionController::class, 'edit'])->name('permission-edit');
    Route::post('/yoriadminpanel/main/permission/update/{id}',[PermissionController::class, 'update'])->name('permission-update');
    Route::post('/yoriadminpanel/main/permission/updates/{id}',[PermissionController::class, 'updateAdmin'])->name('permission-update-admin');


    Route::get('/yoriadminpanel/main/response',[ResponseController::class, 'index'])->name('response');

    Route::get('/yoriadminpanel/main/response/add',[ResponseController::class, 'create'])->name('response-create');
    Route::post('/yoriadminpanel/main/response/store',[ResponseController::class, 'store'])->name('response-store');

    Route::get('/yoriadminpanel/main/response/edit/{id}',[ResponseController::class, 'edit'])->name('response-edit');
    Route::post('/yoriadminpanel/main/response/update/{id}',[ResponseController::class, 'update'])->name('response-update');

    Route::get('/yoriadminpanel/main/response/delete/{id}',[ResponseController::class, 'destroy'])->name('response-delete')->middleware(AccessControl::class);



    Route::get('/yoriadminpanel/main/city',[CityController::class, 'index'])->name('city');

    Route::get('/yoriadminpanel/main/city/add',[CityController::class, 'create'])->name('city-create');
    Route::post('/yoriadminpanel/main/city/store',[CityController::class, 'store'])->name('city-store');

    Route::get('/yoriadminpanel/main/city/edit/{id}',[CityController::class, 'edit'])->name('city-edit');
    Route::post('/yoriadminpanel/main/city/update/{id}',[CityController::class, 'update'])->name('city-update');

    Route::get('/yoriadminpanel/main/city/delete/{id}',[CityController::class, 'destroy'])->name('city-delete')->middleware(AccessControl::class);



    Route::get('/yoriadminpanel/main/task',[TaskController::class, 'index'])->name('task');

    Route::get('/yoriadminpanel/main/task/add',[TaskController::class, 'create'])->name('task-create');
    Route::post('/yoriadminpanel/main/task/store',[TaskController::class, 'store'])->name('task-store');

    Route::get('/yoriadminpanel/main/task/show/{id}',[TaskController::class, 'show'])->name('task-show');

    Route::get('/yoriadminpanel/main/task/edit/{id}',[TaskController::class, 'edit'])->name('task-edit');
    Route::post('/yoriadminpanel/main/task/update/{id}',[TaskController::class, 'update'])->name('task-update');

    Route::get('/yoriadminpanel/main/task/delete/{id}',[TaskController::class, 'destroy'])->name('task-delete')->middleware(AccessControl::class);

    Route::get('/yoriadminpanel/main/users/show/{id}/{admin?}',[UsersController::class, 'show'])->name('profile');



    Route::get('/yoriadminpanel/main/chat',[ChatController::class, 'index'])->name('chat');

    Route::get('/yoriadminpanel/main/chat/show/{id}',[ChatController::class, 'show'])->name('chat-show');

    Route::get('/yoriadminpanel/main/chat/delete/{id}',[ChatController::class, 'destroy'])->name('chat-delete')->middleware(AccessControl::class);

    Route::get('/yoriadminpanel/main/message/delete/{id}',[ChatController::class, 'message_destroy'])->name('message-delete')->middleware(AccessControl::class);

    Route::get('/yoriadminpanel/main/review',[ReviewController::class, 'index'])->name('review');

    Route::get('/yoriadminpanel/main/review/delete/{id}',[ReviewController::class, 'destroy'])->name('review-delete');


    Route::get('/yoriadminpanel/main/notification',[NotificationController::class, 'index'])->name('notifications');
    Route::get('/yoriadminpanel/main/notification/delete/{id}',[NotificationController::class, 'destroy'])->name('notification-delete');



});

Route::any ( '{url}' , function (){ return redirect()->route('404'); })-> where ( 'url' , '.*' ); 