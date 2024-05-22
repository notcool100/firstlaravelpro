<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard',function(){
    
    return view('dashboard');
});
Route::get('/aboutus/{name}',function($name){
    $data=compact('name');
return view('aboutus')->with($data);
});
