<?php


// Pour structurer et déplacer l'auth de base dans un répertoire Http/Controllers/Frontend/..
// Routes de base = Auth::routes(); ci-dessous de l'aute /vendor/laravel/framework/src/Illuminate/Routing/Router.php
// Authentication Routes...
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/leaflet', 'HomeController@leaflet')->name('frontend.leaflet');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('frontend.login.get');
    Route::post('login', 'Auth\LoginController@login')->name('frontend.login.post');
    Route::post('logout', 'Auth\LoginController@logout')->name('frontend.logout.post');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('frontend.register.get');
    Route::post('register', 'Auth\RegisterController@register')->name('frontend.register.post');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('frontend.password.request.get');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('frontend.password.email.post');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('frontend.password.reset.get');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('frontend.password.reset.get');
});
