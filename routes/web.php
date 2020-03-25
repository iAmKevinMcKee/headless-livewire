<?php

use Illuminate\Support\Facades\Route;

Route::get('/videos/{video}', function () {
    $video = App\Video::findOrFail(request()->video);
    $view = App\View::firstOrCreate([
        'user_id' => request()->user()->id,
        'video_id' => $video->id,
    ]);
    return view('video', ['video' => $video, 'view' => $view]);
});














/*** Benefits of Headless Livewire for Internal API
 * Don't need to install Passport or Sanctum
 * Write less code
 * Access to dd() in API calls
 * Access to full functionality of Livewire
***/



















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
