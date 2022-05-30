<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Models\City;
use Illuminate\Support\Facades\Route;

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


Route::middleware("checkAuth")->group(function () {
    Route::get("/room/list", [RoomController::class, "index"])->name("room.list");
    Route::get("/room/detail/{id}", [RoomController::class, "show"])->name("room.detail");
    Route::get("/room/delete/{id}", [RoomController::class, "destroy"])->name("room.delete");
    Route::get("/room/create", [RoomController::class, "create"])->name('room.create');
    Route::post("/room/create", [RoomController::class, "store"])->name("room.store");
    Route::get("/room/update/{id}", [RoomController::class, "edit"])->name("room.edit");
    Route::post("/room/update/{id}", [RoomController::class, "update"])->name("room.update");

    Route::get("/city/list", [CityController::class, "index"])->name("city.list");
    Route::get("/city/create", [CityController::class, "create"])->name("city.create");
    Route::post("/city/create", [CityController::class, "store"])->name("city.store");
    Route::get("/city/delete/{id}", [CityController::class, "destroy"])->name("city.delete");
    Route::get("/city/update/{id}", [CityController::class, "edit"])->name("city.edit");
    Route::post("/city/update/{id}", [CityController::class, "update"])->name("city.update");

    Route::get("/category/list", [CategoryController::class, "index"])->name("category.list");
    Route::get("/category/create", [CategoryController::class, "create"])->name("category.create");
    Route::post("/category/create", [CategoryController::class, "store"])->name("category.store");
    Route::get("/category/delete/{id}", [CategoryController::class, "destroy"])->name("category.delete");
    Route::get("/category/update/{id}", [CategoryController::class, "edit"])->name("category.edit");
    Route::post("/category/update/{id}", [CategoryController::class, "update"])->name("category.update");

    Route::get("/search/",[RoomController::class,'search'])->name('search');
});

Route::get("/home/list",[HomeController::class,"index"])->name("home.list");
Route::get("/home/detail/{id}",[HomeController::class,"show"])->name("home.detail");
Route::get('home/city/{id}',[HomeController::class,'showCity'])->name('home.city');
Route::get('/home/category/{id}',[HomeController::class,'showCategory'])->name('home.category');



Route::get("/register", [AuthController::class, "showFormRegister"])->name('formregister');
Route::post("/register", [AuthController::class, "register"])->name("register");
Route::get("/login", [AuthController::class, "showFormLogin"])->name("formlogin");
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::get("/loguot", [AuthController::class, "loguot"])->name("loguot");
