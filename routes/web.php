<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apps\DashboardController;
use Inertia\Inertia;

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

Route::get('/', function () { return Inertia::render("Auth/Login");})->middleware("guest");

Route::group(["middleware" => "auth"], function() {
    Route::get("/apps/dashboard", DashboardController::class)->name("apps.dashboard");
});
