<?php

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


Route::get('/', function () {
    return view('index');
})->name("home")->middleware("auth");


Route::get("user/registrar", "User\UserController@getSignup" )
            ->name("user.signup");
Route::post("user/registrar", "User\UserController@postSignup")
            ->name("user.signup");
Route::get("user/logar", "User\UserController@getLogin" )
            ->name("login");
Route::post("user/logar" , "User\UserController@login")
            ->name("user.logar");
Route::get("user/logout", "User\UserController@logout")
            ->name("logout");


Route::get("task/add", "Task\TaskController@showAddTask")
            ->name("task.showadd")->middleware("auth");
Route::post("task/addnew","Task\TaskController@addTask" )
            ->name("task.addnew")->middleware("auth");
Route::get("task/show","Task\TaskController@showAll" )
            ->name("task.show")->middleware("auth");      
Route::get("task/showUpdate/{id}","Task\TaskController@showUpdate")
            ->name("task.showUpdate")->middleware("auth");    
Route::post("task/updateTask","Task\TaskController@updateTask")
            ->name("task.update")->middleware("auth");    
Route::post("task/delTask/{id}","Task\TaskController@delete")
            ->name("task.delete")->middleware("auth");    

