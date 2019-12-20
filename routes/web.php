<?php

Route::get('panel/dashboard', function () {
    return view('admin.dashboard.index');
});

// Route::group(['namespace'=> 'Admin','prefix'=>'panel'],function(){
//     Route::get('/dashboard','AdminController@index')->name('panel');
// });
Route::get('/', function () {
    return view('Content.mainpage');
});

Route::get('/callwithus', function () {
    return view('Content.callwithus');
});

Route::get('/admin', function () {
    return view('Admin.index');
});
