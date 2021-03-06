<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AdminController, EventController, UserController};

/*
| Admin routes
| ------------
| Middleware: [web, auth]
|
| These routes are all checked for authentication and only accesable by admins
|
*/

// Admin (partial see guest.php)
Route::prefix("admin")
    ->name("admin.")
    ->group(function () {
        Route::get("/", [AdminController::class, "dashboard"])->name(
            "dashboard"
        );

        Route::post("/loguit", [AdminController::class, "logout"])->name(
            "logout"
        );
    });

// Events (CRUD - partial see guest.php)
Route::prefix("evenementen")
    ->name("events.")
    ->group(function () {
        Route::get("/aanmaken", [EventController::class, "create"])->name(
            "create"
        );
        Route::post("/", [EventController::class, "store"])->name("store");
        Route::get("/{event}/aanpassen", [EventController::class, "edit"])
            ->name("edit")
            ->where("event", "[0-9]+");
        Route::match(["PUT", "PATCH"], "/{event}", [
            EventController::class,
            "update",
        ])->name("update");
        Route::delete("/{event}", [EventController::class, "destroy"])
            ->name("destroy")
            ->where("event", "[0-9]+");
    });

// Users (CRUD)
Route::prefix("gebruikers")
    ->name("users.")
    ->group(function () {
        Route::get("/", [UserController::class, "index"])->name("index");
        Route::get("/aanmaken", [UserController::class, "create"])->name(
            "create"
        );
        Route::post("/", [UserController::class, "store"])->name("store");
        Route::get("/{user}", [UserController::class, "show"])
            ->name("show")
            ->where("user", "[0-9]+");
        Route::get("/{user}/aanpassen", [UserController::class, "edit"])
            ->name("edit")
            ->where("user", "[0-9]+");
        Route::match(["PUT", "PATCH"], "/{user}", [
            UserController::class,
            "update",
        ])
            ->name("update")
            ->where("user", "[0-9]+");
        Route::delete("/{user}", [UserController::class, "destroy"])
            ->name("destroy")
            ->where("user", "[0-9]+");
    });
