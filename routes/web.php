<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AdminController, EventController, UserController};

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/admin", [AdminController::class, "dashboard"])->name(
    "admin.dashboard"
);

route::get("/", [EventController::class, "index"])->name("events.index");

Route::resource("evenementen", EventController::class)
    ->except(["index"])
    ->names("events")
    ->parameter("evenementen", "event");

Route::resource("gebruikers", UserController::class)
    ->names("users")
    ->parameter("gebruikers", "user")
    ->middleware("auth");

Route::get("/admin/login", [AdminController::class, "login"])->name(
    "admin.login"
);
route::post("/admin/login", [AdminController::class, "authenticate"])->name(
    "admin.authenticate"
);
route::post("/admin/loguit", [AdminController::class, "logout"])->name(
    "admin.logout"
);
