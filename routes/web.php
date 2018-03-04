<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PageController@index')->name('view.index');
    Route::get('/contact', 'PageController@contact')->name('view.contact');
    Route::post('/contact/submit', 'EmailController@submitContact')->name('contact.submit');
});