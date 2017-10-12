<?php


Route::get('/', function () {
    event(
            new \App\Events\NewMessage());
});
Route::resource('chat', 'ChatController');