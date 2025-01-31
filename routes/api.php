<?php

use App\Http\Controllers\Api\CatalogApi;
use App\Http\Controllers\Api\MitraApi;
use App\Http\Controllers\Api\ProductApi;
use App\Http\Controllers\Api\UserApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/admin/user', UserApi::class);
Route::apiResource('/admin/mitra', MitraApi::class);
Route::apiResource('/admin/product', ProductApi::class);
Route::apiResource('/admin/catalog', CatalogApi::class);