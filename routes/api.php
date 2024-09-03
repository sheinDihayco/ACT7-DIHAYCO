<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
    Route::get("getAll", [App\Http\Controllers\GetRecord::class, 'getAll']);
    Route::get("select", [App\Http\Controllers\SelectCustomColumn::class, 'select']);
    Route::get("selectSort", [App\Http\Controllers\SelectCustomSorting::class, 'select']);
    Route::get("getByID/{id}", [App\Http\Controllers\GetRecord::class, 'getByID']);
    Route::get("deleteByID/{id}", [App\Http\Controllers\DeleteRecord::class, 'deleteByID']);
    Route::get("updateRecord/{id}/{age}", [App\Http\Controllers\UpdateRecord::class, 'update']);
    Route::get("insertRecord/{fname}/{lname}/{age}", [App\Http\Controllers\InsertRecord::class, 'insert']);
    Route::get("search/{keyword}", [App\Http\Controllers\Search::class, 'search']);
    Route::get("paginate", [App\Http\Controllers\Paginate::class, 'paginate']);
    Route::get("sum", [App\Http\Controllers\Sum::class, 'sum']);
    Route::get("count", [App\Http\Controllers\Count::class, 'count']);
});
