<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostCotroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('posts' ,[PostCotroller::class , 'index' ]) ->name('posts.index');//->1

Route::get('posts/{post}' ,[PostCotroller::class , 'show' ])->name('posts.show'); //->3
Route::put('/posts/{post}' , [PostCotroller::class , 'update'])->name('posts.update');//->6
Route ::delete('/posts/{post}' , [PostCotroller::class , 'destroy'])->name('posts.destroy'); //->7
Route::post('/posts' ,[PostCotroller::class , 'store' ])->name('posts.store');  //->4




