<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Selamat Datang');
});

Route::get('/about', function (){
    return 'Nama : Ahmad Falahi<br> NIM : 244107020152';
});

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID){
    return 'Pos ke-'.$postID.' Komentar ke-: '.$commentID;
});
    
Route::get('/articles/{id}', function ($id){
    return 'Halaman article dengan ID '.$id;
});
                
Route::get('/hello', function (){
    return 'Hello World';
});
            
Route::get('/world', function(){
    return 'world';
});
                
                