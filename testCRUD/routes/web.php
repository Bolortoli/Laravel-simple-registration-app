<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', 'studentController@list_student');  
Route::get('student/{id}', 'studentController@get_student');  
Route::get('search', 'studentController@search');  
Route::post('search', 'studentController@search_by_id');  