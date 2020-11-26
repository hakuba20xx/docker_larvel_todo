<?php

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/tasks", function () {
    return view("tasks.index");
});

Route::get("/tasks/create", function () {
    return view("tasks.create");
});

Route::get("/tasks/{id}/edit", function () {
    return view("tasks.edit");
});

Route::get("/tasks/{id}", function () {
    return view("tasks.show");
});
