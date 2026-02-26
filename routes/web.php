<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;



Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama Saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID) {
    return 'Pos ke-' . $postID . ' Komentar ke-: ' . $commentID;
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'home']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

use App\Http\Controllers\PhotoController;
use Illuminate\View\View;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]); 

Route::get('/greeting', [WelcomeController::class, 'greeting']);
