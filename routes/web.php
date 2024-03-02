<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Databases\SessionAuthentication;
use App\Http\Controllers\DockerController;

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

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('dashboard', [DockerController::class, "getContainers"]);

    Route::get('container/{id}', [DockerController::class, "attachContainer"]);

    Route::post('logout', [SessionAuthentication::class, "logout"]);

    Route::post('createContainer', [DockerController::class, "createContainer"]);
    Route::post('stopContainer', [DockerController::class, "stopContainer"]);
    Route::post('startContainer', [DockerController::class, "startContainer"]);
    Route::post('deleteContainer', [DockerController::class, "deleteContainer"]);
});

Route::get('/', function(){
    return view("home");
});

Route::get('login', [SessionAuthentication::class, "getSession"]);

Route::post('login/auth', [SessionAuthentication::class, "authentication"]);
