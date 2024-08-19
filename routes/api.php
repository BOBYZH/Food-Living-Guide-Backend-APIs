<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// // Laravel API功能安裝後預設的路徑
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// API路徑範例
Route::get("/", function () {
    return response()->json([
        'Title' => 'WIP：後端 Laravel API專案-美食生活圈(Food & Living Guide)',
    ]);
});