<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect()->route('admin.index');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){

    Route::controller(AdminController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/profile', 'profile')->name('profile');
        
    });

});

