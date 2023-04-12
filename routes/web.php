<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SubcategoriesController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TarifController;
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

Route::get('/yoriadminpanel',[DashboardController::class, 'index'])->name('home');
Route::get('/login',[DashboardController::class, 'create'])->name('login');
Route::post('/sign-in',[DashboardController::class, 'store'])->name('dashboard.login');

Route::middleware([AccessControl::class])->group(function () {

Route::get('/yoriadminpanel/main/dashboard',[DashboardController::class, 'show'])->name('index');


Route::get('/yoriadminpanel/main/categories',[CategoriesController::class, 'index'])->name('categories');

Route::get('/yoriadminpanel/main/categories/add',[CategoriesController::class, 'create'])->name('categories.create');
Route::post('/yoriadminpanel/main/categories/store',[CategoriesController::class, 'store'])->name('categories.store');

Route::get('/yoriadminpanel/main/categories/edit/{id}',[CategoriesController::class, 'edit'])->name('categories.edit');
Route::post('/yoriadminpanel/main/categories/update/{id}',[CategoriesController::class, 'update'])->name('categories.update');

Route::get('/yoriadminpanel/main/categories/delete/{id}',[CategoriesController::class, 'destroy'])->name('categories.delete');


Route::get('/yoriadminpanel/main/subcategories',[SubcategoriesController::class, 'index'])->name('subcategories');

Route::get('/yoriadminpanel/main/subcategories/add',[SubcategoriesController::class, 'create'])->name('subcategories.create');
Route::post('/yoriadminpanel/main/subcategories/store',[SubcategoriesController::class, 'store'])->name('subcategories.store');

Route::get('/yoriadminpanel/main/subcategories/edit/{id}',[SubcategoriesController::class, 'edit'])->name('subcategories.edit');
Route::post('/yoriadminpanel/main/subcategories/update/{id}',[SubcategoriesController::class, 'update'])->name('subcategories.update');

Route::get('/yoriadminpanel/main/subcategories/delete/{id}',[SubcategoriesController::class, 'destroy'])->name('subcategories.delete');


Route::get('/yoriadminpanel/main/roles',[RolesController::class, 'index'])->name('roles');

Route::get('/yoriadminpanel/main/roles/add',[RolesController::class, 'create'])->name('roles.create');
Route::post('/yoriadminpanel/main/roles/store',[RolesController::class, 'store'])->name('roles.store');

Route::get('/yoriadminpanel/main/roles/edit/{id}',[RolesController::class, 'edit'])->name('roles.edit');
Route::post('/yoriadminpanel/main/roles/update/{id}',[RolesController::class, 'update'])->name('roles.update');

Route::get('/yoriadminpanel/main/roles/delete/{id}',[RolesController::class, 'destroy'])->name('roles.delete');


Route::get('/yoriadminpanel/main/tarif',[TarifController::class, 'index'])->name('tarif');

Route::get('/yoriadminpanel/main/tarif/add',[TarifController::class, 'create'])->name('tarif.create');
Route::post('/yoriadminpanel/main/tarif/store',[TarifController::class, 'store'])->name('tarif.store');

Route::get('/yoriadminpanel/main/tarif/edit/{id}',[TarifController::class, 'edit'])->name('tarif.edit');
Route::post('/yoriadminpanel/main/tarif/update/{id}',[TarifController::class, 'update'])->name('tarif.update');

Route::get('/yoriadminpanel/main/tarif/delete/{id}',[TarifController::class, 'destroy'])->name('tarif.delete');


});