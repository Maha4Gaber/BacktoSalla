<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;
use App\Models\Comments;
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
Route::apiResource('/Categories', CategoriesController::class);
Route::apiResource('/Products', ProductsController::class);
Route::apiResource('/comments', CommentsController::class);
Route::apiResource('/blog', BlogController::class);
Route::get('/popular', [ProductsController::class, 'popular']);
Route::get('/newest', [ProductsController::class, 'newest']);
Route::get('/review', [CommentsController::class, 'review']);
Route::get('/offered', [ProductsController::class, 'offered']);
Route::get('/Pcomments/{id}', [ProductsController::class, 'Pcomments']);