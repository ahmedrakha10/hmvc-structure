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

$moduleName = basename(dirname(__DIR__, '1'));
Route::namespace(buildNameSpace($moduleName))->middleware('customer')->group(function () use ($moduleName) {

    Route::prefix(buildPrefix($moduleName))->namespace('Admin')->group(function () {
        require 'admin.php';
    });

    Route::prefix(buildPrefix($moduleName, 'Front'))->namespace('Front')->group(function () {
        require 'front.php';
    });
});
