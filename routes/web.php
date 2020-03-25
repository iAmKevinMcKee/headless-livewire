<?php

use Illuminate\Support\Facades\Route;

Route::get('/videos/{video}', function () {
    $video = App\Video::findOrFail(request()->video);
    return view('video', ['video' => $video]);
});
















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
