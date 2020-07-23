<?php

use Illuminate\Support\Facades\Route;


/* GET requests */ 

// Home page 
Route::get('/', function () {
  $data = ['lang'=>'es','title' =>'Papiro'];
  return view('home', $data ); 
});

// Details page
Route::get('/details', function () {  
  $data = ['lang'=>'es','title' =>'Papiro'];
  return view('details', $data); 
});

// Mock page
Route::get('/mock', function () {
  $data = ['lang'=>'es','title' =>'Papiro'];
  return view('mock', $data);
});


/* CRUD Admin */ 
// RouteBlade::prefix('/admin')->group(function () {
  //  Route::get('/users')
// });
// Route::get('/admin/{id}', function ($id) {
// return view('crud', User::find($id));
// });


// ...